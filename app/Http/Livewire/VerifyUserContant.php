<?php

namespace App\Http\Livewire;

use App\Services\PhoneValidationService;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use libphonenumber\PhoneNumberUtil;
use libphonenumber\PhoneNumberFormat;
use Illuminate\Http\Request;
use Carbon\Carbon;

class VerifyUserContant extends Component
{
    public $countryName;
    public $countries;
    public $insertNewNumber;
    public $formattedPhoneNumber;
    public $userData;
    protected $userInfo;
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

    public function getUserInfo()
    {
        return $this->userInfo;
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
        // Update the user mobile number
        DB::table('user_infos')
        ->where('clientID', '=', $this->userInfo->clientID) // Replace with your actual condition
        ->update(['mobileNumber' => $this->insertNewNumber]);

        // Return the font-end to default
        $this->showModal = false;
        $this->phoneVerifiedStatus = '';
    }

    public function saveDetails(Request $request)
    {
        // Retreive the user information
        $user = auth()->user();
        $user_client_id = $user->bind_id;

        $vaildate = $request->validate([
            'verifyEmail' => 'required',
            'verifyPhone' => 'required',
        ]);

        if ($vaildate['verifyEmail'] != 'Verified' || $vaildate['verifyPhone'] != 'Verified')
        {
            $errorMessage = 'Ensure you validate your email and mobile number before you continue';
            return redirect()->back()->with(['errorMessage' => $errorMessage]);
        }else {
            // Insert the status of the contact
            DB::table('verify_contacts')->insert([
                'clientID' => $user_client_id,
                'email_verify_status' => $vaildate['verifyEmail'],
                'mobile_number_verify_status' => $vaildate['verifyPhone'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            return redirect()->route('dashboard');
        }
    }

    public function render()
    {
        return view('livewire.verify-user-contant', [
            'userInfo' => $this->getUserInfo(),
        ]);
    }
}
