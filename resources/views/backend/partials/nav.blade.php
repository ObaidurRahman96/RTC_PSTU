    <header class="app-header">
      <a class="app-header__logo" href="{{ route('admin.home') }}">Admin</a>
      <!-- Sidebar toggle button-->
      <a id='app-sidebar__toggle' class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>


      <span class="app-nav_custom_item"></span>
      
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!--Notification Menu-->
          {{-- <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">
              @php $message = DB::table('contacts')->orderBy('id','desc')->limit(10)->get(); @endphp

              You have {{count($message)}} new message.
            </li>
            <div class="app-notification__content">
              @foreach($message as $row)
              <li>
                <a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>

                    <p class="app-notification__message">{{ ucfirst($row->name) }} sent you a message.</p>

                    <p class="app-notification__meta">{{ \Carbon\Carbon::parse($row->created_at)->diffForHumans() }}</p>
                  </div>
                </a>
              </li>
              @endforeach
            </div>
            <li class="app-notification__footer"><a href="{{ route('admin.message') }}">See all message.</a></li>
          </ul> --}}
        </li>
        <!-- User Menu-->
        {{-- <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu" style="padding: 10px 15px">
          <img style="font-size: x-large; text-decoration: none;" class="img" src="{{ asset(Auth::guard('admin')->user()->photo) }}" alt="👨" width="30" height="30" ></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            @foreach(\App\Models\Menu::orderBy('order', 'asc')->where('status', 1)->where('menu_position', 2)->get() as $menu)
            @if(\App\Models\Role::checkRightTopPermission($menu->id))
            <li><a class="dropdown-item" href="{{ route($menu->route) }}"><i class="fa fa-user fa-lg"></i> 
              @if(Config::get('app.locale') == 'en')
              {{ $menu->menu }}
              @else
              {{ $menu->menu_bn }}
              @endif
            </a></li>
            @endif
            @endforeach
            <li><a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-lg"></i> {{ __('backend/sidebar.logout') }}</a></li>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </ul>
        </li> --}}

        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu" style="padding: 10px 15px">
          <img class="img" src="{{ asset(Auth::guard('admin')->user()->photo) }}" alt="👨" width="30" height="30" ></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right mr-0" style="width: 180px">
            <hr class="my-0">
            <li><a class="dropdown-item" href="{{ route('admin.password.form') }}"><i class="fa fa-cog"></i> {{ __('backend/admin_setting.change_password') }}</a></li>
            <hr class="my-0">
            <li><a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-lg"></i> {{ __('backend/sidebar.logout') }}</a></li>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </ul>      
        </li>
      </ul>
    </header>
