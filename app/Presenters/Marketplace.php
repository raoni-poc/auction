<?php


namespace App\Presenters;


use App\Interfaces\MarketplaceInterface;
use Illuminate\Http\Request;

class Marketplace implements MarketplaceInterface
{
    private $request;
    private $marketcards = [];

    public function __construct()
    {

    }

    public function setRequest(Request $request)
    {
        $this->request = $request;
    }

    public function addCard(MarketCard $maketcard)
    {
        $this->marketcards[] = $maketcard;
    }

    public function getMarketcards()
    {
        return $this->marketcards;
    }

    public function getValue(): float
    {
        return 155.55;
    }
}