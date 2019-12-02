<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected $vaccine = [
        [
            'v_name' => 'BCG',
            'v_min_age_at_first' => '1',
            'v_number_of_doses' => '1',
            'v_dose' => '0.05',
            'v_min_interval' => '0',
            'v_route' => 'Intradermal',
            'v_site' => 'Right deltoid region of the arm',
            'v_reason' => 'BCG given at earliest possible age protects the possibility of TB meningitis and other TB infections in which infants are prone.',
        ],
        [
            'v_name' => 'Hepa B1',
            'v_min_age_at_first' => '1',
            'v_number_of_doses' => '3',
            'v_dose' => '0.5',
            'v_min_interval' => '4',
            'v_route' => 'Intramuscular',
            'v_site' => 'Upper outer portion of the thigh, Vastus Lateralis (R-L-R)',
            'v_reason' => 'An early start of Hepatitis B vaccine reduces the chance of being infected and becoming a carrier. Prevents liver cirrhosis and liver cancer which are more likely to develop if infected with Hepatitis B early in life.',
        ],
        [
            'v_name' => 'OPV',
            'v_min_age_at_first' => '6',
            'v_number_of_doses' => '3',
            'v_dose' => '0.1',
            'v_min_interval' => '4',
            'v_route' => 'Oral',
            'v_site' => 'Mouth',
            'v_reason' => '	The extent of protection against polio is increased the earlier the OPV is given.
            Keeps the Philippines polio-free.',
        ],
        [
            'v_name' => 'Penta',
            'v_min_age_at_first' => '6',
            'v_number_of_doses' => '3',
            'v_dose' => '0.5',
            'v_min_interval' => '4', // 1st take 6w, 2nd 10w, 3rd 14w
            'v_route' => 'Intramuscular',
            'v_site' => 'Upper outer portion of the thigh, Vastus Lateralis (L-R-L)',
            'v_reason' => 'An early start with DPT reduces the chance of severe pertussis.',
        ],
        [
            'v_name' => 'PCV',
            'v_min_age_at_first' => '8',
            'v_number_of_doses' => '3',
            'v_dose' => '0.5',
            'v_min_interval' => '8',
            'v_route' => 'N/A',
            'v_site' => 'N/A',
            'v_reason' => 'N/A',
        ],
        [
            'v_name' => 'MCV1',
            'v_min_age_at_first' => '36',
            'v_number_of_doses' => '1',
            'v_dose' => '0.5',
            'v_min_interval' => '0',
            'v_route' => 'Subcutaneous',
            'v_site' => 'Upper outer portion of the arms, Right deltoid',
            'v_reason' => 'At least 85% of measles can be prevented by immunization at this age.',
        ],
        [
            'v_name' => 'MCV2',
            'v_min_age_at_first' => '48',
            'v_number_of_doses' => '1',
            'v_dose' => '0.5',
            'v_min_interval' => '0',
            'v_route' => 'N/A',
            'v_site' => 'N/A',
            'v_reason' => 'N/A',
        ],
        [
            'v_name' => 'Rota Virus Vaccine',
            'v_min_age_at_first' => '8',
            'v_number_of_doses' => '3',
            'v_dose' => '0.5',
            'v_min_interval' => '8',
            'v_route' => 'N/A',
            'v_site' => 'N/A',
            'v_reason' => 'N/A',
        ]
    ];
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(MunicipalitiesTableSeeder::class);
        $this->call(BarangaysTableSeeder::class);
        DB::table('vaccine_stages')->insert($this->vaccine);
    }
}
