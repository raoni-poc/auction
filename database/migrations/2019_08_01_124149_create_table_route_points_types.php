<?php

use App\Models\Company;
use App\Models\RoutePointType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRoutePointsTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(RoutePointType::table(), function (Blueprint $table) {
            $table->bigIncrements('id');
           $table->bigInteger('company_owner_id')->unsigned();
            $table->foreign('company_owner_id')->references('id')->on(Company::table());
            $table->string('name');
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
        Schema::dropIfExists(RoutePointType::table());
        Schema::enableForeignKeyConstraints();
    }
}
