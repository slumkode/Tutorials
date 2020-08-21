<?php
namespace App\Controllers;

class Shop extends BaseController{
    public function index()
    {
        return view("shop");
    }

    public function product($type = "laptop", $id="Dell")
    {
        echo "<h2>This is a product:".$type." of id:".$id."</h2>";
    }
}
