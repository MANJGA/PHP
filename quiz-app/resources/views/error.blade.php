<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Error Page</h1>
        <p>The requested resource was not found.</p>
        <a href="{{ url('/') }}">Go Back Home</a>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
