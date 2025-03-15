<nav class="nav_sec" id="sticky-wrap">
    <div class="container">
        <div class="nav_inner">
            <div class="logo_area">
                <div class="logo_box"> <a class="" href="{{ route('home') }}"><img
                            src="{{ asset('assets/images/logo.png') }}" alt="" /></a> </div>
            </div>
            <div class="nav_area">
                <div class="stellarnav">
                    <ul>
                        <div class="mobile_logo"><a class="" href="index.html"><img
                                    src="{{ asset('assets/images/logo.png') }}" alt="" /></a></div>
                        <li class="hide_desk mt-3" id="language_li">
                            <div class="dropdown">
                                <div class="dropdown-toggle lang_toggle">
                                    <img src="{{ asset('assets/images/globe_icon.svg') }}" alt="" />
                                    <span class="selected-lang">French</span>
                                </div>
                                <div class="dropdown-menu">

                                    <div data-lang="French">
                                        <a href="{{ route('change.language', 'fr') }}"> French</a>
                                    </div>
                                    <div data-lang="German" onclick="openTranslatePopup('fr')">
                                        <a href="{{ route('change.language', 'de') }}"> German</a>
                                    </div>
                                    <div data-lang="Italian" onclick="openTranslatePopup('fr')">
                                        <a href="{{ route('change.language', 'it') }}"> Italian</a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="active-"><a href="{{ route('rent-buy') }}"><i class="fa fa-building-o me-1"
                                    aria-hidden="true"></i>{{__t('navbarPropertiesButton') }} </a></li>
                        <li><a href="{{ route('share-accommodation') }}"><img
                                    src="{{ asset('assets/images/search_con_nav.svg') }}" alt="" />
                                    {{__t('navbarRequestsButton') }} </a>
                        </li>
                        <li class="hide_mob" id="language_li">
                            <div class="dropdown">
                                <div class="dropdown-toggle lang_toggle">
                                    <img src="{{ asset('assets/images/globe_icon.svg') }}" alt="" />
                                    <span class="selected-lang">French</span>
                                </div>
                                <div class="dropdown-menu">
                                    <div data-lang="French">
                                        <a href="{{ route('change.language', 'fr') }}"> French</a>
                                    </div>
                                    <div data-lang="German" onclick="openTranslatePopup('fr')">
                                        <a href="{{ route('change.language', 'de') }}"> German</a>
                                    </div>
                                    <div data-lang="Italian" onclick="openTranslatePopup('fr')">
                                        <a href="{{ route('change.language', 'it') }}"> Italian</a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        {{-- <li class="hide_mob" id="language_li">
                <div class="dropdown">
                  <div class="dropdown-toggle lang_toggle">
                      <img src="assets/images/globe_icon.svg" alt="globe icon">
                      <span class="selected-lang">French</span>
                  </div>
                  <div class="dropdown-menu">
                      <div data-lang="French">
                           French
                      </div>
                      <div data-lang="German">
                        German
                   </div>
                      <div data-lang="Italian">
                        Italian
                      </div>

                  </div>
              </div>
              </li> --}}
                        @if (Auth::check())
                            <li class="header_lgn_btn"><a href="{{ route('dashboard') }}">
                                    <span class=""><img src="{{ asset('assets/images/user_icon.svg') }}"
                                            alt="" /></span>
                                    {{ __t('navbarDaschboardButton') }}</a></li>
                            <li class="header_lgn_btn"><a href="{{ route('logout') }}">
                                    <span class=""><img src="{{ asset('assets/images/user_icon.svg') }}"
                                            alt="" /></span>
                                    {{ __t('navbarLogoutButton') }}</a></li>
                        @else
                            <li class="header_lgn_btn"><a href="{{ route('login') }}">
                                    <span class=""><img src="{{ asset('assets/images/user_icon.svg') }}"
                                            alt="" /></span>
                                    {{ __t('navbarConnectionButton') }}</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
