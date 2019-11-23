<?php

namespace App\Http\Controllers;

use App\Baby;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function getGeoJson()
    {
        $babies = Baby::select('baby_lat', 'baby_lng', 'baby_first_name', 'id')->get();
        $original_data = json_decode($babies, true);
        $features = array();

        foreach($original_data as $key => $value) { 
            $features[] = array(
                    'type' => 'Feature',
                    'geometry' => array('type' => 'Point', 'coordinates' => array((float)$value['baby_lng'], (float)$value['baby_lat'])),
                    'properties' => array('name' => $value['baby_first_name'], 'id' => $value['id']),
                    );
            };   

        $allfeatures = array('type' => 'FeatureCollection', 'features' => $features);
        return json_encode($allfeatures, JSON_PRETTY_PRINT);
    }
}
