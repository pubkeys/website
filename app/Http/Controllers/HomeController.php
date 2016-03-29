<?php

namespace App\Http\Controllers;

use App\Models\Key;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function notFound()
    {
        return '404';
    }
}
