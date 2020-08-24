<?php

namespace App\Controllers;

class Blog extends BaseController{
    public function index()
    {
        echo view('header');
        echo view('blog');
        echo view('footer');

    }
    public function post()
    {
        echo view('header');
        echo view('single_post');
        echo view('footer');

    }
}