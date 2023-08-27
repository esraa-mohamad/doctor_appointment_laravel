@extends('templates.main')
@section('content')

  <body>
    @include('subViews.nav')
     <!-- Start our team -->
     <div class="text-center mx-auto mb-5 " style="max-width: 500px; margin-top: 100px;" id="staff">
      <h2 class="d-inline-block text-primary text-uppercase border-bottom border-5 ">Our Qualified Doctors</h2>
      <h5 class="d-inline-block">Best Care & Better Doctors &hearts;</h5>
  </div>
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 g-4">
      @foreach ($doctors as $doctor)
      <div class="col col-lg-3 col-md-6">
        <div class="card pos">
          <img src="{{asset('img/doctors/'.$doctor->image)}}" class="card-img-top" alt="...">
          <div class="product-overlay">
            <ul class="list-unstyled">
              <li><a href="#"><i class="fab fa-facebook" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram" style="color: white !important;"></i></a></li>
            </ul>
          </div> <!-- product-overlay -->
          <div class="card-body">
            <h3 class="card-title text-center">Dr. {{$doctor->fname}} {{$doctor->lname}}</h3>
            <h5 class="text-center"> {{$doctor->specialty}}</h5>
            <p class="m text-center">{{$doctor->shift_time}}</p>
            <p class="n text-center">{{ $doctor->phone }}</p>
            <h6 class="text-center"> {{ $doctor->additional_info }}</h6>
            <a href="reserve.html" class=" doc btn btn-primary">Booking Appointment</a>
          </div>
                </div>
      </div>
      @endforeach
    </div>
</div>

@include('subViews.footer')
@endsection
