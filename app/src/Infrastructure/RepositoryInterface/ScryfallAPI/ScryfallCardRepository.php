<?php

namespace App\src\Infrastructure\RepositoryInterface\ScryfallAPI;

use App\src\Application\Shared\GuzzleRequest\GuzzleRequestCommand;
use App\src\Application\Shared\GuzzleRequest\GuzzleRequestHandler;
use App\src\Domain\Repository\Card\CardRepository;

class ScryfallCardRepository implements CardRepository
{
    private $guzzleRequestHandler;

    public function __construct(GuzzleRequestHandler $guzzleRequestHandler)
    {
        $this->guzzleRequestHandler = $guzzleRequestHandler;
    }

    public function getRandomCard()
    {
        $guzzleResponse = $this->guzzleRequestHandler->handle(new GuzzleRequestCommand('GET', 'https://api.scryfall.com/cards/random'));
        if ($guzzleResponse->getStatus()) {
            return $guzzleResponse->getData();
        }
        return null;
    }

    public function getRandomCommanderCard()
    {
        $guzzleResponse = $this->guzzleRequestHandler->handle(new GuzzleRequestCommand('GET', 'https://api.scryfall.com/cards/random?q=is%3Acommander'));
        if ($guzzleResponse->getStatus()) {
            return $guzzleResponse->getData();
        }
        return null;
    }

    public function findCardByName(string $name)
    {
        $guzzleResponse = $this->guzzleRequestHandler->handle(new GuzzleRequestCommand('GET', 'https://api.scryfall.com/cards/search?q='.$name));
        if ($guzzleResponse->getStatus()) {
            return $guzzleResponse->getData();
        }
        return null;
    }
}
