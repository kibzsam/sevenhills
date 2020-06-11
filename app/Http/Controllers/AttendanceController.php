<?php

namespace App\Http\Controllers;

use App\Attendance;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use PDF;
use App\User;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use App\Http\Resources\Attendance as AttendanceResource;

class AttendanceController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
            $data = Attendance::whereDate('start_time', '>=', $start)->whereDate('end_time',   '<=', $end)->get(['id', 'title', 'start_time', 'end_time']);
            return Response::json($data);
        }
        return view('attendanceCalendar');
    }
    public function create(Request $request)
    {
        $user = Auth::user()->id;
        $insertArr = ['title' => $request->title, 'start_time' => $request->start, 'end_time' => $request->end, 'user_id' => $user];
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
    // FUnction to save attendances
    public function saveattendance(Request $request){
        $rules=array(
            'user_id' => 'required',
            'timein' => 'required'
        );
        $this->validate($request,$rules);
        $user_id=$request->input('user_id');
        $attendances=Attendance::where('user_id',$user_id)->get();
        $today= Carbon::today()->toDateString();
        if($attendances->isNotEmpty())
        {
        foreach($attendances as $attendance)
        {
            $date=$attendance->created_at->toDateString();
        }
        if($date==$today)
        {
            return response()->json(['error' => 'You already took the attendance of this worker today!'], 500);
        }
        else{
                return Attendance::create([
                'user_id' =>$request->input('user_id'),
                'timein' =>$request->input('timein'),
            ]);
        }
         }
        else{
            return Attendance::create([
                'user_id' =>$request->input('user_id'),
                'timein' =>$request->input('timein'),
            ]);

        }

    }
        // get attendances
        public function getattendance(){
            $user_id=auth('api')->user()->id;
            $attendance=Attendance::where('user_id',$user_id)->with('user')->latest()->paginate(15);
            return AttendanceResource::collection($attendance);
        }

    //Update Atteandance
    public function updateattendance(Request $request,$id){

        $attendance=Attendance::findOrFail($id);
        $attendance->update($request->all());

    }

    public function deleteattendance($id){
        $attendance=Attendance::findOrFail($id);
        $attendance->delete();

    }
    public function pdf(Request $request){
        set_time_limit(300);
        $user_id=$request->userid;
        $from_date=Carbon::parse($request->fromdate)->format('Y-M-D');
        $to_date=Carbon::parse($request->todate)->format('Y-M-D');
        $raw_image=$request->jpeg;
        $encoded_image=explode(",",$raw_image)[1];
        $signature=base64_decode($raw_image);
        $data=Attendance::where('user_id',$user_id)->get();
        $totalhours=$data->sum('hours');
        $user=User::FindOrFail($user_id);
        $today= Carbon::today()->toDateString();

        // $attendance=Attendance::where('user_id',$user_id)->whereDate('created_at', '>=', $from_date)
        // ->whereDate('created_at', '<=',$to_date)
        // ->get();
        // $pdf = PDF::loadView('pdf', compact('data','totalhours','signature','user','today','to_date'));
        // return $pdf->download('attend.pdf');
        return $to_date;



    }
}
