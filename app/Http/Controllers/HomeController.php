<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function index(Request $httpRequest): Response
    {
        return Inertia::render('Home', [
            'exampleProp' => 123,
        ]);
    }
}
