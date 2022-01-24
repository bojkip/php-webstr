<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
//

    public function index(){

        $posts = DB::table('posts')->paginate(2);
        return view('pages.home',['posts'=>$posts]);
    }

    public function getPostsFromLoggedInUser(){

        if(Auth::check()){

            $id = Auth::user()->id;
            $posts = DB::table('posts')->where('user_id',$id)->get();

            return view('pages.home', ['posts' => $posts]);


        }else{
            return "You are not logged in";
        }


    }

}
