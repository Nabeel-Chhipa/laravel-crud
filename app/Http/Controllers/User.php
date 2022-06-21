<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index ($userName) {
        $message = 'Name ' . $userName;
        echo $message;
    }
}
