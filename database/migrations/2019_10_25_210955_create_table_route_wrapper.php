<?php

use App\Models\Wrapper;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRouteWrapper extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_wrapper', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('route_id')->unsigned();
            $table->foreign('route_id')->references('id')->on((new \App\Models\Route())->getTable());
            $table->bigInteger('wrapper_id')->unsigned();
            $table->foreign('wrapper_id')->references('id')->on((new Wrapper())->getTable());
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
        Schema::dropIfExists('route_wrapper');
        Schema::enableForeignKeyConstraints();
    }
}
