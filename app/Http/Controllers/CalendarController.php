<?php
/**
 * Created by PhpStorm.
 * User: jojimdogo
 * Date: 8/23/2019
 * Time: 8:24 AM
 */

namespace App\Http\Controllers;


class CalendarController
{
    public function index()
    {
        return view('calendar');
    }
}