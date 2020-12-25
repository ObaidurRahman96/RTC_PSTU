@extends('frontend.layouts.master')

@section('content')
<div class="container mt-2">
    <div class="row"style="background: #0b384a">
        <div class="col-md-12">
            <div class="card"style="background: #0b384a">
                <div class="card-header"style="color: #e1ffa8">User Information</div>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-4">
            <div class="card" onclick="location.href='{{ route('user_proposal') }}'" style="height: 200px;">
                <div class="card-body dash-card text-center">
                    My Proposals
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="height: 200px;">
                <div class="card-body dash-card text-center" onclick="location.href='{{ route('proposal_form') }}'">
                    Apply For Project
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="height: 200px;">
                <div class="card-body dash-card text-center" onclick="location.href='{{ route('completed_project') }}'">
                    Completed Project
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card" style="height: 200px;">
                <div class="card-body dash-card text-center" onclick="location.href='{{ route('awarded_project') }}'">
                    Awarded Project
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
