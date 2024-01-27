<?php

namespace App\Livewire\Auth;

use App\Actions\Fortify\CreateNewUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;

class Providers extends Component
{
    public function render()
    {
        return view('livewire.auth.providers');
    }

    public function redirectToGoogle($provider)
    {
        // dd('Reaches the function ``redirectToGoogle``');
        return Socialite::driver($provider)->redirect();
    }

    public function handleGoogleCallback($provider, CreateNewUser $createNewUser)
    {
        $user = Socialite::driver($provider)->user();

        // if user was fetched successfully
        if (!empty($user)) {
            // Define the variable
            $clinetId = $user->getId();
            $clientName = $user->getName();
            $clientEmail = $user->getEmail();
            $clientProfile = $user->getAvatar();
            $emailVeriftyAt = $user->email_verified_at;

            // Implement the login to handle the user
            $existing_user = User::where('email', $clientEmail)->first();

            // If the user exist
            if ($existing_user) {
                // Grand the user access
                Auth::login($existing_user);
                return redirect()->route('dashboard');
            }else {
                // We are excepting the user is a new user
                $user = User::Create([
                    'name' => $clientName,
                    'email' => $clientEmail,
                    'password' => Hash::make($clinetId),
                    'bind_id' => Str::uuid(),
                    'profile_photo_path' => $clientProfile,
                    'email_verified_at' => $emailVeriftyAt,
                ]);

                Auth::login($user);
                return redirect()->route('dashboard');
            }
        }
        return redirect()->route('/login');
    }
}
