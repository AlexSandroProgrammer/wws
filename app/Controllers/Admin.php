<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Admin extends Controller
{
    public function index(): string
    {
        // parametros de datos
        $data = [
            'title' => 'Bienvenido Usuario',
            'message' => 'Bienvenido al panel de administración',
            'sidebarItems' => ['Item 1', 'Item 2', 'Item 3'], // Datos para el sidebar
        ];
        return view('admin/index', $data);
    }
}
