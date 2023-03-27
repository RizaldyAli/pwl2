<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home2Controller extends Controller
{
    public function home(){
        return view('home');
    }

    public function product(){
        return view('product');
    }

    public function news($id){
        return view('news', ['angka'=>$id]);
    }

    public function program(){
        return view('program');
    }

    public function aboutUs(){
        return view('aboutUs');
    }
}
