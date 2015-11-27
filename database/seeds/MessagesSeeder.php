
<?php

use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('contactforms')->delete();
 
        $contacts = array(
            [ 'name' => 'Magnate', 'subject' => 'Importante', 'message' => 'Comprare todo tu arte', 'email' => 'magnate@example.com' ],
            [ 'name' => 'Manager', 'subject' => 'Me gusta tu arte', 'message' => 'Te quiero representar', 'email' => 'manager@example.com' ],
            [ 'name' => 'Novato', 'subject' => 'Experiencia profesiona', 'message' => 'Puedo hacer mis practicas contigo?', 'email' => 'estudiante@example.com' ],

        );
 
        DB::table('contactforms')->insert($contacts);
    }
 
}


