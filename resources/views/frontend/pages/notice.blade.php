@extends('frontend.layouts.master')

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="margin-bottom:10px">
                <div class="card-header">Proposals</div>
            </div>
        </div>
    </div>
    <table id="example" class="table table-striped table-bordered" style="width:100%;background-color:white;color:black">

    {{-- <div class="row mt-2">
       <div class="col-md-12"> --}}
           {{-- <table class="table table-bordered" style="background-color:white;color:black"> --}}
           <thead>
               <th>Project Code</th>
               <th>Project</th>
               <th>Name</th>
               <th>File</th>
               <th>Source Of Fund</th>
               <th>Start Date</th>
               <th>End Date</th>
           {{--     <th>Submission Date</th>
               <th>Deadline Date</th> --}}
           </thead>
                    @foreach($projects as $project)

           <tbody>
              <th>{{ $project->code }}</th>
              <th>{{ $project->title }}</th>
              <th>
                {{ $project->user ? $project->user->name : 'N/A' }} <br>
                {{ $project->designation }}
              </th>
               <th><a href="{{ asset('public/files/projects/'.$project->file) }}" download><i class="fa fa-download"></i> Download</a></th>
               <th>{{$project->source_of_fund}}</th>
               <th>{{$project->start_date}}</th>
               <th>{{$project->end_date}}</th>
             </tbody>
          @endforeach
       </table>
       {{-- </div> --}}
    {{-- </div> --}}
</div>

@endsection