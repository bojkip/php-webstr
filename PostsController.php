<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    
    public function index(){

        $posts = Post::all();
        return view('pages.home',['posts'=>$posts]);
    }


    public function createPostForm(){
        return view('pages.createPostForm');
    }

    public function submitPostForm(Request $request){
        
        $postTitle = $request->post_title;
        $postText = $request->post_text;

        $post = new Post();

        $post->title = $postTitle;
        $post->text = $postText;

        $post->save();

        return redirect()->back();


    }
}
