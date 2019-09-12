<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('route_id')->unsigned();
            $table->bigInteger('cargo_id')->unsigned();
            $table->bigInteger('offer_type_id')->unsigned();
            $table->float('start_price');
            $table->float('first_positive_price');
            $table->float('current_price');
            $table->text('description');
            $table->foreign('route_id')->references('id')->on('routes');
            $table->foreign('cargo_id')->references('id')->on('cargos');
            $table->foreign('offer_type_id')->references('id')->on('offers_types');
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
        Schema::dropIfExists('offers');
        Schema::enableForeignKeyConstraints();
    }
}
