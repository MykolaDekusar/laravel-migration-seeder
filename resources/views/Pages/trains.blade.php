<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains List</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1>
        Template
    </h1>
    <ul>
        @foreach ($trains as $train)
            <li>{{ $train }}</li>
        @endforeach
    </ul>

</body>

</html>
