@extends('templates.main')

@section('content')
<body>
    @include('subViews.sidebar')
    <!--Main Navigation-->
<header>

    <div class="container">
      <button type="button" id="btt" class="btn btn-info"> <a class="text-white"
        @class([Route::is('Add_Doctor')])aria-current="page" href="{{route('Add_Doctor')}}">ADD Doctor+ </a
        > </button>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">address</th>
          <th scope="col">national id</th>
          <th scope="col">email</th>
          <th scope="col">phone</th>
          <th scope="col">code</th>
          <th scope="col">shift_time</th>
          <th scope="col">salary</th>
          <th scope="col">info</th>
          <th scope="col">image</th>
          <th scope="col">update</th>
          <th scope="col">delete</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>Mark</td>
          <td>@mdo</td>
          <td>Mark</td>
          <td>Mark</td>
          <td>Mark</td>
          <td><i class="fas fa-pen-to-square text-info"></i></td>
          <td> <i class="far fa-trash-can text-danger"></i> </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>Jacob</td>
          <td>@fat</td>
          <td>@fat</td>
          <td>@fat</td>
          <td>Jacob</td>
          <td><i class="fas fa-pen-to-square text-info"></i></td>
          <td> <i class="far fa-trash-can text-danger"></i> </td>
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