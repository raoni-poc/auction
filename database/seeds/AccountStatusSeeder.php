<?php

use App\Models\AccountStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = AccountStatus::table();
        DB::table($table)->delete();
        DB::table($table)->insert([
            ['id' => 1, 'name' => 'Ativo'],
            ['id' => 2, 'name' => 'Inativo'],
            ['id' => 3, 'name' => 'Nunca Ativado'],
        ]);
    }
}
