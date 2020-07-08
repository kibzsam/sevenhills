<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Carbon\carbon;
use Illuminate\Http\Request;

use App\Attendance;
use App\Hospital;

class AdminController extends Controller
{
    // Index View
    public function index() {

        // Auth User
        $user = Auth::user();
        
        // Attendance Records
        $records = Attendance::with('user')->with('hospital')->get();

        return view('admin-dashboard', compact([
            'user', 'records'
        ]));
    }


    // Filter Attendance Date
    public function filterAttendanceDate(Request $request) {

        // Auth User
        $user = Auth::user();

        // When both dates are selected
        if($request->has('start_date') && $request->has('end_date')){

            $query = Attendance::with('user')
                        ->whereBetween('created_at', [$request->start_date, $request->end_date])
                        ->get();

            if(count($query) > 0)
                return view('admin-dashboard')->withRecords($query)->withUser($user);
            else return view ('admin-dashboard')->withRecords($query)->withMessage('No results found');
        
        }

        // When only start date is selected
        else if($request->has('start_date')) {

            $query1 = Attendance::with('user')
                        ->whereBetween('created_at', [$request->start_date, Carbon::today()])
                        ->get();

            if(count($query1) > 0)
                return view('admin-dashboard')->withRecords($query1)->withUser($user);
            else return view ('admin-dashboard')->withRecords($query)->withMessage('No results found');

        }

        // When only end date is selected
        else if($request->has('end_date')) {
            $query2 = Attendance::with('user')
                        ->whereDate('created_at', '<=', $request->end_date)
                        ->get();

            if(count($query2) > 0)
                return view('admin-dashboard')->withRecords($query2)->withUser($user);
            else return view ('admin-dashboard')->withRecords($query)->withMessage('No results found');
        }
    }
}
