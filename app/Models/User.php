<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table      = 'users';
    protected $allowedFields = ['mail', 'password', 'DNI', 'names', 'surnames', 'id_type_user', 'id_state', 'phone'];
}