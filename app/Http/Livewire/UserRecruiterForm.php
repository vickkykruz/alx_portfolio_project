<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class UserRecruiterForm extends Component
{
    public $countries;
    public $selectedcountries;
    public $selectedStates;
    public $selectedOption;
    public $states;
    public $cities;
    public function mount ()
    {
        $authToken = $this->getAccessToken();
        $this->countries = $this->getCountries($authToken);
        $this->selectedcountries = [];
        $this->selectedStates = [];
    }
    // Livewire Update life cycle Hook
    public function updatedSelectedCountries()
    {
        $this->emit('domUpdated');
    }

    public function updatedSelectedState()
    {
        $this->emit('domUpdate');
    }

    private function getAccessToken()
    {
        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'api-token' => 'WUMMoJAIsRVBr8S7-J13qo_M7ObGTZtM3AVxLV9CEY3CBpec_PIZXyk-FPucMx0_j_Q',
                'user-email' => 'onwuegbuchulemvic02@gmail.com'
            ])->get('https://www.universal-tutorial.com/api/getaccesstoken');
        }catch(\Exception $e) {
            // Handle the exception (e.g., log, display an error message, etc.)
            Log::error('Error fetching countries: ' . $e->getMessage());
            $this->countries = [];
        };

        return $response->json()['auth_token'];
    }

    private function getCountries($authToken)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $authToken,
        ])->get('https://www.universal-tutorial.com/api/countries');

        $this->handleResponseError($response);
        return $response->json();
    }

    public function getStates()
    {
        try {
            foreach($this->selectedCountries as $selectedCountry)
            {
                $authToken = $this->getAccessToken();
                $Outputstates = $this->fetchStates($authToken, $selectedCountry);
                $allStates[$selectedCountry] = $Outputstates;
            }
            $this->states = $allStates;
        }catch (\Exception $e) {
           Log::error('Error fetching countries: ' . $e->getMessage());
           $this->states = [];
        };
    }

    private function fetchStates($authToken, $countryName)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $authToken,
        ])->get('https://www.universal-tutorial.com/api/states/'.$countryName.'');

        $this->handleResponseError($response);
        return $response->json();
    }

    public function getCities()
    {
        try {
            foreach($this->selectedStates as $selectedState)
            {
                $authToken = $this->getAccessToken();
                $outputCities = $this->fetchCities($authToken, $selectedState);
                $allCities[$selectedState] = $outputCities;
            }
            $this->cities = $allCities;
        }catch (\Exception $e) {
           Log::error('Error fetching countries: ' . $e->getMessage());
           $this->cities = [];
        };
    }

    private function fetchCities($authToken, $stateName)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $authToken,
        ])->get('https://www.universal-tutorial.com/api/cities/'. $stateName .'');

        $this->handleResponseError($response);
        return $response->json();
    }

    private function handleResponseError($response)
    {
        if ($response->failed()) {
            $errorMessage = $response->json('message') ?? 'Unknown error';
            throw new \Exception('API request failed. ' . $errorMessage);
        }
    }
    public function render()
    {
        return view('livewire.user-recruiter-form');
    }
}
