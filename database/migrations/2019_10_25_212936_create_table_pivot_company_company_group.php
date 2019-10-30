<?php

use App\Models\Company;
use App\Models\CompanyGroup;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePivotCompanyCompanyGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_company_group', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on(Company::table());
            $table->bigInteger('company_group_id')->unsigned();
            $table->foreign('company_group_id')->references('id')->on(CompanyGroup::table());
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
        Schema::dropIfExists('company_company_group');
        Schema::enableForeignKeyConstraints();
    }
}
