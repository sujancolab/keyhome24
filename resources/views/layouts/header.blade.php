<nav class="nav_sec" id="sticky-wrap">
    <div class="container">
      <div class="nav_inner">
        <div class="logo_area">
          <div class="logo_box"> <a class="" href="{{route('home')}}"><img src="{{asset('assets/images/logo.png')}}" alt="" /></a> </div>
        </div>
        <div class="nav_area">
          <div class="stellarnav">
            <ul>
              <li class="active-"><a href="{{route('rent-buy')}}">Properties</a></li>
              <li><a href="{{route('share-accommodation')}}">Requests</a></li>
              <li><a href="">French</a></li>
              @if(Auth::check())
              <li class="header_lgn_btn"><a href="{{route('dashboard')}}">
                <span class=""><img src="{{asset('assets/images/user_icon.svg')}}" alt="" /></span>
              Dashboard</a></li>
              <li class="header_lgn_btn"><a href="{{route('logout')}}">
                <span class=""><img src="{{asset('assets/images/user_icon.svg')}}" alt="" /></span>
              Logout</a></li>
              @else
              <li class="header_lgn_btn"><a href="{{route('login')}}">
                <span class=""><img src="{{asset('assets/images/user_icon.svg')}}" alt="" /></span>
              Login</a></li>
              @endif
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
