<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('address_origin_id')->unsigned();
            $table->foreign('address_origin_id')->references('id')->on('addresses');
            $table->bigInteger('address_destination_id')->unsigned();
            $table->foreign('address_destination_id')->references('id')->on('addresses');
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
        Schema::enableForeignKeyConstraints();
        Schema::dropIfExists('routes');
        Schema::disableForeignKeyConstraints();
    }
}
