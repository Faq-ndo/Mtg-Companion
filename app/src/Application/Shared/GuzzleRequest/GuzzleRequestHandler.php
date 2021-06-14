<?php

namespace App\src\Application\Shared\GuzzleRequest;

use GuzzleHttp\Client;
use Throwable;

class GuzzleRequestHandler
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function handle(GuzzleRequestCommand $command): GuzzleResponse
    {
        try {
            $response = $this->client->request($command->getMethod(), $command->getRoute());
            return new GuzzleResponse(true, json_decode($response->getBody()));
        } catch (Throwable $exception) {
            return new GuzzleResponse(false, $exception->getMessage());
        }
    }
}
