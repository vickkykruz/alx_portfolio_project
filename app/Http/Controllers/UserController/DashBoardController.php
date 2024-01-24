<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    //
    public function index (): View
    {
        return view('dashboard');
    }
}
