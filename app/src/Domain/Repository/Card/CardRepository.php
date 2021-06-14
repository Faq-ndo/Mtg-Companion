<?php

namespace App\src\Domain\Repository\Card;

interface CardRepository
{
    public function findCardByName(string $name);

    public function getRandomCard();

    public function getRandomCommanderCard();
}
