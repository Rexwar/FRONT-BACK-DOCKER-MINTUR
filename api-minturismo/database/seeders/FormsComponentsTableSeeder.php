<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FormsComponentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('forms_components')->delete();
        
        \DB::table('forms_components')->insert(array (
            0 => 
            array (
                'form_id' => 1,
                'component_id' => 1,
            ),
            1 => 
            array (
                'form_id' => 1,
                'component_id' => 2,
            ),
            2 => 
            array (
                'form_id' => 1,
                'component_id' => 3,
            ),
        ));
        
        
    }
}