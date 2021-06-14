<?php

namespace App\src\Application\card\Find\Name;

class FindCardByNameCommand
{
    private $cardName;

    public function __construct($cardName)
    {
        $this->cardName = $cardName;
    }

    /**
     * @return mixed
     */
    public function getCardName()
    {
        return $this->cardName;
    }

    /**
     * @param mixed $cardName
     */
    public function setCardName($cardName): void
    {
        $this->cardName = $cardName;
    }
}
