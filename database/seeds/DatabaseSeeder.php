<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AccountStatusSeeder::class,
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,
            RequirementTypeSeeder::class,
            CompanySeeder::class,
            UserSeeder::class,
            DocumentTypeSeeder::class,
            AddressSeeder::class,
            OfferTypeSeeder::class,
            RoleSeeder::class,
            CargoSeeder::class
        ]);
    }
}
