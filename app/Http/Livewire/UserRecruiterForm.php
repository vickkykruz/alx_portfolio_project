<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class UserRecruiterForm extends Component
{
    protected $listeners = ['countriesAdded', 'countriesRemoved'];
    public $selectedOption;
    public $selectedcountries;

    // Livewire Update life cycle Hook
    public function countriesAdded($value)
    {
    }
    public function countriesRemoved($value)
    {
    }
    public function render()
    {
        return view('livewire.user-recruiter-form');
    }
}
