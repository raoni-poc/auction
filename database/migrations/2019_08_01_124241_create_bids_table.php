<?php

use App\Models\Bid;
use App\Models\Offer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Bid::table(), function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->float('value');
            $table->bigInteger('offer_id')->unsigned();
            $table->foreign('offer_id')->references('id')->on(Offer::table());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists(Bid::table());
        Schema::enableForeignKeyConstraints();
    }
}
