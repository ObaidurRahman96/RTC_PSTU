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
        <div class="table-responsive">
          <table id="datatable" class="table table-bordered table-hover display">
            <thead>
              <th>{{ __('backend/default.sl') }}</th>
              <th>Project</th>
              <th>File</th>
              <th>{{ __('backend/form_field.status') }}</th>
              <th class="action">{{ __('backend/default.action') }}</th>
            </thead>

            <tbody>
              @foreach ($proposals as $key => $row)
              
              <tr>
                <td> {{ $key+1 }} </td>
                <td> {{ $row->project ? $row->project->title : '' }} </td>
                <td> <a href="{{ asset('public/files/proposals/'.$row->file) }}" download><i class="fa fa-download"></i> Download</a></td>
                <td> 
                  @if($row->status == 1)
                    Accepted
                  @elseif($row->status == 8)
                    Rejected
                  @elseif($row->status == 5)
                    Completed
                  @elseif($row->status == 7)
                    Awarded  
                  @else
                    Pending
                  @endif
                </td>
                <td class="action">
                  <div class="btn-group">
                    <a href="{{ route('admin.proposal.view', $row->id) }}" class="btn btn-primary">View</a>
                    @if($row->status != 8 && $row->status != 1 && $row->status != 5 && $row->status != 7)
                      <a href="{{ route('admin.proposal.update_accept', $row->id) }}" class="btn btn-info">Accept</a>
                    @endif
                    @if($row->status != 1 && $row->status != 8 && $row->status != 5 && $row->status != 7)
                      <a href="{{ route('admin.proposal.update_reject', $row->id) }}" class="btn btn-warning">Reject</a>
                    @endif
                    @if($row->status == 1 || $row->status != 5 && $row->status != 7)
                      <a href="{{ route('admin.proposal.update_completed', $row->id) }}" class="btn btn-warning">Completed</a>
                    @endif
                    @if($row->status == 5)
                      <a href="{{ route('admin.proposal.update_award', $row->id) }}" class="btn btn-success">Awarded</a>
                    @endif
                    <button class="btn btn-danger" onClick="deleteMethod({{ $row->id }})"><i class="fa fa-trash"></i></button>
                  </div>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
