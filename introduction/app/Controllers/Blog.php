<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{
    public function index()
    {
        $data = [
            'meta_title' => 'Codeingiter 4 Blog',
            'title' => 'This is a Blog Page',
        ];

        $post = ['Title 1', 'Title 2', 'Title 3'];

        $data['posts'] = $post;

        return view('blog', $data);

    }

    public function post($post_id)
    {

        $model = new BlogModel();

        $post = $model->find($post_id);

        if ($post) {
            $data = [
                'meta_title' => $post['post_title'],
                'title' => $post['post_title'],
                'content' => $post['post_content'],
                'post' => $post,
            ];
        } else {
            $data = [
                'meta_title' => 'Post Not Found',
                'title' => 'Post Not Found',
            ];
        }

        return view('single_post', $data);

    }

    public function new () {
        $data = [
            'meta_title' => 'New Post',
            'title' => 'Create new post',
        ];

        if ($this->request->getMethod() == 'post') {
            $model = new BlogModel();
            $model->save($_POST);

        }
        return view('new_post', $data);
    }

    public function delete($post_id)
    {
        $model = new BlogModel();

        $post = $model->find($post_id);
        if ($post) {
            $model->delete($post_id);
            return redirect()->to('/blog');
        }
    }

    public function edit($post_id)
    {
        $model = new BlogModel();

        $post = $model->find($post_id);

        $data = [
            'meta_title' => $post['post_title'],
            'title' => $post['post_title'],
            'post' => $post,
        ];

        if ($this->request->getMethod() == 'post') {
            $model = new BlogModel();
            $_POST['post_id'] = $post_id;
            $model->save($_POST);
            $data['post'] = $post;

        }
        return view('edit_post', $data);

    }
}
