<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function Doctors(){
        return view('doctors');
    }
    public function Add_Doctor(){
        return view('add_doctor');
    }
    public function update_Doctor(){
        return "doctor updated";
    }
    public function delete_Doctor(){
        return "doctor deleted";
    }
}
