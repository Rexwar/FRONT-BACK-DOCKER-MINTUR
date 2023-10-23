<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubTopicsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sub_topics')->delete();
        
        \DB::table('sub_topics')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => '1',
                'name' => 'Ámbito estratégico',
                'result' => '',
                'description' => '',
                'component_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-01-23 06:01:38',
                'updated_at' => '2023-02-03 19:01:20',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => '2',
                'name' => 'Ámbito administrativo financiero',
                'result' => '',
                'description' => '',
                'component_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-01-23 06:02:20',
                'updated_at' => '2023-02-03 19:00:32',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => '3',
                'name' => 'Ámbito comercial',
                'result' => '',
                'description' => '',
                'component_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-01-23 06:02:38',
                'updated_at' => '2023-02-03 19:00:32',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => '4',
                'name' => 'Gestión turÍstica',
                'result' => '',
                'description' => '',
                'component_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-01-23 06:02:55',
                'updated_at' => '2023-02-03 19:01:33',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => '5',
                'name' => 'Gestión medioambiental',
                'result' => '',
                'description' => '',
                'component_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-01-23 06:03:11',
                'updated_at' => '2023-02-03 19:01:41',
            ),
            5 => 
            array (
                'id' => 6,
                'code' => '6',
                'name' => 'Gestión sociocultural',
                'result' => '',
                'description' => '',
                'component_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-01-23 06:03:27',
                'updated_at' => '2023-02-03 19:01:46',
            ),
            6 => 
            array (
                'id' => 7,
                'code' => '7',
                'name' => 'Gestión socioeconómica',
                'result' => '',
                'description' => '',
                'component_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-01-23 06:03:38',
                'updated_at' => '2023-02-03 19:01:55',
            ),
            7 => 
            array (
                'id' => 8,
                'code' => '8',
                'name' => 'Conocimiento tecnológico',
                'result' => '',
                'description' => '',
                'component_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-01-23 06:03:57',
                'updated_at' => '2023-02-03 19:01:08',
            ),
            8 => 
            array (
                'id' => 9,
                'code' => '9',
                'name' => 'TecnologÍa del establecimiento',
                'result' => '',
                'description' => '',
                'component_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-01-23 06:04:08',
                'updated_at' => '2023-02-03 19:00:32',
            ),
            9 => 
            array (
                'id' => 10,
                'code' => '10',
                'name' => 'Adaptabilidad para el futuro',
                'result' => '',
                'description' => '',
                'component_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-01-23 06:04:25',
                'updated_at' => '2023-02-03 19:00:32',
            ),
        ));
        
        
    }
}