<?php

namespace App\src\Infrastructure\Controllers;

use App\src\Application\Set\All\AllSetsHandler;

class SetController
{
    public function getAllSets(AllSetsHandler $allSetsHandler)
    {
        $allSetResponse = $allSetsHandler->handle();
        return view('sets', ['sets' => $allSetResponse->getData()]);
    }
}
