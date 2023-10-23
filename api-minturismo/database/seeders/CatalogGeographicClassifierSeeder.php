<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CatalogGeographicClassifierSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('catalog_geographic_classifiers')->delete();

        \DB::table('catalog_geographic_classifiers')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'parent_id' => NULL,
                    'code' => '01',
                    'full_code' => '01',
                    'description' => 'AZUAY',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'parent_id' => NULL,
                    'code' => '02',
                    'full_code' => '02',
                    'description' => 'BOLIVAR',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'parent_id' => NULL,
                    'code' => '03',
                    'full_code' => '03',
                    'description' => 'CAÑAR',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'parent_id' => NULL,
                    'code' => '04',
                    'full_code' => '04',
                    'description' => 'CARCHI',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'parent_id' => NULL,
                    'code' => '05',
                    'full_code' => '05',
                    'description' => 'COTOPAXI',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 6,
                    'parent_id' => NULL,
                    'code' => '06',
                    'full_code' => '06',
                    'description' => 'CHIMBORAZO',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 7,
                    'parent_id' => NULL,
                    'code' => '07',
                    'full_code' => '07',
                    'description' => 'EL ORO',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 8,
                    'parent_id' => NULL,
                    'code' => '08',
                    'full_code' => '08',
                    'description' => 'ESMERALDAS',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            8 =>
                array(
                    'id' => 9,
                    'parent_id' => NULL,
                    'code' => '09',
                    'full_code' => '09',
                    'description' => 'GUAYAS',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            9 =>
                array(
                    'id' => 10,
                    'parent_id' => NULL,
                    'code' => '10',
                    'full_code' => '10',
                    'description' => 'IMBABURA',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            10 =>
                array(
                    'id' => 11,
                    'parent_id' => NULL,
                    'code' => '11',
                    'full_code' => '11',
                    'description' => 'LOJA ',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            11 =>
                array(
                    'id' => 12,
                    'parent_id' => NULL,
                    'code' => '12',
                    'full_code' => '12',
                    'description' => 'LOS RIOS',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            12 =>
                array(
                    'id' => 13,
                    'parent_id' => NULL,
                    'code' => '13',
                    'full_code' => '13',
                    'description' => 'MANABI',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            13 =>
                array(
                    'id' => 14,
                    'parent_id' => NULL,
                    'code' => '14',
                    'full_code' => '14',
                    'description' => ' MORONA SANTIAGO',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            14 =>
                array(
                    'id' => 15,
                    'parent_id' => NULL,
                    'code' => '15',
                    'full_code' => '15',
                    'description' => 'NAPO',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            15 =>
                array(
                    'id' => 16,
                    'parent_id' => NULL,
                    'code' => '16',
                    'full_code' => '16',
                    'description' => 'PASTAZA',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            16 =>
                array(
                    'id' => 17,
                    'parent_id' => NULL,
                    'code' => '17',
                    'full_code' => '17',
                    'description' => 'PICHINCHA',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            17 =>
                array(
                    'id' => 18,
                    'parent_id' => NULL,
                    'code' => '18',
                    'full_code' => '18',
                    'description' => 'TUNGURAHUA',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            18 =>
                array(
                    'id' => 19,
                    'parent_id' => NULL,
                    'code' => '19',
                    'full_code' => '19',
                    'description' => 'ZAMORA CHINCHIPE',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            19 =>
                array(
                    'id' => 20,
                    'parent_id' => NULL,
                    'code' => '20',
                    'full_code' => '20',
                    'description' => 'GALAPAGOS',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            20 =>
                array(
                    'id' => 21,
                    'parent_id' => NULL,
                    'code' => '21',
                    'full_code' => '21',
                    'description' => 'SUCUMBIOS',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            21 =>
                array(
                    'id' => 22,
                    'parent_id' => NULL,
                    'code' => '22',
                    'full_code' => '22',
                    'description' => ' ORELLANA',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            22 =>
                array(
                    'id' => 23,
                    'parent_id' => NULL,
                    'code' => '23',
                    'full_code' => '23',
                    'description' => 'SANTO DOMINGO DE LOS TSACHILAS',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            23 =>
                array(
                    'id' => 24,
                    'parent_id' => NULL,
                    'code' => '24',
                    'full_code' => '24',
                    'description' => 'SANTA ELENA',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            24 =>
                array(
                    'id' => 25,
                    'parent_id' => NULL,
                    'code' => '90',
                    'full_code' => '90',
                    'description' => 'ZONAS NO DELIMITADAS',
                    'type' => 'PROVINCE',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            25 =>
                array(
                    'id' => 26,
                    'parent_id' => 1,
                    'code' => '01',
                    'full_code' => '01.01',
                    'description' => 'CUENCA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:22',
                ),
            26 =>
                array(
                    'id' => 27,
                    'parent_id' => 1,
                    'code' => '02',
                    'full_code' => '01.02',
                    'description' => 'GIRON',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:27',
                ),
            27 =>
                array(
                    'id' => 28,
                    'parent_id' => 1,
                    'code' => '03',
                    'full_code' => '01.03',
                    'description' => 'GUALACEO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:28',
                ),
            28 =>
                array(
                    'id' => 29,
                    'parent_id' => 1,
                    'code' => '04',
                    'full_code' => '01.04',
                    'description' => ' NABON',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:28',
                ),
            29 =>
                array(
                    'id' => 30,
                    'parent_id' => 1,
                    'code' => '05',
                    'full_code' => '01.05',
                    'description' => 'PAUTE',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:28',
                ),
            30 =>
                array(
                    'id' => 31,
                    'parent_id' => 1,
                    'code' => '06',
                    'full_code' => '01.06',
                    'description' => ' PUCARA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:28',
                ),
            31 =>
                array(
                    'id' => 32,
                    'parent_id' => 1,
                    'code' => '07',
                    'full_code' => '01.07',
                    'description' => ' SAN FERNANDO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:28',
                ),
            32 =>
                array(
                    'id' => 33,
                    'parent_id' => 1,
                    'code' => '08',
                    'full_code' => '01.08',
                    'description' => ' SANTA ISABEL',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:28',
                ),
            33 =>
                array(
                    'id' => 34,
                    'parent_id' => 1,
                    'code' => '09',
                    'full_code' => '01.09',
                    'description' => ' SIGSIG',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:28',
                ),
            34 =>
                array(
                    'id' => 35,
                    'parent_id' => 1,
                    'code' => '10',
                    'full_code' => '01.10',
                    'description' => ' OÑA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:28',
                ),
            35 =>
                array(
                    'id' => 36,
                    'parent_id' => 1,
                    'code' => '11',
                    'full_code' => '01.11',
                    'description' => 'CHORDELEG',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:28',
                ),
            36 =>
                array(
                    'id' => 37,
                    'parent_id' => 1,
                    'code' => '12',
                    'full_code' => '01.12',
                    'description' => ' EL PAN',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:28',
                ),
            37 =>
                array(
                    'id' => 38,
                    'parent_id' => 1,
                    'code' => '13',
                    'full_code' => '01.13',
                    'description' => ' SEVILLA DE ORO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:28',
                ),
            38 =>
                array(
                    'id' => 39,
                    'parent_id' => 1,
                    'code' => '14',
                    'full_code' => '01.14',
                    'description' => ' GUACHAPALA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:28',
                ),
            39 =>
                array(
                    'id' => 40,
                    'parent_id' => 1,
                    'code' => '15',
                    'full_code' => '01.15',
                    'description' => 'CAMILO PONCE ENRIQUEZ',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:28',
                ),
            40 =>
                array(
                    'id' => 41,
                    'parent_id' => 2,
                    'code' => '01',
                    'full_code' => '02.01',
                    'description' => ' GUARANDA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:28',
                ),
            41 =>
                array(
                    'id' => 42,
                    'parent_id' => 2,
                    'code' => '02',
                    'full_code' => '02.02',
                    'description' => ' CHILLANES',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:29',
                ),
            42 =>
                array(
                    'id' => 43,
                    'parent_id' => 2,
                    'code' => '03',
                    'full_code' => '02.03',
                    'description' => ' CHIMBO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:29',
                ),
            43 =>
                array(
                    'id' => 44,
                    'parent_id' => 2,
                    'code' => '04',
                    'full_code' => '02.04',
                    'description' => ' ECHEANDIA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:29',
                ),
            44 =>
                array(
                    'id' => 45,
                    'parent_id' => 2,
                    'code' => '05',
                    'full_code' => '02.05',
                    'description' => 'SAN MIGUEL',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:29',
                ),
            45 =>
                array(
                    'id' => 46,
                    'parent_id' => 2,
                    'code' => '06',
                    'full_code' => '02.06',
                    'description' => ' CALUMA ',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:29',
                ),
            46 =>
                array(
                    'id' => 47,
                    'parent_id' => 2,
                    'code' => '07',
                    'full_code' => '02.07',
                    'description' => ' LAS NAVES',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:29',
                ),
            47 =>
                array(
                    'id' => 48,
                    'parent_id' => 3,
                    'code' => '01',
                    'full_code' => '03.01',
                    'description' => 'AZOGUES',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:29',
                ),
            48 =>
                array(
                    'id' => 49,
                    'parent_id' => 3,
                    'code' => '02',
                    'full_code' => '03.02',
                    'description' => ' BIBLIAN',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:29',
                ),
            49 =>
                array(
                    'id' => 50,
                    'parent_id' => 3,
                    'code' => '03',
                    'full_code' => '03.03',
                    'description' => 'CAÑAR',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:29',
                ),
            50 =>
                array(
                    'id' => 51,
                    'parent_id' => 3,
                    'code' => '04',
                    'full_code' => '03.04',
                    'description' => ' LA TRONCAL',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:29',
                ),
            51 =>
                array(
                    'id' => 52,
                    'parent_id' => 3,
                    'code' => '05',
                    'full_code' => '03.05',
                    'description' => 'EL TAMBO ',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:29',
                ),
            52 =>
                array(
                    'id' => 53,
                    'parent_id' => 3,
                    'code' => '06',
                    'full_code' => '03.06',
                    'description' => 'DELEG',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:29',
                ),
            53 =>
                array(
                    'id' => 54,
                    'parent_id' => 3,
                    'code' => '07',
                    'full_code' => '03.07',
                    'description' => 'SUSCAL',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:29',
                ),
            54 =>
                array(
                    'id' => 55,
                    'parent_id' => 4,
                    'code' => '01',
                    'full_code' => '04.01',
                    'description' => ' TULCAN',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:30',
                ),
            55 =>
                array(
                    'id' => 56,
                    'parent_id' => 4,
                    'code' => '02',
                    'full_code' => '04.02',
                    'description' => ' BOLIVAR',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:30',
                ),
            56 =>
                array(
                    'id' => 57,
                    'parent_id' => 4,
                    'code' => '03',
                    'full_code' => '04.03',
                    'description' => ' ESPEJO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:30',
                ),
            57 =>
                array(
                    'id' => 58,
                    'parent_id' => 4,
                    'code' => '04',
                    'full_code' => '04.04',
                    'description' => ' MIRA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:30',
                ),
            58 =>
                array(
                    'id' => 59,
                    'parent_id' => 4,
                    'code' => '05',
                    'full_code' => '04.05',
                    'description' => 'MONTUFAR',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:30',
                ),
            59 =>
                array(
                    'id' => 60,
                    'parent_id' => 4,
                    'code' => '06',
                    'full_code' => '04.06',
                    'description' => ' SAN PEDRO DE HUACA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:30',
                ),
            60 =>
                array(
                    'id' => 61,
                    'parent_id' => 5,
                    'code' => '01',
                    'full_code' => '05.01',
                    'description' => 'LATACUNGA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:30',
                ),
            61 =>
                array(
                    'id' => 62,
                    'parent_id' => 5,
                    'code' => '02',
                    'full_code' => '05.02',
                    'description' => 'LA MANA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:30',
                ),
            62 =>
                array(
                    'id' => 63,
                    'parent_id' => 5,
                    'code' => '03',
                    'full_code' => '05.03',
                    'description' => 'PANGUA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:30',
                ),
            63 =>
                array(
                    'id' => 64,
                    'parent_id' => 5,
                    'code' => '04',
                    'full_code' => '05.04',
                    'description' => ' PUJILI',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:30',
                ),
            64 =>
                array(
                    'id' => 65,
                    'parent_id' => 5,
                    'code' => '05',
                    'full_code' => '05.05',
                    'description' => ' SALCEDO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:30',
                ),
            65 =>
                array(
                    'id' => 66,
                    'parent_id' => 5,
                    'code' => '06',
                    'full_code' => '05.06',
                    'description' => 'SAQUISILI',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:30',
                ),
            66 =>
                array(
                    'id' => 67,
                    'parent_id' => 5,
                    'code' => '07',
                    'full_code' => '05.07',
                    'description' => 'SIGCHOS',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:30',
                ),
            67 =>
                array(
                    'id' => 68,
                    'parent_id' => 6,
                    'code' => '01',
                    'full_code' => '06.01',
                    'description' => 'RIOBAMBA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:31',
                ),
            68 =>
                array(
                    'id' => 69,
                    'parent_id' => 6,
                    'code' => '02',
                    'full_code' => '06.02',
                    'description' => 'ALAUSI',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:31',
                ),
            69 =>
                array(
                    'id' => 70,
                    'parent_id' => 6,
                    'code' => '03',
                    'full_code' => '06.03',
                    'description' => ' COLTA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:31',
                ),
            70 =>
                array(
                    'id' => 71,
                    'parent_id' => 6,
                    'code' => '04',
                    'full_code' => '06.04',
                    'description' => 'CHAMBO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:31',
                ),
            71 =>
                array(
                    'id' => 72,
                    'parent_id' => 6,
                    'code' => '05',
                    'full_code' => '06.05',
                    'description' => 'CHUNCHI',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:31',
                ),
            72 =>
                array(
                    'id' => 73,
                    'parent_id' => 6,
                    'code' => '06',
                    'full_code' => '06.06',
                    'description' => 'GUAMOTE',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:31',
                ),
            73 =>
                array(
                    'id' => 74,
                    'parent_id' => 6,
                    'code' => '07',
                    'full_code' => '06.07',
                    'description' => 'GUANO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:31',
                ),
            74 =>
                array(
                    'id' => 75,
                    'parent_id' => 6,
                    'code' => '08',
                    'full_code' => '06.08',
                    'description' => 'PALLATANGA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:31',
                ),
            75 =>
                array(
                    'id' => 76,
                    'parent_id' => 6,
                    'code' => '09',
                    'full_code' => '06.09',
                    'description' => ' PENIPE',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:31',
                ),
            76 =>
                array(
                    'id' => 77,
                    'parent_id' => 6,
                    'code' => '10',
                    'full_code' => '06.10',
                    'description' => 'CUMANDA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:31',
                ),
            77 =>
                array(
                    'id' => 78,
                    'parent_id' => 7,
                    'code' => '01',
                    'full_code' => '07.01',
                    'description' => 'MACHALA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:31',
                ),
            78 =>
                array(
                    'id' => 79,
                    'parent_id' => 7,
                    'code' => '02',
                    'full_code' => '07.02',
                    'description' => 'ARENILLAS',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:31',
                ),
            79 =>
                array(
                    'id' => 80,
                    'parent_id' => 7,
                    'code' => '03',
                    'full_code' => '07.03',
                    'description' => 'ATAHUALPA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:31',
                ),
            80 =>
                array(
                    'id' => 81,
                    'parent_id' => 7,
                    'code' => '04',
                    'full_code' => '07.04',
                    'description' => 'BALSAS',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:31',
                ),
            81 =>
                array(
                    'id' => 82,
                    'parent_id' => 7,
                    'code' => '05',
                    'full_code' => '07.05',
                    'description' => 'CHILLA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:32',
                ),
            82 =>
                array(
                    'id' => 83,
                    'parent_id' => 7,
                    'code' => '06',
                    'full_code' => '07.06',
                    'description' => 'EL GUABO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:32',
                ),
            83 =>
                array(
                    'id' => 84,
                    'parent_id' => 7,
                    'code' => '07',
                    'full_code' => '07.07',
                    'description' => 'HUAQUILLAS',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:32',
                ),
            84 =>
                array(
                    'id' => 85,
                    'parent_id' => 7,
                    'code' => '08',
                    'full_code' => '07.08',
                    'description' => 'MARCABELI',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:32',
                ),
            85 =>
                array(
                    'id' => 86,
                    'parent_id' => 7,
                    'code' => '09',
                    'full_code' => '07.09',
                    'description' => 'PASAJE',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:32',
                ),
            86 =>
                array(
                    'id' => 87,
                    'parent_id' => 7,
                    'code' => '10',
                    'full_code' => '07.10',
                    'description' => 'PIÑAS',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:32',
                ),
            87 =>
                array(
                    'id' => 88,
                    'parent_id' => 7,
                    'code' => '11',
                    'full_code' => '07.11',
                    'description' => 'PORTOVELO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:32',
                ),
            88 =>
                array(
                    'id' => 89,
                    'parent_id' => 7,
                    'code' => '12',
                    'full_code' => '07.12',
                    'description' => 'SANTA ROSA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:32',
                ),
            89 =>
                array(
                    'id' => 90,
                    'parent_id' => 7,
                    'code' => '13',
                    'full_code' => '07.13',
                    'description' => 'ZARUMA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:32',
                ),
            90 =>
                array(
                    'id' => 91,
                    'parent_id' => 7,
                    'code' => '14',
                    'full_code' => '07.14',
                    'description' => 'LAS LAJAS',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:32',
                ),
            91 =>
                array(
                    'id' => 92,
                    'parent_id' => 8,
                    'code' => '01',
                    'full_code' => '08.01',
                    'description' => ' ESMERALDAS',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:32',
                ),
            92 =>
                array(
                    'id' => 93,
                    'parent_id' => 8,
                    'code' => '02',
                    'full_code' => '08.02',
                    'description' => 'ELOY ALFARO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:32',
                ),
            93 =>
                array(
                    'id' => 94,
                    'parent_id' => 8,
                    'code' => '03',
                    'full_code' => '08.03',
                    'description' => 'MUISNE',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:32',
                ),
            94 =>
                array(
                    'id' => 95,
                    'parent_id' => 8,
                    'code' => '04',
                    'full_code' => '08.04',
                    'description' => 'QUININDE',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:32',
                ),
            95 =>
                array(
                    'id' => 96,
                    'parent_id' => 8,
                    'code' => '05',
                    'full_code' => '08.05',
                    'description' => 'SAN LORENZO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:33',
                ),
            96 =>
                array(
                    'id' => 97,
                    'parent_id' => 8,
                    'code' => '06',
                    'full_code' => '08.06',
                    'description' => 'ATACAMES',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:33',
                ),
            97 =>
                array(
                    'id' => 98,
                    'parent_id' => 8,
                    'code' => '07',
                    'full_code' => '08.07',
                    'description' => 'RIOVERDE',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:33',
                ),
            98 =>
                array(
                    'id' => 99,
                    'parent_id' => 8,
                    'code' => '08',
                    'full_code' => '08.08',
                    'description' => 'LA CONCORDIA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:33',
                ),
            99 =>
                array(
                    'id' => 100,
                    'parent_id' => 9,
                    'code' => '01',
                    'full_code' => '09.01',
                    'description' => ' GUAYAQUIL',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:33',
                ),
            100 =>
                array(
                    'id' => 101,
                    'parent_id' => 9,
                    'code' => '02',
                    'full_code' => '09.02',
                    'description' => 'ALFREDO BAQUERIZO MORENO (JUJAN)',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:33',
                ),
            101 =>
                array(
                    'id' => 102,
                    'parent_id' => 9,
                    'code' => '03',
                    'full_code' => '09.03',
                    'description' => 'BALAO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:33',
                ),
            102 =>
                array(
                    'id' => 103,
                    'parent_id' => 9,
                    'code' => '04',
                    'full_code' => '09.04',
                    'description' => 'BALZAR',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:33',
                ),
            103 =>
                array(
                    'id' => 104,
                    'parent_id' => 9,
                    'code' => '05',
                    'full_code' => '09.05',
                    'description' => 'COLIMES',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:33',
                ),
            104 =>
                array(
                    'id' => 105,
                    'parent_id' => 9,
                    'code' => '06',
                    'full_code' => '09.06',
                    'description' => 'DAULE',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:33',
                ),
            105 =>
                array(
                    'id' => 106,
                    'parent_id' => 9,
                    'code' => '07',
                    'full_code' => '09.07',
                    'description' => 'DURAN',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:33',
                ),
            106 =>
                array(
                    'id' => 107,
                    'parent_id' => 9,
                    'code' => '08',
                    'full_code' => '09.08',
                    'description' => ' EL EMPALME',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:33',
                ),
            107 =>
                array(
                    'id' => 108,
                    'parent_id' => 9,
                    'code' => '09',
                    'full_code' => '09.09',
                    'description' => 'EL TRIUNFO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:33',
                ),
            108 =>
                array(
                    'id' => 109,
                    'parent_id' => 9,
                    'code' => '10',
                    'full_code' => '09.10',
                    'description' => ' MILAGRO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:34',
                ),
            109 =>
                array(
                    'id' => 110,
                    'parent_id' => 9,
                    'code' => '11',
                    'full_code' => '09.11',
                    'description' => 'NARANJAL',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:34',
                ),
            110 =>
                array(
                    'id' => 111,
                    'parent_id' => 9,
                    'code' => '12',
                    'full_code' => '09.12',
                    'description' => 'NARANJITO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:34',
                ),
            111 =>
                array(
                    'id' => 112,
                    'parent_id' => 9,
                    'code' => '13',
                    'full_code' => '09.13',
                    'description' => 'PALESTINA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:34',
                ),
            112 =>
                array(
                    'id' => 113,
                    'parent_id' => 9,
                    'code' => '14',
                    'full_code' => '09.14',
                    'description' => 'PEDRO CARBO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:34',
                ),
            113 =>
                array(
                    'id' => 114,
                    'parent_id' => 9,
                    'code' => '16',
                    'full_code' => '09.16',
                    'description' => 'SAMBORONDON',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:34',
                ),
            114 =>
                array(
                    'id' => 115,
                    'parent_id' => 9,
                    'code' => '18',
                    'full_code' => '09.18',
                    'description' => ' SANTA LUCIA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:34',
                ),
            115 =>
                array(
                    'id' => 116,
                    'parent_id' => 9,
                    'code' => '19',
                    'full_code' => '09.19',
                    'description' => 'SALITRE (URBINA JADO)',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:34',
                ),
            116 =>
                array(
                    'id' => 117,
                    'parent_id' => 9,
                    'code' => '20',
                    'full_code' => '09.20',
                    'description' => 'SAN JACINTO DE YAGUACHI',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:34',
                ),
            117 =>
                array(
                    'id' => 118,
                    'parent_id' => 9,
                    'code' => '21',
                    'full_code' => '09.21',
                    'description' => ' PLAYAS',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:34',
                ),
            118 =>
                array(
                    'id' => 119,
                    'parent_id' => 9,
                    'code' => '22',
                    'full_code' => '09.22',
                    'description' => 'SIMON BOLIVAR',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:34',
                ),
            119 =>
                array(
                    'id' => 120,
                    'parent_id' => 9,
                    'code' => '23',
                    'full_code' => '09.23',
                    'description' => 'CORONEL MARCELINO MARIDUEÑA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:34',
                ),
            120 =>
                array(
                    'id' => 121,
                    'parent_id' => 9,
                    'code' => '24',
                    'full_code' => '09.24',
                    'description' => 'LOMAS DE SARGENTILLO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:35',
                ),
            121 =>
                array(
                    'id' => 122,
                    'parent_id' => 9,
                    'code' => '25',
                    'full_code' => '09.25',
                    'description' => 'NOBOL',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:35',
                ),
            122 =>
                array(
                    'id' => 123,
                    'parent_id' => 9,
                    'code' => '27',
                    'full_code' => '09.27',
                    'description' => 'GENERAL ANTONIO ELIZALDE ',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:35',
                ),
            123 =>
                array(
                    'id' => 124,
                    'parent_id' => 9,
                    'code' => '28',
                    'full_code' => '09.28',
                    'description' => 'ISIDRO AYORA ',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:35',
                ),
            124 =>
                array(
                    'id' => 125,
                    'parent_id' => 10,
                    'code' => '01',
                    'full_code' => '10.01',
                    'description' => ' IBARRA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:35',
                ),
            125 =>
                array(
                    'id' => 126,
                    'parent_id' => 10,
                    'code' => '02',
                    'full_code' => '10.02',
                    'description' => 'ANTONIO ANTE',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:35',
                ),
            126 =>
                array(
                    'id' => 127,
                    'parent_id' => 10,
                    'code' => '03',
                    'full_code' => '10.03',
                    'description' => 'COTACACHI',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:35',
                ),
            127 =>
                array(
                    'id' => 128,
                    'parent_id' => 10,
                    'code' => '04',
                    'full_code' => '10.04',
                    'description' => 'OTAVALO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:35',
                ),
            128 =>
                array(
                    'id' => 129,
                    'parent_id' => 10,
                    'code' => '05',
                    'full_code' => '10.05',
                    'description' => 'PIMAMPIRO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:35',
                ),
            129 =>
                array(
                    'id' => 130,
                    'parent_id' => 10,
                    'code' => '06',
                    'full_code' => '10.06',
                    'description' => 'SAN MIGUEL DE URCUQUI',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:35',
                ),
            130 =>
                array(
                    'id' => 131,
                    'parent_id' => 11,
                    'code' => '01',
                    'full_code' => '11.01',
                    'description' => ' LOJA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:35',
                ),
            131 =>
                array(
                    'id' => 132,
                    'parent_id' => 11,
                    'code' => '02',
                    'full_code' => '11.02',
                    'description' => 'CALVAS',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:35',
                ),
            132 =>
                array(
                    'id' => 133,
                    'parent_id' => 11,
                    'code' => '03',
                    'full_code' => '11.03',
                    'description' => 'CATAMAYO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:35',
                ),
            133 =>
                array(
                    'id' => 134,
                    'parent_id' => 11,
                    'code' => '04',
                    'full_code' => '11.04',
                    'description' => 'CELICA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:35',
                ),
            134 =>
                array(
                    'id' => 135,
                    'parent_id' => 11,
                    'code' => '05',
                    'full_code' => '11.05',
                    'description' => 'CHAGUARPAMBA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:36',
                ),
            135 =>
                array(
                    'id' => 136,
                    'parent_id' => 11,
                    'code' => '06',
                    'full_code' => '11.06',
                    'description' => ' ESPINDOLA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:36',
                ),
            136 =>
                array(
                    'id' => 137,
                    'parent_id' => 11,
                    'code' => '07',
                    'full_code' => '11.07',
                    'description' => ' GONZANAMA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:36',
                ),
            137 =>
                array(
                    'id' => 138,
                    'parent_id' => 11,
                    'code' => '08',
                    'full_code' => '11.08',
                    'description' => 'MACARA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:36',
                ),
            138 =>
                array(
                    'id' => 139,
                    'parent_id' => 11,
                    'code' => '09',
                    'full_code' => '11.09',
                    'description' => 'PALTAS',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:36',
                ),
            139 =>
                array(
                    'id' => 140,
                    'parent_id' => 11,
                    'code' => '10',
                    'full_code' => '11.10',
                    'description' => ' PUYANGO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:36',
                ),
            140 =>
                array(
                    'id' => 141,
                    'parent_id' => 11,
                    'code' => '11',
                    'full_code' => '11.11',
                    'description' => 'SARAGURO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:36',
                ),
            141 =>
                array(
                    'id' => 142,
                    'parent_id' => 11,
                    'code' => '12',
                    'full_code' => '11.12',
                    'description' => 'SOZORANGA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:36',
                ),
            142 =>
                array(
                    'id' => 143,
                    'parent_id' => 11,
                    'code' => '13',
                    'full_code' => '11.13',
                    'description' => 'ZAPOTILLO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:36',
                ),
            143 =>
                array(
                    'id' => 144,
                    'parent_id' => 11,
                    'code' => '14',
                    'full_code' => '11.14',
                    'description' => ' PINDAL',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:36',
                ),
            144 =>
                array(
                    'id' => 145,
                    'parent_id' => 11,
                    'code' => '15',
                    'full_code' => '11.15',
                    'description' => 'QUILANGA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:36',
                ),
            145 =>
                array(
                    'id' => 146,
                    'parent_id' => 11,
                    'code' => '16',
                    'full_code' => '11.16',
                    'description' => 'OLMEDO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:36',
                ),
            146 =>
                array(
                    'id' => 147,
                    'parent_id' => 12,
                    'code' => '01',
                    'full_code' => '12.01',
                    'description' => 'BABAHOYO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:36',
                ),
            147 =>
                array(
                    'id' => 148,
                    'parent_id' => 12,
                    'code' => '02',
                    'full_code' => '12.02',
                    'description' => 'BABA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:37',
                ),
            148 =>
                array(
                    'id' => 149,
                    'parent_id' => 12,
                    'code' => '03',
                    'full_code' => '12.03',
                    'description' => ' MONTALVO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:37',
                ),
            149 =>
                array(
                    'id' => 150,
                    'parent_id' => 12,
                    'code' => '04',
                    'full_code' => '12.04',
                    'description' => 'PUEBLOVIEJO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:37',
                ),
            150 =>
                array(
                    'id' => 151,
                    'parent_id' => 12,
                    'code' => '05',
                    'full_code' => '12.05',
                    'description' => 'QUEVEDO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:37',
                ),
            151 =>
                array(
                    'id' => 152,
                    'parent_id' => 12,
                    'code' => '06',
                    'full_code' => '12.06',
                    'description' => 'URDANETA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:37',
                ),
            152 =>
                array(
                    'id' => 153,
                    'parent_id' => 12,
                    'code' => '07',
                    'full_code' => '12.07',
                    'description' => 'VENTANAS',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:37',
                ),
            153 =>
                array(
                    'id' => 154,
                    'parent_id' => 12,
                    'code' => '08',
                    'full_code' => '12.08',
                    'description' => 'VINCES',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:37',
                ),
            154 =>
                array(
                    'id' => 155,
                    'parent_id' => 12,
                    'code' => '09',
                    'full_code' => '12.09',
                    'description' => 'PALENQUE',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:37',
                ),
            155 =>
                array(
                    'id' => 156,
                    'parent_id' => 12,
                    'code' => '10',
                    'full_code' => '12.10',
                    'description' => 'BUENA FE',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:37',
                ),
            156 =>
                array(
                    'id' => 157,
                    'parent_id' => 12,
                    'code' => '11',
                    'full_code' => '12.11',
                    'description' => 'VALENCIA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:37',
                ),
            157 =>
                array(
                    'id' => 158,
                    'parent_id' => 12,
                    'code' => '12',
                    'full_code' => '12.12',
                    'description' => ' MOCACHE',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:37',
                ),
            158 =>
                array(
                    'id' => 159,
                    'parent_id' => 12,
                    'code' => '13',
                    'full_code' => '12.13',
                    'description' => 'QUINSALOMA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:37',
                ),
            159 =>
                array(
                    'id' => 160,
                    'parent_id' => 13,
                    'code' => '01',
                    'full_code' => '13.01',
                    'description' => 'PORTOVIEJO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:37',
                ),
            160 =>
                array(
                    'id' => 161,
                    'parent_id' => 13,
                    'code' => '02',
                    'full_code' => '13.02',
                    'description' => 'BOLIVAR',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:38',
                ),
            161 =>
                array(
                    'id' => 162,
                    'parent_id' => 13,
                    'code' => '03',
                    'full_code' => '13.03',
                    'description' => 'CHONE',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:38',
                ),
            162 =>
                array(
                    'id' => 163,
                    'parent_id' => 13,
                    'code' => '04',
                    'full_code' => '13.04',
                    'description' => 'EL CARMEN',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:38',
                ),
            163 =>
                array(
                    'id' => 164,
                    'parent_id' => 13,
                    'code' => '05',
                    'full_code' => '13.05',
                    'description' => ' FLAVIO ALFARO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:38',
                ),
            164 =>
                array(
                    'id' => 165,
                    'parent_id' => 13,
                    'code' => '06',
                    'full_code' => '13.06',
                    'description' => ' JIPIJAPA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:38',
                ),
            165 =>
                array(
                    'id' => 166,
                    'parent_id' => 13,
                    'code' => '07',
                    'full_code' => '13.07',
                    'description' => 'JUNIN',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:38',
                ),
            166 =>
                array(
                    'id' => 167,
                    'parent_id' => 13,
                    'code' => '08',
                    'full_code' => '13.08',
                    'description' => ' MANTA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:38',
                ),
            167 =>
                array(
                    'id' => 168,
                    'parent_id' => 13,
                    'code' => '09',
                    'full_code' => '13.09',
                    'description' => ' MONTECRISTI   ',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:38',
                ),
            168 =>
                array(
                    'id' => 169,
                    'parent_id' => 13,
                    'code' => '10',
                    'full_code' => '13.10',
                    'description' => 'PAJAN',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:38',
                ),
            169 =>
                array(
                    'id' => 170,
                    'parent_id' => 13,
                    'code' => '11',
                    'full_code' => '13.11',
                    'description' => ' PICHINCHA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:38',
                ),
            170 =>
                array(
                    'id' => 171,
                    'parent_id' => 13,
                    'code' => '12',
                    'full_code' => '13.12',
                    'description' => 'ROCAFUERTE',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:38',
                ),
            171 =>
                array(
                    'id' => 172,
                    'parent_id' => 13,
                    'code' => '13',
                    'full_code' => '13.13',
                    'description' => 'SANTA ANA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:38',
                ),
            172 =>
                array(
                    'id' => 173,
                    'parent_id' => 13,
                    'code' => '14',
                    'full_code' => '13.14',
                    'description' => ' SUCRE',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:38',
                ),
            173 =>
                array(
                    'id' => 174,
                    'parent_id' => 13,
                    'code' => '15',
                    'full_code' => '13.15',
                    'description' => ' TOSAGUA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:38',
                ),
            174 =>
                array(
                    'id' => 175,
                    'parent_id' => 13,
                    'code' => '16',
                    'full_code' => '13.16',
                    'description' => '24 DE MAYO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:39',
                ),
            175 =>
                array(
                    'id' => 176,
                    'parent_id' => 13,
                    'code' => '17',
                    'full_code' => '13.17',
                    'description' => ' PEDERNALES',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:39',
                ),
            176 =>
                array(
                    'id' => 177,
                    'parent_id' => 13,
                    'code' => '18',
                    'full_code' => '13.18',
                    'description' => 'OLMEDO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:39',
                ),
            177 =>
                array(
                    'id' => 178,
                    'parent_id' => 13,
                    'code' => '19',
                    'full_code' => '13.19',
                    'description' => 'PUERTO LOPEZ',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:39',
                ),
            178 =>
                array(
                    'id' => 179,
                    'parent_id' => 13,
                    'code' => '20',
                    'full_code' => '13.20',
                    'description' => ' JAMA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:39',
                ),
            179 =>
                array(
                    'id' => 180,
                    'parent_id' => 13,
                    'code' => '21',
                    'full_code' => '13.21',
                    'description' => ' JARAMIJO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:39',
                ),
            180 =>
                array(
                    'id' => 181,
                    'parent_id' => 13,
                    'code' => '22',
                    'full_code' => '13.22',
                    'description' => 'SAN VICENTE',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:39',
                ),
            181 =>
                array(
                    'id' => 182,
                    'parent_id' => 14,
                    'code' => '01',
                    'full_code' => '14.01',
                    'description' => 'MORONA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:39',
                ),
            182 =>
                array(
                    'id' => 183,
                    'parent_id' => 14,
                    'code' => '02',
                    'full_code' => '14.02',
                    'description' => ' GUALAQUIZA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:39',
                ),
            183 =>
                array(
                    'id' => 184,
                    'parent_id' => 14,
                    'code' => '03',
                    'full_code' => '14.03',
                    'description' => 'LIMON INDANZA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:39',
                ),
            184 =>
                array(
                    'id' => 185,
                    'parent_id' => 14,
                    'code' => '04',
                    'full_code' => '14.04',
                    'description' => 'PALORA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:39',
                ),
            185 =>
                array(
                    'id' => 186,
                    'parent_id' => 14,
                    'code' => '05',
                    'full_code' => '14.05',
                    'description' => 'SANTIAGO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:39',
                ),
            186 =>
                array(
                    'id' => 187,
                    'parent_id' => 14,
                    'code' => '06',
                    'full_code' => '14.06',
                    'description' => 'SUCUA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:39',
                ),
            187 =>
                array(
                    'id' => 188,
                    'parent_id' => 14,
                    'code' => '07',
                    'full_code' => '14.07',
                    'description' => ' HUAMBOYA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:40',
                ),
            188 =>
                array(
                    'id' => 189,
                    'parent_id' => 14,
                    'code' => '08',
                    'full_code' => '14.08',
                    'description' => 'SAN JUAN BOSCO ',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:40',
                ),
            189 =>
                array(
                    'id' => 190,
                    'parent_id' => 14,
                    'code' => '09',
                    'full_code' => '14.09',
                    'description' => 'TAISHA ',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:40',
                ),
            190 =>
                array(
                    'id' => 191,
                    'parent_id' => 14,
                    'code' => '10',
                    'full_code' => '14.10',
                    'description' => 'LOGROÑO ',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:40',
                ),
            191 =>
                array(
                    'id' => 192,
                    'parent_id' => 14,
                    'code' => '11',
                    'full_code' => '14.11',
                    'description' => 'PABLO SEXTO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:40',
                ),
            192 =>
                array(
                    'id' => 193,
                    'parent_id' => 14,
                    'code' => '12',
                    'full_code' => '14.12',
                    'description' => 'CANTON TIWINTZA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:40',
                ),
            193 =>
                array(
                    'id' => 194,
                    'parent_id' => 15,
                    'code' => '01',
                    'full_code' => '15.01',
                    'description' => 'TENA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:40',
                ),
            194 =>
                array(
                    'id' => 195,
                    'parent_id' => 15,
                    'code' => '03',
                    'full_code' => '15.03',
                    'description' => 'ARCHIDONA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:40',
                ),
            195 =>
                array(
                    'id' => 196,
                    'parent_id' => 15,
                    'code' => '04',
                    'full_code' => '15.04',
                    'description' => 'EL CHACO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:40',
                ),
            196 =>
                array(
                    'id' => 197,
                    'parent_id' => 15,
                    'code' => '07',
                    'full_code' => '15.07',
                    'description' => 'QUIJOS',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:40',
                ),
            197 =>
                array(
                    'id' => 198,
                    'parent_id' => 15,
                    'code' => '09',
                    'full_code' => '15.09',
                    'description' => ' CARLOS JULIO AROSEMENA TOLA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:40',
                ),
            198 =>
                array(
                    'id' => 199,
                    'parent_id' => 16,
                    'code' => '01',
                    'full_code' => '16.01',
                    'description' => 'PASTAZA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:40',
                ),
            199 =>
                array(
                    'id' => 200,
                    'parent_id' => 16,
                    'code' => '02',
                    'full_code' => '16.02',
                    'description' => 'MERA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:40',
                ),
            200 =>
                array(
                    'id' => 201,
                    'parent_id' => 16,
                    'code' => '03',
                    'full_code' => '16.03',
                    'description' => ' SANTA CLARA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:40',
                ),
            201 =>
                array(
                    'id' => 202,
                    'parent_id' => 16,
                    'code' => '04',
                    'full_code' => '16.04',
                    'description' => ' ARAJUNO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:41',
                ),
            202 =>
                array(
                    'id' => 203,
                    'parent_id' => 17,
                    'code' => '01',
                    'full_code' => '17.01',
                    'description' => 'QUITO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:41',
                ),
            203 =>
                array(
                    'id' => 204,
                    'parent_id' => 17,
                    'code' => '02',
                    'full_code' => '17.02',
                    'description' => 'CAYAMBE',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:41',
                ),
            204 =>
                array(
                    'id' => 205,
                    'parent_id' => 17,
                    'code' => '03',
                    'full_code' => '17.03',
                    'description' => ' MEJIA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:41',
                ),
            205 =>
                array(
                    'id' => 206,
                    'parent_id' => 17,
                    'code' => '04',
                    'full_code' => '17.04',
                    'description' => ' PEDRO MONCAYO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:41',
                ),
            206 =>
                array(
                    'id' => 207,
                    'parent_id' => 17,
                    'code' => '05',
                    'full_code' => '17.05',
                    'description' => 'RUMIÑAHUI',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:41',
                ),
            207 =>
                array(
                    'id' => 208,
                    'parent_id' => 17,
                    'code' => '07',
                    'full_code' => '17.07',
                    'description' => ' SAN MIGUEL DE LOS BANCOS',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:41',
                ),
            208 =>
                array(
                    'id' => 209,
                    'parent_id' => 17,
                    'code' => '08',
                    'full_code' => '17.08',
                    'description' => ' PEDRO VICENTE MALDONADO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:41',
                ),
            209 =>
                array(
                    'id' => 210,
                    'parent_id' => 17,
                    'code' => '09',
                    'full_code' => '17.09',
                    'description' => 'PUERTO QUITO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:41',
                ),
            210 =>
                array(
                    'id' => 211,
                    'parent_id' => 18,
                    'code' => '01',
                    'full_code' => '18.01',
                    'description' => 'AMBATO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:41',
                ),
            211 =>
                array(
                    'id' => 212,
                    'parent_id' => 18,
                    'code' => '02',
                    'full_code' => '18.02',
                    'description' => 'BAÑOS DE AGUA SANTA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:41',
                ),
            212 =>
                array(
                    'id' => 213,
                    'parent_id' => 18,
                    'code' => '03',
                    'full_code' => '18.03',
                    'description' => ' CEVALLOS',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:41',
                ),
            213 =>
                array(
                    'id' => 214,
                    'parent_id' => 18,
                    'code' => '04',
                    'full_code' => '18.04',
                    'description' => ' MOCHA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:41',
                ),
            214 =>
                array(
                    'id' => 215,
                    'parent_id' => 18,
                    'code' => '05',
                    'full_code' => '18.05',
                    'description' => ' PATATE',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:41',
                ),
            215 =>
                array(
                    'id' => 216,
                    'parent_id' => 18,
                    'code' => '06',
                    'full_code' => '18.06',
                    'description' => ' QUERO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:42',
                ),
            216 =>
                array(
                    'id' => 217,
                    'parent_id' => 18,
                    'code' => '07',
                    'full_code' => '18.07',
                    'description' => 'SAN PEDRO DE PELILEO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:42',
                ),
            217 =>
                array(
                    'id' => 218,
                    'parent_id' => 18,
                    'code' => '08',
                    'full_code' => '18.08',
                    'description' => 'SANTIAGO DE PILLARO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:42',
                ),
            218 =>
                array(
                    'id' => 219,
                    'parent_id' => 18,
                    'code' => '09',
                    'full_code' => '18.09',
                    'description' => 'TISALEO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:42',
                ),
            219 =>
                array(
                    'id' => 220,
                    'parent_id' => 19,
                    'code' => '01',
                    'full_code' => '19.01',
                    'description' => 'ZAMORA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:42',
                ),
            220 =>
                array(
                    'id' => 221,
                    'parent_id' => 19,
                    'code' => '02',
                    'full_code' => '19.02',
                    'description' => ' CHINCHIPE',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:42',
                ),
            221 =>
                array(
                    'id' => 222,
                    'parent_id' => 19,
                    'code' => '03',
                    'full_code' => '19.03',
                    'description' => ' NANGARITZA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:42',
                ),
            222 =>
                array(
                    'id' => 223,
                    'parent_id' => 19,
                    'code' => '04',
                    'full_code' => '19.04',
                    'description' => ' YACUAMBI',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:42',
                ),
            223 =>
                array(
                    'id' => 224,
                    'parent_id' => 19,
                    'code' => '05',
                    'full_code' => '19.05',
                    'description' => ' YANTZAZA (YANZATZA)',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:42',
                ),
            224 =>
                array(
                    'id' => 225,
                    'parent_id' => 19,
                    'code' => '06',
                    'full_code' => '19.06',
                    'description' => ' EL PANGUI',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:42',
                ),
            225 =>
                array(
                    'id' => 226,
                    'parent_id' => 19,
                    'code' => '07',
                    'full_code' => '19.07',
                    'description' => ' CENTINELA DEL CONDOR',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:42',
                ),
            226 =>
                array(
                    'id' => 227,
                    'parent_id' => 19,
                    'code' => '08',
                    'full_code' => '19.08',
                    'description' => 'PALANDA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:42',
                ),
            227 =>
                array(
                    'id' => 228,
                    'parent_id' => 19,
                    'code' => '09',
                    'full_code' => '19.09',
                    'description' => 'PAQUISHA ',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:42',
                ),
            228 =>
                array(
                    'id' => 229,
                    'parent_id' => 20,
                    'code' => '01',
                    'full_code' => '20.01',
                    'description' => ' SAN CRISTOBAL',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:43',
                ),
            229 =>
                array(
                    'id' => 230,
                    'parent_id' => 20,
                    'code' => '02',
                    'full_code' => '20.02',
                    'description' => ' ISABELA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:43',
                ),
            230 =>
                array(
                    'id' => 231,
                    'parent_id' => 20,
                    'code' => '03',
                    'full_code' => '20.03',
                    'description' => ' SANTA CRUZ',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:43',
                ),
            231 =>
                array(
                    'id' => 232,
                    'parent_id' => 21,
                    'code' => '01',
                    'full_code' => '21.01',
                    'description' => ' LAGO AGRIO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:43',
                ),
            232 =>
                array(
                    'id' => 233,
                    'parent_id' => 21,
                    'code' => '02',
                    'full_code' => '21.02',
                    'description' => ' GONZALO PIZARRO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:43',
                ),
            233 =>
                array(
                    'id' => 234,
                    'parent_id' => 21,
                    'code' => '03',
                    'full_code' => '21.03',
                    'description' => ' PUTUMAYO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:43',
                ),
            234 =>
                array(
                    'id' => 235,
                    'parent_id' => 21,
                    'code' => '04',
                    'full_code' => '21.04',
                    'description' => 'SHUSHUFINDI',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:43',
                ),
            235 =>
                array(
                    'id' => 236,
                    'parent_id' => 21,
                    'code' => '05',
                    'full_code' => '21.05',
                    'description' => ' SUCUMBIOS',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:43',
                ),
            236 =>
                array(
                    'id' => 237,
                    'parent_id' => 21,
                    'code' => '06',
                    'full_code' => '21.06',
                    'description' => 'CASCALES',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:43',
                ),
            237 =>
                array(
                    'id' => 238,
                    'parent_id' => 21,
                    'code' => '07',
                    'full_code' => '21.07',
                    'description' => 'CUYABENO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:43',
                ),
            238 =>
                array(
                    'id' => 239,
                    'parent_id' => 22,
                    'code' => '01',
                    'full_code' => '22.01',
                    'description' => 'ORELLANA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:43',
                ),
            239 =>
                array(
                    'id' => 240,
                    'parent_id' => 22,
                    'code' => '02',
                    'full_code' => '22.02',
                    'description' => 'AGUARICO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:43',
                ),
            240 =>
                array(
                    'id' => 241,
                    'parent_id' => 22,
                    'code' => '03',
                    'full_code' => '22.03',
                    'description' => ' LA JOYA DE LOS SACHAS',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:43',
                ),
            241 =>
                array(
                    'id' => 242,
                    'parent_id' => 22,
                    'code' => '04',
                    'full_code' => '22.04',
                    'description' => ' LORETO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:43',
                ),
            242 =>
                array(
                    'id' => 243,
                    'parent_id' => 23,
                    'code' => '01',
                    'full_code' => '23.01',
                    'description' => 'SANTO DOMINGO',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:44',
                ),
            243 =>
                array(
                    'id' => 244,
                    'parent_id' => 24,
                    'code' => '01',
                    'full_code' => '24.01',
                    'description' => ' SANTA ELENA',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:44',
                ),
            244 =>
                array(
                    'id' => 245,
                    'parent_id' => 24,
                    'code' => '02',
                    'full_code' => '24.02',
                    'description' => ' LA LIBERTAD',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:44',
                ),
            245 =>
                array(
                    'id' => 246,
                    'parent_id' => 24,
                    'code' => '03',
                    'full_code' => '24.03',
                    'description' => 'SALINAS',
                    'type' => 'CANTON',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 20:59:44',
                ),
            246 =>
                array(
                    'id' => 247,
                    'parent_id' => 26,
                    'code' => '50',
                    'full_code' => '01.01.50',
                    'description' => 'CUENCA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:49',
                ),
            247 =>
                array(
                    'id' => 248,
                    'parent_id' => 26,
                    'code' => '51',
                    'full_code' => '01.01.51',
                    'description' => 'BAÑOS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:48',
                ),
            248 =>
                array(
                    'id' => 249,
                    'parent_id' => 26,
                    'code' => '52',
                    'full_code' => '01.01.52',
                    'description' => 'CUMBE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:48',
                ),
            249 =>
                array(
                    'id' => 250,
                    'parent_id' => 26,
                    'code' => '53',
                    'full_code' => '01.01.53',
                    'description' => 'CHAUCHA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:48',
                ),
            250 =>
                array(
                    'id' => 251,
                    'parent_id' => 26,
                    'code' => '54',
                    'full_code' => '01.01.54',
                    'description' => 'CHECA (JIDCAY) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:49',
                ),
            251 =>
                array(
                    'id' => 252,
                    'parent_id' => 26,
                    'code' => '55',
                    'full_code' => '01.01.55',
                    'description' => 'CHIQUINTAD',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:48',
                ),
            252 =>
                array(
                    'id' => 253,
                    'parent_id' => 26,
                    'code' => '56',
                    'full_code' => '01.01.56',
                    'description' => 'LLACAO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:48',
                ),
            253 =>
                array(
                    'id' => 254,
                    'parent_id' => 26,
                    'code' => '57',
                    'full_code' => '01.01.57',
                    'description' => 'MOLLETURO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:48',
                ),
            254 =>
                array(
                    'id' => 255,
                    'parent_id' => 26,
                    'code' => '58',
                    'full_code' => '01.01.58',
                    'description' => 'NULTI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:49',
                ),
            255 =>
                array(
                    'id' => 256,
                    'parent_id' => 26,
                    'code' => '59',
                    'full_code' => '01.01.59',
                    'description' => 'OCTAVIO CORDERO PALACIOS (SANTA ROSA) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:49',
                ),
            256 =>
                array(
                    'id' => 257,
                    'parent_id' => 26,
                    'code' => '60',
                    'full_code' => '01.01.60',
                    'description' => 'PACCHA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:49',
                ),
            257 =>
                array(
                    'id' => 258,
                    'parent_id' => 26,
                    'code' => '61',
                    'full_code' => '01.01.61',
                    'description' => 'QUINGEO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:49',
                ),
            258 =>
                array(
                    'id' => 259,
                    'parent_id' => 26,
                    'code' => '62',
                    'full_code' => '01.01.62',
                    'description' => 'RICAURTE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:49',
                ),
            259 =>
                array(
                    'id' => 260,
                    'parent_id' => 26,
                    'code' => '63',
                    'full_code' => '01.01.63',
                    'description' => 'SAN JOAQUIN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:49',
                ),
            260 =>
                array(
                    'id' => 261,
                    'parent_id' => 26,
                    'code' => '64',
                    'full_code' => '01.01.64',
                    'description' => 'SANTA ANA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:49',
                ),
            261 =>
                array(
                    'id' => 262,
                    'parent_id' => 26,
                    'code' => '65',
                    'full_code' => '01.01.65',
                    'description' => 'SAYAUSI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:49',
                ),
            262 =>
                array(
                    'id' => 263,
                    'parent_id' => 26,
                    'code' => '66',
                    'full_code' => '01.01.66',
                    'description' => 'SIDCAY',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:49',
                ),
            263 =>
                array(
                    'id' => 264,
                    'parent_id' => 26,
                    'code' => '67',
                    'full_code' => '01.01.67',
                    'description' => 'SININCAY',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:49',
                ),
            264 =>
                array(
                    'id' => 265,
                    'parent_id' => 26,
                    'code' => '68',
                    'full_code' => '01.01.68',
                    'description' => 'TARQUI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:49',
                ),
            265 =>
                array(
                    'id' => 266,
                    'parent_id' => 26,
                    'code' => '69',
                    'full_code' => '01.01.69',
                    'description' => 'TURI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:49',
                ),
            266 =>
                array(
                    'id' => 267,
                    'parent_id' => 26,
                    'code' => '70',
                    'full_code' => '01.01.70',
                    'description' => 'VALLE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:49',
                ),
            267 =>
                array(
                    'id' => 268,
                    'parent_id' => 26,
                    'code' => '71',
                    'full_code' => '01.01.71',
                    'description' => 'VICTORIA DEL PORTETE (IRQUIS)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:49',
                ),
            268 =>
                array(
                    'id' => 269,
                    'parent_id' => 27,
                    'code' => '50',
                    'full_code' => '01.02.50',
                    'description' => 'GIRON',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:49',
                ),
            269 =>
                array(
                    'id' => 270,
                    'parent_id' => 27,
                    'code' => '51',
                    'full_code' => '01.02.51',
                    'description' => 'ASUNCION',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:49',
                ),
            270 =>
                array(
                    'id' => 271,
                    'parent_id' => 27,
                    'code' => '52',
                    'full_code' => '01.02.52',
                    'description' => 'SAN GERARDO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:49',
                ),
            271 =>
                array(
                    'id' => 272,
                    'parent_id' => 28,
                    'code' => '50',
                    'full_code' => '01.03.50',
                    'description' => 'GUALACEO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:49',
                ),
            272 =>
                array(
                    'id' => 273,
                    'parent_id' => 28,
                    'code' => '52',
                    'full_code' => '01.03.52',
                    'description' => 'DANIEL CORDOVA TORAL (EL ORIENTE) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:49',
                ),
            273 =>
                array(
                    'id' => 274,
                    'parent_id' => 28,
                    'code' => '53',
                    'full_code' => '01.03.53',
                    'description' => 'JADAN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:49',
                ),
            274 =>
                array(
                    'id' => 275,
                    'parent_id' => 28,
                    'code' => '54',
                    'full_code' => '01.03.54',
                    'description' => 'MARIANO MORENO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:49',
                ),
            275 =>
                array(
                    'id' => 276,
                    'parent_id' => 28,
                    'code' => '56',
                    'full_code' => '01.03.56',
                    'description' => 'REMIGIO CRESPO TORAL (GULAG)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:49',
                ),
            276 =>
                array(
                    'id' => 277,
                    'parent_id' => 28,
                    'code' => '57',
                    'full_code' => '01.03.57',
                    'description' => 'SAN JUAN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:49',
                ),
            277 =>
                array(
                    'id' => 278,
                    'parent_id' => 28,
                    'code' => '58',
                    'full_code' => '01.03.58',
                    'description' => 'ZHIDMAD',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:50',
                ),
            278 =>
                array(
                    'id' => 279,
                    'parent_id' => 28,
                    'code' => '59',
                    'full_code' => '01.03.59',
                    'description' => 'LUIS CORDERO VEGA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:50',
                ),
            279 =>
                array(
                    'id' => 280,
                    'parent_id' => 28,
                    'code' => '60',
                    'full_code' => '01.03.60',
                    'description' => 'SIMONBOLIVAR (CAB. EN GAÑANZOL)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:50',
                ),
            280 =>
                array(
                    'id' => 281,
                    'parent_id' => 29,
                    'code' => '50',
                    'full_code' => '01.04.50',
                    'description' => ' NABON',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:50',
                ),
            281 =>
                array(
                    'id' => 282,
                    'parent_id' => 29,
                    'code' => '51',
                    'full_code' => '01.04.51',
                    'description' => 'COCHAPATA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:50',
                ),
            282 =>
                array(
                    'id' => 283,
                    'parent_id' => 29,
                    'code' => '52',
                    'full_code' => '01.04.52',
                    'description' => 'EL PROGRESO (CAB.EN ZHOTA) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:50',
                ),
            283 =>
                array(
                    'id' => 284,
                    'parent_id' => 29,
                    'code' => '53',
                    'full_code' => '01.04.53',
                    'description' => 'LAS NIEVES (CHAYA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:50',
                ),
            284 =>
                array(
                    'id' => 285,
                    'parent_id' => 30,
                    'code' => '50',
                    'full_code' => '01.05.50',
                    'description' => 'PAUTE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:50',
                ),
            285 =>
                array(
                    'id' => 286,
                    'parent_id' => 30,
                    'code' => '52',
                    'full_code' => '01.05.52',
                    'description' => 'BULAN (JOSE VICTOR IZQUIERDO) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:50',
                ),
            286 =>
                array(
                    'id' => 287,
                    'parent_id' => 30,
                    'code' => '53',
                    'full_code' => '01.05.53',
                    'description' => 'CHICAN (GUILLERMO ORTEGA) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:50',
                ),
            287 =>
                array(
                    'id' => 288,
                    'parent_id' => 30,
                    'code' => '54',
                    'full_code' => '01.05.54',
                    'description' => 'EL CABO  ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:50',
                ),
            288 =>
                array(
                    'id' => 289,
                    'parent_id' => 30,
                    'code' => '56',
                    'full_code' => '01.05.56',
                    'description' => 'GUARAINAG',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:50',
                ),
            289 =>
                array(
                    'id' => 290,
                    'parent_id' => 30,
                    'code' => '59',
                    'full_code' => '01.05.59',
                    'description' => 'SAN CRISTOBAL (CARLOS ORDOÑEZ LAZO) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:50',
                ),
            290 =>
                array(
                    'id' => 291,
                    'parent_id' => 30,
                    'code' => '61',
                    'full_code' => '01.05.61',
                    'description' => 'TOMEBAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:50',
                ),
            291 =>
                array(
                    'id' => 292,
                    'parent_id' => 30,
                    'code' => '62',
                    'full_code' => '01.05.62',
                    'description' => 'DUG DUG',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:50',
                ),
            292 =>
                array(
                    'id' => 293,
                    'parent_id' => 31,
                    'code' => '50',
                    'full_code' => '01.06.50',
                    'description' => ' PUCARA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:50',
                ),
            293 =>
                array(
                    'id' => 294,
                    'parent_id' => 31,
                    'code' => '52',
                    'full_code' => '01.06.52',
                    'description' => 'SAN RAFAEL DE SHARUG',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:50',
                ),
            294 =>
                array(
                    'id' => 295,
                    'parent_id' => 32,
                    'code' => '50',
                    'full_code' => '01.07.50',
                    'description' => ' SAN FERNANDO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:50',
                ),
            295 =>
                array(
                    'id' => 296,
                    'parent_id' => 32,
                    'code' => '51',
                    'full_code' => '01.07.51',
                    'description' => 'CHUMBLIN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:50',
                ),
            296 =>
                array(
                    'id' => 297,
                    'parent_id' => 33,
                    'code' => '50',
                    'full_code' => '01.08.50',
                    'description' => ' SANTA ISABEL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:50',
                ),
            297 =>
                array(
                    'id' => 298,
                    'parent_id' => 33,
                    'code' => '51',
                    'full_code' => '01.08.51',
                    'description' => 'ABDON CALDERON  (LA UNION) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:51',
                ),
            298 =>
                array(
                    'id' => 299,
                    'parent_id' => 33,
                    'code' => '52',
                    'full_code' => '01.08.52',
                    'description' => 'EL CARMEN DE PIJILI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:51',
                ),
            299 =>
                array(
                    'id' => 300,
                    'parent_id' => 33,
                    'code' => '53',
                    'full_code' => '01.08.53',
                    'description' => 'ZHAGLLI (SHAGLLI)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:51',
                ),
            300 =>
                array(
                    'id' => 301,
                    'parent_id' => 34,
                    'code' => '50',
                    'full_code' => '01.09.50',
                    'description' => ' SIGSIG',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:50',
                ),
            301 =>
                array(
                    'id' => 302,
                    'parent_id' => 34,
                    'code' => '51',
                    'full_code' => '01.09.51',
                    'description' => 'CUCHIL (CUTCHIL) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:51',
                ),
            302 =>
                array(
                    'id' => 303,
                    'parent_id' => 34,
                    'code' => '52',
                    'full_code' => '01.09.52',
                    'description' => 'JIMA (GIMA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:51',
                ),
            303 =>
                array(
                    'id' => 304,
                    'parent_id' => 34,
                    'code' => '53',
                    'full_code' => '01.09.53',
                    'description' => 'GUEL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:51',
                ),
            304 =>
                array(
                    'id' => 305,
                    'parent_id' => 34,
                    'code' => '54',
                    'full_code' => '01.09.54',
                    'description' => 'LUDO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:50',
                ),
            305 =>
                array(
                    'id' => 306,
                    'parent_id' => 34,
                    'code' => '55',
                    'full_code' => '01.09.55',
                    'description' => 'SAN BARTOLOME',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:51',
                ),
            306 =>
                array(
                    'id' => 307,
                    'parent_id' => 34,
                    'code' => '56',
                    'full_code' => '01.09.56',
                    'description' => 'SAN JOSE DE RARANGA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:51',
                ),
            307 =>
                array(
                    'id' => 308,
                    'parent_id' => 35,
                    'code' => '50',
                    'full_code' => '01.10.50',
                    'description' => 'SAN FELIPE DE OÑA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:51',
                ),
            308 =>
                array(
                    'id' => 309,
                    'parent_id' => 35,
                    'code' => '51',
                    'full_code' => '01.10.51',
                    'description' => 'SUSUDEL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:51',
                ),
            309 =>
                array(
                    'id' => 310,
                    'parent_id' => 36,
                    'code' => '50',
                    'full_code' => '01.11.50',
                    'description' => 'CHORDELEG',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:51',
                ),
            310 =>
                array(
                    'id' => 311,
                    'parent_id' => 36,
                    'code' => '51',
                    'full_code' => '01.11.51',
                    'description' => 'PRINCIPAL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:51',
                ),
            311 =>
                array(
                    'id' => 312,
                    'parent_id' => 36,
                    'code' => '52',
                    'full_code' => '01.11.52',
                    'description' => 'LA UNION',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:51',
                ),
            312 =>
                array(
                    'id' => 313,
                    'parent_id' => 36,
                    'code' => '53',
                    'full_code' => '01.11.53',
                    'description' => 'LUIS GALARZA ORELLANA (CAB.ENDELEGSOL) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:51',
                ),
            313 =>
                array(
                    'id' => 314,
                    'parent_id' => 36,
                    'code' => '54',
                    'full_code' => '01.11.54',
                    'description' => 'SAN MARTIN DE PUZHIO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:51',
                ),
            314 =>
                array(
                    'id' => 315,
                    'parent_id' => 37,
                    'code' => '50',
                    'full_code' => '01.12.50',
                    'description' => ' EL PAN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:51',
                ),
            315 =>
                array(
                    'id' => 316,
                    'parent_id' => 37,
                    'code' => '53',
                    'full_code' => '01.12.53',
                    'description' => 'SAN VICENTE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:51',
                ),
            316 =>
                array(
                    'id' => 317,
                    'parent_id' => 38,
                    'code' => '50',
                    'full_code' => '01.13.50',
                    'description' => ' SEVILLA DE ORO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:51',
                ),
            317 =>
                array(
                    'id' => 318,
                    'parent_id' => 38,
                    'code' => '51',
                    'full_code' => '01.13.51',
                    'description' => 'AMALUZA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:51',
                ),
            318 =>
                array(
                    'id' => 319,
                    'parent_id' => 38,
                    'code' => '52',
                    'full_code' => '01.13.52',
                    'description' => 'PALMAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:51',
                ),
            319 =>
                array(
                    'id' => 320,
                    'parent_id' => 39,
                    'code' => '50',
                    'full_code' => '01.14.50',
                    'description' => ' GUACHAPALA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:52',
                ),
            320 =>
                array(
                    'id' => 321,
                    'parent_id' => 40,
                    'code' => '50',
                    'full_code' => '01.15.50',
                    'description' => 'CAMILO PONCE ENRIQUEZ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:51',
                ),
            321 =>
                array(
                    'id' => 322,
                    'parent_id' => 41,
                    'code' => '50',
                    'full_code' => '02.01.50',
                    'description' => ' GUARANDA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:52',
                ),
            322 =>
                array(
                    'id' => 323,
                    'parent_id' => 41,
                    'code' => '51',
                    'full_code' => '02.01.51',
                    'description' => 'FACUNDO VELA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:52',
                ),
            323 =>
                array(
                    'id' => 324,
                    'parent_id' => 41,
                    'code' => '53',
                    'full_code' => '02.01.53',
                    'description' => 'JULIO E. MORENO (CATANAHUAN GRANDE)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:52',
                ),
            324 =>
                array(
                    'id' => 325,
                    'parent_id' => 41,
                    'code' => '55',
                    'full_code' => '02.01.55',
                    'description' => 'SALINAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:52',
                ),
            325 =>
                array(
                    'id' => 326,
                    'parent_id' => 41,
                    'code' => '56',
                    'full_code' => '02.01.56',
                    'description' => 'SAN LORENZO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:52',
                ),
            326 =>
                array(
                    'id' => 327,
                    'parent_id' => 41,
                    'code' => '57',
                    'full_code' => '02.01.57',
                    'description' => 'SAN SIMON (YACOTO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:52',
                ),
            327 =>
                array(
                    'id' => 328,
                    'parent_id' => 41,
                    'code' => '58',
                    'full_code' => '02.01.58',
                    'description' => 'SANTAFE (SANTA FE)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:52',
                ),
            328 =>
                array(
                    'id' => 329,
                    'parent_id' => 41,
                    'code' => '59',
                    'full_code' => '02.01.59',
                    'description' => 'SIMIATUG',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:52',
                ),
            329 =>
                array(
                    'id' => 330,
                    'parent_id' => 41,
                    'code' => '60',
                    'full_code' => '02.01.60',
                    'description' => 'SAN LUIS DE PAMBIL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:52',
                ),
            330 =>
                array(
                    'id' => 331,
                    'parent_id' => 42,
                    'code' => '50',
                    'full_code' => '02.02.50',
                    'description' => ' CHILLANES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:52',
                ),
            331 =>
                array(
                    'id' => 332,
                    'parent_id' => 42,
                    'code' => '51',
                    'full_code' => '02.02.51',
                    'description' => 'SAN JOSE DEL TAMBO (TAMBOPAMBA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:52',
                ),
            332 =>
                array(
                    'id' => 333,
                    'parent_id' => 43,
                    'code' => '50',
                    'full_code' => '02.03.50',
                    'description' => 'SAN JOSE DE  CHIMBO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:52',
                ),
            333 =>
                array(
                    'id' => 334,
                    'parent_id' => 43,
                    'code' => '51',
                    'full_code' => '02.03.51',
                    'description' => 'ASUNCION (ASANCOTO) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:52',
                ),
            334 =>
                array(
                    'id' => 335,
                    'parent_id' => 43,
                    'code' => '53',
                    'full_code' => '02.03.53',
                    'description' => 'MAGDALENA (CHAPACOTO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:52',
                ),
            335 =>
                array(
                    'id' => 336,
                    'parent_id' => 43,
                    'code' => '54',
                    'full_code' => '02.03.54',
                    'description' => 'SAN SEBASTIAN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:52',
                ),
            336 =>
                array(
                    'id' => 337,
                    'parent_id' => 43,
                    'code' => '55',
                    'full_code' => '02.03.55',
                    'description' => 'TELIMBELA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:52',
                ),
            337 =>
                array(
                    'id' => 338,
                    'parent_id' => 44,
                    'code' => '50',
                    'full_code' => '02.04.50',
                    'description' => ' ECHEANDIA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:52',
                ),
            338 =>
                array(
                    'id' => 339,
                    'parent_id' => 45,
                    'code' => '50',
                    'full_code' => '02.05.50',
                    'description' => 'SAN MIGUEL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:52',
                ),
            339 =>
                array(
                    'id' => 340,
                    'parent_id' => 45,
                    'code' => '51',
                    'full_code' => '02.05.51',
                    'description' => 'BALSAPAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:52',
                ),
            340 =>
                array(
                    'id' => 341,
                    'parent_id' => 45,
                    'code' => '52',
                    'full_code' => '02.05.52',
                    'description' => 'BILOVAN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:53',
                ),
            341 =>
                array(
                    'id' => 342,
                    'parent_id' => 45,
                    'code' => '53',
                    'full_code' => '02.05.53',
                    'description' => 'REGULO DE MORA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:52',
                ),
            342 =>
                array(
                    'id' => 343,
                    'parent_id' => 45,
                    'code' => '54',
                    'full_code' => '02.05.54',
                    'description' => 'SAN PABLO  (SAN PABLO DE ATENAS)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:52',
                ),
            343 =>
                array(
                    'id' => 344,
                    'parent_id' => 45,
                    'code' => '55',
                    'full_code' => '02.05.55',
                    'description' => 'SANTIAGO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:53',
                ),
            344 =>
                array(
                    'id' => 345,
                    'parent_id' => 45,
                    'code' => '56',
                    'full_code' => '02.05.56',
                    'description' => 'SAN VICENTE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:53',
                ),
            345 =>
                array(
                    'id' => 346,
                    'parent_id' => 46,
                    'code' => '50',
                    'full_code' => '02.06.50',
                    'description' => ' CALUMA ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:53',
                ),
            346 =>
                array(
                    'id' => 347,
                    'parent_id' => 47,
                    'code' => '50',
                    'full_code' => '02.07.50',
                    'description' => ' LAS NAVES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:53',
                ),
            347 =>
                array(
                    'id' => 348,
                    'parent_id' => 48,
                    'code' => '50',
                    'full_code' => '03.01.50',
                    'description' => 'AZOGUES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:53',
                ),
            348 =>
                array(
                    'id' => 349,
                    'parent_id' => 48,
                    'code' => '51',
                    'full_code' => '03.01.51',
                    'description' => 'COJITAMBO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:53',
                ),
            349 =>
                array(
                    'id' => 350,
                    'parent_id' => 48,
                    'code' => '53',
                    'full_code' => '03.01.53',
                    'description' => 'GUAPAN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:53',
                ),
            350 =>
                array(
                    'id' => 351,
                    'parent_id' => 48,
                    'code' => '54',
                    'full_code' => '03.01.54',
                    'description' => 'JAVIER LOYOLA (CHUQUIPATA) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:53',
                ),
            351 =>
                array(
                    'id' => 352,
                    'parent_id' => 48,
                    'code' => '55',
                    'full_code' => '03.01.55',
                    'description' => 'LUIS CORDERO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:53',
                ),
            352 =>
                array(
                    'id' => 353,
                    'parent_id' => 48,
                    'code' => '56',
                    'full_code' => '03.01.56',
                    'description' => 'PINDILIG',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:53',
                ),
            353 =>
                array(
                    'id' => 354,
                    'parent_id' => 48,
                    'code' => '57',
                    'full_code' => '03.01.57',
                    'description' => 'RIVERA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:53',
                ),
            354 =>
                array(
                    'id' => 355,
                    'parent_id' => 48,
                    'code' => '58',
                    'full_code' => '03.01.58',
                    'description' => 'SAN MIGUEL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:53',
                ),
            355 =>
                array(
                    'id' => 356,
                    'parent_id' => 48,
                    'code' => '60',
                    'full_code' => '03.01.60',
                    'description' => 'TADAY',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:53',
                ),
            356 =>
                array(
                    'id' => 357,
                    'parent_id' => 49,
                    'code' => '50',
                    'full_code' => '03.02.50',
                    'description' => ' BIBLIAN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:53',
                ),
            357 =>
                array(
                    'id' => 358,
                    'parent_id' => 49,
                    'code' => '51',
                    'full_code' => '03.02.51',
                    'description' => 'NAZON (CAB. EN PAMPA DE DOMINGUEZ)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:54',
                ),
            358 =>
                array(
                    'id' => 359,
                    'parent_id' => 49,
                    'code' => '52',
                    'full_code' => '03.02.52',
                    'description' => 'SAN FRANCISCO DE SAGEO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:53',
                ),
            359 =>
                array(
                    'id' => 360,
                    'parent_id' => 49,
                    'code' => '53',
                    'full_code' => '03.02.53',
                    'description' => 'TURUPAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:53',
                ),
            360 =>
                array(
                    'id' => 361,
                    'parent_id' => 49,
                    'code' => '54',
                    'full_code' => '03.02.54',
                    'description' => 'JERUSALEN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:53',
                ),
            361 =>
                array(
                    'id' => 362,
                    'parent_id' => 50,
                    'code' => '50',
                    'full_code' => '03.03.50',
                    'description' => 'CAÑAR',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:53',
                ),
            362 =>
                array(
                    'id' => 363,
                    'parent_id' => 50,
                    'code' => '51',
                    'full_code' => '03.03.51',
                    'description' => 'CHONTAMARCA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:53',
                ),
            363 =>
                array(
                    'id' => 364,
                    'parent_id' => 50,
                    'code' => '52',
                    'full_code' => '03.03.52',
                    'description' => 'CHOROCOPTE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:53',
                ),
            364 =>
                array(
                    'id' => 365,
                    'parent_id' => 50,
                    'code' => '53',
                    'full_code' => '03.03.53',
                    'description' => 'GENERAL MORALES (SOCARTE) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:54',
                ),
            365 =>
                array(
                    'id' => 366,
                    'parent_id' => 50,
                    'code' => '54',
                    'full_code' => '03.03.54',
                    'description' => 'GUALLETURO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:54',
                ),
            366 =>
                array(
                    'id' => 367,
                    'parent_id' => 50,
                    'code' => '55',
                    'full_code' => '03.03.55',
                    'description' => 'HONORATO VASQUEZ (TAMBO VIEJO) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:54',
                ),
            367 =>
                array(
                    'id' => 368,
                    'parent_id' => 50,
                    'code' => '56',
                    'full_code' => '03.03.56',
                    'description' => 'INGAPIRCA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:54',
                ),
            368 =>
                array(
                    'id' => 369,
                    'parent_id' => 50,
                    'code' => '57',
                    'full_code' => '03.03.57',
                    'description' => 'JUNCAL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:54',
                ),
            369 =>
                array(
                    'id' => 370,
                    'parent_id' => 50,
                    'code' => '58',
                    'full_code' => '03.03.58',
                    'description' => 'SAN ANTONIO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:54',
                ),
            370 =>
                array(
                    'id' => 371,
                    'parent_id' => 50,
                    'code' => '61',
                    'full_code' => '03.03.61',
                    'description' => 'ZHUD',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:54',
                ),
            371 =>
                array(
                    'id' => 372,
                    'parent_id' => 50,
                    'code' => '62',
                    'full_code' => '03.03.62',
                    'description' => 'VENTURA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:54',
                ),
            372 =>
                array(
                    'id' => 373,
                    'parent_id' => 50,
                    'code' => '63',
                    'full_code' => '03.03.63',
                    'description' => 'DUCUR',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:54',
                ),
            373 =>
                array(
                    'id' => 374,
                    'parent_id' => 51,
                    'code' => '50',
                    'full_code' => '03.04.50',
                    'description' => ' LA TRONCAL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:54',
                ),
            374 =>
                array(
                    'id' => 375,
                    'parent_id' => 51,
                    'code' => '51',
                    'full_code' => '03.04.51',
                    'description' => 'MANUEL J. CALLE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:54',
                ),
            375 =>
                array(
                    'id' => 376,
                    'parent_id' => 51,
                    'code' => '52',
                    'full_code' => '03.04.52',
                    'description' => 'PANCHO NEGRO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:54',
                ),
            376 =>
                array(
                    'id' => 377,
                    'parent_id' => 52,
                    'code' => '50',
                    'full_code' => '03.05.50',
                    'description' => 'EL TAMBO ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:54',
                ),
            377 =>
                array(
                    'id' => 378,
                    'parent_id' => 53,
                    'code' => '50',
                    'full_code' => '03.06.50',
                    'description' => 'DELEG',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:54',
                ),
            378 =>
                array(
                    'id' => 379,
                    'parent_id' => 53,
                    'code' => '51',
                    'full_code' => '03.06.51',
                    'description' => 'SOLANO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:54',
                ),
            379 =>
                array(
                    'id' => 380,
                    'parent_id' => 54,
                    'code' => '50',
                    'full_code' => '03.07.50',
                    'description' => 'SUSCAL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:55',
                ),
            380 =>
                array(
                    'id' => 381,
                    'parent_id' => 55,
                    'code' => '50',
                    'full_code' => '04.01.50',
                    'description' => ' TULCAN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:54',
                ),
            381 =>
                array(
                    'id' => 382,
                    'parent_id' => 55,
                    'code' => '51',
                    'full_code' => '04.01.51',
                    'description' => 'EL CARMELO (EL PUN) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:54',
                ),
            382 =>
                array(
                    'id' => 383,
                    'parent_id' => 55,
                    'code' => '53',
                    'full_code' => '04.01.53',
                    'description' => 'JULIO ANDRADE (OREJUELA) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:54',
                ),
            383 =>
                array(
                    'id' => 384,
                    'parent_id' => 55,
                    'code' => '54',
                    'full_code' => '04.01.54',
                    'description' => 'MALDONADO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:55',
                ),
            384 =>
                array(
                    'id' => 385,
                    'parent_id' => 55,
                    'code' => '55',
                    'full_code' => '04.01.55',
                    'description' => 'PIOTER',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:54',
                ),
            385 =>
                array(
                    'id' => 386,
                    'parent_id' => 55,
                    'code' => '56',
                    'full_code' => '04.01.56',
                    'description' => 'TOBAR DONOSO (LA BOCANA DE CAMUMBI) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:54',
                ),
            386 =>
                array(
                    'id' => 387,
                    'parent_id' => 55,
                    'code' => '57',
                    'full_code' => '04.01.57',
                    'description' => 'TUFIÑO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:54',
                ),
            387 =>
                array(
                    'id' => 388,
                    'parent_id' => 55,
                    'code' => '58',
                    'full_code' => '04.01.58',
                    'description' => 'URBINA (TAYA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:55',
                ),
            388 =>
                array(
                    'id' => 389,
                    'parent_id' => 55,
                    'code' => '59',
                    'full_code' => '04.01.59',
                    'description' => 'EL CHICAL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:55',
                ),
            389 =>
                array(
                    'id' => 390,
                    'parent_id' => 55,
                    'code' => '61',
                    'full_code' => '04.01.61',
                    'description' => 'SANTA MARTHA DE CUBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:55',
                ),
            390 =>
                array(
                    'id' => 391,
                    'parent_id' => 56,
                    'code' => '50',
                    'full_code' => '04.02.50',
                    'description' => ' BOLIVAR',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:55',
                ),
            391 =>
                array(
                    'id' => 392,
                    'parent_id' => 56,
                    'code' => '51',
                    'full_code' => '04.02.51',
                    'description' => 'GARCIA MORENO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:55',
                ),
            392 =>
                array(
                    'id' => 393,
                    'parent_id' => 56,
                    'code' => '52',
                    'full_code' => '04.02.52',
                    'description' => 'LOS ANDES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:55',
                ),
            393 =>
                array(
                    'id' => 394,
                    'parent_id' => 56,
                    'code' => '53',
                    'full_code' => '04.02.53',
                    'description' => 'MONTE OLIVO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:55',
                ),
            394 =>
                array(
                    'id' => 395,
                    'parent_id' => 56,
                    'code' => '54',
                    'full_code' => '04.02.54',
                    'description' => 'SAN VICENTE DE PUSIR',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:55',
                ),
            395 =>
                array(
                    'id' => 396,
                    'parent_id' => 56,
                    'code' => '55',
                    'full_code' => '04.02.55',
                    'description' => 'SAN RAFAEL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:55',
                ),
            396 =>
                array(
                    'id' => 397,
                    'parent_id' => 57,
                    'code' => '50',
                    'full_code' => '04.03.50',
                    'description' => 'EL ANGEL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:55',
                ),
            397 =>
                array(
                    'id' => 398,
                    'parent_id' => 57,
                    'code' => '51',
                    'full_code' => '04.03.51',
                    'description' => 'EL GOALTAL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:55',
                ),
            398 =>
                array(
                    'id' => 399,
                    'parent_id' => 57,
                    'code' => '52',
                    'full_code' => '04.03.52',
                    'description' => 'LA LIBERTAD (ALIZO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:55',
                ),
            399 =>
                array(
                    'id' => 400,
                    'parent_id' => 57,
                    'code' => '53',
                    'full_code' => '04.03.53',
                    'description' => 'SAN ISIDRO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:55',
                ),
            400 =>
                array(
                    'id' => 401,
                    'parent_id' => 58,
                    'code' => '50',
                    'full_code' => '04.04.50',
                    'description' => 'MIRA (CHONTAHUASI)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:55',
                ),
            401 =>
                array(
                    'id' => 402,
                    'parent_id' => 58,
                    'code' => '51',
                    'full_code' => '04.04.51',
                    'description' => 'CONCEPCION',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:55',
                ),
            402 =>
                array(
                    'id' => 403,
                    'parent_id' => 58,
                    'code' => '52',
                    'full_code' => '04.04.52',
                    'description' => 'JIJON Y CAAMAÑO (CAB. EN RIO BLANCO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:55',
                ),
            403 =>
                array(
                    'id' => 404,
                    'parent_id' => 58,
                    'code' => '53',
                    'full_code' => '04.04.53',
                    'description' => 'JUAN MONTALVO (SAN IGNACIO DE QUIL)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:55',
                ),
            404 =>
                array(
                    'id' => 405,
                    'parent_id' => 59,
                    'code' => '50',
                    'full_code' => '04.05.50',
                    'description' => 'SAN GABRIEL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:55',
                ),
            405 =>
                array(
                    'id' => 406,
                    'parent_id' => 59,
                    'code' => '51',
                    'full_code' => '04.05.51',
                    'description' => 'CRISTOBAL COLON',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:55',
                ),
            406 =>
                array(
                    'id' => 407,
                    'parent_id' => 59,
                    'code' => '52',
                    'full_code' => '04.05.52',
                    'description' => 'CHITAN DE NAVARRETE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:55',
                ),
            407 =>
                array(
                    'id' => 408,
                    'parent_id' => 59,
                    'code' => '53',
                    'full_code' => '04.05.53',
                    'description' => 'FERNANDEZ SALVADOR',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:55',
                ),
            408 =>
                array(
                    'id' => 409,
                    'parent_id' => 59,
                    'code' => '54',
                    'full_code' => '04.05.54',
                    'description' => 'LA PAZ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:55',
                ),
            409 =>
                array(
                    'id' => 410,
                    'parent_id' => 59,
                    'code' => '55',
                    'full_code' => '04.05.55',
                    'description' => 'PIARTAL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:55',
                ),
            410 =>
                array(
                    'id' => 411,
                    'parent_id' => 60,
                    'code' => '50',
                    'full_code' => '04.06.50',
                    'description' => 'HUACA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:56',
                ),
            411 =>
                array(
                    'id' => 412,
                    'parent_id' => 60,
                    'code' => '51',
                    'full_code' => '04.06.51',
                    'description' => 'MARISCAL SUCRE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:56',
                ),
            412 =>
                array(
                    'id' => 413,
                    'parent_id' => 61,
                    'code' => '50',
                    'full_code' => '05.01.50',
                    'description' => 'LATACUNGA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:56',
                ),
            413 =>
                array(
                    'id' => 414,
                    'parent_id' => 61,
                    'code' => '51',
                    'full_code' => '05.01.51',
                    'description' => 'ALAQUES (ALAQUEZ) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:55',
                ),
            414 =>
                array(
                    'id' => 415,
                    'parent_id' => 61,
                    'code' => '52',
                    'full_code' => '05.01.52',
                    'description' => 'BELISARIO QUEVEDO (GUANAILIN)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:56',
                ),
            415 =>
                array(
                    'id' => 416,
                    'parent_id' => 61,
                    'code' => '53',
                    'full_code' => '05.01.53',
                    'description' => 'GUAITACAMA (GUAYTACAMA) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:56',
                ),
            416 =>
                array(
                    'id' => 417,
                    'parent_id' => 61,
                    'code' => '54',
                    'full_code' => '05.01.54',
                    'description' => 'JOSEGUANGO BAJO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:56',
                ),
            417 =>
                array(
                    'id' => 418,
                    'parent_id' => 61,
                    'code' => '56',
                    'full_code' => '05.01.56',
                    'description' => 'MULALO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:56',
                ),
            418 =>
                array(
                    'id' => 419,
                    'parent_id' => 61,
                    'code' => '57',
                    'full_code' => '05.01.57',
                    'description' => '11 DE NOVIEMBRE (ILINCHISI)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:55',
                ),
            419 =>
                array(
                    'id' => 420,
                    'parent_id' => 61,
                    'code' => '58',
                    'full_code' => '05.01.58',
                    'description' => 'POALO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:56',
                ),
            420 =>
                array(
                    'id' => 421,
                    'parent_id' => 61,
                    'code' => '59',
                    'full_code' => '05.01.59',
                    'description' => 'SAN JUAN DE PASTOCALLE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:56',
                ),
            421 =>
                array(
                    'id' => 422,
                    'parent_id' => 61,
                    'code' => '61',
                    'full_code' => '05.01.61',
                    'description' => 'TANICUCHI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:56',
                ),
            422 =>
                array(
                    'id' => 423,
                    'parent_id' => 61,
                    'code' => '62',
                    'full_code' => '05.01.62',
                    'description' => 'TOACASO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:56',
                ),
            423 =>
                array(
                    'id' => 424,
                    'parent_id' => 62,
                    'code' => '50',
                    'full_code' => '05.02.50',
                    'description' => 'LA MANA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:56',
                ),
            424 =>
                array(
                    'id' => 425,
                    'parent_id' => 62,
                    'code' => '51',
                    'full_code' => '05.02.51',
                    'description' => 'GUASAGANDA (CAB.EN GUASAGANDA CENTRO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:55',
                ),
            425 =>
                array(
                    'id' => 426,
                    'parent_id' => 62,
                    'code' => '52',
                    'full_code' => '05.02.52',
                    'description' => 'PUCAYACU',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:56',
                ),
            426 =>
                array(
                    'id' => 427,
                    'parent_id' => 63,
                    'code' => '50',
                    'full_code' => '05.03.50',
                    'description' => 'EL CORAZON',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:56',
                ),
            427 =>
                array(
                    'id' => 428,
                    'parent_id' => 63,
                    'code' => '51',
                    'full_code' => '05.03.51',
                    'description' => 'MORASPUNGO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:56',
                ),
            428 =>
                array(
                    'id' => 429,
                    'parent_id' => 63,
                    'code' => '52',
                    'full_code' => '05.03.52',
                    'description' => 'PINLLOPATA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:56',
                ),
            429 =>
                array(
                    'id' => 430,
                    'parent_id' => 63,
                    'code' => '53',
                    'full_code' => '05.03.53',
                    'description' => 'RAMON CAMPAÑA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:55',
                ),
            430 =>
                array(
                    'id' => 431,
                    'parent_id' => 64,
                    'code' => '50',
                    'full_code' => '05.04.50',
                    'description' => 'PUJILI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:56',
                ),
            431 =>
                array(
                    'id' => 432,
                    'parent_id' => 64,
                    'code' => '51',
                    'full_code' => '05.04.51',
                    'description' => 'ANGAMARCA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:57',
                ),
            432 =>
                array(
                    'id' => 433,
                    'parent_id' => 64,
                    'code' => '53',
                    'full_code' => '05.04.53',
                    'description' => 'GUANGAJE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:57',
                ),
            433 =>
                array(
                    'id' => 434,
                    'parent_id' => 64,
                    'code' => '55',
                    'full_code' => '05.04.55',
                    'description' => 'LA VICTORIA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:57',
                ),
            434 =>
                array(
                    'id' => 435,
                    'parent_id' => 64,
                    'code' => '56',
                    'full_code' => '05.04.56',
                    'description' => 'PILALO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:55',
                ),
            435 =>
                array(
                    'id' => 436,
                    'parent_id' => 64,
                    'code' => '57',
                    'full_code' => '05.04.57',
                    'description' => 'TINGO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:57',
                ),
            436 =>
                array(
                    'id' => 437,
                    'parent_id' => 64,
                    'code' => '58',
                    'full_code' => '05.04.58',
                    'description' => 'ZUMBAHUA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:57',
                ),
            437 =>
                array(
                    'id' => 438,
                    'parent_id' => 65,
                    'code' => '50',
                    'full_code' => '05.05.50',
                    'description' => 'SAN MIGUEL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:57',
                ),
            438 =>
                array(
                    'id' => 439,
                    'parent_id' => 65,
                    'code' => '51',
                    'full_code' => '05.05.51',
                    'description' => 'ANTONIO JOSE HOLGUIN  (SANTA LUCIA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:55',
                ),
            439 =>
                array(
                    'id' => 440,
                    'parent_id' => 65,
                    'code' => '52',
                    'full_code' => '05.05.52',
                    'description' => 'CUSUBAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:57',
                ),
            440 =>
                array(
                    'id' => 441,
                    'parent_id' => 65,
                    'code' => '53',
                    'full_code' => '05.05.53',
                    'description' => 'MULALILLO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:57',
                ),
            441 =>
                array(
                    'id' => 442,
                    'parent_id' => 65,
                    'code' => '54',
                    'full_code' => '05.05.54',
                    'description' => 'MULLIQUINDIL (SANTA ANA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:57',
                ),
            442 =>
                array(
                    'id' => 443,
                    'parent_id' => 65,
                    'code' => '55',
                    'full_code' => '05.05.55',
                    'description' => 'PANSALEO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:57',
                ),
            443 =>
                array(
                    'id' => 444,
                    'parent_id' => 66,
                    'code' => '50',
                    'full_code' => '05.06.50',
                    'description' => 'SAQUISILI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:57',
                ),
            444 =>
                array(
                    'id' => 445,
                    'parent_id' => 66,
                    'code' => '51',
                    'full_code' => '05.06.51',
                    'description' => 'CANCHAGUA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:56',
                ),
            445 =>
                array(
                    'id' => 446,
                    'parent_id' => 66,
                    'code' => '52',
                    'full_code' => '05.06.52',
                    'description' => 'CHANTILIN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:57',
                ),
            446 =>
                array(
                    'id' => 447,
                    'parent_id' => 66,
                    'code' => '53',
                    'full_code' => '05.06.53',
                    'description' => 'COCHAPAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:57',
                ),
            447 =>
                array(
                    'id' => 448,
                    'parent_id' => 67,
                    'code' => '50',
                    'full_code' => '05.07.50',
                    'description' => 'SIGCHOS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:57',
                ),
            448 =>
                array(
                    'id' => 449,
                    'parent_id' => 67,
                    'code' => '51',
                    'full_code' => '05.07.51',
                    'description' => 'CHUGCHILLAN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:56',
                ),
            449 =>
                array(
                    'id' => 450,
                    'parent_id' => 67,
                    'code' => '52',
                    'full_code' => '05.07.52',
                    'description' => 'ISINLIVI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:57',
                ),
            450 =>
                array(
                    'id' => 451,
                    'parent_id' => 67,
                    'code' => '53',
                    'full_code' => '05.07.53',
                    'description' => 'LAS PAMPAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:57',
                ),
            451 =>
                array(
                    'id' => 452,
                    'parent_id' => 67,
                    'code' => '54',
                    'full_code' => '05.07.54',
                    'description' => 'PALO QUEMADO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:57',
                ),
            452 =>
                array(
                    'id' => 453,
                    'parent_id' => 68,
                    'code' => '50',
                    'full_code' => '06.01.50',
                    'description' => 'RIOBAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:57',
                ),
            453 =>
                array(
                    'id' => 454,
                    'parent_id' => 68,
                    'code' => '51',
                    'full_code' => '06.01.51',
                    'description' => 'CACHA (CAB. EN MACHANGARA) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:56',
                ),
            454 =>
                array(
                    'id' => 455,
                    'parent_id' => 68,
                    'code' => '52',
                    'full_code' => '06.01.52',
                    'description' => 'CALPI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:58',
                ),
            455 =>
                array(
                    'id' => 456,
                    'parent_id' => 68,
                    'code' => '53',
                    'full_code' => '06.01.53',
                    'description' => 'CUBIJIES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:58',
                ),
            456 =>
                array(
                    'id' => 457,
                    'parent_id' => 68,
                    'code' => '54',
                    'full_code' => '06.01.54',
                    'description' => 'FLORES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:58',
                ),
            457 =>
                array(
                    'id' => 458,
                    'parent_id' => 68,
                    'code' => '55',
                    'full_code' => '06.01.55',
                    'description' => 'LICAN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:58',
                ),
            458 =>
                array(
                    'id' => 459,
                    'parent_id' => 68,
                    'code' => '56',
                    'full_code' => '06.01.56',
                    'description' => 'LICTO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:58',
                ),
            459 =>
                array(
                    'id' => 460,
                    'parent_id' => 68,
                    'code' => '57',
                    'full_code' => '06.01.57',
                    'description' => 'PUNGALA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:56',
                ),
            460 =>
                array(
                    'id' => 461,
                    'parent_id' => 68,
                    'code' => '58',
                    'full_code' => '06.01.58',
                    'description' => 'PUNIN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:58',
                ),
            461 =>
                array(
                    'id' => 462,
                    'parent_id' => 68,
                    'code' => '59',
                    'full_code' => '06.01.59',
                    'description' => 'QUIMIAG',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:58',
                ),
            462 =>
                array(
                    'id' => 463,
                    'parent_id' => 68,
                    'code' => '60',
                    'full_code' => '06.01.60',
                    'description' => 'SAN JUAN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:58',
                ),
            463 =>
                array(
                    'id' => 464,
                    'parent_id' => 68,
                    'code' => '61',
                    'full_code' => '06.01.61',
                    'description' => 'SAN LUIS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:58',
                ),
            464 =>
                array(
                    'id' => 465,
                    'parent_id' => 69,
                    'code' => '50',
                    'full_code' => '06.02.50',
                    'description' => 'ALAUSI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:56',
                ),
            465 =>
                array(
                    'id' => 466,
                    'parent_id' => 69,
                    'code' => '51',
                    'full_code' => '06.02.51',
                    'description' => 'ACHUPALLAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:58',
                ),
            466 =>
                array(
                    'id' => 467,
                    'parent_id' => 69,
                    'code' => '53',
                    'full_code' => '06.02.53',
                    'description' => 'GUASUNTOS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:58',
                ),
            467 =>
                array(
                    'id' => 468,
                    'parent_id' => 69,
                    'code' => '54',
                    'full_code' => '06.02.54',
                    'description' => 'HUIGRA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:58',
                ),
            468 =>
                array(
                    'id' => 469,
                    'parent_id' => 69,
                    'code' => '55',
                    'full_code' => '06.02.55',
                    'description' => 'MULTITUD',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:56',
                ),
            469 =>
                array(
                    'id' => 470,
                    'parent_id' => 69,
                    'code' => '56',
                    'full_code' => '06.02.56',
                    'description' => 'PISTISHI (NARIZ DEL DIABLO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:58',
                ),
            470 =>
                array(
                    'id' => 471,
                    'parent_id' => 69,
                    'code' => '57',
                    'full_code' => '06.02.57',
                    'description' => 'PUMALLACTA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:58',
                ),
            471 =>
                array(
                    'id' => 472,
                    'parent_id' => 69,
                    'code' => '58',
                    'full_code' => '06.02.58',
                    'description' => 'SEVILLA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:58',
                ),
            472 =>
                array(
                    'id' => 473,
                    'parent_id' => 69,
                    'code' => '59',
                    'full_code' => '06.02.59',
                    'description' => 'SIBAMBE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:56',
                ),
            473 =>
                array(
                    'id' => 474,
                    'parent_id' => 69,
                    'code' => '60',
                    'full_code' => '06.02.60',
                    'description' => 'TIXAN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:58',
                ),
            474 =>
                array(
                    'id' => 475,
                    'parent_id' => 70,
                    'code' => '50',
                    'full_code' => '06.03.50',
                    'description' => 'VILLA LA UNION (CAJABAMBA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:58',
                ),
            475 =>
                array(
                    'id' => 476,
                    'parent_id' => 70,
                    'code' => '51',
                    'full_code' => '06.03.51',
                    'description' => 'CAÑI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:58',
                ),
            476 =>
                array(
                    'id' => 477,
                    'parent_id' => 70,
                    'code' => '52',
                    'full_code' => '06.03.52',
                    'description' => 'COLUMBE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:59',
                ),
            477 =>
                array(
                    'id' => 478,
                    'parent_id' => 70,
                    'code' => '53',
                    'full_code' => '06.03.53',
                    'description' => 'JUAN DE VELASCO (PANGOR)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:56',
                ),
            478 =>
                array(
                    'id' => 479,
                    'parent_id' => 70,
                    'code' => '54',
                    'full_code' => '06.03.54',
                    'description' => 'SANTIAGO DE QUITO (CAB. EN SAN ANTONIO DE QUITO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:59',
                ),
            479 =>
                array(
                    'id' => 480,
                    'parent_id' => 71,
                    'code' => '50',
                    'full_code' => '06.04.50',
                    'description' => 'CHAMBO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:59',
                ),
            480 =>
                array(
                    'id' => 481,
                    'parent_id' => 72,
                    'code' => '50',
                    'full_code' => '06.05.50',
                    'description' => 'CHUNCHI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:59',
                ),
            481 =>
                array(
                    'id' => 482,
                    'parent_id' => 72,
                    'code' => '51',
                    'full_code' => '06.05.51',
                    'description' => 'CAPZOL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:59',
                ),
            482 =>
                array(
                    'id' => 483,
                    'parent_id' => 72,
                    'code' => '52',
                    'full_code' => '06.05.52',
                    'description' => 'COMPUD',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:56',
                ),
            483 =>
                array(
                    'id' => 484,
                    'parent_id' => 72,
                    'code' => '53',
                    'full_code' => '06.05.53',
                    'description' => 'GONZOL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:59',
                ),
            484 =>
                array(
                    'id' => 485,
                    'parent_id' => 72,
                    'code' => '54',
                    'full_code' => '06.05.54',
                    'description' => 'LLAGOS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:59',
                ),
            485 =>
                array(
                    'id' => 486,
                    'parent_id' => 73,
                    'code' => '50',
                    'full_code' => '06.06.50',
                    'description' => 'GUAMOTE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:59',
                ),
            486 =>
                array(
                    'id' => 487,
                    'parent_id' => 73,
                    'code' => '51',
                    'full_code' => '06.06.51',
                    'description' => 'CEBADAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:59',
                ),
            487 =>
                array(
                    'id' => 488,
                    'parent_id' => 73,
                    'code' => '52',
                    'full_code' => '06.06.52',
                    'description' => 'PALMIRA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:56',
                ),
            488 =>
                array(
                    'id' => 489,
                    'parent_id' => 74,
                    'code' => '50',
                    'full_code' => '06.07.50',
                    'description' => 'GUANO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:59',
                ),
            489 =>
                array(
                    'id' => 490,
                    'parent_id' => 74,
                    'code' => '51',
                    'full_code' => '06.07.51',
                    'description' => 'GUANANDO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:59',
                ),
            490 =>
                array(
                    'id' => 491,
                    'parent_id' => 74,
                    'code' => '52',
                    'full_code' => '06.07.52',
                    'description' => 'ILAPO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:59',
                ),
            491 =>
                array(
                    'id' => 492,
                    'parent_id' => 74,
                    'code' => '53',
                    'full_code' => '06.07.53',
                    'description' => 'LA PROVIDENCIA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:56',
                ),
            492 =>
                array(
                    'id' => 493,
                    'parent_id' => 74,
                    'code' => '54',
                    'full_code' => '06.07.54',
                    'description' => 'SAN ANDRES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:59',
                ),
            493 =>
                array(
                    'id' => 494,
                    'parent_id' => 74,
                    'code' => '55',
                    'full_code' => '06.07.55',
                    'description' => 'SAN GERARDO DE PACAICAGUAN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:59',
                ),
            494 =>
                array(
                    'id' => 495,
                    'parent_id' => 74,
                    'code' => '56',
                    'full_code' => '06.07.56',
                    'description' => 'SAN ISIDRO DE PATULU',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:59',
                ),
            495 =>
                array(
                    'id' => 496,
                    'parent_id' => 74,
                    'code' => '57',
                    'full_code' => '06.07.57',
                    'description' => 'SAN JOSE DEL CHAZO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:59',
                ),
            496 =>
                array(
                    'id' => 497,
                    'parent_id' => 74,
                    'code' => '58',
                    'full_code' => '06.07.58',
                    'description' => 'SANTA FE DE GALAN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:56',
                ),
            497 =>
                array(
                    'id' => 498,
                    'parent_id' => 74,
                    'code' => '59',
                    'full_code' => '06.07.59',
                    'description' => 'VALPARAISO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:13:59',
                ),
            498 =>
                array(
                    'id' => 499,
                    'parent_id' => 75,
                    'code' => '50',
                    'full_code' => '06.08.50',
                    'description' => 'PALLATANGA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:00',
                ),
            499 =>
                array(
                    'id' => 500,
                    'parent_id' => 76,
                    'code' => '50',
                    'full_code' => '06.09.50',
                    'description' => 'PENIPE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:00',
                ),
        ));
        \DB::table('catalog_geographic_classifiers')->insert(array(
            0 =>
                array(
                    'id' => 501,
                    'parent_id' => 76,
                    'code' => '51',
                    'full_code' => '06.09.51',
                    'description' => 'EL ALTAR',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:00',
                ),
            1 =>
                array(
                    'id' => 502,
                    'parent_id' => 76,
                    'code' => '52',
                    'full_code' => '06.09.52',
                    'description' => 'MATUS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:00',
                ),
            2 =>
                array(
                    'id' => 503,
                    'parent_id' => 76,
                    'code' => '53',
                    'full_code' => '06.09.53',
                    'description' => 'PUELA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:56',
                ),
            3 =>
                array(
                    'id' => 504,
                    'parent_id' => 76,
                    'code' => '54',
                    'full_code' => '06.09.54',
                    'description' => 'SAN ANTONIO DE BAYUSHIG',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:00',
                ),
            4 =>
                array(
                    'id' => 505,
                    'parent_id' => 76,
                    'code' => '55',
                    'full_code' => '06.09.55',
                    'description' => 'LA CANDELARIA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:56',
                ),
            5 =>
                array(
                    'id' => 506,
                    'parent_id' => 76,
                    'code' => '56',
                    'full_code' => '06.09.56',
                    'description' => 'BILBAO (CAB.EN QUILLUYACU)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:00',
                ),
            6 =>
                array(
                    'id' => 507,
                    'parent_id' => 77,
                    'code' => '50',
                    'full_code' => '06.10.50',
                    'description' => 'CUMANDA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:00',
                ),
            7 =>
                array(
                    'id' => 508,
                    'parent_id' => 78,
                    'code' => '50',
                    'full_code' => '07.01.50',
                    'description' => 'MACHALA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:00',
                ),
            8 =>
                array(
                    'id' => 509,
                    'parent_id' => 78,
                    'code' => '52',
                    'full_code' => '07.01.52',
                    'description' => 'EL RETIRO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:00',
                ),
            9 =>
                array(
                    'id' => 510,
                    'parent_id' => 79,
                    'code' => '50',
                    'full_code' => '07.02.50',
                    'description' => 'ARENILLAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:56',
                ),
            10 =>
                array(
                    'id' => 511,
                    'parent_id' => 79,
                    'code' => '51',
                    'full_code' => '07.02.51',
                    'description' => 'CHACRAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:00',
                ),
            11 =>
                array(
                    'id' => 512,
                    'parent_id' => 79,
                    'code' => '54',
                    'full_code' => '07.02.54',
                    'description' => 'PALMALES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:00',
                ),
            12 =>
                array(
                    'id' => 513,
                    'parent_id' => 79,
                    'code' => '55',
                    'full_code' => '07.02.55',
                    'description' => 'CARCABON',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:00',
                ),
            13 =>
                array(
                    'id' => 514,
                    'parent_id' => 80,
                    'code' => '50',
                    'full_code' => '07.03.50',
                    'description' => 'PACCHA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:00',
                ),
            14 =>
                array(
                    'id' => 515,
                    'parent_id' => 80,
                    'code' => '51',
                    'full_code' => '07.03.51',
                    'description' => 'AYAPAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:56',
                ),
            15 =>
                array(
                    'id' => 516,
                    'parent_id' => 80,
                    'code' => '52',
                    'full_code' => '07.03.52',
                    'description' => 'CORDONCILLO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:00',
                ),
            16 =>
                array(
                    'id' => 517,
                    'parent_id' => 80,
                    'code' => '53',
                    'full_code' => '07.03.53',
                    'description' => 'MILAGRO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:00',
                ),
            17 =>
                array(
                    'id' => 518,
                    'parent_id' => 80,
                    'code' => '54',
                    'full_code' => '07.03.54',
                    'description' => 'SAN JOSE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:00',
                ),
            18 =>
                array(
                    'id' => 519,
                    'parent_id' => 80,
                    'code' => '55',
                    'full_code' => '07.03.55',
                    'description' => 'SAN JUAN DE CERRO AZUL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:56',
                ),
            19 =>
                array(
                    'id' => 520,
                    'parent_id' => 81,
                    'code' => '50',
                    'full_code' => '07.04.50',
                    'description' => 'BALSAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:00',
                ),
            20 =>
                array(
                    'id' => 521,
                    'parent_id' => 81,
                    'code' => '51',
                    'full_code' => '07.04.51',
                    'description' => 'BELLAMARIA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:01',
                ),
            21 =>
                array(
                    'id' => 522,
                    'parent_id' => 82,
                    'code' => '50',
                    'full_code' => '07.05.50',
                    'description' => 'CHILLA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:01',
                ),
            22 =>
                array(
                    'id' => 523,
                    'parent_id' => 83,
                    'code' => '50',
                    'full_code' => '07.06.50',
                    'description' => 'EL GUABO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:01',
                ),
            23 =>
                array(
                    'id' => 524,
                    'parent_id' => 83,
                    'code' => '51',
                    'full_code' => '07.06.51',
                    'description' => 'BARBONES (SUCRE) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:57',
                ),
            24 =>
                array(
                    'id' => 525,
                    'parent_id' => 83,
                    'code' => '52',
                    'full_code' => '07.06.52',
                    'description' => 'LA IBERIA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:01',
                ),
            25 =>
                array(
                    'id' => 526,
                    'parent_id' => 83,
                    'code' => '53',
                    'full_code' => '07.06.53',
                    'description' => 'TENDALES (CAB.EN PUERTO TENDALES)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:01',
                ),
            26 =>
                array(
                    'id' => 527,
                    'parent_id' => 83,
                    'code' => '54',
                    'full_code' => '07.06.54',
                    'description' => 'RIO BONITO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:01',
                ),
            27 =>
                array(
                    'id' => 528,
                    'parent_id' => 84,
                    'code' => '50',
                    'full_code' => '07.07.50',
                    'description' => 'HUAQUILLAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:01',
                ),
            28 =>
                array(
                    'id' => 529,
                    'parent_id' => 85,
                    'code' => '50',
                    'full_code' => '07.08.50',
                    'description' => 'MARCABELI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:57',
                ),
            29 =>
                array(
                    'id' => 530,
                    'parent_id' => 85,
                    'code' => '51',
                    'full_code' => '07.08.51',
                    'description' => 'EL INGENIO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:01',
                ),
            30 =>
                array(
                    'id' => 531,
                    'parent_id' => 86,
                    'code' => '50',
                    'full_code' => '07.09.50',
                    'description' => 'PASAJE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:01',
                ),
            31 =>
                array(
                    'id' => 532,
                    'parent_id' => 86,
                    'code' => '51',
                    'full_code' => '07.09.51',
                    'description' => 'BUENAVISTA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:01',
                ),
            32 =>
                array(
                    'id' => 533,
                    'parent_id' => 86,
                    'code' => '52',
                    'full_code' => '07.09.52',
                    'description' => 'CASACAY',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:01',
                ),
            33 =>
                array(
                    'id' => 534,
                    'parent_id' => 86,
                    'code' => '53',
                    'full_code' => '07.09.53',
                    'description' => 'LA PEAÑA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:57',
                ),
            34 =>
                array(
                    'id' => 535,
                    'parent_id' => 86,
                    'code' => '54',
                    'full_code' => '07.09.54',
                    'description' => 'PROGRESO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:01',
                ),
            35 =>
                array(
                    'id' => 536,
                    'parent_id' => 86,
                    'code' => '55',
                    'full_code' => '07.09.55',
                    'description' => 'UZHCURRUMI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:01',
                ),
            36 =>
                array(
                    'id' => 537,
                    'parent_id' => 86,
                    'code' => '56',
                    'full_code' => '07.09.56',
                    'description' => 'CAÑAQUEMADA ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:01',
                ),
            37 =>
                array(
                    'id' => 538,
                    'parent_id' => 87,
                    'code' => '50',
                    'full_code' => '07.10.50',
                    'description' => 'PIÑAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:57',
                ),
            38 =>
                array(
                    'id' => 539,
                    'parent_id' => 87,
                    'code' => '51',
                    'full_code' => '07.10.51',
                    'description' => 'CAPIRO (CAB. EN LA CAPILLA DE CAPIRO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:01',
                ),
            39 =>
                array(
                    'id' => 540,
                    'parent_id' => 87,
                    'code' => '52',
                    'full_code' => '07.10.52',
                    'description' => 'LA BOCANA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:01',
                ),
            40 =>
                array(
                    'id' => 541,
                    'parent_id' => 87,
                    'code' => '53',
                    'full_code' => '07.10.53',
                    'description' => 'MOROMORO (CAB. EN EL VADO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:57',
                ),
            41 =>
                array(
                    'id' => 542,
                    'parent_id' => 87,
                    'code' => '54',
                    'full_code' => '07.10.54',
                    'description' => 'PIEDRAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:01',
                ),
            42 =>
                array(
                    'id' => 543,
                    'parent_id' => 87,
                    'code' => '55',
                    'full_code' => '07.10.55',
                    'description' => 'SAN ROQUE (AMBROSIO MALDONADO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:01',
                ),
            43 =>
                array(
                    'id' => 544,
                    'parent_id' => 87,
                    'code' => '56',
                    'full_code' => '07.10.56',
                    'description' => 'SARACAY',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:02',
                ),
            44 =>
                array(
                    'id' => 545,
                    'parent_id' => 88,
                    'code' => '50',
                    'full_code' => '07.11.50',
                    'description' => 'PORTOVELO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:02',
                ),
            45 =>
                array(
                    'id' => 546,
                    'parent_id' => 88,
                    'code' => '51',
                    'full_code' => '07.11.51',
                    'description' => 'CURTINCAPA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:02',
                ),
            46 =>
                array(
                    'id' => 547,
                    'parent_id' => 88,
                    'code' => '52',
                    'full_code' => '07.11.52',
                    'description' => 'MORALES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:02',
                ),
            47 =>
                array(
                    'id' => 548,
                    'parent_id' => 88,
                    'code' => '53',
                    'full_code' => '07.11.53',
                    'description' => 'SALATI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:57',
                ),
            48 =>
                array(
                    'id' => 549,
                    'parent_id' => 89,
                    'code' => '50',
                    'full_code' => '07.12.50',
                    'description' => 'SANTA ROSA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:02',
                ),
            49 =>
                array(
                    'id' => 550,
                    'parent_id' => 89,
                    'code' => '51',
                    'full_code' => '07.12.51',
                    'description' => 'BELLAVISTA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:02',
                ),
            50 =>
                array(
                    'id' => 551,
                    'parent_id' => 89,
                    'code' => '52',
                    'full_code' => '07.12.52',
                    'description' => 'JAMBELI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:02',
                ),
            51 =>
                array(
                    'id' => 552,
                    'parent_id' => 89,
                    'code' => '53',
                    'full_code' => '07.12.53',
                    'description' => 'LA AVANZADA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:57',
                ),
            52 =>
                array(
                    'id' => 553,
                    'parent_id' => 89,
                    'code' => '54',
                    'full_code' => '07.12.54',
                    'description' => 'SAN ANTONIO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:02',
                ),
            53 =>
                array(
                    'id' => 554,
                    'parent_id' => 89,
                    'code' => '55',
                    'full_code' => '07.12.55',
                    'description' => 'TORATA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:02',
                ),
            54 =>
                array(
                    'id' => 555,
                    'parent_id' => 89,
                    'code' => '56',
                    'full_code' => '07.12.56',
                    'description' => 'VICTORIA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:02',
                ),
            55 =>
                array(
                    'id' => 556,
                    'parent_id' => 89,
                    'code' => '57',
                    'full_code' => '07.12.57',
                    'description' => 'BELLAMARIA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:02',
                ),
            56 =>
                array(
                    'id' => 557,
                    'parent_id' => 90,
                    'code' => '50',
                    'full_code' => '07.13.50',
                    'description' => 'ZARUMA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:02',
                ),
            57 =>
                array(
                    'id' => 558,
                    'parent_id' => 90,
                    'code' => '51',
                    'full_code' => '07.13.51',
                    'description' => 'ABAÑIN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:57',
                ),
            58 =>
                array(
                    'id' => 559,
                    'parent_id' => 90,
                    'code' => '52',
                    'full_code' => '07.13.52',
                    'description' => 'ARCAPAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:02',
                ),
            59 =>
                array(
                    'id' => 560,
                    'parent_id' => 90,
                    'code' => '53',
                    'full_code' => '07.13.53',
                    'description' => 'GUANAZAN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:02',
                ),
            60 =>
                array(
                    'id' => 561,
                    'parent_id' => 90,
                    'code' => '54',
                    'full_code' => '07.13.54',
                    'description' => 'GUIZHAGUIÑA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:57',
                ),
            61 =>
                array(
                    'id' => 562,
                    'parent_id' => 90,
                    'code' => '55',
                    'full_code' => '07.13.55',
                    'description' => 'HUERTAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:02',
                ),
            62 =>
                array(
                    'id' => 563,
                    'parent_id' => 90,
                    'code' => '56',
                    'full_code' => '07.13.56',
                    'description' => 'MALVAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:02',
                ),
            63 =>
                array(
                    'id' => 564,
                    'parent_id' => 90,
                    'code' => '57',
                    'full_code' => '07.13.57',
                    'description' => 'MULUNCAY GRANDE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:02',
                ),
            64 =>
                array(
                    'id' => 565,
                    'parent_id' => 90,
                    'code' => '58',
                    'full_code' => '07.13.58',
                    'description' => 'SINSAO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:03',
                ),
            65 =>
                array(
                    'id' => 566,
                    'parent_id' => 90,
                    'code' => '59',
                    'full_code' => '07.13.59',
                    'description' => 'SALVIAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:03',
                ),
            66 =>
                array(
                    'id' => 567,
                    'parent_id' => 91,
                    'code' => '50',
                    'full_code' => '07.14.50',
                    'description' => 'LA VICTORIA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:57',
                ),
            67 =>
                array(
                    'id' => 568,
                    'parent_id' => 91,
                    'code' => '51',
                    'full_code' => '07.14.51',
                    'description' => 'LA LIBERTAD',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:03',
                ),
            68 =>
                array(
                    'id' => 569,
                    'parent_id' => 91,
                    'code' => '52',
                    'full_code' => '07.14.52',
                    'description' => 'EL PARAISO ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:03',
                ),
            69 =>
                array(
                    'id' => 570,
                    'parent_id' => 91,
                    'code' => '53',
                    'full_code' => '07.14.53',
                    'description' => 'SAN ISIDRO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:03',
                ),
            70 =>
                array(
                    'id' => 571,
                    'parent_id' => 92,
                    'code' => '50',
                    'full_code' => '08.01.50',
                    'description' => 'ESMERALDAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:57',
                ),
            71 =>
                array(
                    'id' => 572,
                    'parent_id' => 92,
                    'code' => '52',
                    'full_code' => '08.01.52',
                    'description' => 'CAMARONES (CAB. EN SAN VICENTE) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:03',
                ),
            72 =>
                array(
                    'id' => 573,
                    'parent_id' => 92,
                    'code' => '53',
                    'full_code' => '08.01.53',
                    'description' => 'CRNEL. CARLOS CONCHA TORRES (CAB.EN HUELE)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:03',
                ),
            73 =>
                array(
                    'id' => 574,
                    'parent_id' => 92,
                    'code' => '54',
                    'full_code' => '08.01.54',
                    'description' => 'CHINCA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:03',
                ),
            74 =>
                array(
                    'id' => 575,
                    'parent_id' => 92,
                    'code' => '59',
                    'full_code' => '08.01.59',
                    'description' => 'MAJUA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:03',
                ),
            75 =>
                array(
                    'id' => 576,
                    'parent_id' => 92,
                    'code' => '63',
                    'full_code' => '08.01.63',
                    'description' => 'SAN MATEO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:57',
                ),
            76 =>
                array(
                    'id' => 577,
                    'parent_id' => 92,
                    'code' => '65',
                    'full_code' => '08.01.65',
                    'description' => 'TABIAZO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:03',
                ),
            77 =>
                array(
                    'id' => 578,
                    'parent_id' => 92,
                    'code' => '66',
                    'full_code' => '08.01.66',
                    'description' => 'TACHINA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:03',
                ),
            78 =>
                array(
                    'id' => 579,
                    'parent_id' => 92,
                    'code' => '68',
                    'full_code' => '08.01.68',
                    'description' => 'VUELTA LARGA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:03',
                ),
            79 =>
                array(
                    'id' => 580,
                    'parent_id' => 93,
                    'code' => '50',
                    'full_code' => '08.02.50',
                    'description' => 'VALDEZ (LIMONES)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:03',
                ),
            80 =>
                array(
                    'id' => 581,
                    'parent_id' => 93,
                    'code' => '51',
                    'full_code' => '08.02.51',
                    'description' => 'ANCHAYACU',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:57',
                ),
            81 =>
                array(
                    'id' => 582,
                    'parent_id' => 93,
                    'code' => '52',
                    'full_code' => '08.02.52',
                    'description' => 'ATAHUALPA (CAB. EN CAMARONES) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:03',
                ),
            82 =>
                array(
                    'id' => 583,
                    'parent_id' => 93,
                    'code' => '53',
                    'full_code' => '08.02.53',
                    'description' => 'BORBON',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:03',
                ),
            83 =>
                array(
                    'id' => 584,
                    'parent_id' => 93,
                    'code' => '54',
                    'full_code' => '08.02.54',
                    'description' => 'LA TOLA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:03',
                ),
            84 =>
                array(
                    'id' => 585,
                    'parent_id' => 93,
                    'code' => '55',
                    'full_code' => '08.02.55',
                    'description' => 'LUIS VARGAS TORRES (CAB. EN PLAYA DE ORO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:57',
                ),
            85 =>
                array(
                    'id' => 586,
                    'parent_id' => 93,
                    'code' => '56',
                    'full_code' => '08.02.56',
                    'description' => 'MALDONADO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:03',
                ),
            86 =>
                array(
                    'id' => 587,
                    'parent_id' => 93,
                    'code' => '57',
                    'full_code' => '08.02.57',
                    'description' => 'PAMPANAL DE BOLIVAR',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:04',
                ),
            87 =>
                array(
                    'id' => 588,
                    'parent_id' => 93,
                    'code' => '58',
                    'full_code' => '08.02.58',
                    'description' => 'SAN FRANCISCO DE ONZOLE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:04',
                ),
            88 =>
                array(
                    'id' => 589,
                    'parent_id' => 93,
                    'code' => '59',
                    'full_code' => '08.02.59',
                    'description' => 'SANTO DOMINGO DE ONZOLE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:04',
                ),
            89 =>
                array(
                    'id' => 590,
                    'parent_id' => 93,
                    'code' => '60',
                    'full_code' => '08.02.60',
                    'description' => 'SELVA ALEGRE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:04',
                ),
            90 =>
                array(
                    'id' => 591,
                    'parent_id' => 93,
                    'code' => '61',
                    'full_code' => '08.02.61',
                    'description' => 'TELEMBI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:04',
                ),
            91 =>
                array(
                    'id' => 592,
                    'parent_id' => 93,
                    'code' => '62',
                    'full_code' => '08.02.62',
                    'description' => 'COLON ELOY DEL MARIA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:57',
                ),
            92 =>
                array(
                    'id' => 593,
                    'parent_id' => 93,
                    'code' => '63',
                    'full_code' => '08.02.63',
                    'description' => 'SAN JOSE DE CAYAPAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:04',
                ),
            93 =>
                array(
                    'id' => 594,
                    'parent_id' => 93,
                    'code' => '64',
                    'full_code' => '08.02.64',
                    'description' => 'TIMBIRE  ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:04',
                ),
            94 =>
                array(
                    'id' => 595,
                    'parent_id' => 94,
                    'code' => '50',
                    'full_code' => '08.03.50',
                    'description' => 'MUISNE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:04',
                ),
            95 =>
                array(
                    'id' => 596,
                    'parent_id' => 94,
                    'code' => '51',
                    'full_code' => '08.03.51',
                    'description' => 'BOLIVAR',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:04',
                ),
            96 =>
                array(
                    'id' => 597,
                    'parent_id' => 94,
                    'code' => '52',
                    'full_code' => '08.03.52',
                    'description' => 'DAULE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:57',
                ),
            97 =>
                array(
                    'id' => 598,
                    'parent_id' => 94,
                    'code' => '53',
                    'full_code' => '08.03.53',
                    'description' => 'GALERA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:04',
                ),
            98 =>
                array(
                    'id' => 599,
                    'parent_id' => 94,
                    'code' => '54',
                    'full_code' => '08.03.54',
                    'description' => 'QUINGUE (OLMEDO PERDOMO FRANCO) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:04',
                ),
            99 =>
                array(
                    'id' => 600,
                    'parent_id' => 94,
                    'code' => '55',
                    'full_code' => '08.03.55',
                    'description' => 'SALIMA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:04',
                ),
            100 =>
                array(
                    'id' => 601,
                    'parent_id' => 94,
                    'code' => '56',
                    'full_code' => '08.03.56',
                    'description' => 'SAN FRANCISCO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:57',
                ),
            101 =>
                array(
                    'id' => 602,
                    'parent_id' => 94,
                    'code' => '57',
                    'full_code' => '08.03.57',
                    'description' => 'SAN GREGORIO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:58',
                ),
            102 =>
                array(
                    'id' => 603,
                    'parent_id' => 94,
                    'code' => '58',
                    'full_code' => '08.03.58',
                    'description' => 'SAN JOSE DE CHAMANGA (CAB.EN CHAMANGA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:58',
                ),
            103 =>
                array(
                    'id' => 604,
                    'parent_id' => 95,
                    'code' => '50',
                    'full_code' => '08.04.50',
                    'description' => 'ROSA ZARATE (QUININDE)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:04',
                ),
            104 =>
                array(
                    'id' => 605,
                    'parent_id' => 95,
                    'code' => '51',
                    'full_code' => '08.04.51',
                    'description' => 'CUBE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:04',
                ),
            105 =>
                array(
                    'id' => 606,
                    'parent_id' => 95,
                    'code' => '52',
                    'full_code' => '08.04.52',
                    'description' => 'CHURA (CHANCAMA) (CAB. EN EL YERBERO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:04',
                ),
            106 =>
                array(
                    'id' => 607,
                    'parent_id' => 95,
                    'code' => '53',
                    'full_code' => '08.04.53',
                    'description' => 'MALIMPIA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:04',
                ),
            107 =>
                array(
                    'id' => 608,
                    'parent_id' => 95,
                    'code' => '54',
                    'full_code' => '08.04.54',
                    'description' => 'VICHE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:04',
                ),
            108 =>
                array(
                    'id' => 609,
                    'parent_id' => 95,
                    'code' => '55',
                    'full_code' => '08.04.55',
                    'description' => 'LA UNION',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:05',
                ),
            109 =>
                array(
                    'id' => 610,
                    'parent_id' => 96,
                    'code' => '50',
                    'full_code' => '08.05.50',
                    'description' => 'SAN LORENZO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:05',
                ),
            110 =>
                array(
                    'id' => 611,
                    'parent_id' => 96,
                    'code' => '51',
                    'full_code' => '08.05.51',
                    'description' => 'ALTO TAMBO (CAB. EN GUADUAL) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:58',
                ),
            111 =>
                array(
                    'id' => 612,
                    'parent_id' => 96,
                    'code' => '52',
                    'full_code' => '08.05.52',
                    'description' => 'ANCON (PICHANGAL) (CAB. EN PALMA REAL) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:05',
                ),
            112 =>
                array(
                    'id' => 613,
                    'parent_id' => 96,
                    'code' => '53',
                    'full_code' => '08.05.53',
                    'description' => 'CALDERON',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:05',
                ),
            113 =>
                array(
                    'id' => 614,
                    'parent_id' => 96,
                    'code' => '54',
                    'full_code' => '08.05.54',
                    'description' => 'CARONDELET',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:05',
                ),
            114 =>
                array(
                    'id' => 615,
                    'parent_id' => 96,
                    'code' => '55',
                    'full_code' => '08.05.55',
                    'description' => '5 DE JUNIO (CAB. EN UIMBI) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:05',
                ),
            115 =>
                array(
                    'id' => 616,
                    'parent_id' => 96,
                    'code' => '56',
                    'full_code' => '08.05.56',
                    'description' => 'CONCEPCION',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:05',
                ),
            116 =>
                array(
                    'id' => 617,
                    'parent_id' => 96,
                    'code' => '57',
                    'full_code' => '08.05.57',
                    'description' => 'MATAJE (CAB. EN SANTANDER)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:58',
                ),
            117 =>
                array(
                    'id' => 618,
                    'parent_id' => 96,
                    'code' => '58',
                    'full_code' => '08.05.58',
                    'description' => 'SAN JAVIER DE CACHAVI (CAB. EN SAN JAVIER) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:05',
                ),
            118 =>
                array(
                    'id' => 619,
                    'parent_id' => 96,
                    'code' => '59',
                    'full_code' => '08.05.59',
                    'description' => 'SANTA RITA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:05',
                ),
            119 =>
                array(
                    'id' => 620,
                    'parent_id' => 96,
                    'code' => '60',
                    'full_code' => '08.05.60',
                    'description' => 'TAMBILLO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:05',
                ),
            120 =>
                array(
                    'id' => 621,
                    'parent_id' => 96,
                    'code' => '61',
                    'full_code' => '08.05.61',
                    'description' => 'TULULBI (CAB. EN RICAURTE)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:05',
                ),
            121 =>
                array(
                    'id' => 622,
                    'parent_id' => 96,
                    'code' => '62',
                    'full_code' => '08.05.62',
                    'description' => 'URBINA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:05',
                ),
            122 =>
                array(
                    'id' => 623,
                    'parent_id' => 97,
                    'code' => '50',
                    'full_code' => '08.06.50',
                    'description' => 'ATACAMES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:58',
                ),
            123 =>
                array(
                    'id' => 624,
                    'parent_id' => 97,
                    'code' => '51',
                    'full_code' => '08.06.51',
                    'description' => 'LA UNION',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:05',
                ),
            124 =>
                array(
                    'id' => 625,
                    'parent_id' => 97,
                    'code' => '52',
                    'full_code' => '08.06.52',
                    'description' => 'SUA  (CAB. EN LA BOCANA) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:05',
                ),
            125 =>
                array(
                    'id' => 626,
                    'parent_id' => 97,
                    'code' => '53',
                    'full_code' => '08.06.53',
                    'description' => 'TONCHIGÜE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:05',
                ),
            126 =>
                array(
                    'id' => 627,
                    'parent_id' => 97,
                    'code' => '54',
                    'full_code' => '08.06.54',
                    'description' => 'TONSUPA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:58',
                ),
            127 =>
                array(
                    'id' => 628,
                    'parent_id' => 98,
                    'code' => '50',
                    'full_code' => '08.07.50',
                    'description' => 'RIOVERDE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:05',
                ),
            128 =>
                array(
                    'id' => 629,
                    'parent_id' => 98,
                    'code' => '51',
                    'full_code' => '08.07.51',
                    'description' => 'CHONTADURO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:05',
                ),
            129 =>
                array(
                    'id' => 630,
                    'parent_id' => 98,
                    'code' => '52',
                    'full_code' => '08.07.52',
                    'description' => 'CHUMUNDE ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:05',
                ),
            130 =>
                array(
                    'id' => 631,
                    'parent_id' => 98,
                    'code' => '53',
                    'full_code' => '08.07.53',
                    'description' => 'LAGARTO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:58',
                ),
            131 =>
                array(
                    'id' => 632,
                    'parent_id' => 98,
                    'code' => '54',
                    'full_code' => '08.07.54',
                    'description' => 'MONTALVO (CAB. EN HORQUETA) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:06',
                ),
            132 =>
                array(
                    'id' => 633,
                    'parent_id' => 98,
                    'code' => '55',
                    'full_code' => '08.07.55',
                    'description' => 'ROCAFUERTE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:06',
                ),
            133 =>
                array(
                    'id' => 634,
                    'parent_id' => 99,
                    'code' => '50',
                    'full_code' => '08.08.50',
                    'description' => 'LA CONCORDIA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:06',
                ),
            134 =>
                array(
                    'id' => 635,
                    'parent_id' => 100,
                    'code' => '50',
                    'full_code' => '09.01.50',
                    'description' => 'GUAYAQUIL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:58',
                ),
            135 =>
                array(
                    'id' => 636,
                    'parent_id' => 100,
                    'code' => '52',
                    'full_code' => '09.01.52',
                    'description' => 'JUAN GOMEZ RENDON (PROGRESO) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:06',
                ),
            136 =>
                array(
                    'id' => 637,
                    'parent_id' => 100,
                    'code' => '53',
                    'full_code' => '09.01.53',
                    'description' => 'MORRO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:06',
                ),
            137 =>
                array(
                    'id' => 638,
                    'parent_id' => 100,
                    'code' => '56',
                    'full_code' => '09.01.56',
                    'description' => 'POSORJA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:06',
                ),
            138 =>
                array(
                    'id' => 639,
                    'parent_id' => 100,
                    'code' => '57',
                    'full_code' => '09.01.57',
                    'description' => 'PUNA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:06',
                ),
            139 =>
                array(
                    'id' => 640,
                    'parent_id' => 100,
                    'code' => '58',
                    'full_code' => '09.01.58',
                    'description' => 'TENGUEL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:58',
                ),
            140 =>
                array(
                    'id' => 641,
                    'parent_id' => 101,
                    'code' => '50',
                    'full_code' => '09.02.50',
                    'description' => 'ALFREDO BAQUERIZO MORENO (JUJAN)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:06',
                ),
            141 =>
                array(
                    'id' => 642,
                    'parent_id' => 102,
                    'code' => '50',
                    'full_code' => '09.03.50',
                    'description' => 'BALAO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:06',
                ),
            142 =>
                array(
                    'id' => 643,
                    'parent_id' => 103,
                    'code' => '50',
                    'full_code' => '09.04.50',
                    'description' => 'BALZAR',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:06',
                ),
            143 =>
                array(
                    'id' => 644,
                    'parent_id' => 104,
                    'code' => '50',
                    'full_code' => '09.05.50',
                    'description' => 'COLIMES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:06',
                ),
            144 =>
                array(
                    'id' => 645,
                    'parent_id' => 104,
                    'code' => '51',
                    'full_code' => '09.05.51',
                    'description' => 'SAN JACINTO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:58',
                ),
            145 =>
                array(
                    'id' => 646,
                    'parent_id' => 105,
                    'code' => '50',
                    'full_code' => '09.06.50',
                    'description' => 'DAULE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:06',
                ),
            146 =>
                array(
                    'id' => 647,
                    'parent_id' => 105,
                    'code' => '52',
                    'full_code' => '09.06.52',
                    'description' => 'JUAN BAUTISTA AGUIRRE (LOS TINTOS) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:06',
                ),
            147 =>
                array(
                    'id' => 648,
                    'parent_id' => 105,
                    'code' => '53',
                    'full_code' => '09.06.53',
                    'description' => 'LAUREL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:06',
                ),
            148 =>
                array(
                    'id' => 649,
                    'parent_id' => 105,
                    'code' => '54',
                    'full_code' => '09.06.54',
                    'description' => 'LIMONAL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:06',
                ),
            149 =>
                array(
                    'id' => 650,
                    'parent_id' => 105,
                    'code' => '56',
                    'full_code' => '09.06.56',
                    'description' => 'LOS LOJAS (ENRIQUE BAQUERIZO MORENO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:58',
                ),
            150 =>
                array(
                    'id' => 651,
                    'parent_id' => 106,
                    'code' => '50',
                    'full_code' => '09.07.50',
                    'description' => 'ELOY ALFARO (DURAN)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:06',
                ),
            151 =>
                array(
                    'id' => 652,
                    'parent_id' => 107,
                    'code' => '50',
                    'full_code' => '09.08.50',
                    'description' => 'VELASCO IBARRA (EL EMPALME)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:06',
                ),
            152 =>
                array(
                    'id' => 653,
                    'parent_id' => 107,
                    'code' => '51',
                    'full_code' => '09.08.51',
                    'description' => 'GUAYAS (PUEBLO NUEVO) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:07',
                ),
            153 =>
                array(
                    'id' => 654,
                    'parent_id' => 107,
                    'code' => '52',
                    'full_code' => '09.08.52',
                    'description' => 'EL ROSARIO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:07',
                ),
            154 =>
                array(
                    'id' => 655,
                    'parent_id' => 108,
                    'code' => '50',
                    'full_code' => '09.09.50',
                    'description' => 'EL TRIUNFO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:07',
                ),
            155 =>
                array(
                    'id' => 656,
                    'parent_id' => 109,
                    'code' => '50',
                    'full_code' => '09.10.50',
                    'description' => 'MILAGRO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:58',
                ),
            156 =>
                array(
                    'id' => 657,
                    'parent_id' => 109,
                    'code' => '51',
                    'full_code' => '09.10.51',
                    'description' => 'CHOBO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:07',
                ),
            157 =>
                array(
                    'id' => 658,
                    'parent_id' => 109,
                    'code' => '53',
                    'full_code' => '09.10.53',
                    'description' => 'MARISCAL SUCRE (HUAQUES)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:07',
                ),
            158 =>
                array(
                    'id' => 659,
                    'parent_id' => 109,
                    'code' => '54',
                    'full_code' => '09.10.54',
                    'description' => 'ROBERTO ASTUDILLO (CAB. EN CRUCE DE VENECIA) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:58',
                ),
            159 =>
                array(
                    'id' => 660,
                    'parent_id' => 110,
                    'code' => '50',
                    'full_code' => '09.11.50',
                    'description' => 'NARANJAL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:07',
                ),
            160 =>
                array(
                    'id' => 661,
                    'parent_id' => 110,
                    'code' => '51',
                    'full_code' => '09.11.51',
                    'description' => 'JESUS MARIA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:07',
                ),
            161 =>
                array(
                    'id' => 662,
                    'parent_id' => 110,
                    'code' => '52',
                    'full_code' => '09.11.52',
                    'description' => 'SAN CARLOS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:07',
                ),
            162 =>
                array(
                    'id' => 663,
                    'parent_id' => 110,
                    'code' => '53',
                    'full_code' => '09.11.53',
                    'description' => 'SANTA ROSA DE FLANDES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:07',
                ),
            163 =>
                array(
                    'id' => 664,
                    'parent_id' => 110,
                    'code' => '54',
                    'full_code' => '09.11.54',
                    'description' => 'TAURA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:07',
                ),
            164 =>
                array(
                    'id' => 665,
                    'parent_id' => 111,
                    'code' => '50',
                    'full_code' => '09.12.50',
                    'description' => 'NARANJITO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:07',
                ),
            165 =>
                array(
                    'id' => 666,
                    'parent_id' => 112,
                    'code' => '50',
                    'full_code' => '09.13.50',
                    'description' => 'PALESTINA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:07',
                ),
            166 =>
                array(
                    'id' => 667,
                    'parent_id' => 113,
                    'code' => '50',
                    'full_code' => '09.14.50',
                    'description' => 'PEDRO CARBO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:58',
                ),
            167 =>
                array(
                    'id' => 668,
                    'parent_id' => 113,
                    'code' => '51',
                    'full_code' => '09.14.51',
                    'description' => 'VALLE DE LA VIRGEN ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:07',
                ),
            168 =>
                array(
                    'id' => 669,
                    'parent_id' => 113,
                    'code' => '52',
                    'full_code' => '09.14.52',
                    'description' => 'SABANILLA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:07',
                ),
            169 =>
                array(
                    'id' => 670,
                    'parent_id' => 114,
                    'code' => '50',
                    'full_code' => '09.16.50',
                    'description' => 'SAMBORONDON',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:07',
                ),
            170 =>
                array(
                    'id' => 671,
                    'parent_id' => 114,
                    'code' => '51',
                    'full_code' => '09.16.51',
                    'description' => 'TARIFA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:58',
                ),
            171 =>
                array(
                    'id' => 672,
                    'parent_id' => 115,
                    'code' => '50',
                    'full_code' => '09.18.50',
                    'description' => 'SANTA LUCIA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:07',
                ),
            172 =>
                array(
                    'id' => 673,
                    'parent_id' => 116,
                    'code' => '50',
                    'full_code' => '09.19.50',
                    'description' => 'EL SALITRE (LAS RAMAS)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:07',
                ),
            173 =>
                array(
                    'id' => 674,
                    'parent_id' => 116,
                    'code' => '51',
                    'full_code' => '09.19.51',
                    'description' => 'GRAL. VERNAZA (DOS ESTEROS) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:07',
                ),
            174 =>
                array(
                    'id' => 675,
                    'parent_id' => 116,
                    'code' => '52',
                    'full_code' => '09.19.52',
                    'description' => 'LA VICTORIA (ÑAUZA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:58',
                ),
            175 =>
                array(
                    'id' => 676,
                    'parent_id' => 116,
                    'code' => '53',
                    'full_code' => '09.19.53',
                    'description' => 'JUNQUILLAL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:08',
                ),
            176 =>
                array(
                    'id' => 677,
                    'parent_id' => 117,
                    'code' => '50',
                    'full_code' => '09.20.50',
                    'description' => 'SAN JACINTO DE YAGUACHI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:08',
                ),
            177 =>
                array(
                    'id' => 678,
                    'parent_id' => 117,
                    'code' => '53',
                    'full_code' => '09.20.53',
                    'description' => 'GRAL. PEDRO J. MONTERO (BOLICHE) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:08',
                ),
            178 =>
                array(
                    'id' => 679,
                    'parent_id' => 117,
                    'code' => '55',
                    'full_code' => '09.20.55',
                    'description' => 'YAGUACHI VIEJO (CONE)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:08',
                ),
            179 =>
                array(
                    'id' => 680,
                    'parent_id' => 117,
                    'code' => '56',
                    'full_code' => '09.20.56',
                    'description' => 'VIRGEN DE FATIMA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:58',
                ),
            180 =>
                array(
                    'id' => 681,
                    'parent_id' => 118,
                    'code' => '50',
                    'full_code' => '09.21.50',
                    'description' => 'GENERAL VILLAMIL (PLAYAS)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:08',
                ),
            181 =>
                array(
                    'id' => 682,
                    'parent_id' => 119,
                    'code' => '50',
                    'full_code' => '09.22.50',
                    'description' => 'SIMONBOLIVAR',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:08',
                ),
            182 =>
                array(
                    'id' => 683,
                    'parent_id' => 119,
                    'code' => '51',
                    'full_code' => '09.22.51',
                    'description' => 'CRNEL.LORENZO DE GARAICOA (PEDREGAL)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:08',
                ),
            183 =>
                array(
                    'id' => 684,
                    'parent_id' => 120,
                    'code' => '50',
                    'full_code' => '09.23.50',
                    'description' => 'CORONEL MARCELINO MARIDUEÑA (SAN CARLOS)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:58',
                ),
            184 =>
                array(
                    'id' => 685,
                    'parent_id' => 121,
                    'code' => '50',
                    'full_code' => '09.24.50',
                    'description' => 'LOMAS DE SARGENTILLO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:08',
                ),
            185 =>
                array(
                    'id' => 686,
                    'parent_id' => 122,
                    'code' => '50',
                    'full_code' => '09.25.50',
                    'description' => 'NARCISA DE JESUS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:08',
                ),
            186 =>
                array(
                    'id' => 687,
                    'parent_id' => 123,
                    'code' => '50',
                    'full_code' => '09.27.50',
                    'description' => 'GENERAL ANTONIO ELIZALDE (BUCAY)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:08',
                ),
            187 =>
                array(
                    'id' => 688,
                    'parent_id' => 124,
                    'code' => '50',
                    'full_code' => '09.28.50',
                    'description' => 'ISIDRO AYORA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:08',
                ),
            188 =>
                array(
                    'id' => 689,
                    'parent_id' => 125,
                    'code' => '50',
                    'full_code' => '10.01.50',
                    'description' => 'SAN MIGUEL DE IBARRA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:08',
                ),
            189 =>
                array(
                    'id' => 690,
                    'parent_id' => 125,
                    'code' => '51',
                    'full_code' => '10.01.51',
                    'description' => 'AMBUQUI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:08',
                ),
            190 =>
                array(
                    'id' => 691,
                    'parent_id' => 125,
                    'code' => '52',
                    'full_code' => '10.01.52',
                    'description' => 'ANGOCHAGUA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:59',
                ),
            191 =>
                array(
                    'id' => 692,
                    'parent_id' => 125,
                    'code' => '53',
                    'full_code' => '10.01.53',
                    'description' => 'CAROLINA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:08',
                ),
            192 =>
                array(
                    'id' => 693,
                    'parent_id' => 125,
                    'code' => '54',
                    'full_code' => '10.01.54',
                    'description' => 'LA ESPERANZA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:08',
                ),
            193 =>
                array(
                    'id' => 694,
                    'parent_id' => 125,
                    'code' => '55',
                    'full_code' => '10.01.55',
                    'description' => 'LITA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:08',
                ),
            194 =>
                array(
                    'id' => 695,
                    'parent_id' => 125,
                    'code' => '56',
                    'full_code' => '10.01.56',
                    'description' => 'SALINAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:08',
                ),
            195 =>
                array(
                    'id' => 696,
                    'parent_id' => 125,
                    'code' => '57',
                    'full_code' => '10.01.57',
                    'description' => 'SAN ANTONIO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:59',
                ),
            196 =>
                array(
                    'id' => 697,
                    'parent_id' => 126,
                    'code' => '50',
                    'full_code' => '10.02.50',
                    'description' => 'ATUNTAQUI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:09',
                ),
            197 =>
                array(
                    'id' => 698,
                    'parent_id' => 126,
                    'code' => '51',
                    'full_code' => '10.02.51',
                    'description' => 'IMBAYA (SAN LUIS DE COBUENDO) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:09',
                ),
            198 =>
                array(
                    'id' => 699,
                    'parent_id' => 126,
                    'code' => '52',
                    'full_code' => '10.02.52',
                    'description' => 'SAN FRANCISCO DE NATABUELA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:09',
                ),
            199 =>
                array(
                    'id' => 700,
                    'parent_id' => 126,
                    'code' => '53',
                    'full_code' => '10.02.53',
                    'description' => 'SAN JOSE DE CHALTURA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:59',
                ),
            200 =>
                array(
                    'id' => 701,
                    'parent_id' => 126,
                    'code' => '54',
                    'full_code' => '10.02.54',
                    'description' => 'SAN ROQUE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:09',
                ),
            201 =>
                array(
                    'id' => 702,
                    'parent_id' => 127,
                    'code' => '50',
                    'full_code' => '10.03.50',
                    'description' => 'COTACACHI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:09',
                ),
            202 =>
                array(
                    'id' => 703,
                    'parent_id' => 127,
                    'code' => '51',
                    'full_code' => '10.03.51',
                    'description' => 'APUELA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:09',
                ),
            203 =>
                array(
                    'id' => 704,
                    'parent_id' => 127,
                    'code' => '52',
                    'full_code' => '10.03.52',
                    'description' => 'GARCIA MORENO  (LLURIMAGUA) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:59',
                ),
            204 =>
                array(
                    'id' => 705,
                    'parent_id' => 127,
                    'code' => '53',
                    'full_code' => '10.03.53',
                    'description' => 'IMANTAG',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:09',
                ),
            205 =>
                array(
                    'id' => 706,
                    'parent_id' => 127,
                    'code' => '54',
                    'full_code' => '10.03.54',
                    'description' => 'PEÑAHERRERA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:09',
                ),
            206 =>
                array(
                    'id' => 707,
                    'parent_id' => 127,
                    'code' => '55',
                    'full_code' => '10.03.55',
                    'description' => 'PLAZA GUTIERREZ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:09',
                ),
            207 =>
                array(
                    'id' => 708,
                    'parent_id' => 127,
                    'code' => '56',
                    'full_code' => '10.03.56',
                    'description' => 'QUIROGA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:09',
                ),
            208 =>
                array(
                    'id' => 709,
                    'parent_id' => 127,
                    'code' => '57',
                    'full_code' => '10.03.57',
                    'description' => '6 DE JULIO DE CUELLAJE (CAB. EN CUELLAJE)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:59',
                ),
            209 =>
                array(
                    'id' => 710,
                    'parent_id' => 127,
                    'code' => '58',
                    'full_code' => '10.03.58',
                    'description' => 'VACAS GALINDO (EL CHURO) (CAB.EN SAN MIGUEL ALTO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:09',
                ),
            210 =>
                array(
                    'id' => 711,
                    'parent_id' => 128,
                    'code' => '50',
                    'full_code' => '10.04.50',
                    'description' => 'OTAVALO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:09',
                ),
            211 =>
                array(
                    'id' => 712,
                    'parent_id' => 128,
                    'code' => '51',
                    'full_code' => '10.04.51',
                    'description' => 'DR. MIGUEL EGAS CABEZAS (PEGUCHE) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:09',
                ),
            212 =>
                array(
                    'id' => 713,
                    'parent_id' => 128,
                    'code' => '52',
                    'full_code' => '10.04.52',
                    'description' => 'EUGENIO ESPEJO (CALPAQUI) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:09',
                ),
            213 =>
                array(
                    'id' => 714,
                    'parent_id' => 128,
                    'code' => '53',
                    'full_code' => '10.04.53',
                    'description' => 'GONZALEZ SUAREZ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:09',
                ),
            214 =>
                array(
                    'id' => 715,
                    'parent_id' => 128,
                    'code' => '54',
                    'full_code' => '10.04.54',
                    'description' => 'PATAQUI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:09',
                ),
            215 =>
                array(
                    'id' => 716,
                    'parent_id' => 128,
                    'code' => '55',
                    'full_code' => '10.04.55',
                    'description' => 'SAN JOSE DE QUICHINCHE ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:59',
                ),
            216 =>
                array(
                    'id' => 717,
                    'parent_id' => 128,
                    'code' => '56',
                    'full_code' => '10.04.56',
                    'description' => 'SAN JUAN DE ILUMAN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:09',
                ),
            217 =>
                array(
                    'id' => 718,
                    'parent_id' => 128,
                    'code' => '57',
                    'full_code' => '10.04.57',
                    'description' => 'SAN PABLO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:09',
                ),
            218 =>
                array(
                    'id' => 719,
                    'parent_id' => 128,
                    'code' => '58',
                    'full_code' => '10.04.58',
                    'description' => 'SAN RAFAEL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:10',
                ),
            219 =>
                array(
                    'id' => 720,
                    'parent_id' => 128,
                    'code' => '59',
                    'full_code' => '10.04.59',
                    'description' => 'SELVA ALEGRE (CAB.EN SAN MIGUEL DE PAMPLONA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:59',
                ),
            220 =>
                array(
                    'id' => 721,
                    'parent_id' => 129,
                    'code' => '50',
                    'full_code' => '10.05.50',
                    'description' => 'PIMAMPIRO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:10',
                ),
            221 =>
                array(
                    'id' => 722,
                    'parent_id' => 129,
                    'code' => '51',
                    'full_code' => '10.05.51',
                    'description' => 'CHUGA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:10',
                ),
            222 =>
                array(
                    'id' => 723,
                    'parent_id' => 129,
                    'code' => '52',
                    'full_code' => '10.05.52',
                    'description' => 'MARIANO ACOSTA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:10',
                ),
            223 =>
                array(
                    'id' => 724,
                    'parent_id' => 129,
                    'code' => '53',
                    'full_code' => '10.05.53',
                    'description' => 'SAN FRANCISCO DE SIGSIPAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:10',
                ),
            224 =>
                array(
                    'id' => 725,
                    'parent_id' => 130,
                    'code' => '50',
                    'full_code' => '10.06.50',
                    'description' => 'URCUQUI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:10',
                ),
            225 =>
                array(
                    'id' => 726,
                    'parent_id' => 130,
                    'code' => '51',
                    'full_code' => '10.06.51',
                    'description' => 'CAHUASQUI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:10',
                ),
            226 =>
                array(
                    'id' => 727,
                    'parent_id' => 130,
                    'code' => '52',
                    'full_code' => '10.06.52',
                    'description' => 'LA MERCED DE BUENOS AIRES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:59',
                ),
            227 =>
                array(
                    'id' => 728,
                    'parent_id' => 130,
                    'code' => '53',
                    'full_code' => '10.06.53',
                    'description' => 'PABLO ARENAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:10',
                ),
            228 =>
                array(
                    'id' => 729,
                    'parent_id' => 130,
                    'code' => '54',
                    'full_code' => '10.06.54',
                    'description' => 'SAN BLAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:10',
                ),
            229 =>
                array(
                    'id' => 730,
                    'parent_id' => 130,
                    'code' => '55',
                    'full_code' => '10.06.55',
                    'description' => 'TUMBABIRO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:10',
                ),
            230 =>
                array(
                    'id' => 731,
                    'parent_id' => 131,
                    'code' => '50',
                    'full_code' => '11.01.50',
                    'description' => 'LOJA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:10',
                ),
            231 =>
                array(
                    'id' => 732,
                    'parent_id' => 131,
                    'code' => '51',
                    'full_code' => '11.01.51',
                    'description' => 'CHANTACO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:10',
                ),
            232 =>
                array(
                    'id' => 733,
                    'parent_id' => 131,
                    'code' => '52',
                    'full_code' => '11.01.52',
                    'description' => 'CHUQUIRIBAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:59',
                ),
            233 =>
                array(
                    'id' => 734,
                    'parent_id' => 131,
                    'code' => '53',
                    'full_code' => '11.01.53',
                    'description' => 'EL CISNE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:10',
                ),
            234 =>
                array(
                    'id' => 735,
                    'parent_id' => 131,
                    'code' => '54',
                    'full_code' => '11.01.54',
                    'description' => 'GUALEL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:10',
                ),
            235 =>
                array(
                    'id' => 736,
                    'parent_id' => 131,
                    'code' => '55',
                    'full_code' => '11.01.55',
                    'description' => 'JIMBILLA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:10',
                ),
            236 =>
                array(
                    'id' => 737,
                    'parent_id' => 131,
                    'code' => '56',
                    'full_code' => '11.01.56',
                    'description' => 'MALACATOS (VALLADOLID) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:59',
                ),
            237 =>
                array(
                    'id' => 738,
                    'parent_id' => 131,
                    'code' => '57',
                    'full_code' => '11.01.57',
                    'description' => 'SAN LUCAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:10',
                ),
            238 =>
                array(
                    'id' => 739,
                    'parent_id' => 131,
                    'code' => '58',
                    'full_code' => '11.01.58',
                    'description' => 'SAN PEDRO DE VILCABAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:10',
                ),
            239 =>
                array(
                    'id' => 740,
                    'parent_id' => 131,
                    'code' => '59',
                    'full_code' => '11.01.59',
                    'description' => 'SANTIAGO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:11',
                ),
            240 =>
                array(
                    'id' => 741,
                    'parent_id' => 131,
                    'code' => '60',
                    'full_code' => '11.01.60',
                    'description' => 'TAQUIL (MIGUEL RIOFRIO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:11',
                ),
            241 =>
                array(
                    'id' => 742,
                    'parent_id' => 131,
                    'code' => '61',
                    'full_code' => '11.01.61',
                    'description' => 'VILCABAMBA  (VICTORIA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:59',
                ),
            242 =>
                array(
                    'id' => 743,
                    'parent_id' => 131,
                    'code' => '62',
                    'full_code' => '11.01.62',
                    'description' => 'YANGANA (ARSENIO CASTILLO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:11',
                ),
            243 =>
                array(
                    'id' => 744,
                    'parent_id' => 131,
                    'code' => '63',
                    'full_code' => '11.01.63',
                    'description' => 'QUINARA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:11',
                ),
            244 =>
                array(
                    'id' => 745,
                    'parent_id' => 132,
                    'code' => '50',
                    'full_code' => '11.02.50',
                    'description' => 'CARIAMANGA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:11',
                ),
            245 =>
                array(
                    'id' => 746,
                    'parent_id' => 132,
                    'code' => '51',
                    'full_code' => '11.02.51',
                    'description' => 'COLAISACA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:11',
                ),
            246 =>
                array(
                    'id' => 747,
                    'parent_id' => 132,
                    'code' => '52',
                    'full_code' => '11.02.52',
                    'description' => 'EL LUCERO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:11',
                ),
            247 =>
                array(
                    'id' => 748,
                    'parent_id' => 132,
                    'code' => '53',
                    'full_code' => '11.02.53',
                    'description' => 'UTUANA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:59',
                ),
            248 =>
                array(
                    'id' => 749,
                    'parent_id' => 132,
                    'code' => '54',
                    'full_code' => '11.02.54',
                    'description' => 'SANGUILLIN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:11',
                ),
            249 =>
                array(
                    'id' => 750,
                    'parent_id' => 133,
                    'code' => '50',
                    'full_code' => '11.03.50',
                    'description' => 'CATAMAYO (LA TOMA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:11',
                ),
            250 =>
                array(
                    'id' => 751,
                    'parent_id' => 133,
                    'code' => '51',
                    'full_code' => '11.03.51',
                    'description' => 'EL TAMBO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:11',
                ),
            251 =>
                array(
                    'id' => 752,
                    'parent_id' => 133,
                    'code' => '52',
                    'full_code' => '11.03.52',
                    'description' => 'GUAYQUICHUMA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:59',
                ),
            252 =>
                array(
                    'id' => 753,
                    'parent_id' => 133,
                    'code' => '53',
                    'full_code' => '11.03.53',
                    'description' => 'SAN PEDRO DE LA BENDITA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:11',
                ),
            253 =>
                array(
                    'id' => 754,
                    'parent_id' => 133,
                    'code' => '54',
                    'full_code' => '11.03.54',
                    'description' => 'ZAMBI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:11',
                ),
            254 =>
                array(
                    'id' => 755,
                    'parent_id' => 134,
                    'code' => '50',
                    'full_code' => '11.04.50',
                    'description' => 'CELICA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:11',
                ),
            255 =>
                array(
                    'id' => 756,
                    'parent_id' => 134,
                    'code' => '51',
                    'full_code' => '11.04.51',
                    'description' => 'CRUZPAMBA (CAB. EN CARLOS BUSTAMANTE)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:59',
                ),
            256 =>
                array(
                    'id' => 757,
                    'parent_id' => 134,
                    'code' => '55',
                    'full_code' => '11.04.55',
                    'description' => 'POZUL (SAN JUAN DE POZUL)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:11',
                ),
            257 =>
                array(
                    'id' => 758,
                    'parent_id' => 134,
                    'code' => '56',
                    'full_code' => '11.04.56',
                    'description' => 'SABANILLA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:11',
                ),
            258 =>
                array(
                    'id' => 759,
                    'parent_id' => 134,
                    'code' => '57',
                    'full_code' => '11.04.57',
                    'description' => 'TNTE. MAXIMILIANO RODRIGUEZ LOAIZA ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:11',
                ),
            259 =>
                array(
                    'id' => 760,
                    'parent_id' => 135,
                    'code' => '50',
                    'full_code' => '11.05.50',
                    'description' => 'CHAGUARPAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:11',
                ),
            260 =>
                array(
                    'id' => 761,
                    'parent_id' => 135,
                    'code' => '51',
                    'full_code' => '11.05.51',
                    'description' => 'BUENAVISTA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:11',
                ),
            261 =>
                array(
                    'id' => 762,
                    'parent_id' => 135,
                    'code' => '52',
                    'full_code' => '11.05.52',
                    'description' => 'EL ROSARIO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:59',
                ),
            262 =>
                array(
                    'id' => 763,
                    'parent_id' => 135,
                    'code' => '53',
                    'full_code' => '11.05.53',
                    'description' => 'SANTA RUFINA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:12',
                ),
            263 =>
                array(
                    'id' => 764,
                    'parent_id' => 135,
                    'code' => '54',
                    'full_code' => '11.05.54',
                    'description' => 'AMARILLOS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:12',
                ),
            264 =>
                array(
                    'id' => 765,
                    'parent_id' => 136,
                    'code' => '50',
                    'full_code' => '11.06.50',
                    'description' => 'AMALUZA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:12',
                ),
            265 =>
                array(
                    'id' => 766,
                    'parent_id' => 136,
                    'code' => '51',
                    'full_code' => '11.06.51',
                    'description' => 'BELLAVISTA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:12',
                ),
            266 =>
                array(
                    'id' => 767,
                    'parent_id' => 136,
                    'code' => '52',
                    'full_code' => '11.06.52',
                    'description' => 'JIMBURA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:59',
                ),
            267 =>
                array(
                    'id' => 768,
                    'parent_id' => 136,
                    'code' => '53',
                    'full_code' => '11.06.53',
                    'description' => 'SANTA TERESITA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:12',
                ),
            268 =>
                array(
                    'id' => 769,
                    'parent_id' => 136,
                    'code' => '54',
                    'full_code' => '11.06.54',
                    'description' => '27 DE ABRIL (CAB. EN LA NARANJA) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:12',
                ),
            269 =>
                array(
                    'id' => 770,
                    'parent_id' => 136,
                    'code' => '55',
                    'full_code' => '11.06.55',
                    'description' => 'EL INGENIO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:12',
                ),
            270 =>
                array(
                    'id' => 771,
                    'parent_id' => 136,
                    'code' => '56',
                    'full_code' => '11.06.56',
                    'description' => 'EL AIRO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:59',
                ),
            271 =>
                array(
                    'id' => 772,
                    'parent_id' => 137,
                    'code' => '50',
                    'full_code' => '11.07.50',
                    'description' => 'GONZANAMA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:12',
                ),
            272 =>
                array(
                    'id' => 773,
                    'parent_id' => 137,
                    'code' => '51',
                    'full_code' => '11.07.51',
                    'description' => 'CHANGAIMINA (LA LIBERTAD) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:12',
                ),
            273 =>
                array(
                    'id' => 774,
                    'parent_id' => 137,
                    'code' => '53',
                    'full_code' => '11.07.53',
                    'description' => 'NAMBACOLA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:12',
                ),
            274 =>
                array(
                    'id' => 775,
                    'parent_id' => 137,
                    'code' => '54',
                    'full_code' => '11.07.54',
                    'description' => 'PURUNUMA (EGUIGUREN) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:00',
                ),
            275 =>
                array(
                    'id' => 776,
                    'parent_id' => 137,
                    'code' => '56',
                    'full_code' => '11.07.56',
                    'description' => 'SACAPALCA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:12',
                ),
            276 =>
                array(
                    'id' => 777,
                    'parent_id' => 138,
                    'code' => '50',
                    'full_code' => '11.08.50',
                    'description' => 'MACARA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:12',
                ),
            277 =>
                array(
                    'id' => 778,
                    'parent_id' => 138,
                    'code' => '51',
                    'full_code' => '11.08.51',
                    'description' => 'LARAMA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:12',
                ),
            278 =>
                array(
                    'id' => 779,
                    'parent_id' => 138,
                    'code' => '52',
                    'full_code' => '11.08.52',
                    'description' => 'LA VICTORIA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:12',
                ),
            279 =>
                array(
                    'id' => 780,
                    'parent_id' => 138,
                    'code' => '53',
                    'full_code' => '11.08.53',
                    'description' => 'SABIANGO (LA CAPILLA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:00',
                ),
            280 =>
                array(
                    'id' => 781,
                    'parent_id' => 139,
                    'code' => '50',
                    'full_code' => '11.09.50',
                    'description' => 'CATACOCHA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:12',
                ),
            281 =>
                array(
                    'id' => 782,
                    'parent_id' => 139,
                    'code' => '51',
                    'full_code' => '11.09.51',
                    'description' => 'CANGONAMA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:12',
                ),
            282 =>
                array(
                    'id' => 783,
                    'parent_id' => 139,
                    'code' => '52',
                    'full_code' => '11.09.52',
                    'description' => 'GUACHANAMA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:13',
                ),
            283 =>
                array(
                    'id' => 784,
                    'parent_id' => 139,
                    'code' => '54',
                    'full_code' => '11.09.54',
                    'description' => 'LAURO GUERRERO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:00',
                ),
            284 =>
                array(
                    'id' => 785,
                    'parent_id' => 139,
                    'code' => '56',
                    'full_code' => '11.09.56',
                    'description' => 'ORIANGA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:13',
                ),
            285 =>
                array(
                    'id' => 786,
                    'parent_id' => 139,
                    'code' => '57',
                    'full_code' => '11.09.57',
                    'description' => 'SAN ANTONIO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:13',
                ),
            286 =>
                array(
                    'id' => 787,
                    'parent_id' => 139,
                    'code' => '58',
                    'full_code' => '11.09.58',
                    'description' => 'CASANGA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:13',
                ),
            287 =>
                array(
                    'id' => 788,
                    'parent_id' => 139,
                    'code' => '59',
                    'full_code' => '11.09.59',
                    'description' => 'YAMANA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:13',
                ),
            288 =>
                array(
                    'id' => 789,
                    'parent_id' => 140,
                    'code' => '50',
                    'full_code' => '11.10.50',
                    'description' => 'ALAMOR',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:13',
                ),
            289 =>
                array(
                    'id' => 790,
                    'parent_id' => 140,
                    'code' => '51',
                    'full_code' => '11.10.51',
                    'description' => 'CIANO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:00',
                ),
            290 =>
                array(
                    'id' => 791,
                    'parent_id' => 140,
                    'code' => '52',
                    'full_code' => '11.10.52',
                    'description' => 'EL ARENAL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:13',
                ),
            291 =>
                array(
                    'id' => 792,
                    'parent_id' => 140,
                    'code' => '53',
                    'full_code' => '11.10.53',
                    'description' => 'EL LIMO (MARIANA DE JESUS)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:00',
                ),
            292 =>
                array(
                    'id' => 793,
                    'parent_id' => 140,
                    'code' => '54',
                    'full_code' => '11.10.54',
                    'description' => 'MERCADILLO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:13',
                ),
            293 =>
                array(
                    'id' => 794,
                    'parent_id' => 140,
                    'code' => '55',
                    'full_code' => '11.10.55',
                    'description' => 'VICENTINO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:13',
                ),
            294 =>
                array(
                    'id' => 795,
                    'parent_id' => 141,
                    'code' => '50',
                    'full_code' => '11.11.50',
                    'description' => 'SARAGURO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:00',
                ),
            295 =>
                array(
                    'id' => 796,
                    'parent_id' => 141,
                    'code' => '51',
                    'full_code' => '11.11.51',
                    'description' => 'EL PARAISO DE CELEN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:13',
                ),
            296 =>
                array(
                    'id' => 797,
                    'parent_id' => 141,
                    'code' => '52',
                    'full_code' => '11.11.52',
                    'description' => 'EL TABLON  ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:13',
                ),
            297 =>
                array(
                    'id' => 798,
                    'parent_id' => 141,
                    'code' => '53',
                    'full_code' => '11.11.53',
                    'description' => 'LLUZHAPA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:13',
                ),
            298 =>
                array(
                    'id' => 799,
                    'parent_id' => 141,
                    'code' => '54',
                    'full_code' => '11.11.54',
                    'description' => 'MANU',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:13',
                ),
            299 =>
                array(
                    'id' => 800,
                    'parent_id' => 141,
                    'code' => '55',
                    'full_code' => '11.11.55',
                    'description' => 'SAN ANTONIO DE QUMBE (CUMBE)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:00',
                ),
            300 =>
                array(
                    'id' => 801,
                    'parent_id' => 141,
                    'code' => '56',
                    'full_code' => '11.11.56',
                    'description' => 'SAN PABLO DE TENTA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:13',
                ),
            301 =>
                array(
                    'id' => 802,
                    'parent_id' => 141,
                    'code' => '57',
                    'full_code' => '11.11.57',
                    'description' => 'SAN SEBASTIAN DE YULUC',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:13',
                ),
            302 =>
                array(
                    'id' => 803,
                    'parent_id' => 141,
                    'code' => '58',
                    'full_code' => '11.11.58',
                    'description' => 'SELVA ALEGRE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:13',
                ),
            303 =>
                array(
                    'id' => 804,
                    'parent_id' => 141,
                    'code' => '59',
                    'full_code' => '11.11.59',
                    'description' => 'URDANETA (PAQUISHAPA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:14',
                ),
            304 =>
                array(
                    'id' => 805,
                    'parent_id' => 141,
                    'code' => '60',
                    'full_code' => '11.11.60',
                    'description' => 'SUMAYPAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:00',
                ),
            305 =>
                array(
                    'id' => 806,
                    'parent_id' => 142,
                    'code' => '50',
                    'full_code' => '11.12.50',
                    'description' => 'SOZORANGA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:14',
                ),
            306 =>
                array(
                    'id' => 807,
                    'parent_id' => 142,
                    'code' => '51',
                    'full_code' => '11.12.51',
                    'description' => 'NUEVA FATIMA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:14',
                ),
            307 =>
                array(
                    'id' => 808,
                    'parent_id' => 142,
                    'code' => '52',
                    'full_code' => '11.12.52',
                    'description' => 'TACAMOROS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:14',
                ),
            308 =>
                array(
                    'id' => 809,
                    'parent_id' => 143,
                    'code' => '50',
                    'full_code' => '11.13.50',
                    'description' => 'ZAPOTILLO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:00',
                ),
            309 =>
                array(
                    'id' => 810,
                    'parent_id' => 143,
                    'code' => '51',
                    'full_code' => '11.13.51',
                    'description' => 'CAZADEROS (CAB.EN MANGAURCO) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:14',
                ),
            310 =>
                array(
                    'id' => 811,
                    'parent_id' => 143,
                    'code' => '52',
                    'full_code' => '11.13.52',
                    'description' => 'GARZAREAL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:14',
                ),
            311 =>
                array(
                    'id' => 812,
                    'parent_id' => 143,
                    'code' => '53',
                    'full_code' => '11.13.53',
                    'description' => 'LIMONES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:14',
                ),
            312 =>
                array(
                    'id' => 813,
                    'parent_id' => 143,
                    'code' => '54',
                    'full_code' => '11.13.54',
                    'description' => 'PALETILLAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:00',
                ),
            313 =>
                array(
                    'id' => 814,
                    'parent_id' => 143,
                    'code' => '55',
                    'full_code' => '11.13.55',
                    'description' => 'BOLASPAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:14',
                ),
            314 =>
                array(
                    'id' => 815,
                    'parent_id' => 144,
                    'code' => '50',
                    'full_code' => '11.14.50',
                    'description' => 'PINDAL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:14',
                ),
            315 =>
                array(
                    'id' => 816,
                    'parent_id' => 144,
                    'code' => '51',
                    'full_code' => '11.14.51',
                    'description' => 'CHAQUINAL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:14',
                ),
            316 =>
                array(
                    'id' => 817,
                    'parent_id' => 144,
                    'code' => '52',
                    'full_code' => '11.14.52',
                    'description' => '12 DE DICIEMBRE (CAB.EN ACHIOTES)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:00',
                ),
            317 =>
                array(
                    'id' => 818,
                    'parent_id' => 145,
                    'code' => '50',
                    'full_code' => '11.15.50',
                    'description' => 'QUILANGA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:14',
                ),
            318 =>
                array(
                    'id' => 819,
                    'parent_id' => 145,
                    'code' => '51',
                    'full_code' => '11.15.51',
                    'description' => 'FUNDOCHAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:14',
                ),
            319 =>
                array(
                    'id' => 820,
                    'parent_id' => 145,
                    'code' => '52',
                    'full_code' => '11.15.52',
                    'description' => 'SAN ANTONIO DE LAS ARADAS (CAB. EN LAS ARADAS)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:14',
                ),
            320 =>
                array(
                    'id' => 821,
                    'parent_id' => 146,
                    'code' => '50',
                    'full_code' => '11.16.50',
                    'description' => 'OLMEDO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:14',
                ),
            321 =>
                array(
                    'id' => 822,
                    'parent_id' => 146,
                    'code' => '51',
                    'full_code' => '11.16.51',
                    'description' => 'LA TINGUE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:14',
                ),
            322 =>
                array(
                    'id' => 823,
                    'parent_id' => 147,
                    'code' => '50',
                    'full_code' => '12.01.50',
                    'description' => 'BABAHOYO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:14',
                ),
            323 =>
                array(
                    'id' => 824,
                    'parent_id' => 147,
                    'code' => '52',
                    'full_code' => '12.01.52',
                    'description' => 'CARACOL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:00',
                ),
            324 =>
                array(
                    'id' => 825,
                    'parent_id' => 147,
                    'code' => '53',
                    'full_code' => '12.01.53',
                    'description' => 'FEBRES CORDERO (LAS JUNTAS) (CAB. EN MATA DE CACAO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:15',
                ),
            325 =>
                array(
                    'id' => 826,
                    'parent_id' => 147,
                    'code' => '54',
                    'full_code' => '12.01.54',
                    'description' => 'PIMOCHA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:15',
                ),
            326 =>
                array(
                    'id' => 827,
                    'parent_id' => 147,
                    'code' => '55',
                    'full_code' => '12.01.55',
                    'description' => 'LA UNION',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:15',
                ),
            327 =>
                array(
                    'id' => 828,
                    'parent_id' => 148,
                    'code' => '50',
                    'full_code' => '12.02.50',
                    'description' => 'BABA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:00',
                ),
            328 =>
                array(
                    'id' => 829,
                    'parent_id' => 148,
                    'code' => '51',
                    'full_code' => '12.02.51',
                    'description' => 'GUARE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:15',
                ),
            329 =>
                array(
                    'id' => 830,
                    'parent_id' => 148,
                    'code' => '52',
                    'full_code' => '12.02.52',
                    'description' => 'ISLA DE BEJUCAL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:16',
                ),
            330 =>
                array(
                    'id' => 831,
                    'parent_id' => 149,
                    'code' => '50',
                    'full_code' => '12.03.50',
                    'description' => 'MONTALVO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:16',
                ),
            331 =>
                array(
                    'id' => 832,
                    'parent_id' => 150,
                    'code' => '50',
                    'full_code' => '12.04.50',
                    'description' => 'PUEBLOVIEJO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:16',
                ),
            332 =>
                array(
                    'id' => 833,
                    'parent_id' => 150,
                    'code' => '51',
                    'full_code' => '12.04.51',
                    'description' => 'PUERTO PECHICHE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:00',
                ),
            333 =>
                array(
                    'id' => 834,
                    'parent_id' => 150,
                    'code' => '52',
                    'full_code' => '12.04.52',
                    'description' => 'SAN JUAN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:17',
                ),
            334 =>
                array(
                    'id' => 835,
                    'parent_id' => 151,
                    'code' => '50',
                    'full_code' => '12.05.50',
                    'description' => 'QUEVEDO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:17',
                ),
            335 =>
                array(
                    'id' => 836,
                    'parent_id' => 151,
                    'code' => '53',
                    'full_code' => '12.05.53',
                    'description' => 'SAN CARLOS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:17',
                ),
            336 =>
                array(
                    'id' => 837,
                    'parent_id' => 151,
                    'code' => '55',
                    'full_code' => '12.05.55',
                    'description' => 'LA ESPERANZA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:17',
                ),
            337 =>
                array(
                    'id' => 838,
                    'parent_id' => 152,
                    'code' => '50',
                    'full_code' => '12.06.50',
                    'description' => 'CATARAMA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:00',
                ),
            338 =>
                array(
                    'id' => 839,
                    'parent_id' => 152,
                    'code' => '51',
                    'full_code' => '12.06.51',
                    'description' => 'RICAURTE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:18',
                ),
            339 =>
                array(
                    'id' => 840,
                    'parent_id' => 153,
                    'code' => '50',
                    'full_code' => '12.07.50',
                    'description' => 'VENTANAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:18',
                ),
            340 =>
                array(
                    'id' => 841,
                    'parent_id' => 153,
                    'code' => '52',
                    'full_code' => '12.07.52',
                    'description' => 'ZAPOTAL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:18',
                ),
            341 =>
                array(
                    'id' => 842,
                    'parent_id' => 154,
                    'code' => '50',
                    'full_code' => '12.08.50',
                    'description' => 'VINCES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:18',
                ),
            342 =>
                array(
                    'id' => 843,
                    'parent_id' => 154,
                    'code' => '51',
                    'full_code' => '12.08.51',
                    'description' => 'ANTONIO SOTOMAYOR (CAB. EN PLAYAS DE VINCES) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:00',
                ),
            343 =>
                array(
                    'id' => 844,
                    'parent_id' => 155,
                    'code' => '50',
                    'full_code' => '12.09.50',
                    'description' => 'PALENQUE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:19',
                ),
            344 =>
                array(
                    'id' => 845,
                    'parent_id' => 156,
                    'code' => '50',
                    'full_code' => '12.10.50',
                    'description' => 'SAN JACINTO DE BUENA FE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:19',
                ),
            345 =>
                array(
                    'id' => 846,
                    'parent_id' => 156,
                    'code' => '51',
                    'full_code' => '12.10.51',
                    'description' => 'PATRICIA PILAR',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:19',
                ),
            346 =>
                array(
                    'id' => 847,
                    'parent_id' => 157,
                    'code' => '50',
                    'full_code' => '12.11.50',
                    'description' => 'VALENCIA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:19',
                ),
            347 =>
                array(
                    'id' => 848,
                    'parent_id' => 158,
                    'code' => '50',
                    'full_code' => '12.12.50',
                    'description' => 'MOCACHE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:20',
                ),
            348 =>
                array(
                    'id' => 849,
                    'parent_id' => 159,
                    'code' => '50',
                    'full_code' => '12.13.50',
                    'description' => 'QUINSALOMA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:00',
                ),
            349 =>
                array(
                    'id' => 850,
                    'parent_id' => 160,
                    'code' => '50',
                    'full_code' => '13.01.50',
                    'description' => 'PORTOVIEJO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:20',
                ),
            350 =>
                array(
                    'id' => 851,
                    'parent_id' => 160,
                    'code' => '51',
                    'full_code' => '13.01.51',
                    'description' => 'ABDON CALDERON (SAN FRANCISCO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:20',
                ),
            351 =>
                array(
                    'id' => 852,
                    'parent_id' => 160,
                    'code' => '52',
                    'full_code' => '13.01.52',
                    'description' => 'ALHAJUELA (BAJO GRANDE) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:20',
                ),
            352 =>
                array(
                    'id' => 853,
                    'parent_id' => 160,
                    'code' => '53',
                    'full_code' => '13.01.53',
                    'description' => 'CRUCITA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:20',
                ),
            353 =>
                array(
                    'id' => 854,
                    'parent_id' => 160,
                    'code' => '54',
                    'full_code' => '13.01.54',
                    'description' => 'PUEBLO NUEVO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:01',
                ),
            354 =>
                array(
                    'id' => 855,
                    'parent_id' => 160,
                    'code' => '55',
                    'full_code' => '13.01.55',
                    'description' => 'RIOCHICO (RIO CHICO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:20',
                ),
            355 =>
                array(
                    'id' => 856,
                    'parent_id' => 160,
                    'code' => '56',
                    'full_code' => '13.01.56',
                    'description' => 'SAN PLACIDO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:20',
                ),
            356 =>
                array(
                    'id' => 857,
                    'parent_id' => 160,
                    'code' => '57',
                    'full_code' => '13.01.57',
                    'description' => 'CHIRIJOS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:20',
                ),
            357 =>
                array(
                    'id' => 858,
                    'parent_id' => 161,
                    'code' => '50',
                    'full_code' => '13.02.50',
                    'description' => 'CALCETA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:20',
                ),
            358 =>
                array(
                    'id' => 859,
                    'parent_id' => 161,
                    'code' => '51',
                    'full_code' => '13.02.51',
                    'description' => 'MEMBRILLO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:01',
                ),
            359 =>
                array(
                    'id' => 860,
                    'parent_id' => 161,
                    'code' => '52',
                    'full_code' => '13.02.52',
                    'description' => 'QUIROGA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:20',
                ),
            360 =>
                array(
                    'id' => 861,
                    'parent_id' => 162,
                    'code' => '50',
                    'full_code' => '13.03.50',
                    'description' => 'CHONE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:20',
                ),
            361 =>
                array(
                    'id' => 862,
                    'parent_id' => 162,
                    'code' => '51',
                    'full_code' => '13.03.51',
                    'description' => 'BOYACA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:20',
                ),
            362 =>
                array(
                    'id' => 863,
                    'parent_id' => 162,
                    'code' => '52',
                    'full_code' => '13.03.52',
                    'description' => 'CANUTO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:20',
                ),
            363 =>
                array(
                    'id' => 864,
                    'parent_id' => 162,
                    'code' => '53',
                    'full_code' => '13.03.53',
                    'description' => 'CONVENTO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:01',
                ),
            364 =>
                array(
                    'id' => 865,
                    'parent_id' => 162,
                    'code' => '54',
                    'full_code' => '13.03.54',
                    'description' => 'CHIBUNGA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:20',
                ),
            365 =>
                array(
                    'id' => 866,
                    'parent_id' => 162,
                    'code' => '55',
                    'full_code' => '13.03.55',
                    'description' => 'ELOY ALFARO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:20',
                ),
            366 =>
                array(
                    'id' => 867,
                    'parent_id' => 162,
                    'code' => '56',
                    'full_code' => '13.03.56',
                    'description' => 'RICAURTE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:20',
                ),
            367 =>
                array(
                    'id' => 868,
                    'parent_id' => 162,
                    'code' => '57',
                    'full_code' => '13.03.57',
                    'description' => 'SAN ANTONIO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:01',
                ),
            368 =>
                array(
                    'id' => 869,
                    'parent_id' => 163,
                    'code' => '50',
                    'full_code' => '13.04.50',
                    'description' => 'EL CARMEN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:21',
                ),
            369 =>
                array(
                    'id' => 870,
                    'parent_id' => 163,
                    'code' => '51',
                    'full_code' => '13.04.51',
                    'description' => 'WILFRIDO LOOR MOREIRA (MAICITO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:21',
                ),
            370 =>
                array(
                    'id' => 871,
                    'parent_id' => 163,
                    'code' => '52',
                    'full_code' => '13.04.52',
                    'description' => 'SAN PEDRO DE SUMA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:21',
                ),
            371 =>
                array(
                    'id' => 872,
                    'parent_id' => 164,
                    'code' => '50',
                    'full_code' => '13.05.50',
                    'description' => 'FLAVIO ALFARO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:01',
                ),
            372 =>
                array(
                    'id' => 873,
                    'parent_id' => 164,
                    'code' => '51',
                    'full_code' => '13.05.51',
                    'description' => 'SAN FRANCISCO DE NOVILLO (CAB. EN  NOVILLO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:21',
                ),
            373 =>
                array(
                    'id' => 874,
                    'parent_id' => 164,
                    'code' => '52',
                    'full_code' => '13.05.52',
                    'description' => 'ZAPALLO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:21',
                ),
            374 =>
                array(
                    'id' => 875,
                    'parent_id' => 165,
                    'code' => '50',
                    'full_code' => '13.06.50',
                    'description' => 'JIPIJAPA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:21',
                ),
            375 =>
                array(
                    'id' => 876,
                    'parent_id' => 165,
                    'code' => '51',
                    'full_code' => '13.06.51',
                    'description' => 'AMERICA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:21',
                ),
            376 =>
                array(
                    'id' => 877,
                    'parent_id' => 165,
                    'code' => '52',
                    'full_code' => '13.06.52',
                    'description' => 'EL ANEGADO (CAB. EN ELOY ALFARO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:01',
                ),
            377 =>
                array(
                    'id' => 878,
                    'parent_id' => 165,
                    'code' => '53',
                    'full_code' => '13.06.53',
                    'description' => 'JULCUY',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:21',
                ),
            378 =>
                array(
                    'id' => 879,
                    'parent_id' => 165,
                    'code' => '54',
                    'full_code' => '13.06.54',
                    'description' => 'LA UNION',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:21',
                ),
            379 =>
                array(
                    'id' => 880,
                    'parent_id' => 165,
                    'code' => '56',
                    'full_code' => '13.06.56',
                    'description' => 'MEMBRILLAL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:21',
                ),
            380 =>
                array(
                    'id' => 881,
                    'parent_id' => 165,
                    'code' => '57',
                    'full_code' => '13.06.57',
                    'description' => 'PEDRO PABLO GOMEZ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:21',
                ),
            381 =>
                array(
                    'id' => 882,
                    'parent_id' => 165,
                    'code' => '58',
                    'full_code' => '13.06.58',
                    'description' => 'PUERTO DE CAYO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:21',
                ),
            382 =>
                array(
                    'id' => 883,
                    'parent_id' => 166,
                    'code' => '50',
                    'full_code' => '13.07.50',
                    'description' => 'JUNIN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:01',
                ),
            383 =>
                array(
                    'id' => 884,
                    'parent_id' => 167,
                    'code' => '50',
                    'full_code' => '13.08.50',
                    'description' => 'MANTA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:21',
                ),
            384 =>
                array(
                    'id' => 885,
                    'parent_id' => 167,
                    'code' => '51',
                    'full_code' => '13.08.51',
                    'description' => 'SAN LORENZO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:21',
                ),
            385 =>
                array(
                    'id' => 886,
                    'parent_id' => 167,
                    'code' => '52',
                    'full_code' => '13.08.52',
                    'description' => 'SANTA MARIANITA (BOCA DE PACOCHE)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:01',
                ),
            386 =>
                array(
                    'id' => 887,
                    'parent_id' => 168,
                    'code' => '50',
                    'full_code' => '13.09.50',
                    'description' => 'MONTECRISTI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:21',
                ),
            387 =>
                array(
                    'id' => 888,
                    'parent_id' => 168,
                    'code' => '52',
                    'full_code' => '13.09.52',
                    'description' => 'LA PILA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:22',
                ),
            388 =>
                array(
                    'id' => 889,
                    'parent_id' => 169,
                    'code' => '50',
                    'full_code' => '13.10.50',
                    'description' => 'PAJAN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:22',
                ),
            389 =>
                array(
                    'id' => 890,
                    'parent_id' => 169,
                    'code' => '51',
                    'full_code' => '13.10.51',
                    'description' => 'CAMPOZANO (LA PALMA DE PAJAN)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:01',
                ),
            390 =>
                array(
                    'id' => 891,
                    'parent_id' => 169,
                    'code' => '52',
                    'full_code' => '13.10.52',
                    'description' => 'CASCOL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:22',
                ),
            391 =>
                array(
                    'id' => 892,
                    'parent_id' => 169,
                    'code' => '53',
                    'full_code' => '13.10.53',
                    'description' => 'GUALE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:22',
                ),
            392 =>
                array(
                    'id' => 893,
                    'parent_id' => 169,
                    'code' => '54',
                    'full_code' => '13.10.54',
                    'description' => 'LASCANO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:22',
                ),
            393 =>
                array(
                    'id' => 894,
                    'parent_id' => 170,
                    'code' => '50',
                    'full_code' => '13.11.50',
                    'description' => 'PICHINCHA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:01',
                ),
            394 =>
                array(
                    'id' => 895,
                    'parent_id' => 170,
                    'code' => '51',
                    'full_code' => '13.11.51',
                    'description' => 'BARRAGANETE ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:22',
                ),
            395 =>
                array(
                    'id' => 896,
                    'parent_id' => 170,
                    'code' => '52',
                    'full_code' => '13.11.52',
                    'description' => 'SAN SEBASTIAN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:22',
                ),
            396 =>
                array(
                    'id' => 897,
                    'parent_id' => 171,
                    'code' => '50',
                    'full_code' => '13.12.50',
                    'description' => 'ROCAFUERTE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:22',
                ),
            397 =>
                array(
                    'id' => 898,
                    'parent_id' => 172,
                    'code' => '50',
                    'full_code' => '13.13.50',
                    'description' => 'SANTA ANA DE VUELTA LARGA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:01',
                ),
            398 =>
                array(
                    'id' => 899,
                    'parent_id' => 172,
                    'code' => '51',
                    'full_code' => '13.13.51',
                    'description' => 'AYACUCHO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:22',
                ),
            399 =>
                array(
                    'id' => 900,
                    'parent_id' => 172,
                    'code' => '52',
                    'full_code' => '13.13.52',
                    'description' => 'HONORATO VASQUEZ (CAB. EN VASQUEZ)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:22',
                ),
            400 =>
                array(
                    'id' => 901,
                    'parent_id' => 172,
                    'code' => '53',
                    'full_code' => '13.13.53',
                    'description' => 'LA UNION',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:22',
                ),
            401 =>
                array(
                    'id' => 902,
                    'parent_id' => 172,
                    'code' => '55',
                    'full_code' => '13.13.55',
                    'description' => 'SAN PABLO (CAB. EN PUEBLO NUEVO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:22',
                ),
            402 =>
                array(
                    'id' => 903,
                    'parent_id' => 173,
                    'code' => '50',
                    'full_code' => '13.14.50',
                    'description' => 'BAHIA DE CARAQUEZ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:01',
                ),
            403 =>
                array(
                    'id' => 904,
                    'parent_id' => 173,
                    'code' => '53',
                    'full_code' => '13.14.53',
                    'description' => 'CHARAPOTO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:22',
                ),
            404 =>
                array(
                    'id' => 905,
                    'parent_id' => 173,
                    'code' => '57',
                    'full_code' => '13.14.57',
                    'description' => 'SAN ISIDRO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:22',
                ),
            405 =>
                array(
                    'id' => 906,
                    'parent_id' => 174,
                    'code' => '50',
                    'full_code' => '13.15.50',
                    'description' => 'TOSAGUA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:22',
                ),
            406 =>
                array(
                    'id' => 907,
                    'parent_id' => 174,
                    'code' => '51',
                    'full_code' => '13.15.51',
                    'description' => 'BACHILLERO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:22',
                ),
            407 =>
                array(
                    'id' => 908,
                    'parent_id' => 174,
                    'code' => '52',
                    'full_code' => '13.15.52',
                    'description' => 'ANGEL PEDRO GILER (LA ESTANCILLA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:01',
                ),
            408 =>
                array(
                    'id' => 909,
                    'parent_id' => 175,
                    'code' => '50',
                    'full_code' => '13.16.50',
                    'description' => 'SUCRE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:23',
                ),
            409 =>
                array(
                    'id' => 910,
                    'parent_id' => 175,
                    'code' => '51',
                    'full_code' => '13.16.51',
                    'description' => 'BELLAVISTA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:23',
                ),
            410 =>
                array(
                    'id' => 911,
                    'parent_id' => 175,
                    'code' => '52',
                    'full_code' => '13.16.52',
                    'description' => 'NOBOA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:23',
                ),
            411 =>
                array(
                    'id' => 912,
                    'parent_id' => 175,
                    'code' => '53',
                    'full_code' => '13.16.53',
                    'description' => 'ARQ. SIXTO DURAN BALLEN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:23',
                ),
            412 =>
                array(
                    'id' => 913,
                    'parent_id' => 176,
                    'code' => '50',
                    'full_code' => '13.17.50',
                    'description' => 'PEDERNALES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:23',
                ),
            413 =>
                array(
                    'id' => 914,
                    'parent_id' => 176,
                    'code' => '51',
                    'full_code' => '13.17.51',
                    'description' => 'COJIMIES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:01',
                ),
            414 =>
                array(
                    'id' => 915,
                    'parent_id' => 176,
                    'code' => '52',
                    'full_code' => '13.17.52',
                    'description' => '10 DE AGOSTO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:24',
                ),
            415 =>
                array(
                    'id' => 916,
                    'parent_id' => 176,
                    'code' => '53',
                    'full_code' => '13.17.53',
                    'description' => 'ATAHUALPA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:24',
                ),
            416 =>
                array(
                    'id' => 917,
                    'parent_id' => 177,
                    'code' => '50',
                    'full_code' => '13.18.50',
                    'description' => 'OLMEDO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:24',
                ),
            417 =>
                array(
                    'id' => 918,
                    'parent_id' => 178,
                    'code' => '50',
                    'full_code' => '13.19.50',
                    'description' => 'PUERTO LOPEZ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:01',
                ),
            418 =>
                array(
                    'id' => 919,
                    'parent_id' => 178,
                    'code' => '51',
                    'full_code' => '13.19.51',
                    'description' => 'MACHALILLA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:25',
                ),
            419 =>
                array(
                    'id' => 920,
                    'parent_id' => 178,
                    'code' => '52',
                    'full_code' => '13.19.52',
                    'description' => 'SALANGO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:25',
                ),
            420 =>
                array(
                    'id' => 921,
                    'parent_id' => 179,
                    'code' => '50',
                    'full_code' => '13.20.50',
                    'description' => 'JAMA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:25',
                ),
            421 =>
                array(
                    'id' => 922,
                    'parent_id' => 180,
                    'code' => '50',
                    'full_code' => '13.21.50',
                    'description' => 'JARAMIJO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:25',
                ),
            422 =>
                array(
                    'id' => 923,
                    'parent_id' => 181,
                    'code' => '50',
                    'full_code' => '13.22.50',
                    'description' => 'SAN VICENTE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:01',
                ),
            423 =>
                array(
                    'id' => 924,
                    'parent_id' => 181,
                    'code' => '51',
                    'full_code' => '13.22.51',
                    'description' => 'CANOA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:26',
                ),
            424 =>
                array(
                    'id' => 925,
                    'parent_id' => 182,
                    'code' => '50',
                    'full_code' => '14.01.50',
                    'description' => 'MACAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:26',
                ),
            425 =>
                array(
                    'id' => 926,
                    'parent_id' => 182,
                    'code' => '51',
                    'full_code' => '14.01.51',
                    'description' => 'ALSHI (CAB. EN 9 DE OCTUBRE) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:26',
                ),
            426 =>
                array(
                    'id' => 927,
                    'parent_id' => 182,
                    'code' => '53',
                    'full_code' => '14.01.53',
                    'description' => 'GENERAL PROAÑO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:26',
                ),
            427 =>
                array(
                    'id' => 928,
                    'parent_id' => 182,
                    'code' => '56',
                    'full_code' => '14.01.56',
                    'description' => 'SAN ISIDRO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:01',
                ),
            428 =>
                array(
                    'id' => 929,
                    'parent_id' => 182,
                    'code' => '57',
                    'full_code' => '14.01.57',
                    'description' => 'SEVILLA DON BOSCO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:27',
                ),
            429 =>
                array(
                    'id' => 930,
                    'parent_id' => 182,
                    'code' => '58',
                    'full_code' => '14.01.58',
                    'description' => 'SINAI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:27',
                ),
            430 =>
                array(
                    'id' => 931,
                    'parent_id' => 182,
                    'code' => '60',
                    'full_code' => '14.01.60',
                    'description' => 'ZUÑA (ZUÑAC)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:27',
                ),
            431 =>
                array(
                    'id' => 932,
                    'parent_id' => 182,
                    'code' => '62',
                    'full_code' => '14.01.62',
                    'description' => 'CUCHAENTZA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:27',
                ),
            432 =>
                array(
                    'id' => 933,
                    'parent_id' => 182,
                    'code' => '64',
                    'full_code' => '14.01.64',
                    'description' => 'RIO BLANCO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:02',
                ),
            433 =>
                array(
                    'id' => 934,
                    'parent_id' => 183,
                    'code' => '50',
                    'full_code' => '14.02.50',
                    'description' => 'GUALAQUIZA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:28',
                ),
            434 =>
                array(
                    'id' => 935,
                    'parent_id' => 183,
                    'code' => '51',
                    'full_code' => '14.02.51',
                    'description' => 'AMAZONAS (ROSARIO DE CUYES) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:28',
                ),
            435 =>
                array(
                    'id' => 936,
                    'parent_id' => 183,
                    'code' => '52',
                    'full_code' => '14.02.52',
                    'description' => 'BERMEJOS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:28',
                ),
            436 =>
                array(
                    'id' => 937,
                    'parent_id' => 183,
                    'code' => '53',
                    'full_code' => '14.02.53',
                    'description' => 'BOMBOIZA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:28',
                ),
            437 =>
                array(
                    'id' => 938,
                    'parent_id' => 183,
                    'code' => '54',
                    'full_code' => '14.02.54',
                    'description' => 'CHIGÜINDA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:02',
                ),
            438 =>
                array(
                    'id' => 939,
                    'parent_id' => 183,
                    'code' => '55',
                    'full_code' => '14.02.55',
                    'description' => 'EL ROSARIO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:28',
                ),
            439 =>
                array(
                    'id' => 940,
                    'parent_id' => 183,
                    'code' => '56',
                    'full_code' => '14.02.56',
                    'description' => 'NUEVA TARQUI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:28',
                ),
            440 =>
                array(
                    'id' => 941,
                    'parent_id' => 183,
                    'code' => '57',
                    'full_code' => '14.02.57',
                    'description' => 'SAN MIGUEL DE CUYES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:28',
                ),
            441 =>
                array(
                    'id' => 942,
                    'parent_id' => 183,
                    'code' => '58',
                    'full_code' => '14.02.58',
                    'description' => 'EL IDEAL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:28',
                ),
            442 =>
                array(
                    'id' => 943,
                    'parent_id' => 184,
                    'code' => '50',
                    'full_code' => '14.03.50',
                    'description' => 'GENERAL LEONIDAS PLAZA GUTIERREZ (LIMON)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:02',
                ),
            443 =>
                array(
                    'id' => 944,
                    'parent_id' => 184,
                    'code' => '51',
                    'full_code' => '14.03.51',
                    'description' => 'INDANZA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:28',
                ),
            444 =>
                array(
                    'id' => 945,
                    'parent_id' => 184,
                    'code' => '53',
                    'full_code' => '14.03.53',
                    'description' => 'SAN ANTONIO (CAB. EN SAN ANTONIO CENTRO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:28',
                ),
            445 =>
                array(
                    'id' => 946,
                    'parent_id' => 184,
                    'code' => '56',
                    'full_code' => '14.03.56',
                    'description' => 'SAN MIGUEL DE CONCHAY',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:28',
                ),
            446 =>
                array(
                    'id' => 947,
                    'parent_id' => 184,
                    'code' => '57',
                    'full_code' => '14.03.57',
                    'description' => 'SANTA SUSANA DE CHIVIAZA (CAB. EN CHIVIAZA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:02',
                ),
            447 =>
                array(
                    'id' => 948,
                    'parent_id' => 184,
                    'code' => '58',
                    'full_code' => '14.03.58',
                    'description' => 'YUNGANZA (CAB. EN EL ROSARIO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:28',
                ),
            448 =>
                array(
                    'id' => 949,
                    'parent_id' => 185,
                    'code' => '50',
                    'full_code' => '14.04.50',
                    'description' => 'PALORA (METZERA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:28',
                ),
            449 =>
                array(
                    'id' => 950,
                    'parent_id' => 185,
                    'code' => '51',
                    'full_code' => '14.04.51',
                    'description' => 'ARAPICOS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:28',
                ),
            450 =>
                array(
                    'id' => 951,
                    'parent_id' => 185,
                    'code' => '52',
                    'full_code' => '14.04.52',
                    'description' => 'CUMANDA (CAB. EN COLONIA AGRICOLA SEVILLA DEL ORO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:28',
                ),
            451 =>
                array(
                    'id' => 952,
                    'parent_id' => 185,
                    'code' => '54',
                    'full_code' => '14.04.54',
                    'description' => 'SANGAY (CAB. EN NAYAMANACA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:29',
                ),
            452 =>
                array(
                    'id' => 953,
                    'parent_id' => 185,
                    'code' => '55',
                    'full_code' => '14.04.55',
                    'description' => '16 DE AGOSTO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:29',
                ),
            453 =>
                array(
                    'id' => 954,
                    'parent_id' => 186,
                    'code' => '50',
                    'full_code' => '14.05.50',
                    'description' => 'SANTIAGO DE MENDEZ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:29',
                ),
            454 =>
                array(
                    'id' => 955,
                    'parent_id' => 186,
                    'code' => '51',
                    'full_code' => '14.05.51',
                    'description' => 'COPAL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:29',
                ),
            455 =>
                array(
                    'id' => 956,
                    'parent_id' => 186,
                    'code' => '52',
                    'full_code' => '14.05.52',
                    'description' => 'CHUPIANZA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:02',
                ),
            456 =>
                array(
                    'id' => 957,
                    'parent_id' => 186,
                    'code' => '53',
                    'full_code' => '14.05.53',
                    'description' => 'PATUCA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:29',
                ),
            457 =>
                array(
                    'id' => 958,
                    'parent_id' => 186,
                    'code' => '54',
                    'full_code' => '14.05.54',
                    'description' => 'SAN LUIS DE EL ACHO (CAB. EN EL ACHO) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:29',
                ),
            458 =>
                array(
                    'id' => 959,
                    'parent_id' => 186,
                    'code' => '56',
                    'full_code' => '14.05.56',
                    'description' => 'TAYUZA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:29',
                ),
            459 =>
                array(
                    'id' => 960,
                    'parent_id' => 186,
                    'code' => '57',
                    'full_code' => '14.05.57',
                    'description' => 'SAN FRANCISCO DE CHINIMBIMI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:02',
                ),
            460 =>
                array(
                    'id' => 961,
                    'parent_id' => 187,
                    'code' => '50',
                    'full_code' => '14.06.50',
                    'description' => 'SUCUA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:29',
                ),
            461 =>
                array(
                    'id' => 962,
                    'parent_id' => 187,
                    'code' => '51',
                    'full_code' => '14.06.51',
                    'description' => 'ASUNCION',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:29',
                ),
            462 =>
                array(
                    'id' => 963,
                    'parent_id' => 187,
                    'code' => '52',
                    'full_code' => '14.06.52',
                    'description' => 'HUAMBI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:29',
                ),
            463 =>
                array(
                    'id' => 964,
                    'parent_id' => 187,
                    'code' => '55',
                    'full_code' => '14.06.55',
                    'description' => 'SANTA MARIANITA DE JESUS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:29',
                ),
            464 =>
                array(
                    'id' => 965,
                    'parent_id' => 188,
                    'code' => '50',
                    'full_code' => '14.07.50',
                    'description' => 'HUAMBOYA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:29',
                ),
            465 =>
                array(
                    'id' => 966,
                    'parent_id' => 188,
                    'code' => '51',
                    'full_code' => '14.07.51',
                    'description' => 'CHIGUAZA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:02',
                ),
            466 =>
                array(
                    'id' => 967,
                    'parent_id' => 189,
                    'code' => '50',
                    'full_code' => '14.08.50',
                    'description' => 'SAN JUAN BOSCO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:29',
                ),
            467 =>
                array(
                    'id' => 968,
                    'parent_id' => 189,
                    'code' => '51',
                    'full_code' => '14.08.51',
                    'description' => 'PAN DE AZUCAR',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:29',
                ),
            468 =>
                array(
                    'id' => 969,
                    'parent_id' => 189,
                    'code' => '52',
                    'full_code' => '14.08.52',
                    'description' => 'SAN CARLOS DE LIMON  ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:29',
                ),
            469 =>
                array(
                    'id' => 970,
                    'parent_id' => 189,
                    'code' => '53',
                    'full_code' => '14.08.53',
                    'description' => 'SAN JACINTO DE WAKAMBEIS ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:02',
                ),
            470 =>
                array(
                    'id' => 971,
                    'parent_id' => 189,
                    'code' => '54',
                    'full_code' => '14.08.54',
                    'description' => 'SANTIAGO DE PANANZA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:29',
                ),
            471 =>
                array(
                    'id' => 972,
                    'parent_id' => 190,
                    'code' => '50',
                    'full_code' => '14.09.50',
                    'description' => 'TAISHA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:29',
                ),
            472 =>
                array(
                    'id' => 973,
                    'parent_id' => 190,
                    'code' => '51',
                    'full_code' => '14.09.51',
                    'description' => 'HUASAGA (CAB. EN WAMPUIK) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:30',
                ),
            473 =>
                array(
                    'id' => 974,
                    'parent_id' => 190,
                    'code' => '52',
                    'full_code' => '14.09.52',
                    'description' => 'MACUMA  ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:30',
                ),
            474 =>
                array(
                    'id' => 975,
                    'parent_id' => 190,
                    'code' => '53',
                    'full_code' => '14.09.53',
                    'description' => 'TUUTINENTZA ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:30',
                ),
            475 =>
                array(
                    'id' => 976,
                    'parent_id' => 190,
                    'code' => '54',
                    'full_code' => '14.09.54',
                    'description' => 'PUMPUENTSA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:02',
                ),
            476 =>
                array(
                    'id' => 977,
                    'parent_id' => 191,
                    'code' => '50',
                    'full_code' => '14.10.50',
                    'description' => 'LOGROÑO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:30',
                ),
            477 =>
                array(
                    'id' => 978,
                    'parent_id' => 191,
                    'code' => '51',
                    'full_code' => '14.10.51',
                    'description' => 'YAUPI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:30',
                ),
            478 =>
                array(
                    'id' => 979,
                    'parent_id' => 191,
                    'code' => '52',
                    'full_code' => '14.10.52',
                    'description' => 'SHIMPIS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:30',
                ),
            479 =>
                array(
                    'id' => 980,
                    'parent_id' => 192,
                    'code' => '50',
                    'full_code' => '14.11.50',
                    'description' => 'PABLO SEXTO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:30',
                ),
            480 =>
                array(
                    'id' => 981,
                    'parent_id' => 193,
                    'code' => '50',
                    'full_code' => '14.12.50',
                    'description' => 'SANTIAGO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:02',
                ),
            481 =>
                array(
                    'id' => 982,
                    'parent_id' => 193,
                    'code' => '51',
                    'full_code' => '14.12.51',
                    'description' => 'SAN JOSE DE MORONA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:30',
                ),
            482 =>
                array(
                    'id' => 983,
                    'parent_id' => 194,
                    'code' => '50',
                    'full_code' => '15.01.50',
                    'description' => 'TENA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:30',
                ),
            483 =>
                array(
                    'id' => 984,
                    'parent_id' => 194,
                    'code' => '51',
                    'full_code' => '15.01.51',
                    'description' => 'AHUANO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:30',
                ),
            484 =>
                array(
                    'id' => 985,
                    'parent_id' => 194,
                    'code' => '53',
                    'full_code' => '15.01.53',
                    'description' => 'CHONTAPUNTA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:02',
                ),
            485 =>
                array(
                    'id' => 986,
                    'parent_id' => 194,
                    'code' => '54',
                    'full_code' => '15.01.54',
                    'description' => 'PANO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:02',
                ),
            486 =>
                array(
                    'id' => 987,
                    'parent_id' => 194,
                    'code' => '55',
                    'full_code' => '15.01.55',
                    'description' => 'PUERTO MISAHUALLI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:02',
                ),
            487 =>
                array(
                    'id' => 988,
                    'parent_id' => 194,
                    'code' => '56',
                    'full_code' => '15.01.56',
                    'description' => 'PUERTO NAPO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:30',
                ),
            488 =>
                array(
                    'id' => 989,
                    'parent_id' => 194,
                    'code' => '57',
                    'full_code' => '15.01.57',
                    'description' => 'TALAG',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:30',
                ),
            489 =>
                array(
                    'id' => 990,
                    'parent_id' => 195,
                    'code' => '50',
                    'full_code' => '15.03.50',
                    'description' => 'ARCHIDONA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:30',
                ),
            490 =>
                array(
                    'id' => 991,
                    'parent_id' => 195,
                    'code' => '52',
                    'full_code' => '15.03.52',
                    'description' => 'COTUNDO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:02',
                ),
            491 =>
                array(
                    'id' => 992,
                    'parent_id' => 195,
                    'code' => '54',
                    'full_code' => '15.03.54',
                    'description' => 'SAN PABLO DE USHPAYACU',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:30',
                ),
            492 =>
                array(
                    'id' => 993,
                    'parent_id' => 196,
                    'code' => '50',
                    'full_code' => '15.04.50',
                    'description' => 'EL CHACO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:30',
                ),
            493 =>
                array(
                    'id' => 994,
                    'parent_id' => 196,
                    'code' => '51',
                    'full_code' => '15.04.51',
                    'description' => 'GONZALO DIAZ DE PINEDA (EL BOMBON) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:02',
                ),
            494 =>
                array(
                    'id' => 995,
                    'parent_id' => 196,
                    'code' => '52',
                    'full_code' => '15.04.52',
                    'description' => 'LINARES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:30',
                ),
            495 =>
                array(
                    'id' => 996,
                    'parent_id' => 196,
                    'code' => '53',
                    'full_code' => '15.04.53',
                    'description' => 'OYACACHI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:30',
                ),
            496 =>
                array(
                    'id' => 997,
                    'parent_id' => 196,
                    'code' => '54',
                    'full_code' => '15.04.54',
                    'description' => 'SANTA ROSA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:30',
                ),
            497 =>
                array(
                    'id' => 998,
                    'parent_id' => 196,
                    'code' => '55',
                    'full_code' => '15.04.55',
                    'description' => 'SARDINAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:31',
                ),
            498 =>
                array(
                    'id' => 999,
                    'parent_id' => 197,
                    'code' => '50',
                    'full_code' => '15.07.50',
                    'description' => 'BAEZA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:31',
                ),
            499 =>
                array(
                    'id' => 1000,
                    'parent_id' => 197,
                    'code' => '51',
                    'full_code' => '15.07.51',
                    'description' => 'COSANGA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:31',
                ),
        ));
        \DB::table('catalog_geographic_classifiers')->insert(array(
            0 =>
                array(
                    'id' => 1001,
                    'parent_id' => 197,
                    'code' => '52',
                    'full_code' => '15.07.52',
                    'description' => 'CUYUJA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:31',
                ),
            1 =>
                array(
                    'id' => 1002,
                    'parent_id' => 197,
                    'code' => '53',
                    'full_code' => '15.07.53',
                    'description' => 'PAPALLACTA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:02',
                ),
            2 =>
                array(
                    'id' => 1003,
                    'parent_id' => 197,
                    'code' => '54',
                    'full_code' => '15.07.54',
                    'description' => 'SAN FRANCISCO DE BORJA (VIRGILIO DAVILA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:31',
                ),
            3 =>
                array(
                    'id' => 1004,
                    'parent_id' => 197,
                    'code' => '56',
                    'full_code' => '15.07.56',
                    'description' => 'SUMACO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:32',
                ),
            4 =>
                array(
                    'id' => 1005,
                    'parent_id' => 198,
                    'code' => '50',
                    'full_code' => '15.09.50',
                    'description' => 'CARLOS JULIO AROSEMENA TOLA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:32',
                ),
            5 =>
                array(
                    'id' => 1006,
                    'parent_id' => 199,
                    'code' => '50',
                    'full_code' => '16.01.50',
                    'description' => 'PUYO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:32',
                ),
            6 =>
                array(
                    'id' => 1007,
                    'parent_id' => 199,
                    'code' => '52',
                    'full_code' => '16.01.52',
                    'description' => 'CANELOS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:02',
                ),
            7 =>
                array(
                    'id' => 1008,
                    'parent_id' => 199,
                    'code' => '54',
                    'full_code' => '16.01.54',
                    'description' => 'DIEZ  DE AGOSTO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:32',
                ),
            8 =>
                array(
                    'id' => 1009,
                    'parent_id' => 199,
                    'code' => '55',
                    'full_code' => '16.01.55',
                    'description' => 'FATIMA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:33',
                ),
            9 =>
                array(
                    'id' => 1010,
                    'parent_id' => 199,
                    'code' => '56',
                    'full_code' => '16.01.56',
                    'description' => 'MONTALVO (ANDOAS) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:33',
                ),
            10 =>
                array(
                    'id' => 1011,
                    'parent_id' => 199,
                    'code' => '57',
                    'full_code' => '16.01.57',
                    'description' => 'POMONA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:33',
                ),
            11 =>
                array(
                    'id' => 1012,
                    'parent_id' => 199,
                    'code' => '58',
                    'full_code' => '16.01.58',
                    'description' => 'RIO CORRIENTES ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:02',
                ),
            12 =>
                array(
                    'id' => 1013,
                    'parent_id' => 199,
                    'code' => '59',
                    'full_code' => '16.01.59',
                    'description' => 'RIO TIGRE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:33',
                ),
            13 =>
                array(
                    'id' => 1014,
                    'parent_id' => 199,
                    'code' => '61',
                    'full_code' => '16.01.61',
                    'description' => 'SARAYACU',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:34',
                ),
            14 =>
                array(
                    'id' => 1015,
                    'parent_id' => 199,
                    'code' => '62',
                    'full_code' => '16.01.62',
                    'description' => 'SIMONBOLIVAR  (CAB. EN MUSHULLACTA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:03',
                ),
            15 =>
                array(
                    'id' => 1016,
                    'parent_id' => 199,
                    'code' => '63',
                    'full_code' => '16.01.63',
                    'description' => 'TARQUI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:34',
                ),
            16 =>
                array(
                    'id' => 1017,
                    'parent_id' => 199,
                    'code' => '64',
                    'full_code' => '16.01.64',
                    'description' => 'TENIENTE HUGO ORTIZ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:34',
                ),
            17 =>
                array(
                    'id' => 1018,
                    'parent_id' => 199,
                    'code' => '65',
                    'full_code' => '16.01.65',
                    'description' => 'VERACRUZ (INDILLAMA) (CAB. EN INDILLAMA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:34',
                ),
            18 =>
                array(
                    'id' => 1019,
                    'parent_id' => 199,
                    'code' => '66',
                    'full_code' => '16.01.66',
                    'description' => 'EL TRIUNFO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:35',
                ),
            19 =>
                array(
                    'id' => 1020,
                    'parent_id' => 200,
                    'code' => '50',
                    'full_code' => '16.02.50',
                    'description' => 'MERA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:35',
                ),
            20 =>
                array(
                    'id' => 1021,
                    'parent_id' => 200,
                    'code' => '51',
                    'full_code' => '16.02.51',
                    'description' => 'MADRE TIERRA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:35',
                ),
            21 =>
                array(
                    'id' => 1022,
                    'parent_id' => 200,
                    'code' => '52',
                    'full_code' => '16.02.52',
                    'description' => 'SHELL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:03',
                ),
            22 =>
                array(
                    'id' => 1023,
                    'parent_id' => 201,
                    'code' => '50',
                    'full_code' => '16.03.50',
                    'description' => 'SANTA CLARA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:35',
                ),
            23 =>
                array(
                    'id' => 1024,
                    'parent_id' => 201,
                    'code' => '51',
                    'full_code' => '16.03.51',
                    'description' => 'SAN JOSE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:36',
                ),
            24 =>
                array(
                    'id' => 1025,
                    'parent_id' => 202,
                    'code' => '50',
                    'full_code' => '16.04.50',
                    'description' => 'ARAJUNO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:36',
                ),
            25 =>
                array(
                    'id' => 1026,
                    'parent_id' => 202,
                    'code' => '51',
                    'full_code' => '16.04.51',
                    'description' => 'CURARAY',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:36',
                ),
            26 =>
                array(
                    'id' => 1027,
                    'parent_id' => 203,
                    'code' => '50',
                    'full_code' => '17.01.50',
                    'description' => 'QUITO DISTRITO METROPOLITANO, CABECERA CANTONAL, CAPITAL PROVINCIAL Y DE LA REPUBLICA DEL ECUADOR',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:03',
                ),
            27 =>
                array(
                    'id' => 1028,
                    'parent_id' => 203,
                    'code' => '51',
                    'full_code' => '17.01.51',
                    'description' => 'ALANGASI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:36',
                ),
            28 =>
                array(
                    'id' => 1029,
                    'parent_id' => 203,
                    'code' => '52',
                    'full_code' => '17.01.52',
                    'description' => 'AMAGUAÑA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:36',
                ),
            29 =>
                array(
                    'id' => 1030,
                    'parent_id' => 203,
                    'code' => '53',
                    'full_code' => '17.01.53',
                    'description' => 'ATAHUALPA (HABASPAMBA) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:36',
                ),
            30 =>
                array(
                    'id' => 1031,
                    'parent_id' => 203,
                    'code' => '54',
                    'full_code' => '17.01.54',
                    'description' => 'CALACALI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:36',
                ),
            31 =>
                array(
                    'id' => 1032,
                    'parent_id' => 203,
                    'code' => '55',
                    'full_code' => '17.01.55',
                    'description' => 'CALDERON (CARAPUNGO) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:36',
                ),
            32 =>
                array(
                    'id' => 1033,
                    'parent_id' => 203,
                    'code' => '56',
                    'full_code' => '17.01.56',
                    'description' => 'CONOCOTO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:36',
                ),
            33 =>
                array(
                    'id' => 1034,
                    'parent_id' => 203,
                    'code' => '57',
                    'full_code' => '17.01.57',
                    'description' => 'CUMBAYA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:36',
                ),
            34 =>
                array(
                    'id' => 1035,
                    'parent_id' => 203,
                    'code' => '58',
                    'full_code' => '17.01.58',
                    'description' => 'CHAVEZPAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:03',
                ),
            35 =>
                array(
                    'id' => 1036,
                    'parent_id' => 203,
                    'code' => '59',
                    'full_code' => '17.01.59',
                    'description' => 'CHECA (CHILPA) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:36',
                ),
            36 =>
                array(
                    'id' => 1037,
                    'parent_id' => 203,
                    'code' => '60',
                    'full_code' => '17.01.60',
                    'description' => 'EL QUINCHE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:36',
                ),
            37 =>
                array(
                    'id' => 1038,
                    'parent_id' => 203,
                    'code' => '61',
                    'full_code' => '17.01.61',
                    'description' => 'GUALEA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:36',
                ),
            38 =>
                array(
                    'id' => 1039,
                    'parent_id' => 203,
                    'code' => '62',
                    'full_code' => '17.01.62',
                    'description' => 'GUANGOPOLO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:36',
                ),
            39 =>
                array(
                    'id' => 1040,
                    'parent_id' => 203,
                    'code' => '63',
                    'full_code' => '17.01.63',
                    'description' => 'GUAYLLABAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:03',
                ),
            40 =>
                array(
                    'id' => 1041,
                    'parent_id' => 203,
                    'code' => '64',
                    'full_code' => '17.01.64',
                    'description' => 'LA MERCED',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:36',
                ),
            41 =>
                array(
                    'id' => 1042,
                    'parent_id' => 203,
                    'code' => '65',
                    'full_code' => '17.01.65',
                    'description' => 'LLANO CHICO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:37',
                ),
            42 =>
                array(
                    'id' => 1043,
                    'parent_id' => 203,
                    'code' => '66',
                    'full_code' => '17.01.66',
                    'description' => 'LLOA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:37',
                ),
            43 =>
                array(
                    'id' => 1044,
                    'parent_id' => 203,
                    'code' => '68',
                    'full_code' => '17.01.68',
                    'description' => 'NANEGAL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:37',
                ),
            44 =>
                array(
                    'id' => 1045,
                    'parent_id' => 203,
                    'code' => '69',
                    'full_code' => '17.01.69',
                    'description' => 'NANEGALITO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:03',
                ),
            45 =>
                array(
                    'id' => 1046,
                    'parent_id' => 203,
                    'code' => '70',
                    'full_code' => '17.01.70',
                    'description' => 'NAYON',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:37',
                ),
            46 =>
                array(
                    'id' => 1047,
                    'parent_id' => 203,
                    'code' => '71',
                    'full_code' => '17.01.71',
                    'description' => 'NONO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:37',
                ),
            47 =>
                array(
                    'id' => 1048,
                    'parent_id' => 203,
                    'code' => '72',
                    'full_code' => '17.01.72',
                    'description' => 'PACTO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:37',
                ),
            48 =>
                array(
                    'id' => 1049,
                    'parent_id' => 203,
                    'code' => '74',
                    'full_code' => '17.01.74',
                    'description' => 'PERUCHO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:37',
                ),
            49 =>
                array(
                    'id' => 1050,
                    'parent_id' => 203,
                    'code' => '75',
                    'full_code' => '17.01.75',
                    'description' => 'PIFO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:03',
                ),
            50 =>
                array(
                    'id' => 1051,
                    'parent_id' => 203,
                    'code' => '76',
                    'full_code' => '17.01.76',
                    'description' => 'PINTAG',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:37',
                ),
            51 =>
                array(
                    'id' => 1052,
                    'parent_id' => 203,
                    'code' => '77',
                    'full_code' => '17.01.77',
                    'description' => 'POMASQUI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:37',
                ),
            52 =>
                array(
                    'id' => 1053,
                    'parent_id' => 203,
                    'code' => '78',
                    'full_code' => '17.01.78',
                    'description' => 'PUELLARO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:37',
                ),
            53 =>
                array(
                    'id' => 1054,
                    'parent_id' => 203,
                    'code' => '79',
                    'full_code' => '17.01.79',
                    'description' => 'PUEMBO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:37',
                ),
            54 =>
                array(
                    'id' => 1055,
                    'parent_id' => 203,
                    'code' => '80',
                    'full_code' => '17.01.80',
                    'description' => 'SAN ANTONIO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:03',
                ),
            55 =>
                array(
                    'id' => 1056,
                    'parent_id' => 203,
                    'code' => '81',
                    'full_code' => '17.01.81',
                    'description' => 'SAN JOSE DE MINAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:37',
                ),
            56 =>
                array(
                    'id' => 1057,
                    'parent_id' => 203,
                    'code' => '83',
                    'full_code' => '17.01.83',
                    'description' => 'TABABELA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:37',
                ),
            57 =>
                array(
                    'id' => 1058,
                    'parent_id' => 203,
                    'code' => '84',
                    'full_code' => '17.01.84',
                    'description' => 'TUMBACO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:37',
                ),
            58 =>
                array(
                    'id' => 1059,
                    'parent_id' => 203,
                    'code' => '85',
                    'full_code' => '17.01.85',
                    'description' => 'YARUQUI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:03',
                ),
            59 =>
                array(
                    'id' => 1060,
                    'parent_id' => 203,
                    'code' => '86',
                    'full_code' => '17.01.86',
                    'description' => 'ZAMBIZA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:37',
                ),
            60 =>
                array(
                    'id' => 1061,
                    'parent_id' => 204,
                    'code' => '50',
                    'full_code' => '17.02.50',
                    'description' => 'CAYAMBE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:37',
                ),
            61 =>
                array(
                    'id' => 1062,
                    'parent_id' => 204,
                    'code' => '51',
                    'full_code' => '17.02.51',
                    'description' => 'ASCAZUBI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:37',
                ),
            62 =>
                array(
                    'id' => 1063,
                    'parent_id' => 204,
                    'code' => '52',
                    'full_code' => '17.02.52',
                    'description' => 'CANGAHUA ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:38',
                ),
            63 =>
                array(
                    'id' => 1064,
                    'parent_id' => 204,
                    'code' => '53',
                    'full_code' => '17.02.53',
                    'description' => 'OLMEDO (PESILLO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:03',
                ),
            64 =>
                array(
                    'id' => 1065,
                    'parent_id' => 204,
                    'code' => '54',
                    'full_code' => '17.02.54',
                    'description' => 'OTON',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:38',
                ),
            65 =>
                array(
                    'id' => 1066,
                    'parent_id' => 204,
                    'code' => '55',
                    'full_code' => '17.02.55',
                    'description' => 'SANTA ROSA DE CUZUBAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:38',
                ),
            66 =>
                array(
                    'id' => 1067,
                    'parent_id' => 205,
                    'code' => '50',
                    'full_code' => '17.03.50',
                    'description' => 'MACHACHI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:38',
                ),
            67 =>
                array(
                    'id' => 1068,
                    'parent_id' => 205,
                    'code' => '51',
                    'full_code' => '17.03.51',
                    'description' => 'ALOAG',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:38',
                ),
            68 =>
                array(
                    'id' => 1069,
                    'parent_id' => 205,
                    'code' => '52',
                    'full_code' => '17.03.52',
                    'description' => 'ALOASI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:03',
                ),
            69 =>
                array(
                    'id' => 1070,
                    'parent_id' => 205,
                    'code' => '53',
                    'full_code' => '17.03.53',
                    'description' => 'CUTUGLAHUA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:38',
                ),
            70 =>
                array(
                    'id' => 1071,
                    'parent_id' => 205,
                    'code' => '54',
                    'full_code' => '17.03.54',
                    'description' => 'EL CHAUPI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:38',
                ),
            71 =>
                array(
                    'id' => 1072,
                    'parent_id' => 205,
                    'code' => '55',
                    'full_code' => '17.03.55',
                    'description' => 'MANUEL CORNEJO ASTORGA (TANDAPI)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:03',
                ),
            72 =>
                array(
                    'id' => 1073,
                    'parent_id' => 205,
                    'code' => '56',
                    'full_code' => '17.03.56',
                    'description' => 'TAMBILLO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:38',
                ),
            73 =>
                array(
                    'id' => 1074,
                    'parent_id' => 205,
                    'code' => '57',
                    'full_code' => '17.03.57',
                    'description' => 'UYUMBICHO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:38',
                ),
            74 =>
                array(
                    'id' => 1075,
                    'parent_id' => 206,
                    'code' => '50',
                    'full_code' => '17.04.50',
                    'description' => 'TABACUNDO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:38',
                ),
            75 =>
                array(
                    'id' => 1076,
                    'parent_id' => 206,
                    'code' => '51',
                    'full_code' => '17.04.51',
                    'description' => 'LA ESPERANZA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:38',
                ),
            76 =>
                array(
                    'id' => 1077,
                    'parent_id' => 206,
                    'code' => '52',
                    'full_code' => '17.04.52',
                    'description' => 'MALCHINGUI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:03',
                ),
            77 =>
                array(
                    'id' => 1078,
                    'parent_id' => 206,
                    'code' => '53',
                    'full_code' => '17.04.53',
                    'description' => 'TOCACHI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:38',
                ),
            78 =>
                array(
                    'id' => 1079,
                    'parent_id' => 206,
                    'code' => '54',
                    'full_code' => '17.04.54',
                    'description' => 'TUPIGACHI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:38',
                ),
            79 =>
                array(
                    'id' => 1080,
                    'parent_id' => 207,
                    'code' => '50',
                    'full_code' => '17.05.50',
                    'description' => 'SANGOLQUI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:38',
                ),
            80 =>
                array(
                    'id' => 1081,
                    'parent_id' => 207,
                    'code' => '51',
                    'full_code' => '17.05.51',
                    'description' => 'COTOGCHOA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:38',
                ),
            81 =>
                array(
                    'id' => 1082,
                    'parent_id' => 207,
                    'code' => '52',
                    'full_code' => '17.05.52',
                    'description' => 'RUMIPAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:03',
                ),
            82 =>
                array(
                    'id' => 1083,
                    'parent_id' => 208,
                    'code' => '50',
                    'full_code' => '17.07.50',
                    'description' => 'SAN MIGUEL DE LOS BANCOS ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:38',
                ),
            83 =>
                array(
                    'id' => 1084,
                    'parent_id' => 208,
                    'code' => '51',
                    'full_code' => '17.07.51',
                    'description' => 'MINDO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:38',
                ),
            84 =>
                array(
                    'id' => 1085,
                    'parent_id' => 209,
                    'code' => '50',
                    'full_code' => '17.08.50',
                    'description' => 'PEDRO VICENTE MALDONADO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:03',
                ),
            85 =>
                array(
                    'id' => 1086,
                    'parent_id' => 210,
                    'code' => '50',
                    'full_code' => '17.09.50',
                    'description' => 'PUERTO QUITO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:03',
                ),
            86 =>
                array(
                    'id' => 1087,
                    'parent_id' => 211,
                    'code' => '50',
                    'full_code' => '18.01.50',
                    'description' => 'AMBATO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:38',
                ),
            87 =>
                array(
                    'id' => 1088,
                    'parent_id' => 211,
                    'code' => '51',
                    'full_code' => '18.01.51',
                    'description' => 'AMBATILLO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:39',
                ),
            88 =>
                array(
                    'id' => 1089,
                    'parent_id' => 211,
                    'code' => '52',
                    'full_code' => '18.01.52',
                    'description' => 'ATAHUALPA (CHISALATA) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:03',
                ),
            89 =>
                array(
                    'id' => 1090,
                    'parent_id' => 211,
                    'code' => '53',
                    'full_code' => '18.01.53',
                    'description' => 'AUGUSTO N. MARTINEZ (MUNDUGLEO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:39',
                ),
            90 =>
                array(
                    'id' => 1091,
                    'parent_id' => 211,
                    'code' => '54',
                    'full_code' => '18.01.54',
                    'description' => 'CONSTANTINO FERNANDEZ (CAB. EN CULLITAHUA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:39',
                ),
            91 =>
                array(
                    'id' => 1092,
                    'parent_id' => 211,
                    'code' => '55',
                    'full_code' => '18.01.55',
                    'description' => 'HUACHI GRANDE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:39',
                ),
            92 =>
                array(
                    'id' => 1093,
                    'parent_id' => 211,
                    'code' => '56',
                    'full_code' => '18.01.56',
                    'description' => 'IZAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:39',
                ),
            93 =>
                array(
                    'id' => 1094,
                    'parent_id' => 211,
                    'code' => '57',
                    'full_code' => '18.01.57',
                    'description' => 'JUAN BENIGNO VELA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:04',
                ),
            94 =>
                array(
                    'id' => 1095,
                    'parent_id' => 211,
                    'code' => '58',
                    'full_code' => '18.01.58',
                    'description' => 'MONTALVO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:39',
                ),
            95 =>
                array(
                    'id' => 1096,
                    'parent_id' => 211,
                    'code' => '59',
                    'full_code' => '18.01.59',
                    'description' => 'PASA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:39',
                ),
            96 =>
                array(
                    'id' => 1097,
                    'parent_id' => 211,
                    'code' => '60',
                    'full_code' => '18.01.60',
                    'description' => 'PICAIGUA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:39',
                ),
            97 =>
                array(
                    'id' => 1098,
                    'parent_id' => 211,
                    'code' => '61',
                    'full_code' => '18.01.61',
                    'description' => 'PILAGÜIN (PILAHÜIN)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:39',
                ),
            98 =>
                array(
                    'id' => 1099,
                    'parent_id' => 211,
                    'code' => '62',
                    'full_code' => '18.01.62',
                    'description' => 'QUISAPINCHA (QUIZAPINCHA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:04',
                ),
            99 =>
                array(
                    'id' => 1100,
                    'parent_id' => 211,
                    'code' => '63',
                    'full_code' => '18.01.63',
                    'description' => 'SAN BARTOLOME DE PINLLOG',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:39',
                ),
            100 =>
                array(
                    'id' => 1101,
                    'parent_id' => 211,
                    'code' => '64',
                    'full_code' => '18.01.64',
                    'description' => 'SAN FERNANDO (PASA  SAN FERNANDO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:39',
                ),
            101 =>
                array(
                    'id' => 1102,
                    'parent_id' => 211,
                    'code' => '65',
                    'full_code' => '18.01.65',
                    'description' => 'SANTA ROSA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:39',
                ),
            102 =>
                array(
                    'id' => 1103,
                    'parent_id' => 211,
                    'code' => '66',
                    'full_code' => '18.01.66',
                    'description' => 'TOTORAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:39',
                ),
            103 =>
                array(
                    'id' => 1104,
                    'parent_id' => 211,
                    'code' => '67',
                    'full_code' => '18.01.67',
                    'description' => 'CUNCHIBAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:04',
                ),
            104 =>
                array(
                    'id' => 1105,
                    'parent_id' => 211,
                    'code' => '68',
                    'full_code' => '18.01.68',
                    'description' => 'UNAMUNCHO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:39',
                ),
            105 =>
                array(
                    'id' => 1106,
                    'parent_id' => 212,
                    'code' => '50',
                    'full_code' => '18.02.50',
                    'description' => 'BAÑOS DE AGUA SANTA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:39',
                ),
            106 =>
                array(
                    'id' => 1107,
                    'parent_id' => 212,
                    'code' => '51',
                    'full_code' => '18.02.51',
                    'description' => 'LLIGUA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:39',
                ),
            107 =>
                array(
                    'id' => 1108,
                    'parent_id' => 212,
                    'code' => '52',
                    'full_code' => '18.02.52',
                    'description' => 'RIO NEGRO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:39',
                ),
            108 =>
                array(
                    'id' => 1109,
                    'parent_id' => 212,
                    'code' => '53',
                    'full_code' => '18.02.53',
                    'description' => 'RIO VERDE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:04',
                ),
            109 =>
                array(
                    'id' => 1110,
                    'parent_id' => 212,
                    'code' => '54',
                    'full_code' => '18.02.54',
                    'description' => 'ULBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:40',
                ),
            110 =>
                array(
                    'id' => 1111,
                    'parent_id' => 213,
                    'code' => '50',
                    'full_code' => '18.03.50',
                    'description' => 'CEVALLOS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:40',
                ),
            111 =>
                array(
                    'id' => 1112,
                    'parent_id' => 214,
                    'code' => '50',
                    'full_code' => '18.04.50',
                    'description' => 'MOCHA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:40',
                ),
            112 =>
                array(
                    'id' => 1113,
                    'parent_id' => 214,
                    'code' => '51',
                    'full_code' => '18.04.51',
                    'description' => 'PINGUILI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:40',
                ),
            113 =>
                array(
                    'id' => 1114,
                    'parent_id' => 215,
                    'code' => '50',
                    'full_code' => '18.05.50',
                    'description' => 'PATATE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:04',
                ),
            114 =>
                array(
                    'id' => 1115,
                    'parent_id' => 215,
                    'code' => '51',
                    'full_code' => '18.05.51',
                    'description' => 'EL TRIUNFO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:40',
                ),
            115 =>
                array(
                    'id' => 1116,
                    'parent_id' => 215,
                    'code' => '52',
                    'full_code' => '18.05.52',
                    'description' => 'LOS ANDES (CAB. EN POATUG) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:40',
                ),
            116 =>
                array(
                    'id' => 1117,
                    'parent_id' => 215,
                    'code' => '53',
                    'full_code' => '18.05.53',
                    'description' => 'SUCRE (CAB. EN SUCRE-PATATE URCU)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:04',
                ),
            117 =>
                array(
                    'id' => 1118,
                    'parent_id' => 216,
                    'code' => '50',
                    'full_code' => '18.06.50',
                    'description' => 'QUERO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:40',
                ),
            118 =>
                array(
                    'id' => 1119,
                    'parent_id' => 216,
                    'code' => '51',
                    'full_code' => '18.06.51',
                    'description' => 'RUMIPAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:40',
                ),
            119 =>
                array(
                    'id' => 1120,
                    'parent_id' => 216,
                    'code' => '52',
                    'full_code' => '18.06.52',
                    'description' => 'YANAYACU - MOCHAPATA (CAB. EN YANAYACU) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:40',
                ),
            120 =>
                array(
                    'id' => 1121,
                    'parent_id' => 217,
                    'code' => '50',
                    'full_code' => '18.07.50',
                    'description' => 'PELILEO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:40',
                ),
            121 =>
                array(
                    'id' => 1122,
                    'parent_id' => 217,
                    'code' => '51',
                    'full_code' => '18.07.51',
                    'description' => 'BENITEZ (PACHANLICA) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:40',
                ),
            122 =>
                array(
                    'id' => 1123,
                    'parent_id' => 217,
                    'code' => '52',
                    'full_code' => '18.07.52',
                    'description' => 'BOLIVAR',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:40',
                ),
            123 =>
                array(
                    'id' => 1124,
                    'parent_id' => 217,
                    'code' => '53',
                    'full_code' => '18.07.53',
                    'description' => 'COTALO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:04',
                ),
            124 =>
                array(
                    'id' => 1125,
                    'parent_id' => 217,
                    'code' => '54',
                    'full_code' => '18.07.54',
                    'description' => 'CHIQUICHA (CAB. EN CHIQUICHA GRANDE)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:40',
                ),
            125 =>
                array(
                    'id' => 1126,
                    'parent_id' => 217,
                    'code' => '55',
                    'full_code' => '18.07.55',
                    'description' => 'EL ROSARIO (RUMICHACA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:40',
                ),
            126 =>
                array(
                    'id' => 1127,
                    'parent_id' => 217,
                    'code' => '56',
                    'full_code' => '18.07.56',
                    'description' => 'GARCIA MORENO (CHUMAQUI)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:04',
                ),
            127 =>
                array(
                    'id' => 1128,
                    'parent_id' => 217,
                    'code' => '57',
                    'full_code' => '18.07.57',
                    'description' => 'GUAMBALO (HUAMBALO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:40',
                ),
            128 =>
                array(
                    'id' => 1129,
                    'parent_id' => 217,
                    'code' => '58',
                    'full_code' => '18.07.58',
                    'description' => 'SALASACA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:40',
                ),
            129 =>
                array(
                    'id' => 1130,
                    'parent_id' => 218,
                    'code' => '50',
                    'full_code' => '18.08.50',
                    'description' => 'PILLARO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:41',
                ),
            130 =>
                array(
                    'id' => 1131,
                    'parent_id' => 218,
                    'code' => '51',
                    'full_code' => '18.08.51',
                    'description' => 'BAQUERIZO MORENO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:41',
                ),
            131 =>
                array(
                    'id' => 1132,
                    'parent_id' => 218,
                    'code' => '52',
                    'full_code' => '18.08.52',
                    'description' => 'EMILIO MARIA TERAN (RUMIPAMBA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:04',
                ),
            132 =>
                array(
                    'id' => 1133,
                    'parent_id' => 218,
                    'code' => '53',
                    'full_code' => '18.08.53',
                    'description' => 'MARCOS ESPINEL (CHACATA) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:41',
                ),
            133 =>
                array(
                    'id' => 1134,
                    'parent_id' => 218,
                    'code' => '54',
                    'full_code' => '18.08.54',
                    'description' => 'PRESIDENTE URBINA (CHAGRAPAMBA -PATZUCUL)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:41',
                ),
            134 =>
                array(
                    'id' => 1135,
                    'parent_id' => 218,
                    'code' => '55',
                    'full_code' => '18.08.55',
                    'description' => 'SAN ANDRES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:41',
                ),
            135 =>
                array(
                    'id' => 1136,
                    'parent_id' => 218,
                    'code' => '56',
                    'full_code' => '18.08.56',
                    'description' => 'SAN JOSE DE POALO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:41',
                ),
            136 =>
                array(
                    'id' => 1137,
                    'parent_id' => 218,
                    'code' => '57',
                    'full_code' => '18.08.57',
                    'description' => 'SAN MIGUELITO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:41',
                ),
            137 =>
                array(
                    'id' => 1138,
                    'parent_id' => 219,
                    'code' => '50',
                    'full_code' => '18.09.50',
                    'description' => 'TISALEO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:04',
                ),
            138 =>
                array(
                    'id' => 1139,
                    'parent_id' => 219,
                    'code' => '51',
                    'full_code' => '18.09.51',
                    'description' => 'QUINCHICOTO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:41',
                ),
            139 =>
                array(
                    'id' => 1140,
                    'parent_id' => 220,
                    'code' => '50',
                    'full_code' => '19.01.50',
                    'description' => 'ZAMORA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:41',
                ),
            140 =>
                array(
                    'id' => 1141,
                    'parent_id' => 220,
                    'code' => '51',
                    'full_code' => '19.01.51',
                    'description' => 'CUMBARATZA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:41',
                ),
            141 =>
                array(
                    'id' => 1142,
                    'parent_id' => 220,
                    'code' => '52',
                    'full_code' => '19.01.52',
                    'description' => 'GUADALUPE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:04',
                ),
            142 =>
                array(
                    'id' => 1143,
                    'parent_id' => 220,
                    'code' => '53',
                    'full_code' => '19.01.53',
                    'description' => 'IMBANA (LA VICTORIA DE IMBANA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:41',
                ),
            143 =>
                array(
                    'id' => 1144,
                    'parent_id' => 220,
                    'code' => '55',
                    'full_code' => '19.01.55',
                    'description' => 'SABANILLA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:41',
                ),
            144 =>
                array(
                    'id' => 1145,
                    'parent_id' => 220,
                    'code' => '56',
                    'full_code' => '19.01.56',
                    'description' => 'TIMBARA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:41',
                ),
            145 =>
                array(
                    'id' => 1146,
                    'parent_id' => 220,
                    'code' => '58',
                    'full_code' => '19.01.58',
                    'description' => 'SAN CARLOS DE LAS MINAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:04',
                ),
            146 =>
                array(
                    'id' => 1147,
                    'parent_id' => 221,
                    'code' => '50',
                    'full_code' => '19.02.50',
                    'description' => 'ZUMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:41',
                ),
            147 =>
                array(
                    'id' => 1148,
                    'parent_id' => 221,
                    'code' => '51',
                    'full_code' => '19.02.51',
                    'description' => 'CHITO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:41',
                ),
            148 =>
                array(
                    'id' => 1149,
                    'parent_id' => 221,
                    'code' => '52',
                    'full_code' => '19.02.52',
                    'description' => 'EL CHORRO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:41',
                ),
            149 =>
                array(
                    'id' => 1150,
                    'parent_id' => 221,
                    'code' => '54',
                    'full_code' => '19.02.54',
                    'description' => 'LA CHONTA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:42',
                ),
            150 =>
                array(
                    'id' => 1151,
                    'parent_id' => 221,
                    'code' => '56',
                    'full_code' => '19.02.56',
                    'description' => 'PUCAPAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:04',
                ),
            151 =>
                array(
                    'id' => 1152,
                    'parent_id' => 221,
                    'code' => '59',
                    'full_code' => '19.02.59',
                    'description' => 'SAN ANDRES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:42',
                ),
            152 =>
                array(
                    'id' => 1153,
                    'parent_id' => 222,
                    'code' => '50',
                    'full_code' => '19.03.50',
                    'description' => 'GUAYZIMI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:42',
                ),
            153 =>
                array(
                    'id' => 1154,
                    'parent_id' => 222,
                    'code' => '51',
                    'full_code' => '19.03.51',
                    'description' => 'ZURMI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:42',
                ),
            154 =>
                array(
                    'id' => 1155,
                    'parent_id' => 222,
                    'code' => '52',
                    'full_code' => '19.03.52',
                    'description' => 'NUEVO PARAISO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:42',
                ),
            155 =>
                array(
                    'id' => 1156,
                    'parent_id' => 223,
                    'code' => '50',
                    'full_code' => '19.04.50',
                    'description' => '28 DE MAYO (SAN JOSE DE YACUAMBI)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:04',
                ),
            156 =>
                array(
                    'id' => 1157,
                    'parent_id' => 223,
                    'code' => '51',
                    'full_code' => '19.04.51',
                    'description' => 'LA PAZ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:42',
                ),
            157 =>
                array(
                    'id' => 1158,
                    'parent_id' => 223,
                    'code' => '52',
                    'full_code' => '19.04.52',
                    'description' => 'TUTUPALI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:42',
                ),
            158 =>
                array(
                    'id' => 1159,
                    'parent_id' => 224,
                    'code' => '50',
                    'full_code' => '19.05.50',
                    'description' => 'YANTZAZA (YANZATZA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:42',
                ),
            159 =>
                array(
                    'id' => 1160,
                    'parent_id' => 224,
                    'code' => '51',
                    'full_code' => '19.05.51',
                    'description' => 'CHICAÑA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:42',
                ),
            160 =>
                array(
                    'id' => 1161,
                    'parent_id' => 224,
                    'code' => '53',
                    'full_code' => '19.05.53',
                    'description' => 'LOS ENCUENTROS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:42',
                ),
            161 =>
                array(
                    'id' => 1162,
                    'parent_id' => 225,
                    'code' => '50',
                    'full_code' => '19.06.50',
                    'description' => 'EL PANGUI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:04',
                ),
            162 =>
                array(
                    'id' => 1163,
                    'parent_id' => 225,
                    'code' => '51',
                    'full_code' => '19.06.51',
                    'description' => 'EL GUISME ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:42',
                ),
            163 =>
                array(
                    'id' => 1164,
                    'parent_id' => 225,
                    'code' => '52',
                    'full_code' => '19.06.52',
                    'description' => 'PACHICUTZA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:42',
                ),
            164 =>
                array(
                    'id' => 1165,
                    'parent_id' => 225,
                    'code' => '53',
                    'full_code' => '19.06.53',
                    'description' => 'TUNDAYME',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:42',
                ),
            165 =>
                array(
                    'id' => 1166,
                    'parent_id' => 226,
                    'code' => '50',
                    'full_code' => '19.07.50',
                    'description' => 'ZUMBI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:42',
                ),
            166 =>
                array(
                    'id' => 1167,
                    'parent_id' => 227,
                    'code' => '50',
                    'full_code' => '19.08.50',
                    'description' => 'PALANDA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:04',
                ),
            167 =>
                array(
                    'id' => 1168,
                    'parent_id' => 227,
                    'code' => '51',
                    'full_code' => '19.08.51',
                    'description' => 'EL PORVENIR DEL CARMEN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:42',
                ),
            168 =>
                array(
                    'id' => 1169,
                    'parent_id' => 27,
                    'code' => '52',
                    'full_code' => '19.08.52',
                    'description' => 'SAN FRANCISCO DEL VERGEL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:42',
                ),
            169 =>
                array(
                    'id' => 1170,
                    'parent_id' => 227,
                    'code' => '53',
                    'full_code' => '19.08.53',
                    'description' => 'VALLADOLID',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:42',
                ),
            170 =>
                array(
                    'id' => 1171,
                    'parent_id' => 227,
                    'code' => '54',
                    'full_code' => '19.08.54',
                    'description' => 'LA CANELA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:04',
                ),
            171 =>
                array(
                    'id' => 1172,
                    'parent_id' => 228,
                    'code' => '50',
                    'full_code' => '19.09.50',
                    'description' => 'PAQUISHA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:43',
                ),
            172 =>
                array(
                    'id' => 1173,
                    'parent_id' => 228,
                    'code' => '51',
                    'full_code' => '19.09.51',
                    'description' => 'BELLAVISTA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:43',
                ),
            173 =>
                array(
                    'id' => 1174,
                    'parent_id' => 228,
                    'code' => '52',
                    'full_code' => '19.09.52',
                    'description' => 'NUEVO QUITO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:43',
                ),
            174 =>
                array(
                    'id' => 1175,
                    'parent_id' => 229,
                    'code' => '50',
                    'full_code' => '20.01.50',
                    'description' => 'PUERTO BAQUERIZO MORENO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:04',
                ),
            175 =>
                array(
                    'id' => 1176,
                    'parent_id' => 229,
                    'code' => '51',
                    'full_code' => '20.01.51',
                    'description' => 'EL PROGRESO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:43',
                ),
            176 =>
                array(
                    'id' => 1177,
                    'parent_id' => 229,
                    'code' => '52',
                    'full_code' => '20.01.52',
                    'description' => 'ISLA SANTA MARIA (FLOREANA) (CAB. EN  PTO. VELASCO IBARRA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:43',
                ),
            177 =>
                array(
                    'id' => 1178,
                    'parent_id' => 230,
                    'code' => '50',
                    'full_code' => '20.02.50',
                    'description' => 'PUERTO VILLAMIL',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:43',
                ),
            178 =>
                array(
                    'id' => 1179,
                    'parent_id' => 230,
                    'code' => '51',
                    'full_code' => '20.02.51',
                    'description' => 'TOMAS DE BERLANGA (SANTO TOMAS)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:43',
                ),
            179 =>
                array(
                    'id' => 1180,
                    'parent_id' => 231,
                    'code' => '50',
                    'full_code' => '20.03.50',
                    'description' => 'PUERTO AYORA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:43',
                ),
            180 =>
                array(
                    'id' => 1181,
                    'parent_id' => 231,
                    'code' => '51',
                    'full_code' => '20.03.51',
                    'description' => 'BELLAVISTA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:05',
                ),
            181 =>
                array(
                    'id' => 1182,
                    'parent_id' => 231,
                    'code' => '52',
                    'full_code' => '20.03.52',
                    'description' => 'SANTA ROSA (INCLUYE LA ISLA BALTRA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:05',
                ),
            182 =>
                array(
                    'id' => 1183,
                    'parent_id' => 232,
                    'code' => '50',
                    'full_code' => '21.01.50',
                    'description' => 'NUEVA LOJA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:43',
                ),
            183 =>
                array(
                    'id' => 1184,
                    'parent_id' => 232,
                    'code' => '52',
                    'full_code' => '21.01.52',
                    'description' => 'DURENO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:43',
                ),
            184 =>
                array(
                    'id' => 1185,
                    'parent_id' => 232,
                    'code' => '53',
                    'full_code' => '21.01.53',
                    'description' => 'GENERAL FARFAN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:43',
                ),
            185 =>
                array(
                    'id' => 1186,
                    'parent_id' => 232,
                    'code' => '55',
                    'full_code' => '21.01.55',
                    'description' => 'EL ENO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:05',
                ),
            186 =>
                array(
                    'id' => 1187,
                    'parent_id' => 232,
                    'code' => '56',
                    'full_code' => '21.01.56',
                    'description' => 'PACAYACU',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:43',
                ),
            187 =>
                array(
                    'id' => 1188,
                    'parent_id' => 232,
                    'code' => '57',
                    'full_code' => '21.01.57',
                    'description' => 'JAMBELI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:44',
                ),
            188 =>
                array(
                    'id' => 1189,
                    'parent_id' => 232,
                    'code' => '58',
                    'full_code' => '21.01.58',
                    'description' => 'SANTA CECILIA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:44',
                ),
            189 =>
                array(
                    'id' => 1190,
                    'parent_id' => 233,
                    'code' => '50',
                    'full_code' => '21.02.50',
                    'description' => 'LUMBAQUI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:44',
                ),
            190 =>
                array(
                    'id' => 1191,
                    'parent_id' => 233,
                    'code' => '51',
                    'full_code' => '21.02.51',
                    'description' => 'EL REVENTADOR   ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:05',
                ),
            191 =>
                array(
                    'id' => 1192,
                    'parent_id' => 233,
                    'code' => '52',
                    'full_code' => '21.02.52',
                    'description' => 'GONZALO PIZARRO ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:44',
                ),
            192 =>
                array(
                    'id' => 1193,
                    'parent_id' => 233,
                    'code' => '54',
                    'full_code' => '21.02.54',
                    'description' => 'PUERTO LIBRE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:44',
                ),
            193 =>
                array(
                    'id' => 1194,
                    'parent_id' => 234,
                    'code' => '50',
                    'full_code' => '21.03.50',
                    'description' => 'PUERTO EL CARMEN DEL PUTUMAYO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:44',
                ),
            194 =>
                array(
                    'id' => 1195,
                    'parent_id' => 234,
                    'code' => '51',
                    'full_code' => '21.03.51',
                    'description' => 'PALMA ROJA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:05',
                ),
            195 =>
                array(
                    'id' => 1196,
                    'parent_id' => 234,
                    'code' => '52',
                    'full_code' => '21.03.52',
                    'description' => 'PUERTOBOLIVAR (PUERTO MONTUFAR)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:44',
                ),
            196 =>
                array(
                    'id' => 1197,
                    'parent_id' => 234,
                    'code' => '53',
                    'full_code' => '21.03.53',
                    'description' => 'PUERTO RODRIGUEZ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:44',
                ),
            197 =>
                array(
                    'id' => 1198,
                    'parent_id' => 234,
                    'code' => '54',
                    'full_code' => '21.03.54',
                    'description' => 'SANTA ELENA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:44',
                ),
            198 =>
                array(
                    'id' => 1199,
                    'parent_id' => 235,
                    'code' => '50',
                    'full_code' => '21.04.50',
                    'description' => 'SHUSHUFINDI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:44',
                ),
            199 =>
                array(
                    'id' => 1200,
                    'parent_id' => 235,
                    'code' => '51',
                    'full_code' => '21.04.51',
                    'description' => 'LIMONCOCHA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:05',
                ),
            200 =>
                array(
                    'id' => 1201,
                    'parent_id' => 235,
                    'code' => '52',
                    'full_code' => '21.04.52',
                    'description' => 'PAÑACOCHA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:44',
                ),
            201 =>
                array(
                    'id' => 1202,
                    'parent_id' => 235,
                    'code' => '53',
                    'full_code' => '21.04.53',
                    'description' => 'SAN ROQUE (CAB. EN SAN VICENTE)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:44',
                ),
            202 =>
                array(
                    'id' => 1203,
                    'parent_id' => 235,
                    'code' => '54',
                    'full_code' => '21.04.54',
                    'description' => 'SAN PEDRO DE LOS COFANES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:44',
                ),
            203 =>
                array(
                    'id' => 1204,
                    'parent_id' => 235,
                    'code' => '55',
                    'full_code' => '21.04.55',
                    'description' => 'SIETE DE JULIO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:44',
                ),
            204 =>
                array(
                    'id' => 1205,
                    'parent_id' => 236,
                    'code' => '50',
                    'full_code' => '21.05.50',
                    'description' => 'LA BONITA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:05',
                ),
            205 =>
                array(
                    'id' => 1206,
                    'parent_id' => 236,
                    'code' => '51',
                    'full_code' => '21.05.51',
                    'description' => 'EL PLAYON DE SAN FRANCISCO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:44',
                ),
            206 =>
                array(
                    'id' => 1207,
                    'parent_id' => 236,
                    'code' => '52',
                    'full_code' => '21.05.52',
                    'description' => 'LA SOFIA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:44',
                ),
            207 =>
                array(
                    'id' => 1208,
                    'parent_id' => 236,
                    'code' => '53',
                    'full_code' => '21.05.53',
                    'description' => 'ROSA FLORIDA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:44',
                ),
            208 =>
                array(
                    'id' => 1209,
                    'parent_id' => 236,
                    'code' => '54',
                    'full_code' => '21.05.54',
                    'description' => 'SANTA BARBARA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:45',
                ),
            209 =>
                array(
                    'id' => 1210,
                    'parent_id' => 237,
                    'code' => '50',
                    'full_code' => '21.06.50',
                    'description' => 'EL DORADO DE CASCALES',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:05',
                ),
            210 =>
                array(
                    'id' => 1211,
                    'parent_id' => 237,
                    'code' => '51',
                    'full_code' => '21.06.51',
                    'description' => 'SANTA ROSA DE SUCUMBIOS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:45',
                ),
            211 =>
                array(
                    'id' => 1212,
                    'parent_id' => 237,
                    'code' => '52',
                    'full_code' => '21.06.52',
                    'description' => 'SEVILLA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:45',
                ),
            212 =>
                array(
                    'id' => 1213,
                    'parent_id' => 238,
                    'code' => '50',
                    'full_code' => '21.07.50',
                    'description' => 'TARAPOA ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:45',
                ),
            213 =>
                array(
                    'id' => 1214,
                    'parent_id' => 238,
                    'code' => '51',
                    'full_code' => '21.07.51',
                    'description' => 'CUYABENO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:45',
                ),
            214 =>
                array(
                    'id' => 1215,
                    'parent_id' => 238,
                    'code' => '52',
                    'full_code' => '21.07.52',
                    'description' => 'AGUAS NEGRAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:05',
                ),
            215 =>
                array(
                    'id' => 1216,
                    'parent_id' => 239,
                    'code' => '50',
                    'full_code' => '22.01.50',
                    'description' => 'PUERTO FRANCISCO DE ORELLANA (EL COCA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:45',
                ),
            216 =>
                array(
                    'id' => 1217,
                    'parent_id' => 239,
                    'code' => '51',
                    'full_code' => '22.01.51',
                    'description' => 'DAYUMA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:45',
                ),
            217 =>
                array(
                    'id' => 1218,
                    'parent_id' => 239,
                    'code' => '52',
                    'full_code' => '22.01.52',
                    'description' => 'TARACOA (CAB. EN NUEVA ESPERANZA: YUCA)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:45',
                ),
            218 =>
                array(
                    'id' => 1219,
                    'parent_id' => 239,
                    'code' => '53',
                    'full_code' => '22.01.53',
                    'description' => 'ALEJANDRO LABAKA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:45',
                ),
            219 =>
                array(
                    'id' => 1220,
                    'parent_id' => 239,
                    'code' => '54',
                    'full_code' => '22.01.54',
                    'description' => 'EL DORADO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:05',
                ),
            220 =>
                array(
                    'id' => 1221,
                    'parent_id' => 239,
                    'code' => '55',
                    'full_code' => '22.01.55',
                    'description' => 'EL EDEN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:45',
                ),
            221 =>
                array(
                    'id' => 1222,
                    'parent_id' => 239,
                    'code' => '56',
                    'full_code' => '22.01.56',
                    'description' => 'GARCIA MORENO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:45',
                ),
            222 =>
                array(
                    'id' => 1223,
                    'parent_id' => 239,
                    'code' => '57',
                    'full_code' => '22.01.57',
                    'description' => 'INES ARANGO (CAB. EN WESTERN)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:45',
                ),
            223 =>
                array(
                    'id' => 1224,
                    'parent_id' => 239,
                    'code' => '58',
                    'full_code' => '22.01.58',
                    'description' => 'LA BELLEZA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:45',
                ),
            224 =>
                array(
                    'id' => 1225,
                    'parent_id' => 239,
                    'code' => '59',
                    'full_code' => '22.01.59',
                    'description' => 'NUEVO PARAISO (CAB. EN UNIÓN CHIMBORAZO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:05',
                ),
            225 =>
                array(
                    'id' => 1226,
                    'parent_id' => 239,
                    'code' => '60',
                    'full_code' => '22.01.60',
                    'description' => 'SAN JOSE DE GUAYUSA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:45',
                ),
            226 =>
                array(
                    'id' => 1227,
                    'parent_id' => 239,
                    'code' => '61',
                    'full_code' => '22.01.61',
                    'description' => 'SAN LUIS DE ARMENIA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:45',
                ),
            227 =>
                array(
                    'id' => 1228,
                    'parent_id' => 240,
                    'code' => '50',
                    'full_code' => '22.02.50',
                    'description' => 'NUEVO ROCAFUERTE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:45',
                ),
            228 =>
                array(
                    'id' => 1229,
                    'parent_id' => 240,
                    'code' => '51',
                    'full_code' => '22.02.51',
                    'description' => 'CAPITAN AUGUSTO RIVADENEYRA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:45',
                ),
            229 =>
                array(
                    'id' => 1230,
                    'parent_id' => 240,
                    'code' => '52',
                    'full_code' => '22.02.52',
                    'description' => 'CONONACO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:45',
                ),
            230 =>
                array(
                    'id' => 1231,
                    'parent_id' => 240,
                    'code' => '53',
                    'full_code' => '22.02.53',
                    'description' => 'SANTA MARIA DE HUIRIRIMA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:05',
                ),
            231 =>
                array(
                    'id' => 1232,
                    'parent_id' => 240,
                    'code' => '54',
                    'full_code' => '22.02.54',
                    'description' => 'TIPUTINI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:46',
                ),
            232 =>
                array(
                    'id' => 1233,
                    'parent_id' => 240,
                    'code' => '55',
                    'full_code' => '22.02.55',
                    'description' => 'YASUNI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:46',
                ),
            233 =>
                array(
                    'id' => 1234,
                    'parent_id' => 241,
                    'code' => '50',
                    'full_code' => '22.03.50',
                    'description' => 'LA JOYA DE LOS SACHAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:46',
                ),
            234 =>
                array(
                    'id' => 1235,
                    'parent_id' => 241,
                    'code' => '51',
                    'full_code' => '22.03.51',
                    'description' => 'ENOKANQUI ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:46',
                ),
            235 =>
                array(
                    'id' => 1236,
                    'parent_id' => 241,
                    'code' => '52',
                    'full_code' => '22.03.52',
                    'description' => 'POMPEYA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:46',
                ),
            236 =>
                array(
                    'id' => 1237,
                    'parent_id' => 241,
                    'code' => '53',
                    'full_code' => '22.03.53',
                    'description' => 'SAN CARLOS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:05',
                ),
            237 =>
                array(
                    'id' => 1238,
                    'parent_id' => 241,
                    'code' => '54',
                    'full_code' => '22.03.54',
                    'description' => 'SAN SEBASTIAN DEL COCA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:46',
                ),
            238 =>
                array(
                    'id' => 1239,
                    'parent_id' => 241,
                    'code' => '55',
                    'full_code' => '22.03.55',
                    'description' => 'LAGO SAN PEDRO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:46',
                ),
            239 =>
                array(
                    'id' => 1240,
                    'parent_id' => 241,
                    'code' => '56',
                    'full_code' => '22.03.56',
                    'description' => 'RUMIPAMBA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:46',
                ),
            240 =>
                array(
                    'id' => 1241,
                    'parent_id' => 241,
                    'code' => '57',
                    'full_code' => '22.03.57',
                    'description' => 'TRES DE NOVIEMBRE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:05',
                ),
            241 =>
                array(
                    'id' => 1242,
                    'parent_id' => 241,
                    'code' => '58',
                    'full_code' => '22.03.58',
                    'description' => 'UNION MILAGREÑA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:46',
                ),
            242 =>
                array(
                    'id' => 1243,
                    'parent_id' => 242,
                    'code' => '50',
                    'full_code' => '22.04.50',
                    'description' => 'LORETO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:46',
                ),
            243 =>
                array(
                    'id' => 1244,
                    'parent_id' => 242,
                    'code' => '51',
                    'full_code' => '22.04.51',
                    'description' => 'AVILA (CAB. EN HUIRUNO) ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:46',
                ),
            244 =>
                array(
                    'id' => 1245,
                    'parent_id' => 242,
                    'code' => '52',
                    'full_code' => '22.04.52',
                    'description' => 'PUERTO MURIALDO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:46',
                ),
            245 =>
                array(
                    'id' => 1246,
                    'parent_id' => 242,
                    'code' => '53',
                    'full_code' => '22.04.53',
                    'description' => 'SAN JOSE DE PAYAMINO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:05',
                ),
            246 =>
                array(
                    'id' => 1247,
                    'parent_id' => 242,
                    'code' => '54',
                    'full_code' => '22.04.54',
                    'description' => 'SAN JOSE DE DAHUANO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:46',
                ),
            247 =>
                array(
                    'id' => 1248,
                    'parent_id' => 242,
                    'code' => '55',
                    'full_code' => '22.04.55',
                    'description' => 'SAN VICENTE DE HUATICOCHA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:46',
                ),
            248 =>
                array(
                    'id' => 1249,
                    'parent_id' => 243,
                    'code' => '50',
                    'full_code' => '23.01.50',
                    'description' => 'SANTO DOMINGO DE LOS COLORADOS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:46',
                ),
            249 =>
                array(
                    'id' => 1250,
                    'parent_id' => 243,
                    'code' => '51',
                    'full_code' => '23.01.51',
                    'description' => 'ALLURIQUIN',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:46',
                ),
            250 =>
                array(
                    'id' => 1251,
                    'parent_id' => 243,
                    'code' => '52',
                    'full_code' => '23.01.52',
                    'description' => 'PUERTO LIMON',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:05',
                ),
            251 =>
                array(
                    'id' => 1252,
                    'parent_id' => 243,
                    'code' => '53',
                    'full_code' => '23.01.53',
                    'description' => 'LUZ DE AMERICA ',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:46',
                ),
            252 =>
                array(
                    'id' => 1253,
                    'parent_id' => 243,
                    'code' => '54',
                    'full_code' => '23.01.54',
                    'description' => 'SAN JACINTO DEL BUA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:47',
                ),
            253 =>
                array(
                    'id' => 1254,
                    'parent_id' => 243,
                    'code' => '55',
                    'full_code' => '23.01.55',
                    'description' => 'VALLE HERMOSO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:47',
                ),
            254 =>
                array(
                    'id' => 1255,
                    'parent_id' => 243,
                    'code' => '56',
                    'full_code' => '23.01.56',
                    'description' => 'EL ESFUERZO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:47',
                ),
            255 =>
                array(
                    'id' => 1256,
                    'parent_id' => 243,
                    'code' => '57',
                    'full_code' => '23.01.57',
                    'description' => 'SANTA MARIA DEL TOACHI',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:05',
                ),
            256 =>
                array(
                    'id' => 1257,
                    'parent_id' => 244,
                    'code' => '50',
                    'full_code' => '24.01.50',
                    'description' => 'SANTA ELENA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:47',
                ),
            257 =>
                array(
                    'id' => 1258,
                    'parent_id' => 244,
                    'code' => '51',
                    'full_code' => '24.01.51',
                    'description' => 'ATAHUALPA',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:47',
                ),
            258 =>
                array(
                    'id' => 1259,
                    'parent_id' => 244,
                    'code' => '52',
                    'full_code' => '24.01.52',
                    'description' => 'COLONCHE',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:47',
                ),
            259 =>
                array(
                    'id' => 1260,
                    'parent_id' => 244,
                    'code' => '53',
                    'full_code' => '24.01.53',
                    'description' => 'CHANDUY',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:47',
                ),
            260 =>
                array(
                    'id' => 1261,
                    'parent_id' => 244,
                    'code' => '54',
                    'full_code' => '24.01.54',
                    'description' => 'MANGLARALTO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:05',
                ),
            261 =>
                array(
                    'id' => 1262,
                    'parent_id' => 244,
                    'code' => '55',
                    'full_code' => '24.01.55',
                    'description' => 'SIMONBOLIVAR (JULIO MORENO)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:47',
                ),
            262 =>
                array(
                    'id' => 1263,
                    'parent_id' => 244,
                    'code' => '56',
                    'full_code' => '24.01.56',
                    'description' => 'SAN JOSE DE ANCON',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:47',
                ),
            263 =>
                array(
                    'id' => 1264,
                    'parent_id' => 245,
                    'code' => '50',
                    'full_code' => '24.02.50',
                    'description' => 'LA LIBERTAD',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:47',
                ),
            264 =>
                array(
                    'id' => 1265,
                    'parent_id' => 246,
                    'code' => '50',
                    'full_code' => '24.03.50',
                    'description' => 'SALINAS',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:47',
                ),
            265 =>
                array(
                    'id' => 1266,
                    'parent_id' => 246,
                    'code' => '51',
                    'full_code' => '24.03.51',
                    'description' => 'ANCONCITO',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:15:06',
                ),
            266 =>
                array(
                    'id' => 1267,
                    'parent_id' => 246,
                    'code' => '52',
                    'full_code' => '24.03.52',
                    'description' => 'JOSE LUIS TAMAYO (MUEY)',
                    'type' => 'PARISH',
                    'enabled' => 1,

                    'created_at' => NULL,
                    'updated_at' => '2021-06-30 21:14:47',
                ),
        ));


    }
}
