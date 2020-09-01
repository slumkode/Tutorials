<?php
namespace App\Controllers;

use App\Models\CustomModel;

class Posts extends BaseController
{
    public function index()
    {
        $db     = db_connect();
        $model  = new CustomModel($db);
        $result = $model->all();

        echo '<pre>';
        print_r($result);
        echo '</pre>';
    }

    public function where()
    {
        $db     = db_connect();
        $model  = new CustomModel($db);
        $result = $model->where();

        echo '<pre>';
        print_r($result);
        echo '</pre>';
    }
}
