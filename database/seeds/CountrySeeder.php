<?php

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = Country::table();
        DB::table($table)->delete();
        DB::table($table)->insert([
            'id' => 1,
            'name' => 'Brasil',
            'abbreviation' => 'br',
            'created_at' => date('Y-m-d h:i:s')
        ]);
    }
}
