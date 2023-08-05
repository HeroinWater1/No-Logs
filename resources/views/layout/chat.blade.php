<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;600&family=Lato:wght@400;700&display=swap"
          rel="stylesheet">
    <title>NoLogs - Anonym chat</title>
</head>
<body>
<div class="wrapper">
    @yield('content')
    <div style="font-size: 20px;text-align: right;position: absolute;bottom: 0; right: 0">
        beta 0.0.1
    </div>
</div>
</body>
</html>
