<?php

use App\Models\OfferType;
use Illuminate\Database\Seeder;

class OfferTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = OfferType::table();
        DB::table($table)->delete();
        DB::table($table)->insert([
            ['id' => 1, 'name' => 'Leilão', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Leilão Sem Preço', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Preço Fixo', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
