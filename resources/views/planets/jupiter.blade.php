<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Jupiter</title>
</head>
<body class="jupiter">

<!-- Page Title -->
<h1>Jupiter - The Giant of the Solar System</h1>
<a href="{{ route('home') }}" class="home-button">Back To Solarsystem</a>


<!-- Main Planet Content -->
<div class="planet-section">
    <div class="planet-header" onclick="toggleDetails()">
        <img src="{{ asset('images/jupiter.jpg') }}" alt="Image of Jupiter" class="jupiter-image">
        <span>Jupiter Overview</span>
        <span class="toggle-icon">▼</span>
    </div>
    <div class="planet-details" id="planet-details">
        <p>Jupiter is the largest planet in the Solar System and is well-known for its powerful storms, including the Great Red Spot. As a gas giant primarily composed of hydrogen and helium, Jupiter lacks a solid surface but has a strong magnetic field and dozens of moons.</p>
        
        <h3>Interesting Facts</h3>
        <ul>
            <li>Jupiter has at least 79 known moons, with the largest four being Ganymede, Callisto, Io, and Europa, collectively known as the Galilean moons.</li>
            <li>The Great Red Spot is a massive storm larger than Earth, with winds reaching 400 miles per hour (640 km/h).</li>
            <li>A day on Jupiter is only about 10 hours long due to its rapid rotation, but a year is equivalent to 11.9 Earth years.</li>
        </ul>
        
        <h3>Atmosphere</h3>
        <p>Jupiter’s atmosphere is thick and primarily made up of hydrogen and helium, with trace amounts of methane, ammonia, and water vapor. The planet’s atmosphere shows banded patterns due to intense winds and storms.</p>
        
        <h3>Exploration</h3>
        <p>NASA’s Juno spacecraft has been orbiting Jupiter since 2016, providing stunning images and new insights into the planet’s composition, magnetic field, and atmosphere.</p>
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
