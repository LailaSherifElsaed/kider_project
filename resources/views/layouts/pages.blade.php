<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.head')
</head>
<body>
    <div class="container-xxl bg-white p-0">
    @include('includes.spinner')
    @include('includes.navbar')
    @yield('content')
    @include('includes.footer')
    @include('includes.backToUp')
    </div>
    @include('includes.footerjs')
</body>

</html>