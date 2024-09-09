<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Admin extends Controller
{
    public function index(): string
    {
        return view('admin/index');
    }
}
