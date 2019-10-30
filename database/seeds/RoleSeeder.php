<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = Role::table();
        DB::table($table)->delete();
        DB::table($table)->insert([
            ['id' => 1, 'name' => 'Leiloeiro', 'guard_name' => 'leiloeiro', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Arrematante', 'guard_name' => 'arrematante', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
