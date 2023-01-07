<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class CuponController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        return view('cupons.index');
    }

    
    public function store(Request $request){
        
        $this->validate($request, [
            'body' => 'required'
        ]);

        Post::create($request->only('body'));

    }
    
    
    
    
    


    





}


