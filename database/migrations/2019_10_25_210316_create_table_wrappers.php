<?php

use App\Models\WrapperType;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableWrappers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wrappers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('wrapper_type_id')->unsigned();
            $table->foreign('wrapper_type_id')->references('id')->on((new  WrapperType())->getTable());
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
        Schema::dropIfExists('wrappers');
        Schema::enableForeignKeyConstraints();
    }
}
