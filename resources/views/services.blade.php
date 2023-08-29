@extends('templates.main')
@section('content')

  <body>
    @include('subViews.nav')
     <!-- Services Start -->
     <div class="container-fluid py-5" id="services" style="margin-bottom: 70px;">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-uppercase border-bottom border-5  mb-3"style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6);font-family: 'Merienda', cursive; color:#0b616c;font-size:28px;">Services</h5>
                <h1 class="display-4 mb-5"style="font-family: 'Cormorant Garamond';font-size:25px;">Our Excellent Medical Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-user-md text-white"></i>
                        </div>
                        <h4 class="mb-3" style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6);font-family: 'Merienda', cursive; font-size:22px;">Blood Testing</h4>
                        <p class="m-0"style="font-family: 'Cormorant Garamond';font-size:18px;line-height:20px;">A full blood count (FBC) is a common blood test that can provide information about a range of conditions. A full blood count looks at the different cells in your blood.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                          <i class="fa-solid fa-arrow-right"></i>                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-procedures text-white"></i>
                        </div>
                        <h4 class="mb-3"style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6);font-family: 'Merienda', cursive; font-size:22px;">Operation & Surgery</h4>
                        <p class="m-0"style="font-family: 'Cormorant Garamond';font-size:18px;line-height:20px;">surgery is a medical procedure which involves major incision and medical to cure the diseases or to replace any organ.Common Surgical opertions Appendectomy..etc</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                          <i class="fa-solid fa-arrow-right"></i>                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-stethoscope text-white"></i>
                        </div>
                        <h4 class="mb-3"style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6);font-family: 'Merienda', cursive; font-size:22px;">Outdoor Checkup</h4>
                        <p class="m-0"style="font-family: 'Cormorant Garamond';font-size:18px;line-height:20px;">Our Outdoor Checkup services provide comprehensive healthcare solutions right at your doorstep. With a patient-centric approach, we bring quality healthcare services to you.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                          <i class="fa-solid fa-arrow-right"></i>                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
    <!-- start pricing -->
    <div class="text-center mx-auto mb-5" style="max-width: 500px;" id="price">
        <h5 class="d-inline-block text-uppercase border-bottom border-5 "style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6);font-family: 'Merienda', cursive; color:#0b616c;font-size:28px;">Price</h5>
        <h1 class="display-4"style="font-family: 'Cormorant Garamond';font-size:25px;">Medical Services prices</h1>
    </div>



    <div class="container">
        <!-- ---------------------------------Start search services-------------------------------------- -->
        
    <form action="{{route('Search_service_for_patient')}}" method="get">
      <!-- 2 column grid layout with text inputs for the first and last names -->
      @csrf
     

      <!-- service name -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif; ">
        <input type="text" id="form6Example3" name="service_name" value="{{request('service_name')}}" class="form-control" />
        <label class="form-label" for="form6Example3">Service name</label>
      </div>

     
      <!-- Service code -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example4" name="service_code" value="{{request('service_code')}}" class="form-control" />
        <label class="form-label" for="form6Example4">Service code</label>
      </div>

     

      <!-- service type  -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example5" name="service_type" value="{{request('service_type')}}" class="form-control" />
        <label class="form-label" for="form6Example5">Surgery type</label>
      </div>

     

      <!-- cost -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example6" name="cost" value="{{request('cost')}}" class="form-control" />
        <label class="form-label" for="form6Example6">Cost</label>
      </div>


      <!-- Submit button -->
      <input type="submit" class="btn btn-primary btn-block mb-4" style="font-family: 'Cormorant Garamond'; font-size: 15px;" name="add_service" value="Search">
    </form>
    <a href="{{route('services')}}" class="btn btn-primary btn mb-5" style="font-family: 'Cormorant Garamond'; font-size: 15px; float:right; color:white;">clear Search</a>

        <!-- ---------------------------------end search services---------------------------------------- -->




    </div>
    <div class="container" style="margin-top:100px;">
      <div class="row">
        @foreach ($services as $service)
        <div class=" col-lg-3 col-md-6 mb-4">
          <div class=" price pricing_card" style="font-family: 'Cormorant Garamond';font-size:25px; text-align:center; border-radius:10px">
            <div class="pricing_header text-center">
              <h4 style="padding-top:10px">{{ $service->service_name }}</h4>
              <img src="{{asset('img/services/'. $service->image )}}" alt="" class="imm">
            </div>
            <div class="pricing_body text-center">
              <div class="pri text-center" style="padding-bottom:0px" ><h2>150$</h2></div>
              <div class="benefits " >
                <ul style="padding: 0px; padding-bottom:20px;">
                  <li>{{ $service->service_type }}</li>
                  <li>{{ $service->service_code }}</li>
                  <li>{{ $service->additional_info }}</li>
                  <li>{{ $service->cost }}</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
        
      </div>
    </div>

      <!-- ---------------- pricing section ends--------------------->
      @include('subViews.footer')
      @endsection
