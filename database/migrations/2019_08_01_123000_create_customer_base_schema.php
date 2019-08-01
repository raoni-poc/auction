<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerBaseSchema extends Migration
{
    public function up():void
    {
        DB::statement('CREATE SCHEMA customer_base;');
    }

    public function down():void
    {
        DB::statement('DROP SCHEMA customer_base;');
    }
}
