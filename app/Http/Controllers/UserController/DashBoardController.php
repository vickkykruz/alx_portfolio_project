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
        // Retrieve the authenticated user
        $user = auth()->user();

        return view('dashboard', [
            'user' => $user
        ]);
    }
}
