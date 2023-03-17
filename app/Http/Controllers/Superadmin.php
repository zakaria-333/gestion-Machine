<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class Superadmin extends Controller
{
    public function index(){
        $users=User::all();
        return view('auth.delete',compact('users'));
    }
    public function delete($user_id){
        $post=User::find($user_id);
        $post->delete();
        return redirect('superadmin/users')->with('message','User Deleted Successfully');
    }
    public function add(){
        return view('auth.register');
    }
    public function register(){
        return view('auth.register');
    }
}
