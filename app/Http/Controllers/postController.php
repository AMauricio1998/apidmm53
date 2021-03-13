<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

use Illuminate\Http\Request;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PostController $post, $id)
    {
        //
        $post = Post::findOrfail($id);
        return response()->json(['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    //endpoint de slider 10 post 
    public function sliderPost(){
        $posts = Post::all()->take(10);
        return response()->json(['Posts' => $posts]);
    }


//retorna todos los post de cada categoria
    public function CategoryPost($id)
    {
        //obtenemos la categoria
      $category = Category::findOrfail($id);
      //consulta posts 
      $posts = Post::where('category_id', $category->id)
      ->latest('id')
      ->get();
      return response()->json([
          'categoria' => $category,
          'articulo'  => $posts
      ]);
    }
    public function allpost($id){
        $posts = Post::findOrfail($id);
        return response()->json(['post' => $posts]);
     }

     public function categories(){
         $category = Category::all()->take(3);
         $posts = Category::with('posts')->get();

         return response()->json([
             'categoria' => $category,
             'articulo' => $posts
         ]);
     }
}
