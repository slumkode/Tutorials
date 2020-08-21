<?php

namespace App\Controllers;

use App\Controllers\Admin\Shop as adminShop;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------
	function validation()
	{
		// shop object outside the admin area
		$shop = new Shop();
		echo $shop->product('laptop','lenovo')."<br>";

		$adminShop = new adminShop();

		echo $adminShop->product('laptop', 'lenovo');
	}
}
