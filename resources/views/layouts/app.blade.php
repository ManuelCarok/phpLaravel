<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>phpLaravel - @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">
            phpLaravel
        </a>
    </nav>
    <div class="container" style="margin-top: 10px;">
        @yield('content')
    </div>
</body>

</html>