<?php

use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(State::table(), function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('abbreviation');
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on(Country::table());
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
        Schema::dropIfExists(State::table());
        Schema::enableForeignKeyConstraints();
    }
}
