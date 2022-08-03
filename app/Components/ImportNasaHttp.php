<?php

namespace App\Components;

use GuzzleHttp\Client;

class ImportNasaHttp
{
    public $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.nasa.gov/',
            'timeout' => 10.0,
        ]);
    }
}
