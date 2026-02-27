<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('sample');
    }

    public function login()
    {
        return view('auth/index_login');
    }

    public function error()
    {
        return view('error_page');
    }
}
