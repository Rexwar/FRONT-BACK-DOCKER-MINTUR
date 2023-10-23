<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionsDependentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('questions_dependents')->delete();
        
        \DB::table('questions_dependents')->insert(array (
            0 => 
            array (
                'question_id' => 65,
                'dependent_id' => 54,
            ),
            1 => 
            array (
                'question_id' => 65,
                'dependent_id' => 60,
            ),
            2 => 
            array (
                'question_id' => 66,
                'dependent_id' => 54,
            ),
            3 => 
            array (
                'question_id' => 66,
                'dependent_id' => 60,
            ),
            4 => 
            array (
                'question_id' => 94,
                'dependent_id' => 93,
            ),
            5 => 
            array (
                'question_id' => 98,
                'dependent_id' => 97,
            ),
            6 => 
            array (
                'question_id' => 193,
                'dependent_id' => 149,
            ),
            7 => 
            array (
                'question_id' => 155,
                'dependent_id' => 149,
            ),
        ));
        
        
    }
}