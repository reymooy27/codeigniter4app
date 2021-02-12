<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('layout/header');
		echo view('Home');
		echo view('layout/footer');
	}
}
