<?php

namespace App\Controllers;

class Contact extends BaseController
{
	public function index()
	{
		echo view('layout/header');
		echo view('Contact');
		echo view('layout/footer');
	}
}
