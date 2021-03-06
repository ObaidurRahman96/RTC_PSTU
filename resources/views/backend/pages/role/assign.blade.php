@extends('backend.layouts.master')

@section('fav_title', __('backend/default.assign_permission') )

@section('styles')
<style type="text/css">
  .methods > .each_method{
    float: left;
    width: 184px;
    padding: 2px 0;
  }
  label {
    margin-bottom: 1px; 
  }
  input {
    vertical-align: sub !important;
  }
</style>
@endsection

@section('content')
@include('backend.partials.permission_checker')
@php
  $admins = \App\Models\Admin::orderBy('id', 'desc')->where('admin_role', $role)->where('status', 1)->get();
   $hasAuthority = \App\Models\Menu::where('route', 'admin.role.assign')->where('status', 1)->first();
   $getMyRoles = \App\Models\Role::where('admin_id', Auth::id())->where('role', Auth::user()->admin_role)->where('status', 1)->first();
  $assign_id = $hasAuthority->id;

  $found = 0;

  if ($getMyRoles && Auth::user()->username == 'superadmin') {
    $getMyInBodyRoles = json_decode($getMyRoles->in_body);

    foreach ($getMyInBodyRoles as $getMyInBodyRole) {
      if ($getMyInBodyRole == $assign_id) {
        $found = 1;
      }
    }
  }
  if (Auth::user()->username == 'superadmin') {
    $found = 1;
  }
  //dd($admins, $hasAuthority, Auth::user()->admin_role);
  $role_ = ucwords(request()->segment(count(request()->segments())), '-');
  $role_ = substr(str_replace('-',' ', $role_), 0, strlen($role_));
@endphp
{{-- @if ($found == 0)
  <script type="text/javascript">
    $('body').hide();
    history.go(-1);
  </script>
@endif --}}

<div class="app-title">
  <div>
    <h1><i class="fa fa-gavel"></i> {{ $admins[0]->name.' '.__('backend/default.management') }}</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg fa-fw"></i><a href="{{ route('admin.home') }}">{{ __('backend/default.dashboard') }}</a></li>
    <li class="breadcrumb-item active">{{ __('backend/admin_setting.admin_setting') }}</li>
    <li class="breadcrumb-item"><a href="{{ route('admin.role.index') }}">{{ __('backend/admin_setting.role') }}</a></li>
    <li class="breadcrumb-item active">{{ __('backend/admin_setting.assign') }}</li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6"><h2><i class="fa fa-table"> </i> {{ ucfirst($admins[0]->name) }}</h2></div>
        </div>
      </div>
      <div class="card-body">
        @php
        $permissions = \App\Models\Menu::orderBy('id', 'desc')->where('url', substr(url()->current(), 1+strlen(url('/'))))
        ->orWhere('url', substr(url()->current(), strlen(url('/'))))->first();
        $bodyMenu = \App\Models\Role::where('role', Auth::guard('admin')->user()->admin_role)->first();
        @endphp
        <form action="{{ route('admin.role.store') }}" method="post">
          @csrf

          @if($role == 3)
          <div class="row">
            <div class="col-md-3">
              <select name="admin_id" id="admin_id" class="form-control" required>
                <option selected value="" disabled>Select User</option>
                @foreach($admins as $admin)
                <option value="{{ $admin->id }}" {{ $loop->index == 0 ? 'selected' : '' }}>{{ $admin->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <br>
          @else
            <input type="hidden" name="admin_id" id="admin_id" class="form-control" required value="{{ $admin_id }}">
          @endif

          <input type="hidden" name="role_type" value="{{ $role }}">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>{{ __('backend/menu.menu') }}</th>
                <th>{{ __('backend/menu.submenu') }}</th>
              </tr>
              <tr>
                <th colspan="2" class="alert-secondary"><label><input type="checkbox" class="selectAll"> <span class="h3 mb-0">{{ __('backend/default.select_all') }}</span></label></th>
              </tr>
            </thead>
            <tbody>
              @php
              if(!is_null($role_wise)){
                $role_wise_menus = json_decode($role_wise->menu);
                $role_wise_sub_menus = json_decode($role_wise->sub_menu);
                $role_wise_in_body_menus = json_decode($role_wise->in_body);
              }
              else{
                $role_wise_menus = array();
                $role_wise_sub_menus = array();
                $role_wise_in_body_menus = array();
              }
              @endphp
              @foreach($menus as $menu)
              @if(is_null($menu->parent_id))
              <tr style="{{ $menu->route == 'admin.role.index' && $role_ == 'User' ? 'background-color: #fff3cd; color: #ad7204' : '' }} {{ $menu->menu_position == 2 ? 'color: #009688' : '' }}" id="{{ $menu->route == 'admin.role.index' && $role_ == 'User' ? 'permission_' : '' }}">
                <td class="method_">  
                  @if(Config::get('app.locale') == 'en')
                  <label><input type="checkbox" class="select_all" name="menu[]" id="menu{{ $menu->id }}" value="{{ $menu->id }}" {{ \App\Models\Role::checkedMenu($menu->id, $role_wise_menus) }}> {{ $menu->menu }}</label>
                  @else
                  <label><input type="checkbox" class="select_all" name="menu[]" id="menu{{ $menu->id }}" value="{{ $menu->id }}" {{ \App\Models\Role::checkedMenu($menu->id, $role_wise_menus) }}> {{ $menu->menu_bn }}</label>
                  @endif
                </td>
                <td class="methods">
                  @foreach($menu->submenus as $submenu)
                  <div class="each_method">
                    @if(Config::get('app.locale') == 'en')
                    <label><input type="checkbox" class="submenus" name="submenu[]" id="submenu{{ $submenu->id }}" value="{{ $submenu->id }}" {{ \App\Models\Role::checkedMenu($submenu->id, $role_wise_sub_menus) }}> {{ $submenu->menu }}</label>
                    @else
                    <label><input type="checkbox" class="submenus" name="submenu[]" id="submenu{{ $submenu->id }}" value="{{ $submenu->id }}" {{ \App\Models\Role::checkedMenu($submenu->id, $role_wise_sub_menus) }}> {{ $submenu->menu_bn }}</label>
                    @endif
                    @if(count($submenu->submenus) >= 1)
                    <br>
                    <div>
                      @foreach($submenu->submenus as $in_body)
                      <label class="position-relative d-block"><span class="line_ position-absolute"></span>
                        @if(Config::get('app.locale') == 'en')
                        <input type="checkbox" class="in_body ml-3" name="in_body[]" id="inbody{{ $in_body->id }}" value="{{ $in_body->id }}" {{ \App\Models\Role::checkedMenu($in_body->id, $role_wise_in_body_menus) }}> {{ $in_body->menu }}
                        @else
                        <input type="checkbox" class="in_body ml-3" name="in_body[]" id="inbody{{ $in_body->id }}" value="{{ $in_body->id }}" {{ \App\Models\Role::checkedMenu($in_body->id, $role_wise_in_body_menus) }}> {{ $in_body->menu_bn }}
                        @endif
                      </label>
                      @endforeach
                    </div>
                    @endif
                  </div>
                  @endforeach
                </td>
              </tr>
              @endif
              @endforeach
            </tbody>
          </table>
          <button type="submit" class="btn btn-success float-right" id="button">{{ __('backend/default.save') }}</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
  $(document).ready(function () {
    $(".selectAll").change(function () {
      $("input:checkbox").prop('checked', $(this).prop("checked"));
      @if ($role_ == 'User')
        if ($(this).is(':checked')) {
          alert('Giving the Menu Permission to USERs might be dangerous !!!');
        }
      @endif
    });
    $(document).on('change', '.select_all', function () {
      var change = $(this);
      $(this).closest('tr').find('.methods').find('input').each(function () {
        if (change.is(':checked')) {
          $(this).prop('checked', true);
          $.fn.myFunction();
        }
        else {
          $(this).prop('checked', false);
          $.fn.myFunction();
        }
      });
    });

    $(document).on('change', '#permission_ input', function () {
        if ($(this).is(':checked')) {
          alert('Giving the Menu Permission to USERs might be dangerous !!!');
        }
        else {
        }
    });

    $(document).on('change', '.submenus', function () {
      var change = $(this);
      $(this).closest('div').find('input').each(function () {
        if (change.is(':checked')) {
          $(this).prop('checked', true);
          $.fn.myFunction();
        }
        else {
          $(this).prop('checked', false);
          $.fn.myFunction();
        }
      });
    });

    $("tbody input:checkbox").change(function () {
      $.fn.myFunction();
    });
    if($('input:checked').length == ($('input[type=checkbox]').length - 1) && $('.selectAll:checked').length != 1){
      $('.selectAll').prop('checked', true);
    }
    $.fn.myFunction = function() {

      if($('tbody input:checked').length == ($('tbody input[type=checkbox]').length)){
        console.log("if "+($('tbody input:checked').length) +' '+ ($('tbody input[type=checkbox]').length))
        $('.selectAll').prop('checked', true);
        
      } else if($('tbody input:checked').length != ($('tbody input[type=checkbox]').length)){
        console.log("else "+($('tbody input:checked').length) +' '+ ($('tbody input[type=checkbox]').length))
        $('.selectAll').prop('checked', false);
      }
    }

    $("#admin_id").change(function(){
      var admin_id = $(this).val();
      var type = "{{ $role_ }}";
      type = type.toLowerCase();

      window.location.href = "{{ url('/') }}"+"/admin/role/assign/"+type+"/"+admin_id;
    });

  });
</script>
@endsection
