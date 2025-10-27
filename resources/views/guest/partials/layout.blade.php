<!DOCTYPE html>

<html lang="id">

<head>
    
    @include('guest.partials.head')

    <title>@yield('title') </title>
    {{-- Bank Waway Lampung --}}
</head>

<body>
    
    <!-- navabar -->
    @include('guest.partials.navbar')
    
    <!-- content -->
    @yield('content')
    
    <!-- footer -->
    @include('guest.partials.footer')
    
    <!-- JavaScript Libraries -->
    @include('guest.partials.script')

</body>

</html>