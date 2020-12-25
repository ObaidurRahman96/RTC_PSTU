@php
  if (!Auth::user())  {
    @endphp
    <script type="text/javascript">
      window.location.replace("{{ url('/') }}/admin/login");
    </script>  
    @php
    die();
  }
  $route_ = Route::currentRouteName();

  $menu_ = \App\Models\Menu::where('route',$route_)->where('status',1)->where('parent_id','=',null)->where('menu_position',0)->get()->toArray();
  $sidebar_ = \App\Models\Menu::where('route',$route_)->where('status',1)->where('parent_id','!=',null)->where('menu_position',0)->get()->toArray();
  $in_body_ = \App\Models\Menu::where('route',$route_)->where('status',1)->where('parent_id','!=',null)->where('menu_position',1)->get()->toArray();
  $top_right_ = \App\Models\Menu::where('route',$route_)->where('status',1)->where('parent_id','!=',null)->where('menu_position',2)->get()->toArray();

  /**
  * Don't Delete!
  **/
  //$role_wise_menus = \App\Models\Role::where('role', Auth()->guard('admin')->user()->admin_role)->first()->toArray();
  //$access = array('admin.menu.index', 'admin.menu.create', 'admin.menu.edit', 'admin.language.index', 'admin.root.index', 'admin.role.user_assign');
  //dd(!($menu_ == $sidebar_ && $in_body_ == $top_right_));
  //@if(!in_array($route_, $access)) --}}
  
@endphp

@if(!($menu_ == $sidebar_ && $in_body_ == $top_right_) && !(Auth()->guard('admin')->user()->username == 'superadmin'))

  @if(!\App\Models\Role::where('role', Auth()->guard('admin')->user()->admin_role)->where('admin_id', Auth()->guard('admin')->user()->id)->first())
    <script type="text/javascript">
      window.location.replace("{{ url('/') }}/errors/401");
    </script>
  @endif
  @php
    $role_wise_menus = \App\Models\Role::where('role', Auth()->guard('admin')->user()->admin_role)->where('admin_id', Auth()->guard('admin')->user()->id)->first();
    if ($role_wise_menus) {
      $role_wise_menus = $role_wise_menus->toArray();
      @endphp
      <script type="text/javascript">
        @if (sizeof($menu_) > 0 && $role_wise_menus['menu'])
          @if (in_array($menu_[0]['id'], json_decode($role_wise_menus['menu'])))
            {{--  --}}
          @else
              window.location.replace("{{ url('/') }}/errors/401");
          @endif
        @elseif (sizeof($sidebar_) > 0 && $role_wise_menus['sub_menu'])
          @if (in_array($sidebar_[0]['id'], json_decode($role_wise_menus['sub_menu'])))
            {{--  --}}
          @else
              window.location.replace("{{ url('/') }}/errors/401");
          @endif
        @elseif (sizeof($in_body_) > 0 && $role_wise_menus['in_body'])
          @if (in_array($in_body_[0]['id'], json_decode($role_wise_menus['in_body'])))
            {{--  --}}
          @else
              window.location.replace("{{ url('/') }}/errors/401");
          @endif
        @else
            window.location.replace("{{ url('/') }}/errors/401");
        @endif
      </script>
      @php
    }
  @endphp
@endif
