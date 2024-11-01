<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Venus</title>
</head>
<body class="venus">
    <h1>Venus - The hottest planet</h1>
    <a href="{{ route('home') }}" class="home-button">Back To Solarsystem</a>


    <div class="planet-section">
    <div class="planet-header" onclick="toggleDetails()">
        <img src="{{ asset('images/venus.jpg') }}" alt="Image of Venus" class="venus-image"> 
        <span>Venus Overview</span>
        <span class="toggle-icon">▼</span> 
    </div>
    <div class="planet-details" id="planet-details">
        <p>Venus is the second planet from the Sun and is the hottest in the Solar System. Known as Earth’s twin due to its similar size and composition, Venus has a thick, toxic atmosphere composed mainly of carbon dioxide with clouds of sulfuric acid.</p>

        <h3>Interesting Facts</h3>
        <ul>
            <li>Venus has a surface temperature of about 900°F (475°C), making it hotter than Mercury despite being farther from the Sun.</li>
            <li>A day on Venus (one full rotation) is longer than its year. It takes 243 Earth days to rotate once, but only 225 days to orbit the Sun.</li>
            <li>Venus rotates in the opposite direction of most planets, meaning the Sun rises in the west and sets in the east.</li>
        </ul>

        <h3>Atmosphere</h3>
        <p>The atmosphere of Venus is about 90 times denser than Earth’s and creates a runaway greenhouse effect that heats the surface to extreme temperatures. The thick clouds also reflect sunlight, making Venus the brightest planet in the sky as seen from Earth.</p>

        <h3>Exploration</h3>
        <p>Numerous missions, including NASA's Magellan, have mapped Venus’s surface and provided insight into its volcanic and geological activity. Recent interest in Venus has increased due to the possibility of microbial life in its upper cloud layers.</p>
    </div>
</div>

<!-- JavaScript for Toggle -->
<script>
    function toggleDetails() {
        const details = document.getElementById('planet-details');
        const icon = document.querySelector('.toggle-icon');

        if (details.style.display === 'block') {
            details.style.display = 'none';
            icon.textContent = '▼'; 
        } else {
            details.style.display = 'block';
            icon.textContent = '▲'; 
        }
    }

    // Initially hide details
    document.getElementById('planet-details').style.display = 'none'; 
</script>
</body>
</html>