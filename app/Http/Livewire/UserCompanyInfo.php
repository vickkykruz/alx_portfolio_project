<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserCompanyInfo extends Component
{
    public $userData;
    protected $userInfo;
    public function mount($userData, $userInfo)
    {
        // dd($userInfo);
        $this->userData = $userData;
        $this->userInfo = (object)$userInfo;
    }
    public function getUserInfo()
    {
        return $this->userInfo;
    }
    public function render()
    {
        return view('livewire.user-company-info', [
            'userInfo' => $this->getUserInfo(),
        ]);
    }
}
