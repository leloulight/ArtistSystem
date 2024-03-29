<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(ArtTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(AboutTableSeeder::class);
        Model::reguard();
    }
}
