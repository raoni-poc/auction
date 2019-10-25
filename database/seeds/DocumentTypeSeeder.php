<?php

use App\Models\DocumentType;
use Illuminate\Database\Seeder;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = (new DocumentType())->getTable();
        DB::table($table)->delete();
        DB::table($table)->insert([
            [
                'id' => 1,
                'name' => 'Cpf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Cnpj',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
