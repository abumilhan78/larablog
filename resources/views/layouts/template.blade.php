<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Latihan Blade Templating</title>
</head>
<body>
    {{-- Nav --}}
    @include('layouts.nav')
    {{-- End Nav --}}
    @yield('konten')

    <footer>Latihan Blade Template</footer>
</body>
</html>