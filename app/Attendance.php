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
    'user_id', 'title', 'hospital_id', 'timein','timeout','lunchin','lunchout'
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

            if($lunchin->toDateTimeString() !== strtotime('00:00:00') && $lunchout->toDateTimeString() !== strtotime('00:00:00')) {
                $lunchtime=$lunchout->diffInMinutes($lunchin);
            } else {
                $lunchtime = 0;
            }
            
            if($timeout->hour > 1) {
                $subtotal= $timeout->diffInMinutes($timein);
            } else {
                $subtotal = 0;
            }

            $total= $subtotal - $lunchtime;

            if($total > 0) {
                $hours=$total / 60 ;    
            } else {
                $hours = 0;
            }

        return $hours;


    }
}
