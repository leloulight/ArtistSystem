<?php
 
use Illuminate\Database\Seeder;
 
class ArtTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('arts')->delete();
 
        $arts = array(
            [ 'name' => 'Arte 1', 'height' => '20', 'width' => '30', 'imageURL' => 'storage'],
        );
 
        // Uncomment the below to run the seeder
        DB::table('arts')->insert($arts);
    }
 
}