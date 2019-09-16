<?php

use App\Models\RequirementType;
use Illuminate\Database\Seeder;

class RequirementTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = (new RequirementType())->getTable();
        DB::table($table)->delete();
        DB::table($table)->insert([
            ['id' => 1, 'name' => 'Carga'],
            ['id' => 2, 'name' => 'Local'],
        ]);
    }
}
