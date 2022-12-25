<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){
        $this->validate($request, [
            'email'=> 'required|email|max:255',
            'password'=> 'required',  //maknuli smo obavezno polje jer nam !auth ne bi prošao jer bi ga stalno kočio
        ]);

        if(!auth()->attempt($request->only('email', 'password'))){
            return back()->with('status', 'Invalid login details');
        }



        return redirect()->route('dashboard');
}



}
