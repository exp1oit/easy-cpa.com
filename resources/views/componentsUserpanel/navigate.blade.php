<nav class="navbar header-navbar pcoded-header iscollapsed" header-theme="themelight1"
                pcoded-header-position="fixed">
                <div class="navbar-wrapper">
                    <div class="navbar-logo" logo-theme="theme6">
                        <a>
                            <img class="img-fluid" src="{{ asset('testing/logo.png') }}" alt="Theme-Logo">
                        </a>
                        <a class="mobile-menu" id="mobile-collapse">
                            <i class="feather icon-menu icon-toggle-right"></i>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ asset('testing/user-test.png') }}" class="img-radius"
                                            alt="User-Profile-Image">
                                        <span>{{ Auth::check() ? Auth::user()->first_name . ' ' . Auth::user()->last_name : 'John Doe' }}</span>

                                        @if (Auth::check())
                                            <i class="feather icon-chevron-down"></i>
                                        @endif
                                    </div>
                                    @if (Auth::check())
                                        <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn"
                                            data-dropdown-out="fadeOut">
                                            <li>
                                                <a href="/user/{{ auth::id() }}/profile">
                                                    <i class="feather icon-user"></i> Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">>
                                                    <i class="feather icon-log-out"></i> Logout
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    @endif
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>