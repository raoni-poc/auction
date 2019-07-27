<?php

namespace App\Http\Controllers;

use App\Interfaces\MarketplaceInterface;
use Illuminate\Http\Request;

class MarketPlaceController
{
    public function index(MarketplaceInterface $marketplace)
    {
        return view('marketplace.index', ['marketplace' => $marketplace]);
    }
}