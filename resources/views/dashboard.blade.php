@extends('templates.main')

@section('content')
<body>
    <!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-dark">
      <div class="position-sticky bg-dark">
        <div class="list-group list-group-flush mx-3 mt-4 bg-secondary">
          <a
            href="#"
            class="list-group-item list-group-item-action py-2 ripple bg-dark text-white"
            aria-current="true"
          >
          <i class="bi bi-clipboard2-pulse-fill"></i><span>patient</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple bg-dark text-white">
            <i class="bi bi-microsoft-teams"></i></i><span>Our Staff</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple bg-dark text-white"
            ><i class="bi bi-capsule-pill"></i><span>Services</span></a
          >
          <a href="#" class="list-group-item list-group-item-action py-2 ripple bg-dark text-white"
            ><i class="bi bi-heart-pulse-fill"></i><span>Doctors</span></a
          >

        </div>
      </div>
    </nav>
    <!-- Sidebar -->  
  
    <!-- Navbar -->
 
    <!-- Navbar -->
    <div class="container p-3">
      <button class="btn bg-info text-white mb-3 mt-5">Add +</button>
    <table class="table align-middle" style="width: 100%; display: block; margin: auto;">
        <thead>
          <tr>
            <th class="bg-dark text-white" scope="col">#</th>
            <th class="bg-dark text-white" scope="col">Lorem</th>
            <th class="bg-dark text-white" scope="col">Ipsum</th>
            <th class="bg-dark text-white" scope="col">Dolor</th>
            <th class="bg-dark text-white" scope="col">Lorem</th>
            <th class="bg-dark text-white" scope="col">Ipsum</th>
            <th class="bg-dark text-white" scope="col">Dolor</th>
            <th class="bg-dark text-white" scope="col">Lorem</th>
            <th class="bg-dark text-white" scope="col">Ipsum</th>
            <th class="bg-dark text-white" scope="col">Dolor</th>
            <th class="bg-dark text-white" scope="col">Ipsum</th>
            <th class="bg-dark text-white" scope="col">Dolor</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row">1</td>
            <td>Sit</td>
            <td>Amet</td>
            <td>Sit</td>
            <td>Amet</td>
            <td>Sit</td>
            <td>Amet</td>
            <td>Sit</td>
            <td>Amet</td>
            <td>Sit</td>
            <td>Amet</td>
            <td>
              <button type="button" class="btn btn-link btn-sm px-3" data-ripple-color="dark">
                <i class="fas fa-times"></i>
              </button>
            </td>
          </tr>
          <tr>
            <td scope="row">2</td>
            <td>Adipisicing</td>
            <td>Elit</td>
            <td>Adipisicing</td>
            <td>Elit</td>
            <td>Adipisicing</td>
            <td>Elit</td>
            <td>Adipisicing</td>
            <td>Elit</td>
            <td>Adipisicing</td>
            <td>Elit</td>
            <td>
              <button type="button" class="btn btn-link btn-sm px-3" data-ripple-color="dark">
                <i class="fas fa-times"></i>
              </button>
            </td>
          </tr>
          <tr>
            <td scope="row">3</td>
            <td>Hic</td>
            <td>Fugiat</td>
            <td>Hic</td>
            <td>Fugiat</td>
            <td>Hic</td>
            <td>Fugiat</td>
            <td>Hic</td>
            <td>Fugiat</td>
            <td>Hic</td>
            <td>Fugiat</td>
            <td>
              <button type="button" class="btn btn-link btn-sm px-3" data-ripple-color="dark">
                <i class="fas fa-times"></i>
              </button>
            </td>
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