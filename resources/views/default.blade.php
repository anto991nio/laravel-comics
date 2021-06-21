<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('img\favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{asset('img\favicon.ico')}}" type="image/x-icon" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css\app.css')}}">
    <title>Comics | DC</title>
</head>
<body>
    @include('layout.header')
    <main>
    <section class="hero">
    </section>
    @yield('contenuto-centrale')
    </main>
    @include('layout.footer')

</body>
</html>
