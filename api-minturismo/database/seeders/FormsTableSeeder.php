<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FormsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('forms')->delete();

        \DB::table('forms')->insert(array (
            0 =>
            array (
                'id' => 1,
                'code' => '1',
                'name' => 'Formulario de evaluación cuantitativa del nivel de competitividad turística en destinos y/o productos turísticos',
                'description' => 'La presente investigación servirá para realizar un diagnóstico y evaluación del nivel de competitividad en el que se encuentran las empresas, productos y/o destinos turísticos.',
                'deleted_at' => NULL,
                'created_at' => '2023-01-23 05:59:58',
                'updated_at' => '2023-02-03 18:26:01',
                'status' => 'Activo',
            ),
        ));


    }
}
