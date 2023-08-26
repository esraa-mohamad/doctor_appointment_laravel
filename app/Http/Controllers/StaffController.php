<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class StaffController extends Controller
{
    public function staff_login(){
        return view('receptionest_login');
    }

    public function addStaff(){
        return view('add_staff');
    }

    public function Handle_addStaff (Request $request){
        $fname=$request->fname;
        $lname=$request->lname;
        $address=$request->address;
        $national_id=$request->national_id;
        $email=$request->email;
        $phone=$request->phone;
        $code=$request->code;
        $shift_time=$request->shift_time;
        $sallary=$request->sallary;
        $staff_type=$request->staff_type;
        $additional_info=$request->additional_info;

        $validator = Validator::make($request->all(), [
            'fname' => 'required|string|min:3|regex:/^[a-zA-Z-\' ]*$/',
            'lname' => 'required|string|min:3|regex:/^[a-zA-Z-\' ]*$/',
            'phone' => 'required|digits:11',
            'code' => 'required|digits:4|unique:doctors,code',
            'email' => 'required|email|unique:doctors,email',
            'national_id' => 'required|digits:14|unique:doctors,national_id',
            'sallary' => 'required',
            'additional_info' => 'required',
            'address' => 'required',
            'shift_time' => 'required',
            'staff_type' => 'required|in:doctor,nurse'
            

        ], [
            'fname.required' => 'First name is required',
            'fname.string' => 'First name must be a string',
            'fname.min' => 'First name must be at least 3 characters',
            'fname.regex' => 'First name can only contain letters, hyphens, and spaces',
    
            'lname.required' => 'Last name is required',
            'lname.string' => 'Last name must be a string',
            'lname.min' => 'Last name must be at least 3 characters',
            'lname.regex' => 'Last name can only contain letters, hyphens, and spaces',
    
            'phone.required' => 'Phone number is required',
            'phone.digits' => 'Invalid phone number. Please enter 11-digit phone number',
    
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email format',
            'email.unique' => 'Email already exists',
    
            'national_id.required' => 'National ID is required',
            'national_id.digits' => 'Invalid national number. Please enter a 14-digit national number.',
            'national_id.unique' => 'National ID already exists',

            'code.required' => 'Code is required',
            'code.digits' => 'Invalid code number. Please enter a 4-digit code number.',
            'code.unique' => 'Code already exists',


            'address.required' => 'Address is required',

            'additional_info.required'  => 'Additional_info is required',

            'sallary.required' => 'sallary is required',

            'shift_time.required'  => 'shift_time is required',

            'staff_type.required'  => 'staff_type is required',
           
 
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::insert("insert into staff (fname, lname, address, national_id, email,phone, code, shift_time, sallary,staff_type, additional_info) 
        values (?,?,?,?,?,?,?,?,?,?,?)",[$fname,$lname,$address,$national_id, $email, $phone, $code, $shift_time, $sallary,$staff_type,$additional_info]);

        return redirect(route('dashboard')); 


        
    }

    public function UpdateStaff($id){
        $staff =DB::select("select * from staff where id=?",[$id])[0];
        return view('update_staff', compact('staff'));
      
    }

    public function HandleUpdateStaff(Request $request, $id){
        $fname=$request->fname;
        $lname=$request->lname;
        $address=$request->address;
        $national_id=$request->national_id;
        $email=$request->email;
        $phone=$request->phone;
        $code=$request->code;
        $shift_time=$request->shift_time;
        $sallary=$request->sallary;
        $additional_info=$request->additional_info;

        DB::update("update staff set fname=? , lname=?, address=?, national_id=? ,email=? ,phone=? ,code=? ,shift_time=? ,sallary=? ,additional_info=? where id=?",
        [$fname,$lname,$address,$national_id,$email,$phone,$code,$shift_time, $sallary,$additional_info , $id]);

        return redirect(route('dashboard', ['id'=>$id]));

       
    }


    public function dashboard()
    {
        return view('dashboard');
    }
}
