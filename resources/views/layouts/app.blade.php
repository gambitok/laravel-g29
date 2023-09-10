<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page - @yield('title')</title>
    <link rel="icon" href="favicon.ico" />
</head>
<body>

<header class="page-header">
    <nav class="navbar">
        <a href="/">Home</a>
        <a href="/admin">Admin</a>
        <a href="/admin/categories">Categories</a>
        <a href="/about-us">About</a>
    </nav>
</header>

@yield('content')
@yield('footer')

</body>
</html>
