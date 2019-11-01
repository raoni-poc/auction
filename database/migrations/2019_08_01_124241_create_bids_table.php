<?php

use App\Models\Bid;
use App\Models\Company;
use App\Models\Offer;
use App\Models\User;
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
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('company_owner_id')->unsigned();
            $table->foreign('company_owner_id')->references('id')->on(Company::table());
            $table->foreign('offer_id')->references('id')->on(Offer::table());
            $table->foreign('user_id')->references('id')->on(User::table());
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
