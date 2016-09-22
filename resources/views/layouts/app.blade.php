<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body ng-app="myApp">

    @include('layouts.navigation')
    @yield('content')

@include('layouts.footer')

</body>
</html>
