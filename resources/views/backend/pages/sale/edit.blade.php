<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', 'edit')

<!-- Write Styles <style>In Here</style> -->
@section('styles')
@endsection

<!-- This Section Will Shown <body>In Here</body> -->
@section('content')
<!-- Top Management Part -->
<div class="app-title">
	<div>
		<h1><i class="{{ 'fa fa-money' }}"></i> {{ __('backend/sale.sale_management') }}</h1>
	</div>
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('backend/default.dashboard') }}</a></li>
		@if ('edit' == 'index')
		<li class="breadcrumb-item active">{{ __('backend/sale.sale') }}</li>
		@elseif ('edit' == 'add')
		<li class="breadcrumb-item"><a href="{{ route('admin.sale.index') }}">{{ __('backend/sale.sale') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/default.add_new') }}</li>
		@elseif ('edit' == 'edit')
		<li class="breadcrumb-item"><a href="{{ route('admin.sale.index') }}">{{ __('backend/sale.sale') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/default.edit') }}</li>
		@endif
	</ul>
</div>

<!-- Edit Form Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="row">
					@if ('edit' == 'index')
					<div class="col-md-6"><a href="{{ route('admin.sale.add') }}" class="float-right btn btn-primary"><i class="fa fa-plus"></i> {{ __('backend/default.add_new') }}</a></div>

					@elseif ('edit' == 'add')
					<div class="col-md-6"><h2><i class="{{ 'fa fa-pencil-square' }}"></i> {{ __('backend/sale.add_sale') }}</h2></div>
					<div class="col-md-6"><a href="{{ route('admin.sale.index') }}" class="float-right btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('backend/default.list') }}</a></div>

					@elseif ('edit' == 'edit')
					<div class="col-md-6"><h2><i class="{{ 'fa fa-pencil-square' }}"></i> {{ __('backend/sale.edit_sale') }}</h2></div>
					<div class="col-md-6"><a href="{{ route('admin.sale.index') }}" class="float-right btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('backend/default.list') }}</a></div>
					@endif
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="card-body">
				@include('backend.partials.error_message')
				<form class="form-horizontal" action="{{-- route('#updateRoute#', #parameterIdOrSlug#) --}}" method="post" enctype="multipart/form-data">
					@csrf


					<div class="form-group row">
						<!--Inputs / TextAreas / Selects ... -->
					</div>


					<button type="submit" class="btn btn-primary float-right">{{ __('backend/default.update') }}</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

<!-- Write Scripts <script fileType="text/javascript">In Here</script> -->
@section('scripts')
@endsection