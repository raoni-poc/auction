<?php

use App\Models\Address;
use App\Models\City;
use App\Models\Company;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voidlogradouro
     */
    public function up()
    {
        Schema::create(Address::table(), function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on(City::table());
           $table->bigInteger('company_owner_id')->unsigned();
            $table->foreign('company_owner_id')->references('id')->on(Company::table());
            $table->string('name');
            $table->string('number');
            $table->string('zip_code');
            $table->string('neighborhood');
            $table->string('complement');
            $table->string('note');
            $table->string('address');
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
        Schema::dropIfExists('addresses');
        Schema::enableForeignKeyConstraints();
    }
}
