<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index()
    {
        echo "This is an Admin Shop Area";
    }

    public function product($type, $product_id)
    {
        echo "<h2>This is an Admin area</h2>";
    }
}
