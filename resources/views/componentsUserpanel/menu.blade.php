<nav class="pcoded-navbar" navbar-theme="theme1" active-item-theme="theme1" sub-item-theme="theme2" active-item-style="style0"
    pcoded-navbar-position="fixed">
    <div class="nav-list">
        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 100%; height: 100%;">
            <div class="pcoded-inner-navbar main-menu" style="overflow: hidden; width: 100%; height: 100%;">
                <div class="pcoded-navigation-label" menu-title-theme="theme1">Меню</div>
                <ul class="pcoded-item pcoded-left-item" item-border="true" item-border-style="solid" subitem-border="false">
                    @if(!Auth::check())
                        <li class=" ">
                            <a href="{{ route('home') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-feather"></i>
                                </span>
                                <span class="pcoded-mtext">Главное</span>
                            </a>
                        </li>
                    @endif
                    <li class=" ">
                        <a href="/offers" class="waves-effect waves-dark">
                            <span class="pcoded-micon">
                                <i class="feather icon-feather"></i>
                            </span>
                            <span class="pcoded-mtext">Все офферы</span>
                        </a>
                    </li>
                    @if (Auth::check())
                        <li class=" ">
                            <a href="{{ route('offer.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-feather"></i>
                                </span>
                                <span class="pcoded-mtext">Создать оффер</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="/user/my-offers" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-feather"></i>
                                </span>
                                <span class="pcoded-mtext">Мои офферы</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="/user/my-leads" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-feather"></i>
                                </span>
                                <span class="pcoded-mtext">Мои лиды</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 156.387px;"></div>
            <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
        </div>
    </div>
</nav>
