<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create()
    {
        return Inertia('Auth/Login');
    }

    public function store()
    {
         
    }

    public function destroy()
    {

    }
}
