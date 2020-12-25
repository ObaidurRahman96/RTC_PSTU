@extends('frontend.layouts.master')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ Route::is('user_proposal') ? 'All Proposals' : 'Completed Project' }}</div>
            </div>
        </div>
    </div>

    <div class="row mt-2">
       <div class="col-md-12">
           <table class="table table-bordered" style="background-color:white;color:black">
           <thead>
               <th>SL</th>
{{--                <th>Project</th>
 --}}               <th>File</th>
               <th>Status</th>
           </thead>
           <tbody>
            @foreach($proposals as $proposal)
               <tr>
                   <td>{{ $loop->index + 1 }}</td>
{{--                    <td>{{ $proposal->project->title }}</td>
 --}}                   <td><a href="{{ asset('public/files/proposals/'.$proposal->file) }}" download><i class="fa fa-download"></i> Download</a></td>
                   <td>
                       @if($proposal->status == 0)
                        Pending
                       @elseif($proposal->status == 1)
                        Accepted
                       @elseif($proposal->status == 8)
                        Rejected
                       @elseif($proposal->status == 5)
                        Completed 
                      @elseif($proposal->status == 7)
                        <i class="fa fa-trophy"></i> Awarded
                       @endif
                   </td>
               </tr>
               @endforeach
           </tbody>
       </table>
       </div>
    </div>
</div>
@endsection
