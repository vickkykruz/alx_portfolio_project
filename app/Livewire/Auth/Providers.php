<?php

namespace App\Livewire\Auth;

use App\Actions\Fortify\CreateNewUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Laravel\Socialite\Facades\Socialite;

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

        // dd($user);

        // if user was fetched successfully
        if (!empty($user)) {

            // Implement the login to handle the user
            $existing_user = User::where('email', $user->getEmail())->first();

            // If the user exist
            if ($existing_user) {

                // dd('Yes Existing user');
                // Fetch the user Id
                $client_id = $existing_user['bind_id'];

                // Grand the user access
                Auth::login($existing_user);
                return redirect('client.dashboard', ['bind_id' => $client_id]);

            }else {

                // Genrate a new ID
                $client_newId = Str::uuid();

                // We are excepting the user is a new user
                $newUser = $createNewUser->create([
                    'bind_id' => $client_newId,
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'password' => $user->getId(),
                    'profile_photo_path' => $user->getAvatar(),
                ]);

                dd('Inserted into the database');

                // Grand access to the new user
                // Auth::login($newUser);
                // return redirect('client.dashboard', ['bind_id' => $client_newId]);
            }
        }
        return redirect()->route('/login');
    }
}
