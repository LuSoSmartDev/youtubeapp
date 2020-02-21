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
        //$this->call(ArticlesTableSeeder::class);
        $this->call(LinksTableSeeder::class);
        $this->call(EmailAccountsTableSeeder::class);
        $this->call(UserVideoTableSeeder::class);
    }
}
