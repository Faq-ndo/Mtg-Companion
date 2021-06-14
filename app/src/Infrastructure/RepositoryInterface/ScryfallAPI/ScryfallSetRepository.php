<?php

namespace App\src\Infrastructure\RepositoryInterface\ScryfallAPI;

use App\src\Application\Shared\GuzzleRequest\GuzzleRequestCommand;
use App\src\Application\Shared\GuzzleRequest\GuzzleRequestHandler;
use App\src\Domain\Repository\Set\SetRepository;


class ScryfallSetRepository implements SetRepository
{
    private $guzzleRequestHandler;

    public function __construct(GuzzleRequestHandler $guzzleRequestHandler)
    {
        $this->guzzleRequestHandler = $guzzleRequestHandler;
    }

    public function getAll()
    {
        $guzzleResponse = $this->guzzleRequestHandler->handle(new GuzzleRequestCommand('GET', 'https://api.scryfall.com/sets'));
        if ($guzzleResponse->getStatus()) {
            return $guzzleResponse->getData();
        }
        return null;
    }
}
