<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', 'index')

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
		@if ('index' == 'index')
		<li class="breadcrumb-item active">{{ __('backend/sale.sale') }}</li>
		@elseif ('index' == 'add')
		<li class="breadcrumb-item"><a href="{{ route('admin.sale.index') }}">{{ __('backend/sale.sale') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/default.add_new') }}</li>
		@elseif ('index' == 'edit')
		<li class="breadcrumb-item"><a href="{{ route('admin.sale.index') }}">{{ __('backend/sale.sale') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/default.edit') }}</li>
		@endif
	</ul>
</div>

<!-- Table Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">

			<div class="card-header">
				<div class="row">
					@if ('index' == 'index')
					<div class="col-md-6"><h2><i class="{{ 'fa fa-table' }}"></i> {{ __('backend/default.bill') }}</h2></div>
					<div class="col-md-6"><a href="{{ route('admin.sale.add') }}" class="float-right btn btn-primary"><i class="fa fa-plus"></i> {{ __('backend/default.add_new') }}</a></div>

					@elseif ('index' == 'add')
					<div class="col-md-6"><h2><i class="{{ 'fa fa-table' }}"></i> {{ __('backend/sale.add_sale') }}</h2></div>
					<div class="col-md-6"><a href="{{ route('admin.sale.index') }}" class="float-right btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('backend/default.list') }}</a></div>

					@elseif ('index' == 'edit')
					<div class="col-md-6"><h2><i class="{{ 'fa fa-table' }}"></i> {{ __('backend/sale.edit_sale') }}</h2></div>
					<div class="col-md-6"><a href="{{ route('admin.sale.index') }}" class="float-right btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('backend/default.list') }}</a></div>
					@endif
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="card-body">

				<!-- Permission for Admin Access -->
				@php
				$permissions = \App\Models\Menu::where('url', substr(url()->current(), 1+strlen(url('/'))))
				->orWhere('url', substr(url()->current(), strlen(url('/'))))->first();
				$bodyMenu = \App\Models\Role::where('role', Auth::guard()->user()->admin_role)->first();
				@endphp

				<div class="toggle-table-column">
					<strong>{{ __('backend/default.table_toggle_message') }} </strong>
				</div>
				<div class="table-responsive pt-1">
					<table class="table table-bordered table-hover display">
						<thead>
							<th>{{ __('backend/default.sl') }}</th>
							<th>{{ __('backend/form_field.photo') }}</th>
							<th>{{ __('backend/form_field.name') }}</th>
							<th>{{ __('backend/default.quantity') }}</th>
							<th>{{ __('backend/default.price') }}</th>
							<th>{{ __('backend/default.discount') }}</th>
							<th>{{ __('backend/default.total') }}</th>
							<th class="action">{{ __('backend/default.action') }}</th>
						</thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td width="8%" class="text-center">
                                <button class="btn text-white  btn-danger"><i class="fa fa-minus-circle"></i></button>
                            </td>
                        </tr>
                        </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
@endsection
