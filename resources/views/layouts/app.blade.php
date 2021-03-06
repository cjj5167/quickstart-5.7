
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="../../favicon.ico">

    <title>App Name - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js"></script>
</head>

<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/">Home</a>
                {{--<a class="nav-item nav-link" href="/tasks" name="tasks">Tasks</a>--}}
                <a class="nav-item nav-link" href="/widgets" name="tasks">Widgets</a>
            </div>
        </div><!--/.nav-collapse -->
    </nav>
</div>

<div class="container theme-showcase" role="main">
    @yield('content')
</div> <!-- /container -->
</body>
</html>
