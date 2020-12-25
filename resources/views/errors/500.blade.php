<!doctype html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="" />
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Document Title -->
	<title>Server Error</title>
	<link href="https://fonts.googleapis.com/css?family=Pacifico|Chango" rel="stylesheet">

	@include('backend.partials.styles')

	@section('styles')
	@show
	<style type="text/css">
		.shadow_{
			text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0, 0, 0, .1), 0 0 5px rgba(0, 0, 0, .1), 0 1px 3px rgba(0, 0, 0, .3), 0 3px 5px rgba(0, 0, 0, .2), 0 5px 10px rgba(0, 0, 0, .25), 0 10px 10px rgba(0, 0, 0, .2), 0 20px 20px rgba(0, 0, 0, .15);
		}
		body{
			background-image: url('{{ asset('public/images/errors/500.jpg') }}');
			background-repeat: no-repeat;
			background-size: cover;
			background-color: #ac090a;
		}
	</style>
	<script src="{{ asset('public/front/js/jquery-3.3.1.min.js') }}"></script>

</head>

<body class="a position-relative" style="overflow-y: hidden; background-color: #ac090a">
	<div class="text-center d-block zi-1">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 position-fixed b-0 l-0 pointer zi-100">
					{{-- <a href="{{ url()->previous(2) }}" class="btn btn-lg btn-success"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> --}}
					<button onclick="window.history.back(2)" class="btn btn-lg btn-success"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
				</div>
				<div class="col-sm-6"></div>
				<div class="col-sm-3 position-fixed b-0 r-0 pointer zi-100">
					{{-- <a href="{{ route('index') }}" class="btn btn-lg btn-primary"><i class="fa fa-home" aria-hidden="true"></i></a> --}}
					<a  class="btn btn-lg btn-primary" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i></a></li>
		            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
		              @csrf
		            </form>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper h-100">
		<h1 class="shadow_ mb-0" style="font-family: Chango; font-style: italic; color: #fff; text-align: center; font-weight: bold; width: 100%;">401</h1>
		{{-- <p class="text-center shadow_"><span class="shadow_ bg-default px-1" style="font-family: Chango; border-radius: 8px; color: #fafafa">Access</span> <span class="shadow_ bg-warning px-1" style="font-family: Chango; border-radius: 8px; color: #fafafa">Unauthorized</span></p> --}}
	</div>
	<script type="text/javascript">
		$('img.mustLoad').on('load',function(){
			/* Fire your image resize code here */
		});
		$('<img/>').attr('src', '{{ asset('public/images/errors/500.jpg') }}').on('load', function() {
			$(this).remove(); // prevent memory leaks as @benweet suggested
			$('.wrapper').hide();
			$('body').css('background-image', 'url({{ asset('public/images/errors/500.jpg') }})');
		});
	</script>
</body>
</html>
