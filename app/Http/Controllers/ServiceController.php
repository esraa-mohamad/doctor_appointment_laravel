<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function services(){
        return view('services');
    }
    public function Add_service(){
        return view('add_service');
    }
    public function update_service(){
        return "service updated";
    }
    public function delete_service(){
        return "service deleted";
    }
}
