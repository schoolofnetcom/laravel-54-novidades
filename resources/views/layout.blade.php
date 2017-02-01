<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'Laravel' }}</title>

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body>

        {{ $slot }}

        <script src="{{ mix('/js/app.js') }}" charset="utf-8"></script>
    </body>
</html>
