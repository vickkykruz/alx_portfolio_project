<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\UserInfo;

class UserFormInfo extends Component
{
    public $userData;

    public function mount($userData)
    {
        $this->userData = $userData;
    }

    public function submit_user_info(Request $request)
    {
        $validatedRequest = $request->validate([
            'account_type' => 'required',
            'selectedcountry' => 'required',
            'selectedstate' => 'required',
            'mobile-input' => 'required|string',
            'country_phone_code' => 'required',
            'selectedcity' => 'required',
            'address' => 'required',
            'zipcode' => 'required'
        ]);

        // Retrive the auth user details
        $user = auth()->user();
        $user_bind_id = $user->bind_id;

        // Insert the information tothe database
        UserInfo::Create([
            'clientID' => $user_bind_id,
            'accountType' => $validatedRequest['account_type'],
            'countryPhoneCode' => $validatedRequest['country_phone_code'],
            'mobileNumber' => $validatedRequest['mobile-input'],
            'phoneNumber' => $validatedRequest['phone-input'] ?? null,
            'country' => $validatedRequest['selectedcountry'],
            'state' => $validatedRequest['selectedstate'],
            'city' => $validatedRequest['selectedcity'],
            'address' => $validatedRequest['address'],
            'zonalCode' => $validatedRequest['zipcode'],
        ]);

        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.user-form-info');
    }
}
