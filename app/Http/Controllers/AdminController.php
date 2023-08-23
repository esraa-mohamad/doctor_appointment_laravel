<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login_Admin(){
        return view('admin_login');
    }
    public function Add_Doctor(){
        return "added";
    }
    public function Add_Receptionest(){
        return "Receptionest added";
    }
}
