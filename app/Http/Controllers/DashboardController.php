<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public  function index(Type $var = null)
    {
       return view('pages.dashboard');
    }
}
