@extends('backend.layouts.master')

@section('fav_title', 'Database Backup')

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
    <h1><i class="fa fa-cog"></i> {{ __('backend/default.backup_management') }}</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg fa-fw"></i><a href="{{ route('admin.home') }}">{{ __('backend/default.dashboard') }}</a></li>
    <li class="breadcrumb-item active">{{ __('backend/default.backup') }}</li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6"><h2><i class="fa fa-table"></i> {{ __('backend/default.backup') }}</h2></div>
          <div class="col-md-6"><a href="{{ route('admin.backup.new') }}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> {{ __('backend/default.new_backup') }}</a></div>
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
          <table id="datatable" class="table table-bordered table-striped display">
            <thead>
              <th width="7%" class="text-center">{{ __('backend/default.sl') }}</th>
              <th>{{ __('backend/default.created') }}</th>
              <th>{{ __('backend/default.file') }}</th>
              <th class="action text-center" width="20%">{{ __('backend/default.action') }}</th>
            </thead>

            <tbody>
              @php
                $i = 1;
              @endphp
              @foreach($dircontents as $file)
                @php
                  //dd(pathinfo($file)['filename']);
                  $extension = pathinfo($file, PATHINFO_EXTENSION);
                @endphp
                @if($extension == 'zip')
                  <tr>
                    <td class="text-center">{{ $i++ }}</td>
                    <td>
                      @php
                        $fileName = pathinfo($file)['filename'];
                        $fileName = substr($fileName, 0, 10).' '.str_replace('-', ':', substr($fileName, 11));
                        //$date_ = date('Y-m-d', strtotime($fileName));
                        echo \Carbon\Carbon::createFromTimeStamp(strtotime($fileName))->diffForHumans()
                      @endphp
                    </td>
                    <td>{{ $file }}</td>
                    <td class="text-center">
                      {{-- <a href="{{ asset('database/Billing/'.$file) }}" download class="btn btn-info"><i class="fa fa-download"></i></a>
                      <button onClick="deleteMethod({{ json_encode($file) }})" class="btn btn-danger"><i class="fa fa-trash"></i></button> --}}
                      @foreach($permissions->submenus as $key => $permission)
                      @if(\App\Models\Menu::checkBodyMenu($permission->id, $bodyMenu->in_body))
                      @if($key == 0)
                      <a href="{{ asset('database/Billing/'.$file) }}" download class="btn btn-info"><i class="fa fa-download"></i></a>
                      @else
                      <button onClick="deleteMethod({{ json_encode($file) }})" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                      @endif
                      @endif
                      @endforeach
                    </td>
                  </tr>
                @endif
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
