<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    protected $table = 'vaccine_stages';
    protected $fillable = ['v_name', 'v_min_age_at_first', 'v_number_of_doses', 'v_dose', 'v_min_interval', 'v_route', 'v_site', 'v_reason'];
}
