{{-- Common layout for all page views --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Notes')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">

</head>

<body>
    <div id="app">
        <div class="links flex-center">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/notes">Notes</a>
            <a href="/contact">Contact</a>
        </div>
        <div class="flex-center position-ref">
            <div class="content container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>
