<!DOCTYPE html>
<html>
<head>

    @include('component.meta')

    @yield('meta')

    @yield('title')

    @include('component.style')

    @yield('css')

</head>

<body class="hold-transition skin-blue sidebar-mini">

    @yield('content')


    @include('component.js')

    @yield('scripts')

</body>
</html>