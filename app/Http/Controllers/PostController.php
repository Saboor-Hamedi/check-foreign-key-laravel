<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PostController extends Controller
{
    // this is the main page...
    public function index(){
        return view('index');
    }
    // this is about page...
    public function about(){
        $list = array('Home', 'About', 'Services');
        return view('about.about')->with('list', $list);
    }

    // this is users fucntion... 
    public function users(){
        return view('users.users');
    }
    public function login(){
        return view('login.login');
    }
    public function register(){
        return view('register.register');
    }
    public function post(){
        return view('post.post');
    }
    public function insert(){
        return view('insert.insert');
    }

}
