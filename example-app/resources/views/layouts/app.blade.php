<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>@yield('title') | Landing Page </title>


    <!-- Favicon -->
    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" type="image/x-icon" href="">

    @stack('before-style')
    <!-- Style -->
    @include('includes.style')

    @stack('after-style')



</head>
<body>

@include('includes.meta')
@include('includes.header')

    @yield('content')
@include('includes.footer')


@stack('before-script')
<!--script-->
@stack('includes.script')

@stack('after-script')
    
</body>
</html>