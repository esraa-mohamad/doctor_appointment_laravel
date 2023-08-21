@extends('templates.main')

@section('content')

<body style="font-family: 'Merienda', cursive;">
  <div class="container">
    <h1 class="text-center form mb-5" style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6);">Add Staff</h1>

    <!-- form -->
    <form action="" method="post">
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row mb-2" style="font-family: 'Cormorant Garamond', serif; ">
        <div class="col">
          <div class="form-outline">

            <!-- first name -->
            <input type="text" id="form6Example1" name="first_name" value="" class="form-control" />
            <label class="form-label" for="form6Example1">First name</label>
          </div>
        </div>

        <!-- last name -->
        <div class="col">
          <div class="form-outline">
            <input type="text" id="form6Example2" name="last_name" value="" class="form-control" />
            <label class="form-label" for="form6Example2">Last name</label>
          </div>
        </div>

      </div>

      <!-- address -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif; ">
        <input type="text" id="form6Example3" name="address" value="" class="form-control" />
        <label class="form-label" for="form6Example3">Address</label>
      </div>

      <!-- national id -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example4" name="national_id" value="" class="form-control" />
        <label class="form-label" for="form6Example4">National id </label>
      </div>

      <!-- Email  -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="email" id="form6Example5" name="email" value="" class="form-control" />
        <label class="form-label" for="form6Example5">Email</label>
      </div>


      <!-- Number -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example6" name="phone" value="" class="form-control" />
        <label class="form-label" for="form6Example6">Phone</label>
      </div>

      <!-- code  -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="number" id="form6Example7" name="code" value="" class="form-control" />
        <label class="form-label" for="form6Example7">code</label>
      </div>

      <!-- shift time -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example8" name="shift_time" value="" class="form-control" />
        <label class="form-label" for="form6Example8">shift time</label>
      </div>

      <!-- salary -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example9" name="sallary" value="" class="form-control" />
        <label class="form-label" for="form6Example9">Salary</label>
      </div>

    <!-- choose staff -->
    
      <div class="dropdown mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <button
          class="btn dropdown-toggle"
          type="button"
          id="dropdownMenuButton"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
          style="background-color: rgba(232, 235, 238, 0.116); border: 1px solid rgba(61, 60, 60, 0.379);"
        >
          choose staff category
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <li><a class="dropdown-item" href="#">Nurse</a></li>
          <li><a class="dropdown-item" href="#">Receptionest</a></li>
        </ul>
      </div>

     <!-- Additional information  -->
     <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <textarea class="form-control" id="form6Example10" name="additional_info" value="" rows="4"></textarea>
        <label class="form-label" for="form6Example10">Additional information</label>
      </div>


      <!-- Submit button -->
      <input type="submit" class="btn btn-primary btn-block mb-4" style="font-family: 'Cormorant Garamond'; font-size: 15px;" name="add_staff" value="ADD"></input>
    </form>
  </div>

  @endsection