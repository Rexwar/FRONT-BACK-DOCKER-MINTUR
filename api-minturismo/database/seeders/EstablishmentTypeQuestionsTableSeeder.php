<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EstablishmentTypeQuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('establishment_type_questions')->delete();
        
        \DB::table('establishment_type_questions')->insert(array (
            0 => 
            array (
                'question_id' => 54,
                'establishment_type_id' => 1,
            ),
            1 => 
            array (
                'question_id' => 60,
                'establishment_type_id' => 2,
            ),
            2 => 
            array (
                'question_id' => 60,
                'establishment_type_id' => 3,
            ),
            3 => 
            array (
                'question_id' => 71,
                'establishment_type_id' => 3,
            ),
            4 => 
            array (
                'question_id' => 60,
                'establishment_type_id' => 4,
            ),
            5 => 
            array (
                'question_id' => 71,
                'establishment_type_id' => 4,
            ),
        ));
        
        
    }
}