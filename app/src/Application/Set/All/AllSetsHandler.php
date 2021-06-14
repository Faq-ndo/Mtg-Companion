<?php

namespace App\src\Application\Set\All;

use App\src\Domain\Repository\Set\SetRepository;

class AllSetsHandler
{
    private $setRepository;

    public function __construct(SetRepository $setRepository)
    {
        $this->setRepository = $setRepository;
    }

    public function handle(): Response
    {
        return new Response($this->setRepository->getAll());
    }
}
