<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animals</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header class="mb-5 p-5 d-flex flex-column align-items-center justify-content-center bg-warning" height="300">
        <h1 class="text-white">Animals</h1>
        <a href="/animals/create" class="btn btn-primary my-1">Add an Animal</a>
        <a href="/images/create" class="btn btn-secondary my-1">Add an Image</a>
    </header>
    @yield('content')

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>