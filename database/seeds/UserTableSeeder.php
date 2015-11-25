<?php
 
use Illuminate\Database\Seeder;
 
class UserTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('users')->delete();
 
        $users = array(
            [ 'name' => 'admin', 'email' => '1@email.com', 'password' => bcrypt('123')],
        );
 
        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }
 
}