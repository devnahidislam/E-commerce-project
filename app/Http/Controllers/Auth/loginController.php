<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function store(Request $req){
        $this->validate($req,[
            'email'=> 'required|email',
            'password'=> 'required'
        ]);
        //Sign in the user
        if(!auth()->attempt($req->only('email', 'password'))) {
            return back()->with('status','Invalid Password');
        }
        //redirect page
        return redirect()->route('product')->withSuccess('You have signed-in successfully');
    }
}
