@extends('frontend.layouts.master')

@section('content')
<div class="container mt-2">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Proposals</div>
      </div>
    </div>
  </div>

  <div class="row mt-2">
   <div class="col-md-6 offset-md-3">
    <form action="{{ route('submit_proposal') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group" style="color: black">
        <label for="">Project</label>
        <select name="project_id" id="project_id" class="form-control" required>
          <option value="">Select Project</option>
          @foreach(\App\Models\Project::where('status', 0)->where('end_date', '>=', date('Y-m-d'))->get() as $project)
          <option value="{{ $project->id }}">{{ $project->title }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group" style="color: black">
        <label for="">Description</label>
        <textarea name="description" id="description" class="form-control" cols="30" rows="5" required></textarea>
      </div>
      <div class="form-group"style="color: black">
        <label for="">Designation</label>
        <input type="text" name="designation" class="form-control" required>
      </div>
      <div class="form-group"style="color: black">
        <label for="">File</label>
        <input type="file" name="file" class="form-control" required>
      </div>

      <button class="btn btn-success float-right" type="submit" style="margin-top: 0px !important;">Submit</button>
    </form>
  </div>
</div>
</div>
@endsection
