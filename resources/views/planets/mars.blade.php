<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Mars</title>
</head>
<body class="mars">

<!-- Page Title -->
<h1>Mars - The Red Planet</h1>
<a href="{{ route('home') }}" class="home-button">Back To Solarsystem</a>


<!-- Main Planet Content -->
<div class="planet-section">
    <div class="planet-header" onclick="toggleDetails()">
        <img src="{{ asset('images/mars.jpg') }}" alt="Image of Mars" class="mars-image">
        <span>Mars Overview</span>
        <span class="toggle-icon">▼</span>
    </div>
    <div class="planet-details" id="planet-details">
        <p>Mars, the fourth planet from the Sun, is often called the "Red Planet" due to its reddish appearance, which is caused by iron oxide on its surface. Known for its potential to harbor life, Mars has been the target of numerous robotic missions and is the most likely candidate for future human exploration.</p>
        
        <h3>Interesting Facts</h3>
        <ul>
            <li>Mars has two small moons, Phobos and Deimos, which are thought to be captured asteroids.</li>
            <li>A Martian day, or sol, is just over 24 hours, similar to Earth, but a year on Mars is nearly 687 Earth days.</li>
            <li>Mars has the largest volcano in the solar system, Olympus Mons, which stands about 13.6 miles (22 km) high.</li>
        </ul>
        
        <h3>Atmosphere</h3>
        <p>The Martian atmosphere is thin, composed mostly of carbon dioxide with traces of nitrogen and argon. Despite its thinness, the atmosphere supports intense dust storms that can cover the entire planet.</p>
        
        <h3>Exploration</h3>
        <p>Several missions, including NASA's rovers like Curiosity and Perseverance, have been sent to Mars to study its surface, climate, and potential for life. These missions provide valuable insights into the planet’s geology and history.</p>
    </div>
</div>

<!-- JavaScript for Toggle -->
<script>
    function toggleDetails() {
        const details = document.getElementById('planet-details');
        const icon = document.querySelector('.toggle-icon');

        // Toggle visibility
        if (details.style.display === 'block') {
            details.style.display = 'none';
            icon.textContent = '▼';
        } else {
            details.style.display = 'block';
            icon.textContent = '▲';
        }
    }

    // Initially show details
    document.getElementById('planet-details').style.display = 'block';
</script>
</body>
</html>
