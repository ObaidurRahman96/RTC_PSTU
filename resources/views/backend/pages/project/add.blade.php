@extends('backend.layouts.master')

@section('fav_title', 'Add Project')

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6"><h2><i class="fa fa-plus-square"></i> Project</h2></div>
          <div class="col-md-6"><a href="{{ route('admin.project.index') }}" class="float-right btn btn-primary"><i class="fa fa-arrow-left"></i> List</a></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="card-body">
        @include('backend.partials.error_message')
        <form class="form-horizontal" id="myform" action="{{ route('admin.project.store') }}" method="post" enctype="multipart/form-data">
          @csrf

          <div class="form-group row">
            <label class="control-label col-md-3 text-right">
              <strong>Title</strong>
              <span class="text-danger">*</span></label>
            <div class="col-md-5">
              <input type="text" id="title" class="form-control" name="title"  required>
            </div>
          </div>

          <div class="form-group row">
            <label class="control-label col-md-3 text-right">
              <strong>Code</strong>
              <span class="text-danger">*</span></label>
            <div class="col-md-5">
              <input type="text" id="code" class="form-control" name="code"  required>
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
              <strong>Source Of Fund</strong>
              <span class="text-danger">*</span></label>
            <div class="col-md-5">
              <input type="text" id="source_of_fund" class="form-control" name="source_of_fund"  required>
            </div>
          </div>

          <div class="form-group row">
            <label class="control-label col-md-3 text-right">
              <strong>Start Date</strong>
              <span class="text-danger">*</span></label>
            <div class="col-md-5">
              <input type="date" id="start_date" class="form-control" name="start_date" required> 
            </div>
          </div>

          <div class="form-group row">
            <label class="control-label col-md-3 text-right">
              <strong>Submission End Date</strong>
              <span class="text-danger">*</span></label>
            <div class="col-md-5">
              <input type="date" id="end_date" class="form-control" name="end_date" required>  
            </div>
          </div>

          {{-- <div class="form-group row">
            <label class="control-label col-md-3 text-right">
              <strong>Duration Date</strong>
              <span class="text-danger">*</span></label>
            <div class="col-md-5">
              <input type="date" id="duration_date" class="form-control" name="duration_date" required>  
            </div>
          </div> --}}

          <div class="form-group row">
            <label class="control-label col-md-3 text-right">
              <strong>File</strong>
              <span class="text-danger">*</span></label>
            <div class="col-md-5">
              <input type="file" id="file" class="form-control" name="file" required>
            </div>
          </div>

{{--           <div class="form-group row">
            <label class="control-label col-md-3 text-right" for="status">
            <strong>{{ __('backend/form_field.status') }}</strong>  <span class="text-danger">*</span></label>
            <div class="col-md-5">
              <select name="status" id="status" class="form-control" required>
                <option value="1">Active</option>
                <option value="0">Deactive</option>
              </select>
            </div>
          </div> --}}
          
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
