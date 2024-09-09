<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\User;

class Users extends Controller
{
    // Método para realizar el login
    public function login()
    {
        // Obtener correo y contraseña del formulario
        $mail = $this->request->getPost('mail');
        $password = $this->request->getPost('password');
        // Crear una instancia del modelo User
        $userModel = new User();
        // Buscar al usuario por el correo
        $user = $userModel->where('mail', $mail)->first();
        // Verificar si el usuario existe y si la contraseña es correcta
        if ($user && password_verify($password, $user['password'])) {
            $data_user = [
                'DNI' => $user['DNI'],
                'mail' => $user['mail'],
                'id_type_user' => $user['id_type_user'],
                'isLoggedIn' => true
            ];

            // Guardar los datos de sesión
            session()->set($data_user);
            // Usar switch para redireccionar según el tipo de usuario
            switch ($user['id_type_user']) {
                case 1:
                    // Redirigir al panel de admin
                    return redirect()->to('admin/index');
                case 2:
                    // Redirigir al panel de técnico
                    return redirect()->to('tech/index');
                case 3:
                    // Redirigir al panel de cliente
                    return redirect()->to('client/index');
                default:
                    // En caso de un tipo de usuario inválido, destruir la sesión y redirigir al login
                    session()->destroy();
                    return redirect()->to('auth/login')->with('error', 'Tipo de usuario no válido');
            }
        } else {
            // Si las credenciales no son correctas, redirigir al login con un mensaje de error
            return redirect()->to('auth/login')->with('error', 'Usuario o contraseña incorrecta');
        }
    }
    // metodo para realizar el registro de un usuario con contraseña encriptada
    // public function register()
    // {
    //     // codigo para validar el registro y redireccionar a la pagina principal
    //     // ejemplo:
    //     $mail = $this->request->getVar('mail');
    //     $password = $this->request->getVar('password');
    //     $DNI = "000123212N";
    //     $names = "Admin";
    //     $surnames = "OhMyWebs";
    //     $id_type_user = 1;
    //     $id_state = 1;
    //     $phone = "+34 666 666 666";
    //     // creamos un numero de encriptaciones
    //     $pass_encriptaciones = [
    //         'cost' => 15
    //     ];
    //     // Encriptamos la contraseña con el cost especificado
    //     $password_hash = password_hash($password, PASSWORD_DEFAULT, $pass_encriptaciones);
    //     // Creamos una instancia del modelo User
    //     $userModel = new User();
    //     // Creamos el nuevo usuario con la contraseña encriptada
    //     $userModel->save([
    //         'mail' => $mail,
    //         'password' => $password_hash,
    //         'DNI' => $DNI,
    //         'names' => $names,
    //         'surnames' => $surnames,
    //         'id_type_user' => $id_type_user,
    //         'id_state' => $id_state,
    //         'phone' => $phone,
    //         // Otros datos que se necesiten...
    //     ]);
    //     // validamos que se haya registrado
    //     if ($userModel) {
    //         // redireccionamos a la pagina principal
    //         echo "registrado";
    //     } else {
    //         // si no se ha podido registrar mostramos un mensaje de error
    //         echo "Error al registrar";
    //     }
    // }
}