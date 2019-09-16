*<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('content');
            $table->string('file');
            $table->timestamp('expiration_date');
            $table->integer('document_type_id')->unsigned();
            $table->foreign('document_type_id')->references('id')->on('document_types');
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
        Schema::dropIfExists('documents');
        Schema::enableForeignKeyConstraints();
    }
}
