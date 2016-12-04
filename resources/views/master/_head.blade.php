<!DOCTYPE html>
<html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <title><?php echo $title ?></title>
        <link rel="shortcut icon" href="/images/favicon.ico" />
        <meta name='robots' content='noindex'>
        <meta name="viewport" content="width=device-width">
        <link rel='stylesheet' href='{{ asset('css/main.css') }}'>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" ></script>
        <script src="/js/all.js" ></script>
        @yield('resources')
</head>