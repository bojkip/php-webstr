<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    
    public function index(){
        $posts = [
            ['title'=>'post1','text'=>'this is post1 text','image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZTZerjTs59klQi1GNccydwyx2AG9Lmo6nZw&usqp=CAU'],
            ['title'=>'post2','text'=>'this is post2 text','image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZTZerjTs59klQi1GNccydwyx2AG9Lmo6nZw&usqp=CAU'],
            ['title'=>'post3','text'=>'this is post3 text','image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZTZerjTs59klQi1GNccydwyx2AG9Lmo6nZw&usqp=CAU']
        ];

        return view('pages.home',['posts'=>$posts]);
    }
}
