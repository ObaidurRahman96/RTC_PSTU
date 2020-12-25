<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', 'view')

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
		@if ('view' == 'index')
		<li class="breadcrumb-item active">{{ __('backend/sale.sale') }}</li>
		@elseif ('view' == 'add')
		<li class="breadcrumb-item"><a href="{{ route('admin.sale.index') }}">{{ __('backend/sale.sale') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/default.add_new') }}</li>
		@elseif ('view' == 'edit')
		<li class="breadcrumb-item"><a href="{{ route('admin.sale.index') }}">{{ __('backend/sale.sale') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/default.edit') }}</li>
		@elseif ('view' == 'view')
		<li class="breadcrumb-item"><a href="{{ route('admin.sale.index') }}">{{ __('backend/sale.sale') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/default.view') }}</li>
		@endif
	</ul>
</div>

<!-- Table Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">

			<div class="card-header">
				<div class="row">
					@if ('view' == 'index')
					<div class="col-md-6"><h2><i class="{{ 'fa fa-eye' }}"></i> {{ __('backend/sale.sale_list') }}</h2></div>
					<div class="col-md-6"><a href="{{ route('admin.sale.add') }}" class="float-right btn btn-primary"><i class="fa fa-plus"></i> {{ __('backend/default.add_new') }}</a></div>

					@elseif ('view' == 'add')
					<div class="col-md-6"><h2><i class="{{ 'fa fa-eye' }}"></i> {{ __('backend/sale.add_sale') }}</h2></div>
					<div class="col-md-6"><a href="{{ route('admin.sale.index') }}" class="float-right btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('backend/default.list') }}</a></div>

					@elseif ('view' == 'edit')
					<div class="col-md-6"><h2><i class="{{ 'fa fa-eye' }}"></i> {{ __('backend/sale.edit_sale') }}</h2></div>
					<div class="col-md-6"><a href="{{ route('admin.sale.index') }}" class="float-right btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('backend/default.list') }}</a></div>

					@elseif ('view' == 'view')
					<div class="col-md-6"><h2><i class="{{ 'fa fa-eye' }}"></i> {{ __('backend/sale.view_sale') }}</h2></div>
					<div class="col-md-6"><a href="{{ route('admin.sale.index') }}" class="float-right btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('backend/default.list') }}</a></div>
					@endif
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="card-body">

				<div class="col-sm-12">
					<div class="table-responsive">
						<table class="table table-bordered display table-striped">
							<tbody>
								<tr>
									<td>
										<strong>Title: </strong>
									</td>
									{{-- <td>
										<span class="monospace-inconsolata">{{ $product->title }}</span>
									</td> --}}
								</tr>
								<tr>
									<td>
										<strong>Photo<small><sub>(s)</sub></small>: </strong>
									</td>
									{{-- <td>
										@foreach($product->image as $image)
										<img class="monospace-inconsolata" style="width: 200px;" src="{{ asset($image) }}">
										@endforeach
									</td> --}}
								</tr>
                                <tr>
                                	<td>
                                		<strong>Status: </strong>
                                	</td>
                                	{{-- <td>
                                		<span class="monospace-inconsolata">{{ $product->status == 1 ? 'Active' : 'Deactive' }}</span>
                                	</td> --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    <!-- Write Scripts <script fileType="text/javascript">In Here</script> -->
    @section('scripts')
    @endsection