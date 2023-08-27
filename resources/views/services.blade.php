@extends('templates.main')
@section('content')

  <body>
    @include('subViews.nav')
     <!-- Services Start -->
     <div class="container-fluid py-5" id="services" style="margin-bottom: 70px;">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Services</h5>
                <h1 class="display-4">Excellent Medical Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-user-md text-white"></i>
                        </div>
                        <h4 class="mb-3">Blood Testing</h4>
                        <p class="m-0">A full blood count (FBC) is a common blood test that can provide information about a range of conditions. A full blood count looks at the different cells in your blood.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                          <i class="fa-solid fa-arrow-right"></i>                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-procedures text-white"></i>
                        </div>
                        <h4 class="mb-3">Operation & Surgery</h4>
                        <p class="m-0">surgery is a medical procedure which involves major incision and medical to cure the diseases or to replace any organ.Common Surgical opertions Appendectomy..etc</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                          <i class="fa-solid fa-arrow-right"></i>                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-stethoscope text-white"></i>
                        </div>
                        <h4 class="mb-3">Outdoor Checkup</h4>
                        <p class="m-0">Our Outdoor Checkup services provide comprehensive healthcare solutions right at your doorstep. With a patient-centric approach, we bring quality healthcare services to you.</p>
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
        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5 ">Price</h5>
        <h1 class="display-4">Pricing Medical Services</h1>
    </div>
    <div class="container">
      <div class="row">
        @foreach ($services as $service)
        <div class=" col-lg-3 col-md-6 mb-4">
          <div class=" price pricing_card">
            <div class="pricing_header text-center">
              <h3>{{ $service->service_name }}</h3>
              <img src="{{asset('img/services/'. $service->image )}}" alt="" class="imm">
            </div>
            <div class="pricing_body text-center">
              <div class="pri text-center"><h2>150$</h2></div>
              <div class="benefits " >
                <ul>
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
