<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePivotCargoRequirement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargo_requirement', function (Blueprint $table) {
            $table->bigInteger('cargo_id')->unsigned();
            $table->bigInteger('requirement_id')->unsigned();
            $table->unique(['cargo_id', 'requirement_id'], 'cargo_requirement_unique');
            $table->foreign('requirement_id')->references('id')->on('requirements');
            $table->foreign('cargo_id')->references('id')->on('cargos');
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
        Schema::dropIfExists('cargo_requirement');
        Schema::enableForeignKeyConstraints();
    }
}
