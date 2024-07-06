<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserController extends Controller
{



    public function userDash(){

        $userId = Auth::user()->id;
        $today = Carbon::today(); 
        $totalAppointments = Appointment::where('user_id', $userId)->count();

        $todayCount = Appointment::where('user_id', $userId)
                                    ->whereDate('date', $today) 
                                    ->where('status', 'APPROVED')
                                    ->count();
        $availDocs = Doctor::count();

        $cancelled = Appointment::where('user_id', $userId)->where('status', 'CANCELLED')->count();
    
        $appoint = Appointment::where('user_id', $userId)
                                    ->whereDate('date', $today) 
                                    ->where('status', 'APPROVED')
                                    ->get();
        return view('user.dashboard',compact('appoint','totalAppointments','todayCount','availDocs','cancelled'));
    }

    public function Appointments(){

        $doctor = Doctor::all();
        return view('user.addAppointment', compact('doctor'));
    }


    public function addAppointment(Request $request){
$data = new Appointment;

$data->name=$request->name;
$data->email=$request->email;
$data->date=$request->date;
$data->phone=$request->phone;
$data->message=$request->message;
$data->doctor=$request->doctor;
$data->status='IN PROGRESS';
$data->user_id=Auth::user()->id;

$data->save();
return redirect()->back()->with('message','Appointment Success!');
    }


    public function myAppointments(){

        $userid=Auth::user()->id;

        $appoint = Appointment::where('user_id',$userid)->get();
        return view('user.myAppointments',compact('appoint'));
    }


    public function cancel_appointment($id){
        $data = Appointment::find($id);

$data->delete();

return redirect()->back()->with('message','Canceled appointment successfully');

    }

    public function todayAppointments(){
        $userId = Auth::user()->id;
        $today = Carbon::today(); // Get today's date
    
        $appoint = Appointment::where('user_id', $userId)
                                    ->whereDate('date', $today) // Filter by today's date
                                    ->where('status', 'APPROVED')
                                    ->get();
    
        return view('user.todayAppointment', compact('appoint'));
    }


    public function doctors(){


        $doctor = Doctor::paginate(3);


        return view('user.doctors',compact('doctor'));

    }
}
