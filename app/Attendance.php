<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    //
    protected $fillable = [
        'title','start', 'end','user_id'
    ];
    public function users(){
        return $this->belongsTo('App\User');
    }
}
