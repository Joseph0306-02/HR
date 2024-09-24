<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Welcomecontroller extends Controller
{
    public function dashboard()
    {
        return view('home.admin.dashboard');
    }
}
