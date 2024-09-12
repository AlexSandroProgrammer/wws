<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Stores extends Controller
{
    public function index(): string
    {
        // parametros de datos
        $data = [
            'title' => 'Listado de Tiendas',
            'message' => 'Bienvenido al panel de administración',
            'sidebarItems' => ['Item 1', 'Item 2', 'Item 3'], // Datos para el sidebar
        ];
        return view('admin/stores', $data);
    }
}
