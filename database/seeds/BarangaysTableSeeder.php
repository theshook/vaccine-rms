<?php

use Illuminate\Database\Seeder;

class BarangaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['bar_name' => 'Alinggan'],
            ['bar_name' => 'Amamperez'],
            ['bar_name' => 'Amancosiling Norte'],
            ['bar_name' => 'Amancosiling Sur'],
            ['bar_name' => 'Ambayat I'],
            ['bar_name' => 'Ambayat II'],
            ['bar_name' => 'Apalen'],
            ['bar_name' => 'Asin'],
            ['bar_name' => 'Ataynan'],
            ['bar_name' => 'Bacnono'],
            ['bar_name' => 'Balaybuaya'],
            ['bar_name' => 'Banaban'],
            ['bar_name' => 'Bani'],
            ['bar_name' => 'Batangcaoa'],
            ['bar_name' => 'Beleng'],
            ['bar_name' => 'Bical Norte'],
            ['bar_name' => 'Bical Sur'],
            ['bar_name' => 'Bongato East'],
            ['bar_name' => 'Bongato West'],
            ['bar_name' => 'Buayaen'],
            ['bar_name' => 'Buenlag 1st'],
            ['bar_name' => 'Buenlag 2nd'],
            ['bar_name' => 'Cadre Site'],
            ['bar_name' => 'Carungay'],
            ['bar_name' => 'Caturay'],
            ['bar_name' => 'Darawey'],
            ['bar_name' => 'Duera'],
            ['bar_name' => 'Dusoc'],
            ['bar_name' => 'Hermoza'],
            ['bar_name' => 'Idong'],
            ['bar_name' => 'Inanlorenza'],
            ['bar_name' => 'Inirangan'],
            ['bar_name' => 'Iton'],
            ['bar_name' => 'Langiran'],
            ['bar_name' => 'Ligue'],
            ['bar_name' => 'M. H. del Pilar'],
            ['bar_name' => 'Macayocayo'],
            ['bar_name' => 'Magsaysay'],
            ['bar_name' => 'Maigpa'],
            ['bar_name' => 'Malimpec'],
            ['bar_name' => 'Malioer'],
            ['bar_name' => 'Managos'],
            ['bar_name' => 'Manambong Norte'],
            ['bar_name' => 'Manambong Parte'],
            ['bar_name' => 'Manambong Sur'],
            ['bar_name' => 'Mangayao'],
            ['bar_name' => 'Nalsian Norte'],
            ['bar_name' => 'Nalsian Sur'],
            ['bar_name' => 'Pangdel'],
            ['bar_name' => 'Pantol'],
            ['bar_name' => 'Paragos'],
            ['bar_name' => 'Poblacion Sur'],
            ['bar_name' => 'Pugo'],
            ['bar_name' => 'Reynado'],
            ['bar_name' => 'San Gabriel 1st'],
            ['bar_name' => 'San Gabriel 2nd'],
            ['bar_name' => 'San Vicente'],
            ['bar_name' => 'Sangcagulis'],
            ['bar_name' => 'Sanlibo'],
            ['bar_name' => 'Sapang'],
            ['bar_name' => 'Tamaro'],
            ['bar_name' => 'Tambac'],
            ['bar_name' => 'Tampog'],
            ['bar_name' => 'Tanolong'],
            ['bar_name' => 'Tatarac'],
            ['bar_name' => 'Telbang'],
            ['bar_name' => 'Tococ East'],
            ['bar_name' => 'Tococ West'],
            ['bar_name' => 'Warding'],
            ['bar_name' => 'Wawa'],
            ['bar_name' => 'Zone I'],
            ['bar_name' => 'Zone II'],
            ['bar_name' => 'Zone III'],
            ['bar_name' => 'Zone IV'],
            ['bar_name' => 'Zone V'],
            ['bar_name' => 'Zone VI'],
            ['bar_name' => 'Zone VII']
        ];
        DB::table('barangays')->insert($data);
    }
}
