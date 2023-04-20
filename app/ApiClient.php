<?php declare(strict_types=1);

namespace App;

use GuzzleHttp\Client;

class ApiClient
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client;
    }

    public function getData()
    {
        $url = 'https://www.latvijasbanka.lv/vk/ecb.xml';
        $response = $this->client->request('GET', $url);

        return simplexml_load_string($response->getBody()->getContents());
    }
}