@extends('backend.layouts.master')

@section('fav_title', 'Add Technology')

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6"><h2><i class="fa fa-plus-square"></i> Technology</h2></div>
          <div class="col-md-6"><a href="{{ route('admin.technology.index') }}" class="float-right btn btn-primary"><i class="fa fa-arrow-left"></i> List</a></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="card-body">
        @include('backend.partials.error_message')
        <form class="form-horizontal" id="myform" action="{{ route('admin.technology.store') }}" method="post" enctype="multipart/form-data">
          @csrf

          <div class="form-group row">
            <label class="control-label col-md-3 text-right">
              <strong><h1>Title</h1></strong>
              <span class="text-danger">*</span></label>
            <div class="col-md-5">
              <input type="text" id="title" class="form-control" name="title"  required>
            </div>
          </div>

          <div class="form-group row">
            <label class="control-label col-md-3 text-right">
              <strong>Description</strong>
              <span class="text-danger">*</span></label>
            <div class="col-md-5">
              <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
            </div>
          </div>
           <div class="form-group row">
            <label class="control-label col-md-3 text-right">
              <strong>File</strong>
              <span class="text-danger">*</span></label>
            <div class="col-md-5">
              <input type="file" id="file" class="form-control" name="file" required>
            </div>
          </div>
          
          <div class="form-row">
            <div class="col-md-8 mt-3">
              <button type="submit" name="save" class="btn btn-primary float-right">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')

@endsection
