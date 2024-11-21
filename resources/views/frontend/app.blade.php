<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1 , maximum-scale=1" />
    <title>giorgio</title>

    <!-- ==== All Css Links ==== -->
    @include('frontend.partial.css')
</head>

<body>
    @include('frontend.partial.header')
    @yield('content')
    @include('frontend.partial.footer')
    @include('frontend.partial.js')
</body>

</html>
