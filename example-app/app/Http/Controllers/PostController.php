<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        return view('posts.index');
    }

    
    public function store(Request $request){
        
        $this->validate($request, [
            'body' => 'required'
        ]);

        Post::create($request->only('body'));

    }
    
    
    
    
    


    





}


