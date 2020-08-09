<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return [
            "nis" => 3103118029,
            "name" => "Az Zahrah Nur Alifah",
            "gender" => "Perempuan",
            "phone" => 6289524781398,
            "class" => "XII RPL 1"
        ];
    }
}
