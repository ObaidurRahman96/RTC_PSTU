@extends('backend.layouts.master')

@section('fav_title', 'Technology List')

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
    <li class="breadcrumb-item active">Technology</li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6"><h2><i class="fa fa-table"></i> Technology</h2></div>
          <div class="col-md-6"><a href="{{ route('admin.technology.add') }}" class="float-right btn btn-primary"><i class="fa fa-plus"></i> {{ __('backend/default.add_new') }}</a></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="card-body">
        @php
        $permissions = \App\Models\Menu::orderBy('id', 'desc')->where('url', substr(url()->current(), 1+strlen(url('/'))))
        ->orWhere('url', substr(url()->current(), strlen(url('/'))))->first();
        $bodyMenu = \App\Models\Role::where('role', Auth::guard('admin')->user()->admin_role)->first();
        @endphp
        
        <div class="table-responsive">
          <table id="datatable" class="table table-bordered table-hover display">
            <thead>
              <th>SL</th>
              <th>Title</th>
              <th>Action</th>
            </thead>

            <tbody>
              @foreach ($technologies as $key => $row)
              
              <tr>
                <td> {{ $key+1 }} </td>
                <td> {{ $row->title }} </td>
                <td class="action">
                  <a href="{{ route('admin.technology.edit', $row->id) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
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
