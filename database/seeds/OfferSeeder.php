<?php

use App\Models\Bid;
use App\Models\Offer;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Offer::class, 150)->create()->each(function ($offer){
            $offer->bids()->saveMany(factory(Bid::class, mt_rand(0, 30))->make());
        });
    }
}
