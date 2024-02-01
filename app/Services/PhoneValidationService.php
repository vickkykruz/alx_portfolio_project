<?php

namespace App\Services;

use GuzzleHttp\Client;

class PhoneValidationService
{
    private $apiKey;
    private $apiUrl;

    public function __construct()
    {
        $this->apiKey = config('services.abstract_api.key');
        $this->apiUrl = 'https://phonevalidation.abstractapi.com/v1/';
    }

    public function vaildatePhone($phoneNumber)
    {
        $client = new Client();

        $response = $client->get($this->apiUrl, [
            'query' => [
                'api_key' => $this->apiKey,
                'phone' => $phoneNumber
            ],
        ]);

        return json_decode($response->getBody(), true);
    }
}
