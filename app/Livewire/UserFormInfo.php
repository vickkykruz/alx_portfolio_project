<?php

namespace App\Livewire;

use Livewire\Component;

class UserFormInfo extends Component
{
    public $userData;

    public function mount($userData)
    {
        $this->userData = $userData;
    }

    public function render()
    {
        return view('livewire.user-form-info');
    }
}
