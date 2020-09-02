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
                'category'  => 'in_list[Student, Teacher]',
                // 'date'      => 'required|check_date'
                'date'      => [
                    'rules'     => 'required|check_date',
                    'label'     => 'Date',
                    'errors'    => [
                        'required'      => 'Hey, we require your date',
                        // add date_check method (App\Validations\CustomRules) to App\Config\Validation
                        'check_date'    => 'You can not add a date before today'
                    ]
                ]
            ];
            if ($this->validate($rules)) {
                return redirect()->to('/form/success');
                // The do database inserion
                // Login user
            } else {
                $data['validation'] = $this->validator;
            }
        }
        return view('form', $data);
    }

    function success()
    {
        return 'Validation passed. Congrats!';
    }
}
