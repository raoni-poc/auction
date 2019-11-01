<?php

use App\Models\Company;
use App\Models\CompanyGroup;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCompanyGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(CompanyGroup::table(), function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
           $table->bigInteger('company_owner_id')->unsigned();
            $table->foreign('company_owner_id')->references('id')->on(Company::table());
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
        Schema::dropIfExists(CompanyGroup::table());
        Schema::enableForeignKeyConstraints();
    }
}
