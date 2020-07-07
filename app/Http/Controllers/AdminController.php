<?php

namespace App\Http\Controllers;

use Auth;
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
}
