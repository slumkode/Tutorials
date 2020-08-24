<?php

namespace App\Controllers;

class Blog extends BaseController{
    public function index()
    {
        return view('blog');
    }
    public function post()
    {
        return view('single_post');
    }
}

