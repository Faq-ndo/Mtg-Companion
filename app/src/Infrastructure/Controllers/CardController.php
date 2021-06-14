<?php

namespace App\src\Infrastructure\Controllers;

use App\src\Application\card\Find\Name\FindCardByNameCommand;
use App\src\Application\card\Find\Name\FindCardByNameHandler;
use App\src\Application\card\Random\Card\RandomCardHandler;
use App\src\Application\card\Random\Commander\RandomCommanderCardHandler;
use Symfony\Component\HttpFoundation\Request;

class CardController extends Controller
{
    public function random(RandomCardHandler $randomCardHandler)
    {
        $randomCardResponse = $randomCardHandler->handle();
        return view('card-view', ['card' => $randomCardResponse->getData()]);
    }

    public function randomCommander(RandomCommanderCardHandler $randomCommanderCardHandler)
    {
        $randomCommanderResponse = $randomCommanderCardHandler->handle();
        return view('card-view',['card' => $randomCommanderResponse->getData()]);
    }

    public function findByName(FindCardByNameHandler $findCardByNameHandler, Request $request)
    {
        $findCardByNameResponse = $findCardByNameHandler->handle(new FindCardByNameCommand($request->get('name')));
        return view('find-card',['card' => $findCardByNameResponse->getData()]);
    }
}
