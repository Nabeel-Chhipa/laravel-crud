<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class apiController extends Controller
{
    function index() {
        // echo 'api Controller';
        // return Http::get('https://reqres.in/api/users?page=1'); 
    }
}
