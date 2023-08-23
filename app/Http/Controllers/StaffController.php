<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staff_login(){
        return view('receptionest_login');
    }
}
