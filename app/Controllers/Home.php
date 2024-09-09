<?php

namespace App\Controllers;

class Home extends BaseController
{
    // metodo para mostrar la vista del login
    public function index() : string
    {
        // validamos que si el usuario ya esta autenticado entonces lo devolvemos a su respectivo panel
        switch (session()->get('id_type_user')) {
            case 1:
                return view('admin/index');
            case 2:
                return view('tech/index');
            case 3:
                return view('client/index');
            default:
                return view('auth/login');
        }
    }
}