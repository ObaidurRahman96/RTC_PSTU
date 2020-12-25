@extends('frontend.layouts.master')

@section('content')

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"> 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100"src="{{asset('public/images/1532949393.jpg')}}" alt="First slide" width="500" height="380">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/images/1532949420.jpg')}}" alt="Second slide" width="500" height="380">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/images/1532949376.jpg')}}" alt="Third slide" width="500" height="380">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
 </div>
 
<div class="container mt-5">
	<div class="row">
   <div class="col-md-2">
     <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action active">
        Donors
      </a>
      <a href="https://www.pstu.ac.bd/  " class="list-group-item list-group-item-action">PSTU</a>
      <a href="http://ugc-universities.gov.bd/  " class="list-group-item list-group-item-action">UGC</a>
      <a href="http://www.bas.org.bd/" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">BAS</a>
      </div>
   </div> 
   <div class="col-md-8 text-left">
      <h2>Research and Training Centre(RTC)</h2>
      <p>RTC is the research center of PSTU

        To formulate, organize, frame, co-ordinate and execute all research 
        schemes with the co-operation of respective academic departments according 
        to the genius of the University and the need of the countryTo make arrangements 
        for monitoring and evaluation of research programmes To organize symposia,
        conferences and seminars on various aspects of  agricultural sciences
        
      </p>

      <h2>Message from RTC Director</h2>
 
      <img src="{{asset('public/images/MRsir.jpg')}}" alt="Prof. DR. Mahbub Rabbani" class="mr-3 mt-3 rounded-circle" style="width:150px;">
      <div class="media-body">
        
      <h4>Prof. DR. Mahbub Robbani</h4>
      <h3>Director</h3>
      <p>To provide for research work of highest order in all branches of agricultural sciences for advancement and
          dissemination of knowledge in those subjects currently in force at this University  and those which may be
          instituted in future according to the need of the hour.The website is for To perform such other acts, whether incidental to powers aforesaid or not, as may be requested in furtherance of the objectives of the University.
      </p>      
    </div>
   </div> 
   <div class="col-md-2">
     <div class="row">
       <div class="list-group" style="height: 192px;">
        <a href="http://localhost/rts/projects/ongoing" class="list-group-item list-group-item-action active">
         *Latest Project Notice 
        </a>
        @php
          $notices = \App\Models\Project::where('end_date', '>=', date('Y-m-d'))->where('status', '!=','9')->get();
        @endphp
        @foreach($notices as $notice)
          <marquee direction="up" scrollamount="2">{{ $notice->title }}</marquee>
        @endforeach
        </div>
     </div>

     <div class="row mt-4">
       <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active">
          Quick Links
        </a>
        <a href="http://localhost/rts/technologies" class="list-group-item list-group-item-action" target="_blank">Latest Technologies</a>
        <a href="https://www.pstu.ac.bd/admission/undergraduate" class="list-group-item list-group-item-action" target="_blank">PSTU Admission</a>
        <a href="https://www.pstu.ac.bd/publications" class="list-group-item list-group-item-action">Publication</a>
        <a href="https://www.pstu.ac.bd/about/at-a-glance" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Pstu Infomation</a>
        </div>
     </div>
   </div> 
  </div>
</div>
    
@endsection	