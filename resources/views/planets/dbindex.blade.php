<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets</title>
</head>
<body>
    <h1>List of Planets</h1>
    <ul>
        @foreach($planets as $planet)
            <li>{{ $planet->name }}</li> 
        @endforeach
    </ul>
</body>
</html>
