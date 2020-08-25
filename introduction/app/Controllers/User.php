<?php namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'meta_title' => 'CI4 Blog - Create Users',
            'title' => 'List all users',
        ];

        $user = ['User 1', 'User 2', 'User 3'];

        $data['users'] = $user;

        return view('user', $data);
    }

    public function details($user_id)
    {
        $model = new UserModel();

        $user = $model->find($user_id);

        if ($user) {
            $data = [
                'meta_title' => $user['user_email'],
                'title' => $user['user_email'],
                'user' => $user,
            ];
        } else {
            $data = [
                'meta_title' => 'User Not Found',
                'title' => 'User Not Found',
            ];
        }

        return view('single_user', $data);
    }

    public function new () {
        $data = [
            'meta_title' => 'New User',
            'title' => 'Create new user',
        ];

        if ($this->request->getMethod() == 'post') {
            $model = new UserModel();
            $model->save($_POST);

        }
        return view('new_user', $data);
    }
}
