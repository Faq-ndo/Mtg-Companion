<?php

namespace App\src\Application\card\Random\Commander;

use App\src\Domain\Repository\Card\CardRepository;

class RandomCommanderCardHandler
{
    private $cardRepository;

    public function __construct(CardRepository $cardRepository)
    {
        $this->cardRepository = $cardRepository;
    }

    public function handle(): Response
    {
        return new Response($this->cardRepository->getRandomCommanderCard());
    }
}
