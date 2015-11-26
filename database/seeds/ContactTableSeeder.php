<?php
 
use Illuminate\Database\Seeder;
 
class ContactTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('contacts')->delete();
 
        $contacts = array(
            [ 'email' => '1@example.com' ],
        );
 
        // Uncomment the below to run the seeder
        DB::table('contacts')->insert($contacts);
    }
 
}