<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    @include('componentsUserpanel.meta')
    @include('componentsUserpanel.css')
    @yield('head')
</head>
<body>
<div id="charset-detective">Charset: <strong>UTF-8</strong></div>

    <div class="loader-bg" style="display: none;">
        <div class="loader-bar"></div>
    </div>
    <div id="pcoded" class="pcoded iscollapsed" nav-type="st2" theme-layout="vertical" vertical-placement="left"
        vertical-layout="wide" pcoded-device-type="desktop" vertical-nav-type="expanded" vertical-effect="shrink"
        vnavigation-view="view1" fream-type="theme1" layout-type="light">
        <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

    @include('componentsUserpanel.navigate')

    <div class="pcoded-main-container" style="margin-top: 70.4px;">
                <div class="pcoded-wrapper">
                    @include('componentsUserpanel.menu')
                    
                    @yield('content')
                    <div id="styleSelector">
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    @include('componentsUserpanel.js')    
</body>
</html>