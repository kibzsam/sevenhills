<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    //Eloquent

    public function user() {
        return $this->hasMany('App/User');
    }

    public function attendance() {
        return $this->belongsTo('App/Attendance');
    }
}
