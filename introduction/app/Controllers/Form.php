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
                // 'email'     => 'required|valid_email',
                // 'password'  => 'required|min_length[8]',
                // 'category'  => 'in_list[Student, Teacher]',
                // // 'date'      => 'required|check_date'
                // 'date'      => [
                //     'rules'     => 'required|check_date',
                //     'label'     => 'Date',
                //     'errors'    => [
                //         'required'      => 'Hey, we require your date',
                //         // add date_check method (App\Validations\CustomRules) to App\Config\Validation
                //         'check_date'    => 'You can not add a date before today'
                //     ]
                // ]
                'theFile'   => [
                    /**
                     *  max_size rule is in kbs
                     *  ext_in[theFile,png] => no space 
                     *  */

                    // 'rules'     => 'uploaded[theFile]|max_size[theFile, 500]|ext_in[theFile,png]',
                    // max_dims => max dimensions ,width by height
                    // 'rules'     => 'uploaded[theFile]|max_size[theFile, 1024]|is_image[theFile]|max_dims[theFile,100,50]',
                    'rules'     => 'uploaded[theFile]|max_size[theFile, 1024]|is_image[theFile]',
                    'label'     => 'The File',
                    'errors'    =>[
                        'uploaded'  => 'Please choose a file to upload',
                        'max_size'  => 'The file is larger than 50 kbs',
                        // 'ext_in'    => 'The format is not allowed'
                        'is_image'  => 'The file is not an image',
                        'max_dims'  => 'The image dimension should be 100(width) by 50(height)'
                    ]
                ]
            ];
            if ($this->validate($rules)) {
                $file = $this->request->getFile('theFile');

                if($file->isValid() && !$file->hasMoved())
                {
                    $file->move('./uploads/images','testName.'.$file->getExtension());
                }
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
