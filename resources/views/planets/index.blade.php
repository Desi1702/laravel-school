<!DOCTYPE html>
<html>
<head>
    <title>Planets</title>
</head>
<body>
    <h1>Planets</h1>
    <ul>
        @foreach ($planets as $planet)
            <li><a href="{{ url('/planets/' . strtolower($planet['name'])) }}">{{ $planet['name'] }}</a></li>
        @endforeach
    </ul>
</body>
</html>