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
      <div class="col col-lg-3 col-md-6">
        <div class="card pos">
          <img src="{{asset('img/Docter1.jpg')}}" class="card-img-top" alt="...">
          <div class="product-overlay">
            <ul class="list-unstyled">
              <li><a href="#"><i class="fab fa-facebook" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram" style="color: white !important;"></i></a></li>
            </ul>
          </div> <!-- product-overlay -->
          <div class="card-body">
            <h3 class="card-title text-center">Dr. Lloyd Wilson</h3>
            <h5 class="text-center"> Neurologist</h5>
            <p class="m text-center">Wednesday - Thursday</p>
            <p class="n text-center">1 pm - 5:30 pm</p>
            <a href="reserve.html" class=" doc btn btn-primary">Reserve</a>
          </div>
                </div>
      </div>
      <div class="col col-lg-3 col-md-6">
        <div class="card pos">
          <img src="{{asset('img/docter2.jpg')}}" class="card-img-top" alt="...">
          <div class="product-overlay">
            <ul class="list-unstyled">
              <li><a href="#"><i class="fab fa-facebook" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram" style="color: white !important;"></i></a></li>
            </ul>
          </div> <!-- product-overlay -->
          <div class="card-body">
            <h3 class="card-title text-center">Dr. Barry Taller</h3>
            <h5 class="text-center">  otolaryngologist</h5>
            <p class="m text-center">Wednesday - Thursday</p>
            <p class="n text-center">1 pm - 5:30 pm</p>
            <a href="reserve.html" class=" doc btn btn-primary">Reserve</a>
          </div>
        </div>
      </div>
      <div class="col col-lg-3 col-md-6">
        <div class="card pos">
          <img src="{{asset('img/docter34.jpg')}}" class="card-img-top" alt="...">
          <div class="product-overlay">
            <ul class="list-unstyled">
              <li><a href="#"><i class="fab fa-facebook" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram" style="color: white !important;"></i></a></li>
            </ul>
          </div> <!-- product-overlay -->
          <div class="card-body">
            <h3 class="card-title text-center">Dr. Gary Moore</h3>
            <h5 class="text-center"> surgeon</h5>
            <p class="m text-center">Wednesday - Thursday</p>
            <p class="n text-center">1 pm - 5:30 pm</p>
            <a href="reserve.html" class=" doc btn btn-primary">Reserve</a>
          </div>
        </div>
      </div>
      <div class="col col-lg-3 col-md-6">
        <div class="card pos">
          <img src="{{asset('img/docter4.avif')}}" class="card-img-top" alt="..." >
          <div class="product-overlay">
            <ul class="list-unstyled">
              <li><a href="#"><i class="fab fa-facebook" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram" style="color: white !important;"></i></a></li>
            </ul>
          </div> <!-- product-overlay -->
          <div class="card-body">
            <h3 class="card-title text-center">Dr. Ian Smith</h3>
            <h5 class="text-center"> Dentist</h5>
            <p class="m text-center">Wednesday - Thursday</p>
            <p class="n text-center">1 pm - 5:30 pm</p>
            <a href="reserve.html" class=" doc btn btn-primary">Reserve</a>
          </div>
        </div>
      </div>
    </div>
</div>
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col col-lg-3 col-md-6">
        <div class="card pos">
          <img src="{{asset('img/docter4.avif')}}" class="card-img-top" alt="...">
          <div class="product-overlay">
            <ul class="list-unstyled">
              <li><a href="#"><i class="fab fa-facebook" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram" style="color: white !important;"></i></a></li>
            </ul>
          </div> <!-- product-overlay -->
          <div class="card-body">
            <h3 class="card-title text-center">Dr. Nicholas Bryant</h3>
            <h5 class="text-center"> Neurologist</h5>
            <p class="m text-center">Wednesday - Thursday</p>
            <p class="n text-center">1 pm - 5:30 pm</p>
            <a href="reserve.html" class=" doc btn btn-primary">Reserve</a>
          </div>
                </div>
      </div>
      <div class="col col-lg-3 col-md-6">
        <div class="card pos">
          <img src="{{asset('img/doctors-7.jpg')}}" class="card-img-top" alt="...">
          <div class="product-overlay">
            <ul class="list-unstyled">
              <li><a href="#"><i class="fab fa-facebook" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram" style="color: white !important;"></i></a></li>
            </ul>
          </div> <!-- product-overlay -->
          <div class="card-body">
            <h3 class="card-title text-center">Dr. Victoria Morgan</h3>
            <h5 class="text-center">  otolaryngologist</h5>
            <p class="m text-center">Wednesday - Thursday</p>
            <p class="n text-center">1 pm - 5:30 pm</p>
            <a href="reserve.html" class=" doc btn btn-primary">Reserve</a>
          </div>
        </div>
      </div>
      <div class="col col-lg-3 col-md-6">
        <div class="card pos">
          <img src="{{asset('img/doctors-8.jpg')}}" class="card-img-top" alt="...">
          <div class="product-overlay">
            <ul class="list-unstyled">
              <li><a href="#"><i class="fab fa-facebook" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram" style="color: white !important;"></i></a></li>
            </ul>
          </div> <!-- product-overlay -->
          <div class="card-body">
            <h3 class="card-title text-center">Dr. Katherine Wong</h3>
            <h5 class="text-center"> surgeon</h5>
            <p class="m text-center">Wednesday - Thursday</p>
            <p class="n text-center">1 pm - 5:30 pm</p>
            <a href="reserve.html" class=" doc btn btn-primary">Reserve</a>
          </div>
        </div>
      </div>
      <div class="col col-lg-3 col-md-6">
        <div class="card pos">
          <img src="{{asset('img/doctors-6.jpg')}}" class="card-img-top" alt="..." >
          <div class="product-overlay">
            <ul class="list-unstyled">
              <li><a href="#"><i class="fab fa-facebook" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin" style="color: white !important;"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram" style="color: white !important;"></i></a></li>
            </ul>
          </div> <!-- product-overlay -->
          <div class="card-body">
            <h3 class="card-title text-center">Dr. Walter Jenkins</h3>
            <h5 class="text-center"> Dentist</h5>
            <p class="m text-center">Wednesday - Thursday</p>
            <p class="n text-center">1 pm - 5:30 pm</p>
            <a href="reserve.html" class=" doc btn btn-primary">Reserve</a>
          </div>
        </div>
      </div>
    </div>
</div>
@include('subViews.footer')
@endsection
