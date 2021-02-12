<?php

namespace App\Controllers;

class Profile extends BaseController
{
  public function index()
  {
    echo view('layout/header');
    echo view('Profile');
    echo view('layout/footer');
  }
}
