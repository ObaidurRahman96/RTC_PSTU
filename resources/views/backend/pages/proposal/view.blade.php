@extends('backend.layouts.master')

@section('fav_title', 'Proposal List')

@section('styles')
<style>
.action{
  min-width: 70px;
}
.table th, .table td{
  vertical-align: middle;
}
</style>
@endsection

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6"><h2><i class="fa fa-table"></i> Proposal</h2></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="card-body">
        <table class="table table-bordered">
          <tr>
           <th>Project</th>
         <td>{{ $proposal->project ? $proposal->project->title : '' }}</td> 
          </tr>
          <tr>
            <th>Description</th>
            <td>{{ $proposal->description }}</td>
          </tr>
          <tr>
            <th>File</th>
            <td><a href="{{ asset('public/files/proposals/'.$proposal->file) }}"><i class="fa fa-download"></i> Download</a></td>
          </tr>
          <tr>
            <th>Status</th>
            <td>
              @if($proposal->status == 1)
              Accepted
              @elseif($proposal->status == 8)
              Rejected
              @else
              Pending
              @endif
            </td>
          </tr>
        </table>

        @if($proposal->status != 8 && $proposal->status != 1)
        <a href="{{ route('admin.proposal.update_accept', $proposal->id) }}" class="btn btn-info">Accept</a>
        @endif
        @if($proposal->status != 1 && $proposal->status != 8)
        <a href="{{ route('admin.proposal.update_reject', $proposal->id) }}" class="btn btn-warning">Reject</a>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
