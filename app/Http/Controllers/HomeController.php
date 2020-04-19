<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function blog($id, $author = 'author by default') {

        $posts = [
            1 => ['title' =>  ' <a>learn Laravel 7 </a>'],
            2 => [ 'title' => 'learn angular 8'],
                ];

            return view('posts.show', [

                'data' => $posts[$id] ,
                'author' => $author 

                ]);
        return view('blog');
    }


    public function contact() {
        return view('contact');
    }
}
