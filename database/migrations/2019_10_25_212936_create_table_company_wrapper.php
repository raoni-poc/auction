<?php

use App\Models\Company;
use App\Models\Wrapper;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCompanyWrapper extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_wrapper', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on((new Company())->getTable());
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
        Schema::dropIfExists('company_wrapper');
        Schema::enableForeignKeyConstraints();
    }
}
