<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $totalAppointments = Appointment::count();
        $users = User::count();
        $doctors = Doctor::count();
        $cancelled = Appointment::where('status', 'CANCELLED')->count();


        return view('admin.dashboard', compact('totalAppointments','users','doctors','cancelled'));
    }
}
