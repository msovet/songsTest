<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(SongsTableSeeder::class);
        $this->call(SingersTableSeeder::class);
        $this->call(GenresTableSeeder::class);
    }
}
