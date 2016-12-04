<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <title>PHRescue</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
    <meta name='robots' content='noindex'>
    <meta name="viewport" content="width=device-width">
    <link rel='stylesheet' href='{{ asset('css/main.css') }}'>
</head>
<body  id="login-screen">
    <h1>PHRescue</h1>
    <div id='cont'>
        <h2>Login</h2>
        @yield('content')
</body>
</html>