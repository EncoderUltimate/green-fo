<nav class="navbar navbar-expand-xl navbar-light fixed-top encoder-navbar encoder-navbar">
    <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);">
        <i class="ion ion-ios-menu"></i></a>
    <a class="navbar-brand" href="{{url('/dashboard')}}">
        <img class="brand-img d-inline-block mr-2" src="../../../assets/default/logo.png" alt="brand"/>GreenFo
    </a>

    <ul class="navbar-nav encoder-navbar-content">
        <li class="nav-item dropdown dropdown-authentication">
            <a class="nav-link dropdown-toggle no-caret" href="javascript:void(0);"
               data-toggle="collapse"
               data-target="#dropdown_profile">
                <div class="media">
                    <div class="media-body">
                        <span>Hi, {{ Auth::user()->name }} </span>
                        <div class="nav-link">
                                          <span class="user_name top_user_name" style="text-transform:uppercase;">
                                            {{ Str::limit(Auth::user()->name, 2, '') }}
                                          </span>
                        </div>
                    </div>
                </div>
            </a>


            <div id="dropdown_profile" class=" dropdown-menu-right collapse collapse-level-1">
                <div class="dropdown-item" href="#">
                    <div class="nav-link">
                                      <span class="user_name drop_user_name">
                                        {{ Str::limit(Auth::user()->name,1, '') }}
                                      </span>
                        <span>{{ Auth::user()->name }} </span>
                    </div>
                </div>

                <a class="dropdown-item" href="/dashboard/account/{{Auth::user()->id}}">
                    <div class="media">
                                      <span class="user_setting_icon">
                                          <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                      </span>
                        <div class="media-body user_profile_setting">
                            <p class="mt-0 mb-0">My Profile</p>
                            Account settings and more
                        </div>
                        <span class="user_setting_arrow">
                                          <i class="fa fa-angle-right" aria-hidden="true"></i>
                                      </span>
                    </div>
                </a>


                <a class="dropdown-item" href="#">

                    <div class="media">
                                          <span class="user_setting_icon rocket_icon">
                                              <i class="fa fa-rocket" aria-hidden="true"></i>
                                          </span>
                        <div class="media-body user_profile_setting">
                            <p class="mt-0 mb-0">My Notifications</p>
                            all pervious notification
                        </div>

                        <span class="user_setting_arrow">
                                          <i class="fa fa-angle-right" aria-hidden="true"></i>
                                      </span>
                    </div>
                </a>


                <div class="dropdown-divider"></div>

                <div class="signout_btn">
                    <a class="dropdown-item btn btn-primary display-block" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span> {{ __('Sign Out') }}</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </li>
    </ul>
</nav>
