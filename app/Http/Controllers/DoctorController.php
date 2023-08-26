<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    public function Doctors(){
        return view('doctors');
    }
    public function Add_Doctor(){
        return view('add_doctor');
    }

    public function Handle_Add_Doctor (Request $request){
        $fname=$request->fname;
        $lname=$request->lname;
        $address=$request->address;
        $national_id=$request->national_id;
        $email=$request->email;
        $phone=$request->phone;
        $code=$request->code;
        $shift_time=$request->shift_time;
        $sallary=$request->sallary;
        $specialty=$request->specialty;
        $additional_info=$request->additional_info;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $extensio=$file->getClientOriginalExtension();
            $file_name= time().'.'.$extensio;
            $file->move('img/doctors/',$file_name);
            $image=$file_name;
        }
        else{
            return $request;
            $image='';
        }

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
            'specialty' => 'required',

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

            'specilty.required'  => 'Specialty is required',
           
 
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::insert("insert into doctors (fname, lname, address, national_id, email,phone, code, shift_time, sallary, additional_info,specialty,image) 
        values (?,?,?,?,?,?,?,?,?,?,?,?)",[$fname,$lname,$address,$national_id, $email, $phone, $code, $shift_time, $sallary,$additional_info,$specialty,$image]);

        return redirect(route('dashboard'));

        
    }

    public function update_Doctor(){
        return "doctor updated";
    }
    public function delete_Doctor(){
        return "doctor deleted";
    } 
}
