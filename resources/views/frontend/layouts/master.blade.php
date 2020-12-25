<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>RTC</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        a.dropdown-item:hover{
            background: #5b6871;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <style>
    table.dataTable{border-collapse:collapse !important;}
</style>

</head>

<body >
    <div class="header" 
    {{-- style="background-color: #00425d;min-height: 100%" --}}
    >
        {{-- <div class="row" style="background-color: #00425d">
            <div class="header-left float-left">
                <a href="" class="logo"> <img src="http://localhost/project/public/image/banner.png"> </a>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-md-2 offset-md-1">
                <img src="http://localhost/project/public/image/pstulogo.png" class="logo" width="145px" height="127px">
            </div>
            <div class="col-md-8" style="min-height: 102px;letter-spacing: 5px">
                <div class="justify-content-center bg-white text-center">
                    <h1>Research and Training Centre</h1>
                    <h4>Patuakhali Science and Technology University</h4>
                    <h6>Dumki, Patuakhali, 8602</h6> <br>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg"  style="background: #0b384a">
        <div class="collapse navbar-collapse" id="navbarSupportedContent"style="background: #0b384a">
            <ul class="navbar-nav mr-auto mr-auto-center">
                <li class="nav-item" >
                    <a class="nav-link" style="color: #e1ffa8"href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                </li>

            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: #e1ffa8" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  About RTC    
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown"style="background: #0b384a">
                <a class="dropdown-item" style="color: #e1ffa8"href="{{ route('Vission and Mission') }}">Vision and Mission</a>
               <a class="dropdown-item" style="color: #e1ffa8"href="{{ route('Resource') }}">Resource</a>

                 <a class="dropdown-item" style="color: #e1ffa8"href="{{ route('Gallery') }}">Governing Body</a>
                 {{--  <a class="dropdown-item" style="color: #e1ffa8"href="{{ route('Galler') }}">Publications</a> --}}

                <a class="dropdown-item" style="color: #e1ffa8" href="{{ route('RAC') }}">RAC of RTC</a>
 <a class="dropdown-item" style="color: #e1ffa8" href="{{ route('Employees') }}">Employees</a>


                           </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="color: #e1ffa8"href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Administration    
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background: #0b384a">
            <a class="dropdown-item" style="color: #e1ffa8" href="{{ route('Management') }}">Management</a>
 @guest
            <a class="dropdown-item" style="color: #e1ffa8"href="{{ route('login') }}">{{ __('Login') }}</a>
            <a class="dropdown-item" style="color: #e1ffa8"href="{{ route('register') }}">{{ __('Register') }}</a>
            @else
            <a class="dropdown-item" style="color: #e1ffa8"href="{{ route('home') }}">Account</a>
            @endguest
             <a class="dropdown-item" style="color: #e1ffa8" href="{{ route('Monitor') }}">Monitoring and Evaluation</a>


        </div>
    </li>
    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="color: #e1ffa8"href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Research Projects    
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background: #0b384a">
              <a class="dropdown-item" style="color: #e1ffa8" href="{{ route('Research Project Approval') }}">Research Project Approval(Rules)</a>
            <a class="dropdown-item" style="color: #e1ffa8" href="{{ route('notice') }}">Ongoing Projects</a>
             {{-- <a class="dropdown-item" style="color: #e1ffa8" href="{{ route('submitted_project_proposal') }}">Submitted Project Proposal</a> --}}
            <a class="dropdown-item" style="color: #e1ffa8" href="{{ route('completed_projects') }}">Completed Projects</a>
           {{--  @guest
            <a class="dropdown-item" style="color: #e1ffa8"href="{{ route('login') }}">{{ __('Login') }}</a>
            <a class="dropdown-item" style="color: #e1ffa8"href="{{ route('register') }}">{{ __('Register') }}</a>
            @else
            <a class="dropdown-item" style="color: #e1ffa8"href="{{ route('home') }}">Account</a>
            @endguest --}}
            <a class="dropdown-item" style="color: #e1ffa8" href="{{ route('Present') }}">Present Research Status</a>
          
        </div>
    </li>
     <li class="nav-item" >
 <a class="nav-link" style="color: #e1ffa8"href="{{ route('Galler') }}">Publications</a>   
  </li>
   <li class="nav-item" >
        <a class="nav-link" style="color: #e1ffa8"href="{{ route('technologies') }}">Technologies</a>
    </li>
    <li class="nav-item" >
        <a class="nav-link" style="color: #e1ffa8"href="{{ route('Award') }}">Award</a>
    </li>

    <li class="nav-item" >
        <a class="nav-link" style="color: #e1ffa8"href="{{ route('Donors') }}">Donors</a>
    </li>
   

    <li class="nav-item" >
        <a class="nav-link" style="color: #e1ffa8" href="{{ route('Down') }}" >Download</a>
    </li>
    @auth
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: #e1ffa8"href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background: #0b384a">
            <a class="dropdown-item" style="color: #e1ffa8" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li>
    @endauth
</ul>

<ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" style="color:white;font-size:15px;" href="http://pstu.ac.bd/">PSTU</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" style="color:white;font-size:15px" href="http://pstu.ac.bd/journals">JPSTU</a>
    </li>
   {{--  <li class="nav-item">
        <a class="nav-link" style="color:white;font-size:15px" href="{{ asset('public/files/1557307644.docx') }}"download><i class="fa fa-download fa-fw"></i>Project Proposal Form</a>
    </li> --}}
</ul>

</div>
</div>
</nav>

@section('content') @show

<div class="footer">
    <footer>

        <div class="row">
          <div class="col-md-4">
            <p>
              {{-- lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem --}}
          </p>
      </div>
      <div class="col-md-4">
          
      </div>
      <div class="col-md-4"></div>
  </div>

          <a class="nav-link" style="color: #e1ffa8"href="{{ route('Contact Us') }}">Devloper</a>
          <P>Proudly powered by RTC, Patuakhali Science and Technology University </P>

</footer>

</div>

</body>

</html>