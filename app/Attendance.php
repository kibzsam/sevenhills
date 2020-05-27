<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Attendance extends Model
{
    //
    protected $appends = ['hours'];
    protected $fillable = [
'user_id','timein','timeout','lunchin','lunchout'
    ];
    public function user(){
        return $this->belongsTo('App\User');
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
