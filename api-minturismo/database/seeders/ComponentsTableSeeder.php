<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ComponentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('components')->delete();

        \DB::table('components')->insert(array (
            0 =>
            array (
                'id' => 1,
                'code' => '1',
                'name' => 'Sostenibilidad Empresarial',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-01-23 06:00:17',
                'updated_at' => '2023-02-03 18:26:13',
            ),
            1 =>
            array (
                'id' => 2,
                'code' => '2',
                'name' => 'Desarrollo Turístico Sostenible',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-01-23 06:00:40',
                'updated_at' => '2023-02-03 18:26:20',
            ),
            2 =>
            array (
                'id' => 3,
                'code' => '3',
                'name' => 'Transformación Digital',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-01-23 06:01:15',
                'updated_at' => '2023-02-03 18:26:27',
            ),
        ));


    }
}
