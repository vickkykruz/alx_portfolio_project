<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PhoneNumber extends Component
{
    public $countryName;
    public $countries;

    public function mount($selectedcountry)
    {
        $this->countryName = $selectedcountry;
        $authToken = $this->getAccessToken();
        $this->countries = $this->getCountries($authToken);
    }

    public function updatedCountryName($newCountry)
    {
        $this->countryName = $newCountry;
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
        ])->get('https://www.universal-tutorial.com/api/countries/');

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
        return view('livewire.phone-number');
    }
}
