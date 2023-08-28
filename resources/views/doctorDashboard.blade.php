@extends('templates.main')

@section('content')
<body>
    @include('subViews.sidebar')
    <!--Main Navigation-->
<header>

    <div class="container">
      <button type="button" id="btt" class="btn btn-info"> <a class="text-white"
        @class([Route::is('Add_Doctor')])aria-current="page" href="{{route('Add_Doctor')}}">ADD Doctor+ </a
        > </button>

         <!----------------------------------------------- Start Search form ------------------------------------------------------>

    <form method="get" action="{{route('Search_doctor')}}">
      <!-- 2 column grid layout with text inputs for the first and last names -->
      @csrf
      <div class="row mb-2" style="font-family: 'Cormorant Garamond', serif; ">
        <div class="col">
          <div class="form-outline">

            <!-- first name -->
            <input type="text" id="form6Example1" name="fname" value="{{request('fname')}}" class="form-control" />
            <label class="form-label" for="form6Example1">First name</label>
          </div>
         
        </div>


        <!-- last name -->
        <div class="col">
          <div class="form-outline">
            <input type="text" id="form6Example2" name="lname" value="{{request('lname')}}" class="form-control" />
            <label class="form-label" for="form6Example2">Last name</label>
          </div>
         
        </div>

      </div>

      <!-- address -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif; ">
        <input type="text" id="form6Example3" name="address" value="{{request('address')}}" class="form-control" />
        <label class="form-label" for="form6Example3">Address</label>
       
      </div>
     

      <!-- national id -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example4" name="national_id" value="{{request('national_id')}}" class="form-control" />
        <label class="form-label" for="form6Example4">National id </label>
       
      </div>
    

      <!-- Email  -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="email" id="form6Example5" name="email" value="{{request('email')}}" class="form-control" />
        <label class="form-label" for="form6Example5">Email</label>
       
      </div>
      


      <!-- Phone Number -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example6" name="phone" value="{{request('phone')}}" class="form-control" />
        <label class="form-label" for="form6Example6">Phone</label>
      
      </div>
    

      <!-- code  -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="number" id="form6Example7" name="code" value="{{request('code')}}" class="form-control" />
        <label class="form-label" for="form6Example7">code</label>
       
      </div>
     
     <!-- Specialty -->
     <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
      <input type="text" id="form6Example8" name="specialty" value="{{request('specialty')}}" class="form-control" />
      <label class="form-label" for="form6Example8">Specialty</label>
     
    </div>
  
      <!-- shift time -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example8" name="shift_time" value="{{request('shift_time')}}" class="form-control" />
        <label class="form-label" for="form6Example8">shift time</label>
       
      </div>
     

      <!-- salary -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example9" name="sallary" value="{{request('sallary')}}" class="form-control" />
        <label class="form-label" for="form6Example9">Salary</label>
       
      </div>

      <!-- Submit button -->
      <input type="submit" class="btn btn-primary btn-block mb-4" style="font-family: 'Cormorant Garamond'; font-size: 15px;" name="search_doctor" value="search">
    </form>
    <a href="{{route('doctorDashboard')}}" class="btn btn-primary btn mb-4" style="font-family: 'Cormorant Garamond'; font-size: 15px; float:right; color:white;">clear Search</a>

    <!------------------------------------------------------------- end search form--------------------------------------------------- -->



    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">address</th>
          <th scope="col">national id</th>
          <th scope="col">email</th>
          <th scope="col">phone</th>
          <th scope="col">code</th>
          <th scope="col">shift_time</th>
          <th scope="col">salary</th>
          <th scope="col">info</th>
          <th scope="col">image</th>
          <th scope="col">update</th>
          <th scope="col">delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($doctors as $doctors)
        <tr>
        <td>{{ $doctors->id }}</td>
         <td>{{ $doctors->fname }}</td>
         <td>{{ $doctors->lname }}</td>
         <td>{{ $doctors->address }}</td>
         <td>{{ $doctors->national_id }}</td>
         <td>{{ $doctors->email }}</td>
         <td>{{ $doctors->phone }}</td>
         <td>{{ $doctors->code }}</td>
         <td>{{ $doctors->shift_time }}</td>
         <td>{{ $doctors->sallary }}</td>
         <td>{{ $doctors->additional_info }}</td>
         <td>{{ $doctors->specialty }}</td>
         <td><a class="text-white"
          @class([Route::is('Update_Doctor')])aria-current="page" href="{{route('Update_Doctor',['id'=>$doctors->id])}}"><i class="fas fa-pen-to-square text-info"></i></a
          ></td>
         <td> 
          <form method="post" action="{{route('Delete_Doctor',['id'=>$doctors->id])}}">
            @csrf
            <input type="submit" class="btn btn-danger" value="delete">
          </form>
           </td>
         </tr>
       @endforeach
     
      </tbody>
    </table>
  </div>
   
  </header>
  <!--Main Navigation-->
  
  <!--Main layout-->
  <main style="margin-top: 58px;">
    <div class="container pt-4"></div>
  </main>
  <!--Main layout-->


    <!-- MDB -->
    <script src="{{asset('js/index.js')}}"></script>

    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
@endsection