<?php

namespace App\Http\Controllers;

use App\Attendance;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Redirect;

class FullCalendarEventMasterController extends Controller

{
    public function index()
    {
        if (request()->ajax()) {

            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');

            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
            $data = Attendance::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id', 'title', 'start', 'end']);

            return Response::json($data);
        }

        return view('attendanceCalendar');
    }
    public function create(Request $request)
    {
        $user = Auth::user()->id;
        $insertArr = [
            'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end,
            'user_id' => $user
        ];
        $event = Attendance::insert($insertArr);
        return Response::json($event);
    }

    public function update(Request $request)
    {
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title, 'start' => $request->start, 'end' => $request->end];
        $event  = Attendance::where($where)->update($updateArr);
        return Response::json($event);
    }
    public function destroy(Request $request)
    {
        $event = Attendance::where('id', $request->id)->delete();
        return Response::json($event);
    }
}
