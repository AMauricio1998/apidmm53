<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' =>$this->faker->sentence,
            'slug' =>$this->faker->slug,
            'descripcion' =>$this->faker->text(6),
            'image' =>$this->faker->imageUrl(1280, 720),
            'extract' =>$this->faker->text(7),
            //declaramos la llave foranea
            'user_id' =>rand(1,100),
            'categori_id' =>rand(1,100),


        ];
    }
}
