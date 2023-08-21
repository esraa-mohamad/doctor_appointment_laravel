@extends('templates.main')

@section('content')
<body style="font-family: 'Merienda', cursive;">

    <!-- Section: Design Block -->
    <section class="text-center text-lg-start">
      <style>
        .cascading-right {
          margin-right: -50px;
        }

        @media (max-width: 991.98px) {
          .cascading-right {
            margin-right: 0;
          }
        }
      </style>

      <!-- Jumbotron -->
      <div class="container py-4">
        <div class="row g-0 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card cascading-right" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
              <div class="card-body p-5 shadow-5 text-center">
                <h2 class="fw-bold mb-5" style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6);">Sign up </h2>
                <!-- form -->
                <form>
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row mb-4" style="font-family: 'Cormorant Garamond', serif; ">
                    <!-- first name -->
                    <div class="col">
                      <div class="form-outline">
                        <input type="text" id="form3Example1" class="form-control" />
                        <label class="form-label" for="form3Example1">First name</label>
                      </div>
                    </div>

                    <!-- last name -->
                    <div class="col">
                      <div class="form-outline">
                        <input type="text" id="form3Example2" class="form-control" />
                        <label class="form-label" for="form3Example2">Last name</label>
                      </div>
                    </div>
                  </div>

                  <!-- phone number -->
                  <div class="row mb-4" style="font-family: 'Cormorant Garamond', serif; ">
                    <div class="col">
                      <div class="form-outline">
                        <input type="text" id="form3Example5" class="form-control" />
                        <label class="form-label" for="form3Example5">phone number</label>
                      </div>
                    </div>

                    <!-- national_id -->
                    <div class="col" style="font-family: 'Cormorant Garamond', serif; ">
                      <div class="form-outline">
                        <input type="text" id="form3Example6" class="form-control" />
                        <label class="form-label" for="form3Example6">National_id</label>
                      </div>
                    </div>
                  </div>

                  <!-- Email input -->
                  <div class="form-outline mb-4" style="font-family: 'Cormorant Garamond', serif; ">
                    <input type="email" id="form3Example3" class="form-control" />
                    <label class="form-label" for="form3Example3">Email address</label>
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-4" style="font-family: 'Cormorant Garamond', serif; ">
                    <input type="password" id="form3Example4" class="form-control" />
                    <label class="form-label" for="form3Example4">Password</label>
                  </div>

                  <!-- confirm password -->
                  <div class="form-outline mb-4" style="font-family: 'Cormorant Garamond', serif; ">
                    <input type="password" id="form3Example7" class="form-control" />
                    <label class="form-label" for="form3Example7">confirm password</label>
                  </div>

                  <!-- Submit button -->
                  <button type="submit" class="btn btn-primary btn-block mb-4" style="font-family: 'Cormorant Garamond'">
                    Sign up
                  </button>

                  <!-- Register buttons -->

                  <p style="font-weight: 700;  margin-bottom: 5px;">
                    <span style="font-family: 'Cormorant Garamond', serif; "> Already have an account?</span>

                    <span><a style="color: rgb(178, 53, 53); font-size:12px;" href="{{route('login')}}">login</a></span>
                  </p>

                </form>

              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-5 mb-lg-0">
            <img src="{{asset('img/surgery.jpeg')}}" class="w-100 rounded-4 shadow-4" style="height: 700px;" alt="" />
          </div>
        </div>
      </div>
      <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
@endsection