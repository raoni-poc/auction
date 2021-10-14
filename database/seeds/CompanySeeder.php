<?php

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Company::class, 60)->create()->each(function ($company){
            //$user->posts()->saveMany(factory(Posts::class, 5)->make());
        });
    }
}
