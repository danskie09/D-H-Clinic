<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Notification;
use App\Notifications\MyNotification;

class AdminController extends Controller
{
     public function addview(){
        return view('admin.addDoctor');
     }


     public function upload(Request $request){
        $doctor = new Doctor;

        $image = $request->file;
        $imagename = time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->room = $request->room;
        $doctor->specialty = $request->specialty;

        $doctor->save();

        return redirect()->back()->with('message','Doctor Added Successfully');

     }


     public function all_appointments(){

      $data = Appointment::paginate(5);


      return view('admin.viewAppointment', compact('data'));
     }



     public function edit(Appointment $id){

        return view('admin.approvedAppointment', ['appointment'=> $id]);

     }

     public function approved(Appointment $id, Request $request)
     {
         $id->name = $request->name;
         $id->email = $request->email;
         $id->date = $request->date;
         $id->phone = $request->phone;
         $id->message = $request->message;
         $id->doctor = $request->doctor;
         $id->status = 'APPROVED';
     
         // Retain the previous user_id if it exists
         if (!$id->user_id) {
             $id->user_id = $request->user_id;
         }

         


         
     
         $id->update();

         $id->notify(new MyNotification($id));
        
        

           
         


    
     
         return redirect()->route('view.appointments')->with('message', 'Appointment approved successfully');
     }
     

     public function cancelled($id){


      $data = Appointment::find($id);
      $data->status='CANCELLED';
      $data->save();

      return redirect()->back()->with('message','Appointment cancelled successfully');
     }


     public function search(Request $request)
{
    $search_text = $request->search;

    

    $data = Appointment::where('name', 'LIKE', "%$search_text%")->orWhere('email', 'LIKE', "%$search_text%")->orWhere('phone', 'LIKE', "%$search_text%")->orWhere('doctor', 'LIKE', "%$search_text%")->orWhere('date', 'LIKE', "%$search_text%")->orWhere('status', 'LIKE', "%$search_text%")->paginate(5);

    
    if ($data->isEmpty()) {
        return redirect()->back()->with('message','Not  Found in your Search');
    } 

    return view('admin.viewAppointment', compact('data'));
}


public function searchPatient(Request $request)
{
    $search_text = $request->search;

    $patientRecord = Appointment::where('status', '=', 'APPROVED')
        ->where(function ($query) use ($search_text) {
            $query->where('name', 'LIKE', "%$search_text%")
                ->orWhere('email', 'LIKE', "%$search_text%")
                ->orWhere('phone', 'LIKE', "%$search_text%")
                ->orWhere('doctor', 'LIKE', "%$search_text%")
                ->orWhere('date', 'LIKE', "%$search_text%");
        })
        ->paginate(5);

    if ($patientRecord->isEmpty()) {
        return redirect()->back()->with('message', 'Not Found in your Search');
    }

    return view('admin.patientRecords', compact('patientRecord'));
}




public function patientRecords(){

    $patient = User::whereNotIn('id', [2])->paginate(3);

    return view('admin.patientRecords', compact('patient'));

}


public function showDoctor(){
    $data = Doctor::paginate(2);

    return view('admin.showDoctor', compact('data'));
}


public function deleteDoctor($id){


    $data = Doctor::find($id);

    $data->delete();

    return redirect()->back()->with('message','Doctor Deleted Successfully');
}

public function showPatientAppointment($id){

$patient = User::find($id);
$appointment = Appointment::where('user_id', $id)->get();



return view('admin.showAppointments',compact('appointment'));

}


public function adminToday(){

   
    $today = Carbon::today(); // Get today's date

    $data = Appointment::whereDate('date', $today) 
                                ->where('status', 'APPROVED')
                                ->paginate(5);

    return view('admin.adminToday', compact('data'));
}


}
