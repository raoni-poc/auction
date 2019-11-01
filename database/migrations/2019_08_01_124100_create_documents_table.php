*<?php

use App\Models\Company;
use App\Models\Document;
use App\Models\DocumentType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Document::table(), function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('document_type_id')->unsigned();
            $table->foreign('document_type_id')->references('id')->on(DocumentType::table());
           $table->bigInteger('company_owner_id')->unsigned();
            $table->foreign('company_owner_id')->references('id')->on(Company::table());
            $table->string('content');
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
