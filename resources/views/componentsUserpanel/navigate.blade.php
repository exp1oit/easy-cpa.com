<nav class="navbar header-navbar pcoded-header iscollapsed" header-theme="themelight1"
                pcoded-header-position="fixed">
                <div class="navbar-wrapper">
                    <div class="navbar-logo" logo-theme="theme6">
                        <a>
                            <img class="img-fluid" src="{{ asset('testimg/logo.png') }}" alt="Theme-Logo">
                        </a>
                        <a class="mobile-menu" id="mobile-collapse">
                            <i class="feather icon-menu icon-toggle-right"></i>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close">
                                            <i class="feather icon-x input-group-text"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn">
                                            <i class="feather icon-search input-group-text"></i>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="https://colorlib.com//polygon/admindek/default/index.html#!" onclick="javascript:toggleFullScreen()"
                                    class="waves-effect waves-light">
                                    <i class="full-screen feather icon-maximize"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ asset('testimg/avatar-4.jpg') }}" class="img-radius"
                                            alt="User-Profile-Image">
                                        <span>John Doe</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn"
                                        data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="https://colorlib.com//polygon/admindek/default/index.html#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://colorlib.com//polygon/admindek/default/index.html#">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://colorlib.com//polygon/admindek/default/email-inbox.html">
                                                <i class="feather icon-mail"></i> My Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://colorlib.com//polygon/admindek/default/auth-lock-screen.html">
                                                <i class="feather icon-lock"></i> Lock Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://colorlib.com//polygon/admindek/default/auth-sign-in-social.html">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>