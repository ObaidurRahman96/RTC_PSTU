<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>RTC</title>

  @include('backend.partials.styles')

@section('styles')
@show

</head>

<body class="app sidebar-mini rtl">

  @include('backend.partials.nav')

  @include('backend.partials.sidebar')

  <div id="main-wrapper">

    @include('backend.partials.message')
    
    <main class="app-content" id="app">
       @section('content')
          @show 
    </main>

  </div>

  @include('backend.partials.scripts')

  @section('scripts')
  @show

  
</body>
</html>