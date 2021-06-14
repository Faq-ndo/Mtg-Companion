<?php

namespace App\src\Application\card\Random\Card;

use App\src\Domain\Repository\Card\CardRepository;

class RandomCardHandler
{
    private $cardRepository;

    public function __construct(CardRepository $cardRepository)
    {
        $this->cardRepository = $cardRepository;
    }

    public function handle(): Response
    {
        return new Response($this->cardRepository->getRandomCard());
    }
}
