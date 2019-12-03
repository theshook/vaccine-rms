<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['sched_date', 'baby_id', 'vaccine_stages_id', 'remarks'];
}
