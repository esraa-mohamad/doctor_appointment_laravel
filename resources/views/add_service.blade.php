@extends('templates.main')

@section('content')
<body style="font-family: 'Merienda', cursive;">
  <div class="container">
    <h1 class="text-center form mb-5" style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6);">Add Service</h1>

    <!-- form -->
    <form action="{{route('Handle_Add_service')}}" method="post">
      <!-- 2 column grid layout with text inputs for the first and last names -->
      @csrf
     

      <!-- service name -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif; ">
        <input type="text" id="form6Example3" name="service_name" value="{{ old('service_name') }}" class="form-control" />
        <label class="form-label" for="form6Example3">Service name</label>
      </div>

      @error('service_name')
      <div class="text-danger">{{ $message }}</div>
    @enderror

      <!-- Service code -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example4" name="service_code" value="{{ old('service_code') }}" class="form-control" />
        <label class="form-label" for="form6Example4">Service code</label>
      </div>

      @error('service_code')
      <div class="text-danger">{{ $message }}</div>
    @enderror

      <!-- surgery type  -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example5" name="service_type" value="{{ old('service_type') }}" class="form-control" />
        <label class="form-label" for="form6Example5">Surgery type</label>
      </div>

      @error('service_type')
      <div class="text-danger">{{ $message }}</div>
    @enderror


      <!-- cost -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example6" name="cost" value="{{ old('cost') }}" class="form-control" />
        <label class="form-label" for="form6Example6">Cost</label>
      </div>

      @error('cost')
      <div class="text-danger">{{ $message }}</div>
    @enderror


      <!-- Additional information  -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <textarea class="form-control" id="form6Example10" type="text" name="additional_info" value="" rows="4"></textarea>
        <label class="form-label" for="form6Example10">Additional information</label>
      </div>

      @error('additional_info')
      <div class="text-danger">{{ $message }}</div>
    @enderror


      <!-- Submit button -->
      <input type="submit" class="btn btn-primary btn-block mb-4" style="font-family: 'Cormorant Garamond'; font-size: 15px;" name="add_service" value="ADD"></input>
    </form>
  </div>

  @endsection