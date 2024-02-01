<?php

namespace App\Livewire;

use App\Services\PhoneValidationService;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use libphonenumber\PhoneNumberUtil;
use libphonenumber\PhoneNumberFormat;

class VerifyUserContant extends Component
{
    public $countryName;
    public $countries;
    public $insertNewNumber;
    public $formattedPhoneNumber;
    public $userData;
    public $userInfo;
    public $phoneVerifiedStatus;
    public $verifyEmail;
    public $verifyPhone;
    public $showModal = false;

    public function mount($userData, $userInfo)
    {
        $this->userData = $userData;
        $this->userInfo = $userInfo;
        $userMobileNumber = '+'.$userInfo->countryPhoneCode.''.$userInfo->mobileNumber;
        $this->countryName = $userInfo->country;
        $this->insertNewNumber = $userInfo->mobileNumber;

        $authToken = $this->getAccessToken();
        $this->countries = $this->getCountries($authToken);

        // Format the phone number
        $phoneUtil = PhoneNumberUtil::getInstance();
        $numberProto = $phoneUtil->parse($userMobileNumber, 'ZZ');

        // Format the phone number
        $this->formattedPhoneNumber = $phoneUtil->format($numberProto, PhoneNumberFormat::INTERNATIONAL);
    }

    public function verifyPhoneNumber(PhoneValidationService $phoneValidationService, $phoneNumber)
    {
        $response = $phoneValidationService->vaildatePhone($phoneNumber);
        $statusNumber = $response['valid'];
        if ($statusNumber == true)
        {
            $this->phoneVerifiedStatus = 'true';
        }else if ($statusNumber == false)
        {
            $this->phoneVerifiedStatus = 'false';
        }
    }

    public function toggleModal()
    {
        $this->showModal = !$this->showModal;
    }

    public function closeToggleModal()
    {
        $this->showModal = false;
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

    public function saveNewNumber()
    {
        dd($this->insertNewNumber);
    }

    public function render()
    {
        return view('livewire.verify-user-contant');
    }
}
