<!--<!DOCTYPE html>
<html>
<head>
    <title>Planets</title>
</head>
<body>
    <h1>List of Planets</h1>

    @if (!empty($planet))
        <h2>Showing information for: {{ $planet }}</h2>
    @endif

    @if (!empty($planets))
        <ul>
            @foreach ($planets as $planet)
                <li>
                    <strong>{{ $planet['name'] }}</strong>: {{ $planet['description'] }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No planets found.</p>
    @endif
</body>
</html>*/
-->