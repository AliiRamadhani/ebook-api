<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'Nis' => 3103120141,
            'Name' => 'Ramskuy',
            'Phone' => '081344215841',
            'Class' => 'XII RPL 4'
        ];
    }
}
