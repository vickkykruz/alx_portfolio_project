<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LocationList extends Component
{
    public $countries;
    public $selectedcountry;
    public $states;
    public $selectedstate;
    public $cities;
    public $selectedcity;

    public function mount ()
    {
        $authToken = $this->getAccessToken();
        $this->countries = $this->getCountries($authToken);
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
            $authToken = $this->getAccessToken();
            $this->states = $this->fetchStates($authToken, $this->selectedcountry);
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
            $authToken = $this->getAccessToken();
            $this->cities = $this->fetchCities($authToken, $this->selectedstate);
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
        return view('livewire.location-list');
    }
}
