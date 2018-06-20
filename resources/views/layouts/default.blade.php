<!DOCTYPE html>
<html>

<head>
    <title>@yield('title','Sample App')-Laravel 入门教程</title>
    <link rel="stylesheet" href="../public/css/app.css">
</head>

<body>

  @include('layouts._header_nav')
    @yield('content')

  @include('layouts._footer')
</body>



</html>
