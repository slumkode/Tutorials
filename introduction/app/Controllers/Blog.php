<?php

namespace App\Controllers;

class Blog extends BaseController {
    public function index() {
        $data = [
            'meta_title'    => 'Codeingiter 4 Blog',
            'title'         => 'This is a Blog Page',
        ];

        $post = ['Title 1', 'Title 2', 'Title 3'];

        $data['posts'] = $post;

        return view( 'blog', $data );

    }

    public function post() {
        $data = [
            'meta_title'    => 'Codeingiter 4 Blog',
            'title'         => 'This is a Single Blog Post Page',
        ];
        return view( 'single_post', $data );

    }

    public function new() {
        $data = [
            'meta_title'    => 'New Post',
            'title'         => 'Create new post',
        ];
        return view( 'new_post', $data );
    }
}