<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Brands extends Controller
{
    public function index(): string
    {
        // parametros de datos
        $data = [
            'title' => 'Listado de Marcas',
            'message' => 'Bienvenido al panel de administración',
            'sidebarItems' => ['Item 1', 'Item 2', 'Item 3'], // Datos para el sidebar
        ];
        return view('admin/brands', $data);
    }
}
