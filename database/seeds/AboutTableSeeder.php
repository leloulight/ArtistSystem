<?php
 
use Illuminate\Database\Seeder;
 
class AboutTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('abouts')->delete();
 
        $abouts = array(
            [ 'header' => 'Repujado de Cobre' ,'paragraph' => 'Esta técnica es única a nivel nacional.'],
        );
 
        // Uncomment the below to run the seeder
        DB::table('abouts')->insert($abouts);
    }
 
}