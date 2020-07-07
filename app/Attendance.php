<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Laravel\Passport\HasApiTokens;

class Attendance extends Model
{
    use HasApiTokens;
    //
    protected $appends = ['hours'];
    protected $fillable = [
    'user_id', 'hospital_id', 'timein','timeout','lunchin','lunchout'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function hospital() {
        return $this->hasOne('App\Hospital', 'id', 'hospital_id');
    }

    public function getHoursAttribute()
    {

            $timein=Carbon::parse($this->timein);
            $timeout=Carbon::parse($this->timeout);
            $lunchin=Carbon::parse($this->lunchin);
            $lunchout=Carbon::parse($this->lunchout);
            $lunchtime=$lunchout->diffInMinutes($lunchin);
            $subtotal=$timeout->diffInMinutes($timein);
            $total= $subtotal - $lunchtime;
            $hours=$total / 60 ;

        return $hours;


    }
}
