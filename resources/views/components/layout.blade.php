<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>{{ $title }} - Controle de Séries</title>
</head>

<body>
    <div class="container">

        <h1>{{ $title }}</h1>

        {{ $slot }}
    </div>
</body>

</html>
