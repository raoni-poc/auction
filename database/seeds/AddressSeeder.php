<?php

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = Address::table();
        DB::table($table)->delete();
        DB::table($table)->insert([
            [
                'id' => 1,
                'name' => 'Prefeitura de Esteio',
                'city_id' => 4007,
                'number' => 150,
                'zip_code' => '93260-100',
                'neighborhood' => 'Centro',
                'complement' => 'Ed. Publico',
                'note' => 'Funcionamento 12:30-18:00',
                'address' => "R. Eng. Hener de Souza Nunes",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Prefeitura de São Paulo',
                'city_id' => 5271,
                'number' => 15,
                'zip_code' => '01002-900',
                'neighborhood' => 'Centro Histórico',
                'complement' => 'Ed. Publico',
                'note' => '',
                'address' => 'Viaduto do Chá',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'city_id' => 4502,
                'name' => 'Prefeitura de Florianópolis',
                'number' => 656,
                'zip_code' => '88010-102',
                'neighborhood' => 'Centro',
                'complement' => 'Ed. Publico',
                'note' => 'Funcionamento 9:00-12:00 | 13:00-18:00',
                'address' => 'R. Conselheiro Mafra',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Prefeitura de Manaus',
                'city_id' => 178,
                'number' => 2971,
                'zip_code' => '69036-110',
                'neighborhood' => 'Centro',
                'complement' => 'Compensa I',
                'note' => '',
                'address' => 'Av. Brasil',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
