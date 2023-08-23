<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function booking(){
        return view('booking_appointment');
    }
        
    public function delete_booking(){
        return "deleted";
    }
        
    public function update_booking(){
        return "updated";
    }
        
}
