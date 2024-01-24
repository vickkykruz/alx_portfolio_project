<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController as FortifyAuthenticatedSessionControler;

class CustomAuthenticatedSessionController extends FortifyAuthenticatedSessionControler
{
    //
    protected function redirectTo()
    {
        return '/dashboard/' . auth()->user()->bind_id;
    }
}
