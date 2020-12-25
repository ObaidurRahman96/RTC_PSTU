<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', 'add')

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
		@if ('add' == 'index')
		<li class="breadcrumb-item active">{{ __('backend/sale.sale') }}</li>
		@elseif ('add' == 'add')
		<li class="breadcrumb-item"><a href="{{ route('admin.sale.index') }}">{{ __('backend/sale.sale') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/default.add_new') }}</li>
		@elseif ('add' == 'edit')
		<li class="breadcrumb-item"><a href="{{ route('admin.sale.index') }}">{{ __('backend/sale.sale') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/default.edit') }}</li>
		@endif
	</ul>
</div>

<!-- Add Form Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="row">
					@if ('add' == 'index')
					<div class="col-md-6"><a href="{{ route('admin.sale.add') }}" class="float-right btn btn-primary"><i class="fa fa-plus"></i> {{ __('backend/default.add_new') }}</a></div>

					@elseif ('add' == 'add')
					<div class="col-md-6"><h2><i class="{{ 'fa fa-plus-square' }}"></i> {{ __('backend/sale.add_sale') }}</h2></div>
					<div class="col-md-6"><a href="{{ route('admin.sale.index') }}" class="float-right btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('backend/default.list') }}</a></div>

					@elseif ('add' == 'edit')
					<div class="col-md-6"><h2><i class="{{ 'fa fa-plus-square' }}"></i> {{ __('backend/sale.edit_sale') }}</h2></div>
					<div class="col-md-6"><a href="{{ route('admin.sale.index') }}" class="float-right btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('backend/default.list') }}</a></div>
					@endif
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="card-body">
				<add-sale 
					submit="{{ __('backend/default.submit') }}" 
					product="{{ __('backend/product.product') }}" 
					:categories="{{ $categories }}" 
					select_category="{{ __('backend/form_field.select_category') }}"
					url="{{ url('/') }}"
					bill="{{ __('backend/default.go_to_bill') }}"
					>
				</add-sale>
			</div>
		</div>
	</div>
</div>
@endsection

<!-- Write Scripts <script fileType="text/javascript">In Here</script> -->
@section('scripts')
@endsection