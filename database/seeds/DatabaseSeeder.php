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
        $this->command->info('User table seeded!');
        $this->call(UsersTableSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
