<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class RecruiterForm extends Component 
{
    public $countries;
    public $selectedcountries;
    public $selectedOption;
    public $states;
    public function mount ()
    {
        $authToken = $this->getAccessToken();
        $this->countries = $this->getCountries($authToken);
        $this->selectedcountries = [];
    }
    public function emitReinitializeEvent()
    {
        $this->dispatchBrowserEvent('eventName', ['data' => 'someData']);
    }
    public function updatedSelectedCountries()
    {   
        // echo "<script>console.log('Hey TW Element');</script>";    
        $this->emitReinitializeEvent();
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
            foreach($this->selectedcountries as $selectedCountry)
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

    private function handleResponseError($response)
    {
        if ($response->failed()) {
            $errorMessage = $response->json('message') ?? 'Unknown error';
            throw new \Exception('API request failed. ' . $errorMessage);
        }
    }


    public function render()
    {
        return view('livewire.recruiter-form');
    }
}
