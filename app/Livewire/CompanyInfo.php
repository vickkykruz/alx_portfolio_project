<?php

namespace App\Livewire;

use Livewire\Component;

class CompanyInfo extends Component
{
    public $userData;
    public $userInfo;
    public function mount($userData, $userInfo)
    {
        $this->userData = $userData;
        $this->userInfo = $userInfo;
    }
    public function render()
    {
        return view('livewire.company-info');
    }
}
