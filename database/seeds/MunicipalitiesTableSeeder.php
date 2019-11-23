<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['mun_code' => 'N/A', 'mun_title' => 'Agno'],
            ['mun_code' => 'N/A', 'mun_title' => 'Aguilar'],
            ['mun_code' => 'N/A', 'mun_title' => 'Alcala'],
            ['mun_code' => 'N/A', 'mun_title' => 'Anda'],
            ['mun_code' => 'N/A', 'mun_title' => 'Asingan'],
            ['mun_code' => 'N/A', 'mun_title' => 'Balungao'],
            ['mun_code' => 'N/A', 'mun_title' => 'Bani'],
            ['mun_code' => 'N/A', 'mun_title' => 'Basista'],
            ['mun_code' => 'N/A', 'mun_title' => 'Bautista'],
            ['mun_code' => 'N/A', 'mun_title' => 'Bayambang'],
            ['mun_code' => 'N/A', 'mun_title' => 'Binalonan'],
            ['mun_code' => 'N/A', 'mun_title' => 'Binmaley'],
            ['mun_code' => 'N/A', 'mun_title' => 'Bolinao'],
            ['mun_code' => 'N/A', 'mun_title' => 'Bugallon'],
            ['mun_code' => 'N/A', 'mun_title' => 'Burgos'],
            ['mun_code' => 'N/A', 'mun_title' => 'Calasiao'],
            ['mun_code' => 'N/A', 'mun_title' => 'Dasol'],
            ['mun_code' => 'N/A', 'mun_title' => 'Infanta'],
            ['mun_code' => 'N/A', 'mun_title' => 'Labrador'],
            ['mun_code' => 'N/A', 'mun_title' => 'Laoac'],
            ['mun_code' => 'N/A', 'mun_title' => 'Lingayen'],
            ['mun_code' => 'N/A', 'mun_title' => 'Mabini'],
            ['mun_code' => 'N/A', 'mun_title' => 'Malasiqui'],
            ['mun_code' => 'N/A', 'mun_title' => 'Manaoag'],
            ['mun_code' => 'N/A', 'mun_title' => 'Mangaldan'],
            ['mun_code' => 'N/A', 'mun_title' => 'Mangatarem'],
            ['mun_code' => 'N/A', 'mun_title' => 'Mapandan'],
            ['mun_code' => 'N/A', 'mun_title' => 'Natividad'],
            ['mun_code' => 'N/A', 'mun_title' => 'Pozorrubio'],
            ['mun_code' => 'N/A', 'mun_title' => 'Rosales'],
            ['mun_code' => 'N/A', 'mun_title' => 'San Fabian'],
            ['mun_code' => 'N/A', 'mun_title' => 'San Jacinto'],
            ['mun_code' => 'N/A', 'mun_title' => 'San Manuel'],
            ['mun_code' => 'N/A', 'mun_title' => 'San Nicolas'],
            ['mun_code' => 'N/A', 'mun_title' => 'San Quintin'],
            ['mun_code' => 'N/A', 'mun_title' => 'Santa Barbara'],
            ['mun_code' => 'N/A', 'mun_title' => 'Santa Maria'],
            ['mun_code' => 'N/A', 'mun_title' => 'Santo Tomas'],
            ['mun_code' => 'N/A', 'mun_title' => 'Sison'],
            ['mun_code' => 'N/A', 'mun_title' => 'Sual'],
            ['mun_code' => 'N/A', 'mun_title' => 'Tayug'],
            ['mun_code' => 'N/A', 'mun_title' => 'Umingan'],
            ['mun_code' => 'N/A', 'mun_title' => 'Urbiztondo'],
            ['mun_code' => 'N/A', 'mun_title' => 'Villasis'],
        ];

        DB::table('municipalities')->insert($data);
    }
}
