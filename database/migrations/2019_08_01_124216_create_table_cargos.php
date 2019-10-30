<?php

use App\Models\Cargo;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCargos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Cargo::table(), function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cargo');
            $table->string('packing');
            $table->text('description');
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
        Schema::dropIfExists(Cargo::table());
        Schema::enableForeignKeyConstraints();
    }
}
