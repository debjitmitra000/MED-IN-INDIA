<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Nearby Hospitals</title>
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
        body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    #map {
        height: 60vh; /* Set the map height to 80% of the viewport height */
        width: 50vw; /* Set the map width to 80% of the viewport width */
        margin: 0px auto; /* Center the map horizontally */
        border: 5px solid var(--green); /* Add a border with a color of light gray */
        box-shadow: 0 0 10px ; /* Add a subtle box shadow */
    }

    div {
        text-align: center; /* Center the content in the div */
        margin-top: 10px; /* Add some top margin to the div */
    }

    label {
        margin-right: 10px; /* Add some right margin to the label */
        
    }

    input {
        width: 200px; /* Set a fixed width for the input field */
        padding: 5px; /* Add some padding to the input field */
        border: 2px solid #ccc;
    }

    button {
        padding: 5px 10px; /* Add padding to the button */
        cursor: pointer; /* Change cursor to pointer on hover */
    }
    button{
    display: inline-block;
    margin-top: 1rem;
    margin-left: 20px;
    padding: .5rem;
    padding-left: rem;
    border: var(--border);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    color: var(--green);
    cursor: pointer;
    font-size: 1.7rem;
}
button span{
    padding: .7rem 1rem;
    border-radius: .5rem;
    background: var(--green);
    color: #fff;
    margin-left: .5rem;
}
button:hover{
    background: var(--green);
    color: #fff;
}
button:hover span{
    color: var(--green);
    background: #fff;
    margin-left: 1rem;
}
    h1 {
            text-align: center; /* Center the heading */
            margin-top: 20px; /* Add some top margin to the heading */
            color: #333; /* Set the color of the heading */
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
:root{
    --green:#16a085;
    --black: #444;
    --light-color:#777;
    --text-shadow: #444;
    --box-shadow:.5rem .5rem 0 rgba(22,160,133,.2);
    --border:.2rem solid var(--green);
}

*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-transform: capitalize;
    transition: all .2s ease-out;
    text-decoration: none;
}
html{
    font-size: 10px;
    overflow-x: hidden;
    scroll-padding-top: 7rem;
    scroll-behavior: smooth;
    .header{
    padding: 20px;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1);
    display:flex;
    align-items: center;
    justify-content: space-between;
    background: #fff;
}
.header .logo i{
    color: var(--green);
    font-size: 6rem;
}
.header .navbar a{
    font-size: 1.7rem;
    color: var(--light-color);
    margin-left: 2rem;
}    
.header .navbar a:hover{
    color: var(--green);
}
}
body {
    height: 100%;
    margin: 0;
    padding: 0;
}

#map {
    height: 60vh; /* Set the map height to 80% of the viewport height */
    width: 50vw; /* Set the map width to 80% of the viewport width */
    margin: 0px auto; /* Center the map horizontally */
    border: 5px solid var(--green); /* Add a border with a color of light gray */
    box-shadow: 0 0 10px ; /* Add a subtle box shadow */
}

div {
    text-align: center; /* Center the content in the div */
    margin-top: 10px; /* Add some top margin to the div */
}

label {
    margin-right: 10px; /* Add some right margin to the label */
    
}

input {
    width: 200px; /* Set a fixed width for the input field */
    padding: 5px; /* Add some padding to the input field */
    border: 2px solid #ccc;
}

button {
    padding: 5px 10px; /* Add padding to the button */
    cursor: pointer; /* Change cursor to pointer on hover */
}
button{
display: inline-block;
margin-top: 1rem;
margin-left: 20px;
padding: .3rem .7rem;
padding-left: rem;
border: var(--border);
border-radius: .5rem;
box-shadow: var(--box-shadow);
color: var(--green);
cursor: pointer;
font-size: 1.5rem;
}
button span{
    padding: .8rem 1rem;
    border-radius: .5rem;
    background: var(--green);
    color: #fff;
    margin-left: .5rem;
}
button:hover{
    background: var(--green);
    color: #fff;
}
button:hover span{
    color: var(--green);
    background: #fff;
    margin-left: 1rem;
}
#location{
    border: 2px solid var(--green);
    padding: 5px 10px;
}
h1 {
    text-align: center; /* Center the heading */
    margin-top: 20px; /* Add some top margin to the heading */
    color: #333; /* Set the color of the heading */
}
</style>
</head>
<body>
<header class="header">
    <div class="image1">
        <a href="#home" class="logo" style="margin-left: 50px;"><img src="image/LOGO.png" alt="" height="50px"></i></a>
    </div>
    <nav class="navbar">
        <a href="Doctorpatient.php">Home</a>
    </nav>
</header>
<h1 class="heading" style="margin-top:50px;text-align: center;padding-bottom: 2rem;text-shadow: var(--text-shadow);text-transform: uppercase;color: var(--black);font-size: 5rem;letter-spacing: 0.4rem;margin-top: 120px;">Nearest <span style="text-transform: uppercase;color: var(--green);">Hospital</span></h1>
    <div id="map"></div>
    <div>

        <!-- <label for="location" style="font-size:20px">Enter Your Location:</label> -->
        <input type="text" id="location" placeholder="Enter your location">
        <button onclick="searchHospitals()">Search Hospitals</button>
    </div>

    <!-- Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        var map = L.map('map'); // Create a map without setting the initial view yet

        // Default location (West Bengal, India) for testing
        var defaultLocation = {
            lat: 22.9868,
            lng: 87.8550
        };

        // Set the map center to the default location
        map.setView(defaultLocation, 15);

        // Add a marker for the default location
        L.marker(defaultLocation).addTo(map).bindPopup('West Bengal, India').openPopup();

        // Function to search for hospitals based on user input
        function searchHospitals() {
            var locationInput = document.getElementById('location').value;
            if (!locationInput) {
                alert('Please enter a location.');
                return;
            }

            // Fetch coordinates for the entered location
            fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(locationInput)}&addressdetails=1&limit=1`)
                .then(response => response.json())
                .then(data => {
                    if (data.length === 0) {
                        alert('Location not found.');
                        return;
                    }
                    var userLocation = {
                        lat: parseFloat(data[0].lat),
                        lng: parseFloat(data[0].lon)
                    };

                    map.setView(userLocation, 15);

                    // Add a marker for the user's location
                    L.marker(userLocation).addTo(map).bindPopup('Your Searched').openPopup();

                    // Fetch nearby hospitals using user's location
                    fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${userLocation.lat}&lon=${userLocation.lng}&zoom=18&addressdetails=1`)
                        .then(response => response.json())
                        .then(data => {
                            var city = data.address.city;
                            fetch(`https://nominatim.openstreetmap.org/search?format=json&q=hospital&city=${city}&country=${data.address.country}&limit=10`)
                                .then(response => response.json())
                                .then(hospitals => {
                                    hospitals.forEach(hospital => {
                                        // Add a marker for each nearby hospital
                                        L.marker([hospital.lat, hospital.lon]).addTo(map).bindPopup(hospital.display_name);
                                    });
                                })
                                .catch(error => console.error('Error fetching hospitals:', error));
                        })
                        .catch(error => console.error('Error fetching user location:', error));
                })
                .catch(error => console.error('Error fetching coordinates:', error));
        }

        // Add OpenStreetMap tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
    </script>
</body>
</html>
