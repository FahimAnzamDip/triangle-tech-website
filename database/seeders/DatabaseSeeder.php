<?php

namespace Database\Seeders;

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
        $this->call(UsersSeeder::class);
        $this->call(ContactsSeeder::class);
        $this->call(FactsSeeder::class);
        $this->call(RegardsSeeder::class);
        $this->call(MetaSeeder::class);
    }
}
