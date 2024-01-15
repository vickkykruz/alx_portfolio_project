<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    // public function that return the home page of the application
    public function index(): View
    {
        return view('welcome');
    }
}
