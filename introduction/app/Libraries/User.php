<?php namespace App\Libraries;

class User{
    public function userItem($params)
    {
        return view('components/user_item',$params);
    }
}