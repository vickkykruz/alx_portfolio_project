<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashBoardController extends Controller
{
    //
    public function index(): View
    {
        // Retrieve the authenticated user
        $user = auth()->user();
        $user_registration_status = $user->registration_status;
        $user_client_id = $user->bind_id;

        // Checking the registration pregress
        if ($user_registration_status != true)
        {
            // Check if the user has uploaded their information
            $userInfo_status = DB::table('user_infos')->where(['clientID' => $user_client_id ])->first();

            if ($userInfo_status)
            {
                // Check the verified contanct
                return view('dashboard', [
                    'user' => $user,
                    'register_status' => '3',
                    'user_info' => $userInfo_status, 
                ]);
            }
            return view('dashboard', [
                'user' => $user,
                'register_status' => '2',
                'user_info' => null,
            ]);
        }

        return view('dashboard', [
            'user' => $user,
            'register_status' => '5',
        ]);
    }
}
