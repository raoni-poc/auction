<?php

use App\Models\Cargo;
use App\Models\Offer;
use App\Models\OfferType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Offer::table(), function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('cargo_id')->unsigned();
            $table->bigInteger('offer_type_id')->unsigned();
            $table->float('start_price');
            $table->float('first_positive_price');
            $table->float('current_price');
            $table->text('description');
            $table->foreign('cargo_id')->references('id')->on(Cargo::table());
            $table->foreign('offer_type_id')->references('id')->on(OfferType::table());
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
        Schema::dropIfExists(Offer::table());
        Schema::enableForeignKeyConstraints();
    }
}
