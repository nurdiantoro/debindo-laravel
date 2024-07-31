<?php

namespace App\Services;

use GuzzleHttp\Client;

class InstagramService
{
    protected $client;
    protected $accessToken;
    public function __construct()
    {
        $this->client = new Client();
        $this->accessToken = env('INSTAGRAM_ACCESS_TOKEN');
    }

    public function getUserMedia()
    {
        try {
            $response = $this->client->request('GET', 'https://graph.instagram.com/me/media', [
                'query' => [
                    'fields' => 'id,media_type,media_url,thumbnail_url,timestamp,username',
                    'access_token' => $this->accessToken
                ]
            ]);
            return json_decode($response->getBody()->getContents(), true);
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
