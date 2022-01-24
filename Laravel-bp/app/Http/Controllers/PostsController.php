<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostsController extends Controller
{
//

    public function index(){

        $posts = DB::table('posts')->paginate(2);
        return view('pages.home',['posts'=>$posts]);
    }

}
