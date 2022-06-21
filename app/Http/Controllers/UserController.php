<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    function fetch(Request $req) {
        return $req->input();
    }
}
