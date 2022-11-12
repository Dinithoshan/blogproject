<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //create
    public function store(Request $request){
        //dd($request->content);
        $status = Blog::create([
            'name'=>$request->name,
            'content'=>$request->content,
            'published'=>true
        ]);
        return $status;
    }

    //retrive
    public function get(){
        //return User::all();
        return Blog::where('published', true)->get();
    }

    //update

    public function update(Request $request, $id){
        $blog = Blog::find($id);
        $blog -> content= $request->content;
        $blog -> name= $request->name;
        $blog->save();
        return $blog;
        
    }
    //destroy
    public function delete(Request $request, $id){
        $blog = Blog::destroy($id);
        return $blog;
        
    }

}
