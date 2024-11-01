<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>saturn</title>
</head>
<body class ="saturn">

<!-- Page Title -->
<h1>Saturn - The Jewel of the Solar System</h1>
<a href="{{ route('home') }}" class="home-button">Back To Solarsystem</a>


<!-- Main Planet Content -->
<div class="planet-section">
    <div class="planet-header" onclick="toggleDetails()">
    <img src="{{ asset('images/saturn.jpg') }}" alt="Image of Saturn" class="saturn-image">
    <span>Saturn Overview</span>
        <span class="toggle-icon">▼</span> <!-- Icon for toggling (optional) -->
    </div>
    <div class="planet-details" id="planet-details">
        <p>Saturn is the sixth planet from the Sun and is known for its stunning, complex system of rings. Composed primarily of hydrogen and helium, Saturn is a gas giant, much like its neighbor, Jupiter. However, Saturn stands out due to its vibrant ring system, which is made up of ice particles, rocky debris, and dust.</p>
        
        <h3>Interesting Facts</h3>
        <ul>
            <li>Saturn has 83 moons, with Titan being the largest and one of the most intriguing due to its thick atmosphere and potential for harboring life.</li>
            <li>The rings of Saturn span up to 175,000 miles (282,000 kilometers) in diameter but are only about 30 feet (10 meters) thick.</li>
            <li>One day on Saturn lasts only about 10.7 hours due to its rapid rotation, but a year on Saturn is equivalent to 29.5 Earth years.</li>
        </ul>
        
        <h3>Atmosphere</h3>
        <p>The atmosphere of Saturn is mostly hydrogen, with a smaller percentage of helium and trace amounts of methane and ammonia. Saturn’s atmosphere features extreme storms and wind speeds that can reach up to 1,100 mph (1,770 km/h).</p>
        
        <h3>Exploration</h3>
        <p>NASA's Cassini spacecraft, which orbited Saturn from 2004 to 2017, provided valuable insights into Saturn’s atmosphere, rings, and moons, especially Titan and Enceladus, which may have subsurface oceans.</p>
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
            icon.textContent = '▼'; // Down arrow
        } else {
            details.style.display = 'block';
            icon.textContent = '▲'; // Up arrow
        }
    }

    // Initially show details
    document.getElementById('planet-details').style.display = 'block';
</script>
</body>
</html>