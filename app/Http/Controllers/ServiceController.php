<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function services(){
        return view('services');
    }
    public function Add_service(){
        return view('add_service');
    }

    public function Handle_Add_service (Request $request){
        $service_name=$request->service_name;
        $service_code=$request->service_code;
        $service_type=$request->service_type;
        $cost=$request->cost;
        $additional_info= $request->additional_info;
      

        $validator = Validator::make($request->all(), [
            'service_name' => 'required|string|min:3|regex:/^[a-zA-Z-\' ]*$/',
            'service_code' => 'required|digits:4|unique:services,code',
            'service_type' => 'required',
            'additional_info' => 'required',
            'cost' => 'required',

        ], [
            'service_name.required' => 'Service name is required',
            'service_name.string' => 'Service name must be a string',
            'service_name.min' => 'Service name must be at least 3 characters',
            'service_name.regex' => 'Service name can only contain letters, hyphens, and spaces',
    

            'code.required' => 'Code is required',
            'code.digits' => 'Invalid code number. Please enter a 4-digit code number.',
            'code.unique' => 'Code already exists',


            'service_type.required' => 'service_type is required',

            'additional_info.required'  => 'Additional_info is required',

            'cost.required' => 'cost is required',
 
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::insert("insert into services (service_name, service_code,  service_type, cost, additional_info) 
        values (?,?,?,?,?)",[ $service_name, $service_code, $service_type,$cost,$additional_info]);

        return redirect(route('dashboard')); 

       
        
    }

    public function update_service(){
        return "service updated";
    }
    public function delete_service(){
        return "service deleted";
    }
}
