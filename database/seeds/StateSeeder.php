<?php

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = State::table();
        DB::table($table)->delete();
        DB::table($table)->insert([
            ['id' => 1, 'country_id' => 1, 'name' => 'Acre', 'abbreviation' => 'AC'],
            ['id' => 2, 'country_id' => 1, 'name' => 'Alagoas', 'abbreviation' => 'AL'],
            ['id' => 3, 'country_id' => 1, 'name' => 'Amapá', 'abbreviation' => 'AP'],
            ['id' => 4, 'country_id' => 1, 'name' => 'Amazonas', 'abbreviation' => 'AM'],
            ['id' => 5, 'country_id' => 1, 'name' => 'Bahia', 'abbreviation' => 'BA'],
            ['id' => 6, 'country_id' => 1, 'name' => 'Ceará', 'abbreviation' => 'CE'],
            ['id' => 7, 'country_id' => 1, 'name' => 'Distrito Federal', 'abbreviation' => 'DF'],
            ['id' => 8, 'country_id' => 1, 'name' => 'Espírito Santo', 'abbreviation' => 'ES'],
            ['id' => 9, 'country_id' => 1, 'name' => 'Goiás', 'abbreviation' => 'GO'],
            ['id' => 10, 'country_id' => 1, 'name' => 'Maranhão', 'abbreviation' => 'MA'],
            ['id' => 11, 'country_id' => 1, 'name' => 'Mato Grosso', 'abbreviation' => 'MT'],
            ['id' => 12, 'country_id' => 1, 'name' => 'Mato Grosso do Sul', 'abbreviation' => 'MS'],
            ['id' => 13, 'country_id' => 1, 'name' => 'Minas Gerais', 'abbreviation' => 'MG'],
            ['id' => 14, 'country_id' => 1, 'name' => 'Pará', 'abbreviation' => 'PA'],
            ['id' => 15, 'country_id' => 1, 'name' => 'Paraíba', 'abbreviation' => 'PB'],
            ['id' => 16, 'country_id' => 1, 'name' => 'Paraná', 'abbreviation' => 'PR'],
            ['id' => 17, 'country_id' => 1, 'name' => 'Pernambuco', 'abbreviation' => 'PE'],
            ['id' => 18, 'country_id' => 1, 'name' => 'Piauí', 'abbreviation' => 'PI'],
            ['id' => 19, 'country_id' => 1, 'name' => 'Rio de Janeiro', 'abbreviation' => 'RJ'],
            ['id' => 20, 'country_id' => 1, 'name' => 'Rio Grande do Norte', 'abbreviation' => 'RN'],
            ['id' => 21, 'country_id' => 1, 'name' => 'Rio Grande do Sul', 'abbreviation' => 'RS'],
            ['id' => 22, 'country_id' => 1, 'name' => 'Rondônia', 'abbreviation' => 'RO'],
            ['id' => 23, 'country_id' => 1, 'name' => 'Roraima', 'abbreviation' => 'RR'],
            ['id' => 24, 'country_id' => 1, 'name' => 'Santa Catarina', 'abbreviation' => 'SC'],
            ['id' => 25, 'country_id' => 1, 'name' => 'São Paulo', 'abbreviation' => 'SP'],
            ['id' => 26, 'country_id' => 1, 'name' => 'Sergipe', 'abbreviation' => 'SE'],
            ['id' => 27, 'country_id' => 1, 'name' => 'Tocantins', 'abbreviation' => 'TO'],
        ]);
    }
}
