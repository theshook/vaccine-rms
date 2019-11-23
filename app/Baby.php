<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Baby extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'baby_family_serial_number', 'baby_dob', 'baby_nhts', 'baby_first_name', 'baby_middle_name', 'baby_last_name', 'baby_mother_first', 'baby_mother_middle', 'baby_mother_last', 'baby_name_ext', 'baby_municipality', 'baby_barangay', 'baby_date_screening', 'baby_zip', 'baby_street', 'baby_sex',
        'baby_lat', 'baby_lng'
    ];

    public function getBarangayTitle($id) {
       return DB::table('barangays')->where('id', $id)->select('bar_title')->first();
    }

    public function getMunicipalTitle($id) {
        return DB::table('municipalities')->where('id', $id)->select('mun_title')->first();
    }

    public function getLngLat($barangay, $municipal) {
        $barangay = str_replace(' ', '%20', $barangay);
        // create curl resource
        $ch = curl_init();
        // set url
        curl_setopt(
            $ch,
            CURLOPT_URL,
            "https://api.mapbox.com/geocoding/v5/mapbox.places/".$barangay.",%20".$municipal.",%20Pangasinan,%20Philippines.json?access_token=pk.eyJ1IjoiaGFqaWJhciIsImEiOiJjajcxbGtpZ3AwMm1iMnFtbmhoanhjZm03In0.PP21CG13VVtfaH4tB94InA"
        );
        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // $output contains the output string
        $output = curl_exec($ch);
        // close curl resource to free up system resources
        curl_close($ch);
        $output = json_decode($output, true);
        $lng = $output['features'][0]['geometry']['coordinates'][0];
        $lat = $output['features'][0]['geometry']['coordinates'][1];

        return [$lng, $lat];
    }
}
