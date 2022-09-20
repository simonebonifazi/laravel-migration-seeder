<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trains</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- JS -->
    <script defer href="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <header class="bg-primary">
        <h1 class="text-white p-5"> The (Faked) Trains </h1>
    </header>

    <main>
        @yield('main-content')
    </main>
</body>

</html>