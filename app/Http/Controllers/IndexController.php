<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // Base folder for all pages by default with inertia in Laravel ...
        // ... is always the resources/js/Pages folder.
        return inertia(
            'Index/Index',
            [
                'message' => 'Hello from Laravel!'
            ]
        );
    }

    public function show()
    {
        return inertia('Index/Show');
    }
}
