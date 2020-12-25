<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/admins/css/main.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/admins/css/custom.css') }}">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   @php
  $site_setting = \App\Models\Setting::first();
  @endphp

  <title>{{ Config::get('app.locale') == 'en' ? ucwords($site_setting->title_en) : $site_setting->title_bn }} - {{ __('backend/default.sign_in') }}</title>
</head>


<body>
<section class="material-half-bg">
  <div class="cover"></div>
</section>
<section class="login-content"style="background: #0b384a">
  <div class="logo mb-4">
    {{-- <h1>Demo Admin</h1> --}}
  </div>
  <div class="login-box br-4">
    <form class="login-form" action="{!! route('admin.login.submit') !!}" method="post">
      @csrf
      <h3 class="login-head text-theme"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
      @if ( Session::has('login_error') )
        <div class="alert alert-danger">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          {!! Session::get('login_error') !!}
        </div>
      @endif

      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif
      <div class="form-group">
        <label class="control-label">USERNAME</label>
        <input class="form-control" type="text" placeholder="Username" name="username" autofocus required>
      </div>
      <div class="form-group">
        <label class="control-label">PASSWORD</label>
        <input class="form-control" type="password" placeholder="Password" name="password" required>
      </div>
      <div class="form-group">
        <div class="utility">
          <div class="animated-checkbox">
            <label>
              {{--<input type="checkbox"><span class="label-text">Stay Signed in</span>--}}
              <button class="btn btn-primary" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
            </label>
          </div>
          <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
        </div>
      </div>
      {{--<div class="form-group btn-container">--}}
        {{--<button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>--}}
      {{--</div>--}}
    </form>
    <form class="forget-form" action="{{ route('admin.password.email') }}" method="post">
      @csrf
      <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
      <div class="form-group">
        <label class="control-label">EMAIL</label>
        <input class="form-control" type="text" placeholder="Email" name="email" required>
      </div>
      <div class="form-group btn-container">
        <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
      </div>
      <div class="form-group mt-3">
        <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
      </div>
    </form>
  </div>
</section>

<script src="{{ asset('public/admins/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('public/admins/js/popper.min.js') }}"></script>
<script src="{{ asset('public/admins/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/admins/js/main.js') }}"></script>
<script src="{{ asset('public/admins/js/plugins/pace.min.js') }}"></script>
<script type="text/javascript">
    $('.login-content [data-toggle="flip"]').click(function() {
        $('.login-box').toggleClass('flipped');
        return false;
    });
</script>
</body>
</html>
