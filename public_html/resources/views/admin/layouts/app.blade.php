<!DOCTYPE html>
<html lang="en" class="">

<head>
    @include('admin.components.meta')
    @include('admin.components.head')

</head>

<body class="theme-blush">

    @include('admin.components.sidebar')

    @include('admin.components.navbar')

    @yield('content')

    @include('admin.components.foot')
</body>

</html>
