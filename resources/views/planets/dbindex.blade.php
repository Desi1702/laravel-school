<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets</title>
</head>
<body>
    <h1>Planets</h1>
    <ul>
        @foreach($planets as $planet)
            <li>
                {{ $planet->name }}<br>{{$planet->description}}<br>size: {{$planet->size_in_km}} km
            </li> 
            <br>
        @endforeach
    </ul>
</body>
</html>
