@extends('frontend.layouts.master')

@section('content')
<div class="container text-center" style="background-color: #ffffff">
   <header>
         <h4 class="text-left">Technologies</h4>
   </header> 
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"> 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100"src="{{asset('public/images/boichi.jpg')}}" alt="First slide" width="500" height="380">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/images/cirvical.jpeg')}}" alt="Second slide" width="500" height="380">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/images/pstuboichi.jpg')}}" alt="Third slide" width="500" height="380">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/images/device.jpeg')}}" alt="Third slide" width="500" height="380">
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

   <div class="accordion" id="accordionExample">
      @foreach($technologies as $technology)
            <div class="card text-left">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $technology->id }}" aria-expanded="true" aria-controls="collapseOne">
                      {{ $technology->title }}
                    </button>
                  </h2>
                </div>

                <div id="collapse{{ $technology->id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    <img class="d-block w-100" src={{asset('public/files/projects/'.$technology->file)}} width="500" height="380">
                                        {!! $technology->description !!}

                  </div>
                </div>

            </div>
      @endforeach
   </div>   
</div>
<br>
<br>
<br>
<br>
<br>
@endsection

