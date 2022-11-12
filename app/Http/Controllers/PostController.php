<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request){
        
        $post = Post::create([
            'name' => $request -> name,
            'content' => $request -> content,
            'min_to_reead' => $request -> min_to_reead,
            'password' => $request -> password

        ]);

    }

    public function get($id){
        return Post::find($id);
    }


    public function update(Request $request, $id){
        return Post::updateOrCreate(['id'=> $id],[
        'name' => $request -> name,
        'content' => $request -> content,
        'min_to_reead' => $request -> min_to_reead,
        'password' => $request -> password
        ]);
    }


    public function delete($id){
        $post = Post::destroy($id);
        return $post;
    }
}
