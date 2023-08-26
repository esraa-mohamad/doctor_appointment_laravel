<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    public function home(){
        return view('home');
    }
        
     public function login(){
        return view('login');
    }

     public function signup(){
        return view('signup');
    }
    public function Handle_signup(Request $request){

        $fname=$request->fname;
        $lname=$request->lname;
        $phone=$request->phone;
        $national_id=$request->national_id;
        $email=$request->email;
        $password=$request->password;
        $confirm=$request->confirm;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $extensio=$file->getClientOriginalExtension();
            $file_name= time().'.'.$extensio;
            $file->move('img/patients/',$file_name);
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
            'email' => 'required|email|unique:patients,email',
            'national_id' => 'required|digits:14|unique:patients,national_id',
            'password' => 'required|min:8',
            'confirm' => 'required|same:password',
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
    
            'password.required' => 'Password is required',
            'password.min' => 'Invalid password. Please enter more than 8 characters',
    
            'confirm.required' => 'Confirm Password is required',
            'confirm.same' => 'Confirm Password does not match with password',

        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } 
        DB::insert("insert into patients (fname, lname, phone, national_id, email,password,image) 
        values (?,?,?,?,?,?,?)",[$fname,$lname,$phone,$national_id, $email, $password,$image]);

        return redirect(route('login'));
    
        // Validation successful, continue processing
        // ...
    }
        
}
