<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    hi there {{ Auth::user()->name }}
</body>
</html>