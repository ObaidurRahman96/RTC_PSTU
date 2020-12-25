@extends('backend.layouts.master')

@section('fav_title', 'Edit Project')

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6"><h2><i class="fa fa-plus-square"></i> Project</h2></div>
          <div class="col-md-6"><a href="{{ route('admin.project.index') }}" class="float-right btn btn-primary"><i class="fa fa-arrow-left"></i> Edit</a></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="card-body">
        @include('backend.partials.error_message')
        <form class="form-horizontal" id="myform" action="{{ route('admin.project.update', $project->id) }}" method="post" enctype="multipart/form-data">
          @csrf

          <div class="form-group row">
            <label class="control-label col-md-3 text-right">
              <strong>Title</strong>
              <span class="text-danger">*</span></label>
            <div class="col-md-5">
              <input type="text" id="title" class="form-control" name="title" value="{{ $project->title }}" required>
            </div>
          </div>

          <div class="form-group row">
            <label class="control-label col-md-3 text-right">
              <strong>Code</strong>
              <span class="text-danger">*</span></label>
            <div class="col-md-5">
              <input type="text" id="code" class="form-control" name="code" value="{{ $project->code }}" required>
            </div>
          </div>

          <div class="form-group row">
            <label class="control-label col-md-3 text-right">
              <strong>Description</strong>
              <span class="text-danger">*</span></label>
            <div class="col-md-5">
              <textarea name="description" class="form-control" id="description" cols="30" rows="10">{!! $project->description !!} </textarea>
            </div>
          </div>

          <div class="form-group row">
            <label class="control-label col-md-3 text-right">
              <strong>Source Of Fund</strong>
              <span class="text-danger">*</span></label>
            <div class="col-md-5">
              <input type="text" id="source_of_fund" class="form-control" name="source_of_fund" value="{{ $project->source_of_fund }}"  required>
            </div>
          </div>

          <div class="form-group row">
            <label class="control-label col-md-3 text-right">
              <strong>Start Date</strong>
              <span class="text-danger">*</span></label>
            <div class="col-md-5">
              <input type="date" id="start_date" class="form-control" value="{{ $project->start_date }}" name="start_date" required> 
            </div>
          </div>

          <div class="form-group row">
            <label class="control-label col-md-3 text-right">
              <strong>End Date</strong>
              <span class="text-danger">*</span></label>
            <div class="col-md-5">
              <input type="date" id="end_date" class="form-control" value="{{ $project->end_date }}" name="end_date" required>            
            </div>
          </div>

          {{-- <div class="form-group row">
            <label class="control-label col-md-3 text-right">
              <strong>Duration Date</strong>
              <span class="text-danger">*</span></label>
            <div class="col-md-5">
              <input type="date" id="duration_date" class="form-control" value="{{ $project->duration_date }}" name="duration_date" required>  
            </div>
          </div> --}}

          <div class="form-group row">
            <label class="control-label col-md-3 text-right">
              <strong>File</strong></label>
            <div class="col-md-5">
              <input type="file" id="file" class="form-control" name="file">
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
              <button type="submit" class="btn btn-primary float-right">Submit</button>
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
