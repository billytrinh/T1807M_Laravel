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
         $this->call(UserTablerSeeder::class);
        $this->call(AuthorTableSeeder::class);
        $this->call(NxbTableSeeder::class);
        $this->call(BookTableSeeder::class);
    }
}
