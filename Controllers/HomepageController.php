<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view('homepage'); // deve esistere resources/views/homepage.blade.php
    }
}
