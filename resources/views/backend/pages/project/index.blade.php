@extends('backend.layouts.master')

@section('fav_title', 'Project List')

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
<div class="app-title">
  <div>
    <h1><i class="fa fa-pie-chart"></i> {{ __('backend/category.category_management') }}</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg fa-fw"></i><a href="{{ route('admin.home') }}">{{ __('backend/default.dashboard') }}</a></li>
    <li class="breadcrumb-item active">{{ __('backend/category.category') }}</li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6"><h2><i class="fa fa-table"></i> Project</h2></div>
          <div class="col-md-6"><a href="{{ route('admin.project.add') }}" class="float-right btn btn-primary"><i class="fa fa-plus"></i> Add New</a></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table id="datatable" class="table table-bordered table-hover display">
            <thead>
              <th>{{ __('backend/default.sl') }}</th>
              <th>{{ __('backend/form_field.title') }}</th>
              <th>File</th>
              {{-- <th>{{ __('backend/form_field.status') }}</th> --}}
              <th class="action">{{ __('backend/default.action') }}</th>
            </thead>

            <tbody>
              @foreach ($projects as $key => $row)
              
              <tr>
                <td> {{ $key+1 }} </td>
                <td> {{ $row->title }} </td>
                <td> <a href="{{ asset('public/files/projects/'.$row->file) }}" download><i class="fa fa-download"></i> Download</a> </td>
                {{-- <td> 
                  {{  $row->status=='1' ? 'Active':'Deactive' }}
                </td> --}}
                <td class="action">
                  <div class="btn-group">
                    <a href="{{ route('admin.project.edit', $row->id) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
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
