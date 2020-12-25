@extends('backend.layouts.master')

@section('fav_title', __('backend/default.dashboard') )

@section('content')

<div class="app-title">
  <div>
    <h1><i class="fa fa-dashboard"></i> {{ __('backend/default.dashboard') }}</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i> {{ __('backend/default.dashboard') }}</li>
  </ul>
</div>


<div class="row">
  <div class="col-md-6 col-lg-3">
    <div class="widget-small primary coloured-icon"><i class="icon fa fa-file fa-3x"></i>
      <div class="info">
        <h4>Project</h4>
        <p><b>{{ \App\Models\Project::where('status', '!=', 9)->count() }}</b></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3">
    <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
      <div class="info">
        <h4>Proposal</h4>
        <p><b>{{ \App\Models\Proposal::where('status', '!=', 9)->count() }}</b></p>
      </div>
    </div>
  </div>
</div>

@endsection