<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'extract',
        'tag_id',
        'user_id',
        'category_id',

    ];

    //declarión de relaciones dentro de laravel
    //nuestro post tiene una una o muchas categorias
    public function category(){

        return $this->belongsToMany(Category::class);
    }

    //la relación de usuario que un post tiene o esta asignado a un usuario

    public function user(){
        return $this->belongsTo(User::class);
    }

    //un posts tiene una o muchas categorias
    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function tags(){
        //return $this->belongsToMany(Tags::class)->withPivot('Status', 'post_id');
        return $this->belongsToMany(Tags::class, 'post_tags', 'post_id', 'tag_id');
    }
}
