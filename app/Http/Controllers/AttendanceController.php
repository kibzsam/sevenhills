<?php

namespace App\Http\Controllers;

use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Auth;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use App\Http\Resources\Attendance as AttendanceResource;

use App\User;
use App\Attendance;
use App\Hospital;

class AttendanceController extends Controller
{
    //
    // public function store(Request $request)
    // {
    //     $attendance= New Attendance();
    //     $user=Auth::user();
    //     $attendance->title=$request->get('title');
    //     $attendance->start_date=$request->get('startdate');
    //     $attendance->end_date=$request->get('enddate');
    //     $attendance->user_id=$user->id;
    //     $attendance->save();
    //     return redirect('/dashboard')->with('success', 'Added Successfully');
    // }

    // public function createEvent()
    // {
    //     return view('createevent');
    // }

    // public function index()
    // {   $userId=Auth::user()->id;
    //     $events = [];
    //     $data = Attendance::where('user_id','==',$userId)->get();
    //     if($data->count())
    //     {
    //         foreach ($data as $key => $value)
    //         {
    //             $events[] = Calendar::event(
    //                 $value->title,
    //                 true,
    //                 new \DateTime( $value->start_date),
    //                 new \DateTime($value->end_date.'+1 day'),
    //                 null,
    //                 // Add color
    //                 [
    //                     'color' => '#000000',
    //                     'textColor' => '#008000',
    //                 ]
    //             );
    //         }
    //     }
    //     $showAttendance = Calendar::addEvents($events);
    //     return view('fullcalendar', compact('showAttendance'));
    // }


    // Index View
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


    // Get Hospitals
    public function getHospitals()
    {
        $hospitals = Hospital::all();

        return response()->json($hospitals, 201);
    }


    // Create Attendance
    public function create(Request $request)
    {
        $user = Auth::user()->id;
        $insertArr = ['title' => $request->title, 'start_time' => $request->start, 'end_time' => $request->end, 'user_id' => $user];
        $event = Attendance::insert($insertArr);
        return Response::json($event);
    }


    // Update Attendance
    public function update(Request $request)
    {
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title, 'start' => $request->start, 'end' => $request->end];
        $event  = Attendance::where($where)->update($updateArr);
        return Response::json($event);
    }


    // Delete Attendance
    public function destroy(Request $request)
    {
        $event = Attendance::where('id', $request->id)->delete();
        return Response::json($event);
    }


    // FUnction to save attendances
    public function saveattendance(Request $request)
    {
        $rules = array(
            'user_id' => 'required',
            'title' => 'required',
            'hospital_id' => 'required',
            'timein' => 'required'
        );
        $this->validate($request, $rules);
        $user_id = $request->input('user_id');
        $attendances = Attendance::where('user_id', $user_id)->get();
        $today = Carbon::today()->toDateString();
        if ($attendances->isNotEmpty()) {
            foreach ($attendances as $attendance) {
                $date = $attendance->created_at->toDateString();
            }
            if ($date == $today) {
                return response()->json(['error' => 'You already took the attendance of this worker today!'], 500);
            } else {
                return Attendance::create([
                    'user_id' => $request->input('user_id'),
                    'title' => $request->input('title'),
                    'hospital_id' => $request->input('hospital_id'),
                    'timein' => $request->input('timein'),
                ]);
            }
        } else {
            return Attendance::create([
                'user_id' => $request->input('user_id'),
                'title' => $request->input('title'),
                'hospital_id' => $request->input('hospital_id'),
                'timein' => $request->input('timein'),
            ]);
        }
    }


    // Get attendances
    public function getattendance()
    {
        $user_id = auth('api')->user()->id;
        $attendance = Attendance::where('user_id', $user_id)->with('user')
            ->with('hospital')->latest()->paginate(15);

        return AttendanceResource::collection($attendance);
    }


    // Update Atteandance
    public function updateattendance(Request $request, $id)
    {

        // Find the attendance record
        $attendance = Attendance::findOrFail($id);
        $attendance->update($request->all());
    }


    // Delete Atteandance
    public function deleteattendance($id)
    {

        // Find the attendance record
        $attendance = Attendance::findOrFail($id);
        $attendance->delete();
    }


    // Generate Atteandance PDF
    public function pdf(Request $request)
    {
        set_time_limit(300);
        $user_id = $request->userid;
        $from_date = Carbon::parse($request->fromdate)->format('Y-m-d');
        $to_date = Carbon::parse($request->todate)->format('Y-m-d');
        $raw_image = $request->jpeg;
        $raw_image1 = $request->jpeg1;
        $data = Attendance::where('user_id', $user_id)->whereDate('created_at', '>=', $from_date)
            ->whereDate('created_at', '<=', $to_date)
            ->get();
        $totalhours = $data->sum('hours');
        $user = User::FindOrFail($user_id);
        $today = Carbon::today()->toDateString();
        $image = str_replace('data:image/png;base64,', '', $raw_image);
        $image = str_replace(' ', '+', $image);
        $imageName = str_random(10) . '.' . 'png';
        \File::put(public_path('/images/signature/') . $imageName, base64_decode($image));
        $signature = $imageName;

        //Signature 1
        $image1 = str_replace('data:image/png;base64,', '', $raw_image1);
        $image1 = str_replace(' ', '+', $image1);
        $imageName1 = str_random(10) . '.' . 'png';
        \File::put(public_path('/images/signature/') . $imageName1, base64_decode($image1));
        $signature1 = $imageName1;


        // share data to view
        // view()->share('pdf', compact('data','totalhours','signature','signature1','user','today','to_date'));
        // $pdf = PDF::loadView('pdf', $data);

        // PDF::loadHTML($html)->setPaper('a4')->setOrientation('landscape')->setOption('margin-bottom', 0)->save('myfile.pdf');
        $pdf = PDF::loadView('pdf', compact('data', 'totalhours', 'signature', 'signature1', 'user', 'today', 'to_date'))->setPaper('a4');
        // $pdf = PDF::loadView('pdf-trial');
        return $pdf->download('attendance.pdf');

        // return $pdf->download('attend.pdf');
        // return $pdf->stream('attaendance')->Attachment(0);
        // return $pdf->setPaper('a4')->stream();
        // ob_end_clean();
        // return $pdf->stream("attendance.pdf", array("Attachment" => false))->output();
        // return $pdf->output();

    }
}
