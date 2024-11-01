<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Earth</title>
</head>
<body class="earth"> <!-- You may want to change the class if you have specific styles for Earth -->

<!-- Page Title -->
<h1>Earth - The Blue Planet</h1>
<a href="{{ route('home') }}" class="home-button">Back To Solarsystem</a>


<!-- Main Planet Content -->
<div class="planet-section">
    <div class="planet-header" onclick="toggleDetails()">
        <img src="{{ asset('images/earth.jpg') }}" alt="Image of Earth" class="earth-image">
        <span>Earth Overview</span>
        <span class="toggle-icon">▼</span>
    </div>
    <div class="planet-details" id="planet-details">
        <p>Earth is the third planet from the Sun and the only astronomical object known to harbor life. Approximately 71% of Earth's surface is covered with water, and the planet's atmosphere is composed of 78% nitrogen, 21% oxygen, and trace amounts of other gases.</p>

        <h3>Interesting Facts</h3>
        <ul>
            <li>Earth is the only planet in the Solar System that has liquid water on its surface.</li>
            <li>It takes 365.25 days for Earth to orbit the Sun, which defines a year.</li>
            <li>Earth has one natural satellite, the Moon, which is the fifth largest moon in the Solar System.</li>
        </ul>

        <h3>Atmosphere</h3>
        <p>Earth's atmosphere is a layer of gases surrounding the planet that is retained by Earth's gravity. The atmosphere is crucial for life, providing essential elements like oxygen and protecting the surface from harmful solar radiation.</p>

        <h3>Exploration</h3>
        <p>Humans have explored Earth extensively, with various scientific missions focusing on its ecosystems, climate, and geology. Space missions have also provided insights into Earth's place in the Solar System.</p>
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

    document.getElementById('planet-details').style.display = 'none'; // Change to 'block' if you want it to be visible by default
</script>
</body>
</html>
