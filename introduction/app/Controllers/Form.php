<?php namespace App\Controllers;

class Form extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [];
        $data['categories'] = [
                'Student',
                'Teacher',
                'Principle'
        ];

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email'     => 'required|valid_email',
                'password'  => 'required|min_length[8]',
                'category'  => 'in_list[Student, Teacher]'
            ];
            if ($this->validate($rules)) {
                // then do database inserion 
                // login user
            }else{
                $data['validation'] = $this->validator;

            }
        }
        return view('form', $data);
    }
}
