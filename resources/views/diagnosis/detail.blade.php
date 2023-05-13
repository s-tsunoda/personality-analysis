<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>性格診断API結果</title>
    </head>
    <body>
        <p>{{ $result }}</p>
    </body>
</html>
