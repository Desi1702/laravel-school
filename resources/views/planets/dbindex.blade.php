<!-- resources/views/planets.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Planets</title>
</head>
<body>
    <h1>Planets</h1>

    <nav class="navbar">
        <ul>
            <li><a href="{{ route('venus') }}">Venus</a></li>
            <li><a href="{{ route('earth') }}">Earth</a></li>
            <li><a href="{{ route('mars') }}">Mars</a></li>
            <li><a href="{{ route('jupiter') }}">Jupiter</a></li>
            <li><a href="{{ route('saturn') }}">Saturn</a></li>
        </ul>
    </nav>

    <ul>
        @foreach($planets as $planet)
            <li class="planet-item">
                <div class="planet-header" onclick="toggleDetails(this)">
                    <span>{{ $planet->name }}</span>
                    <span class="toggle-icon">+</span>
                </div>
                <div class="planet-details">
                    <p>{{ $planet->description }}</p>
                    <p><strong>Size:</strong> {{ $planet->size_in_km }} km</p>
                </div>
            </li>
        @endforeach
    </ul>

    <script>
        function toggleDetails(element) {
            const details = element.nextElementSibling;
            const icon = element.querySelector('.toggle-icon');
            details.style.display = details.style.display === 'block' ? 'none' : 'block';
            icon.textContent = details.style.display === 'block' ? '-' : '+';
        }
    </script>

<!-- Random Planet Fact Section -->
<div class="fact-generator">
    <button onclick="showRandomFact()" class="fact-button">Show Random Planet Fact</button>
    <p id="random-fact" class="fact-display">Click the button to learn a new fact about the planets!</p>
</div>

<script>
    const facts = [
        "Venus has a day longer than its year.",
        "Jupiter is so big that 1,300 Earths could fit inside it.",
        "Mars has the tallest volcano in the solar system, Olympus Mons.",
        "Saturn’s rings are mostly made of ice particles.",
        "A year on Neptune is 165 Earth years long.",
        "Mercury has no atmosphere to retain heat, so its temperatures vary drastically between day and night.",
        "Uranus orbits the Sun on its side, making it unique among the planets.",
    ];

    function showRandomFact() {
        const fact = facts[Math.floor(Math.random() * facts.length)];
        document.getElementById("random-fact").textContent = fact;
    }
</script>
</body>
</html>
