<?php

namespace App\src\Application\card\Find\Name;

use App\src\Domain\Repository\Card\CardRepository;

class FindCardByNameHandler
{
    private $cardRepository;

    public function __construct(CardRepository $cardRepository)
    {
        $this->cardRepository = $cardRepository;
    }

    public function handle(FindCardByNameCommand $findCardByNameCommand): Response
    {
        return new Response($this->cardRepository->findCardByName($findCardByNameCommand->getCardName()));
    }
}
