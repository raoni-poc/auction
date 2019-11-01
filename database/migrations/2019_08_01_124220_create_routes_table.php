<?php

use App\Models\Address;
use App\Models\Company;
use App\Models\Offer;
use App\Models\RoutePointType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigInteger('offer_id')->unsigned();
           $table->bigInteger('company_owner_id')->unsigned();
            $table->integer('order')->unsigned();
            $table->bigInteger('address_origin_id')->unsigned();
            $table->bigInteger('origin_point_type_id')->unsigned();
            $table->bigInteger('address_destination_id')->unsigned();
            $table->bigInteger('destination_point_type_id')->unsigned();
            $table->foreign('company_owner_id')->references('id')->on(Company::table());
            $table->foreign('offer_id')->references('id')->on((new Offer())->getTable());
            $table->foreign('address_origin_id')->references('id')->on((new Address())->getTable());
            $table->foreign('origin_point_type_id')->references('id')->on((new RoutePointType())->getTable());
            $table->foreign('address_destination_id')->references('id')->on((new Address())->getTable());
            $table->foreign('destination_point_type_id')->references('id')->on((new RoutePointType())->getTable());
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
        Schema::dropIfExists('routes');
        Schema::enableForeignKeyConstraints();
    }
}
