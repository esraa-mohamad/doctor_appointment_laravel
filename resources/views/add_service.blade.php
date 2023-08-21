@extends('templates.main')

@section('content')
<body style="font-family: 'Merienda', cursive;">
  <div class="container">
    <h1 class="text-center form mb-5" style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6);">Add Service</h1>

    <!-- form -->
    <form action="" method="post">
      <!-- 2 column grid layout with text inputs for the first and last names -->
     

      <!-- service name -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif; ">
        <input type="text" id="form6Example3" name="address" value="" class="form-control" />
        <label class="form-label" for="form6Example3">Service name</label>
      </div>

      <!-- Service code -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example4" name="national_id" value="" class="form-control" />
        <label class="form-label" for="form6Example4">Service code</label>
      </div>

      <!-- surgery type  -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example5" name="email" value="" class="form-control" />
        <label class="form-label" for="form6Example5">Surgery type</label>
      </div>


      <!-- cost -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example6" name="phone" value="" class="form-control" />
        <label class="form-label" for="form6Example6">Cost</label>
      </div>


      <!-- Additional information  -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <textarea class="form-control" id="form6Example10" name="additional_info" value="" rows="4"></textarea>
        <label class="form-label" for="form6Example10">Additional information</label>
      </div>


      <!-- Submit button -->
      <input type="submit" class="btn btn-primary btn-block mb-4" style="font-family: 'Cormorant Garamond'; font-size: 15px;" name="add_service" value="ADD"></input>
    </form>
  </div>

  @endsection