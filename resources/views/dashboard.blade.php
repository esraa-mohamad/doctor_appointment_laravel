@extends('templates.main')

@section('content')
<body>
    <!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4 bg-secondary">
          <a
            href="#"
            class="list-group-item list-group-item-action py-2 ripple text-white"
            aria-current="true"
          >
          <i class="bi bi-clipboard2-pulse-fill"></i><span>patient</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple text-white">
            <i class="bi bi-microsoft-teams"></i></i><span>Our Staff</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple text-white"
            ><i class="bi bi-capsule-pill"></i><span>Services</span></a
          >
          <a href="#" class="list-group-item list-group-item-action py-2 ripple text-white"
            ><i class="bi bi-heart-pulse-fill"></i><span>Doctors</span></a
          >

        </div>
      </div>
    </nav>

    <div class="container">
    <button type="button" id="btt" class="btn btn-info">ADD+</button>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
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