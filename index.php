<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Agency</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="header-container">
        <div class="logo">
            <h1>Travel Agency</h1>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="#destinations">Destinations</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>


    <section id="destinations">
        <h2>Popular Destinations</h2>
        <div class="destination">
            <img src="d1.jpeg" alt="Destination 1">
            <h3>Paris</h3>
            <p>Explore the city of lights!</p>
            <p>Paris, known as the City of Light, is a mesmerizing blend of art, culture, and romance. Home to iconic landmarks like the Eiffel Tower and Notre-Dame Cathedral, the city offers charming streets, world-class cuisine, and stunning museums like the Louvre. With its vibrant ambiance and breathtaking views, Paris captivates the heart of every traveler.</p>
        </div>
        <div class="destination">
            <img src="d2.jpeg" alt="Destination 2">
            <h3>New York</h3>
            <p>Visit the Big Apple!</p>
            <p>New York City, often called the Big Apple, is a bustling metropolis known for its iconic skyline and vibrant culture. From the bright lights of Times Square to the serene beauty of Central Park, NYC offers a dynamic mix of attractions. Home to world-renowned museums like the Metropolitan Museum of Art, diverse neighborhoods, and a rich culinary scene, the city never sleeps and constantly inspires. With its energy and diversity, New York is truly a city like no other.</p>
        </div>
        <div class="destination">
            <img src="d3.jpeg" alt="Destination 3">
            <h3>maldives</h3>
            <p>paradice on earth!</p>
            <p>The Maldives is a breathtaking tropical paradise known for its crystal-clear turquoise waters, white sandy beaches, and vibrant coral reefs. Comprising over 1,000 islands, this Indian Ocean archipelago is a haven for relaxation and adventure. Visitors can indulge in luxurious resorts, snorkeling, and diving among colorful marine life. With its stunning sunsets and serene surroundings, the Maldives offers an unforgettable escape for honeymooners and nature lovers alike.</p>

        </div>
        <div class="destination">
            <img src="d4.jpeg" alt="Destination 4">
            <h3>cape Town</h3>
            <p>The mother city!</p>
            <p>Cape Town, often referred to as the Mother City, is a stunning coastal gem in South Africa. Famous for its breathtaking landscapes, including the iconic Table Mountain and beautiful beaches, Cape Town offers a vibrant blend of cultures, history, and natural beauty. Explore the bustling V&A Waterfront, visit the historic Robben Island, and enjoy world-class wineries in the nearby Cape Winelands. With its rich heritage and diverse attractions, Cape Town is a must-visit destination for travelers seeking adventure and relaxation.</p>
        </div>
        <div class="destination">
            <img src="d5.jpeg" alt="Destination 5">
            <h3>Bali</h3>
            <p>The iland of the God!</p>
            <p>Bali is a stunning Indonesian paradise known for its lush landscapes, vibrant culture, and beautiful beaches. Famous for its rice terraces, ancient temples, and lively arts scene, Bali offers a unique blend of relaxation and adventure. Visitors can indulge in world-class surfing, rejuvenating spa treatments, and delicious local cuisine. With its warm hospitality and breathtaking sunsets, Bali is a haven for travelers seeking both tranquility and exploration.</p>
            
        </div>
        <div class="destination">
            <img src="d6.jpeg" alt="Destination 6">
            <h3>Dubai</h3>
            <p>The city of innovation!</p>
            <p>Dubai is a dazzling metropolis in the United Arab Emirates, renowned for its futuristic architecture, luxury shopping, and vibrant nightlife. Home to the iconic Burj Khalifa, the tallest building in the world, and the sprawling Dubai Mall, the city seamlessly blends modernity with rich cultural heritage. Visitors can explore traditional souks, enjoy stunning desert adventures, and relax on beautiful beaches. With its ambitious spirit and endless attractions, Dubai offers an unforgettable experience for every traveler.</p>

        </div>
        <!-- Add more destinations as needed -->
    </section>
    <hr>

    <section id="about">
    <h2>About Us</h2>
    <div class="about-container">
        <img src="d7.jpeg" alt="About Us" class="about-image">
        <div class="about-text">
            <h3>Who We Are</h3>
            <p>At Our Travel Agency, we are passionate about crafting unforgettable travel experiences tailored to your dreams. With years of expertise and a deep love for exploration, our dedicated team is here to guide you every step of the way.</p>
            <h3>Our Mission</h3>
            <p>Our mission is to inspire and facilitate travel adventures that connect you to the world's most incredible destinations. We believe that every journey is an opportunity to create lasting memories.</p>
            <h3>Why Choose Us?</h3>
            <ul>
                <li>Personalized itineraries to suit your preferences.</li>
                <li>Expert travel advice from seasoned professionals.</li>
                <li>24/7 support during your travels.</li>
                <li>Exclusive deals and unique experiences.</li>
            </ul>
        </div>
    </div>
</section>
<hr>

<section id="contact">
    <h2>Contact Us</h2>
    <div class="contact-container">
        <div class="contact-info">
            <h3>Get in Touch</h3>
            <p>We’d love to hear from you! Whether you have questions about our services or need assistance planning your trip, feel free to reach out.</p>
            <ul>
                <li><strong>Email:</strong> info@travelagency.com</li>
                <li><strong>Phone:</strong> +1 (123) 456-7890</li>
                <li><strong>Address:</strong> 123 Travel Lane, Adventure City, USA</li>
            </ul>
        </div>
        <form id="contactForm" class="contact-form">
    <h3>Contact Form</h3>
    <input type="text" name="name" id="name" placeholder="Your Name" required>
    <input type="email" name="email" id="email" placeholder="Your Email" required>
    <textarea name="message" id="message" placeholder="Your Message" required></textarea>
    <button type="submit">Send Message</button>
    <div id="response" class="response"></div> <!-- Response message -->
</form>

    </div>
</section>


<footer>
    <div class="footer-container">
        <div class="footer-info">
            <h3>About Us</h3>
            <p>Your trusted travel agency dedicated to creating unforgettable journeys.</p>
        </div>
        <div class="footer-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#destinations">Destinations</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="footer-contact">
            <h3>Contact Us</h3>
            <p>Email: info@travelagency.com</p>
            <p>Phone: +1 (123) 456-7890</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Travel Agency. All rights reserved.</p>
    </div>
</footer>


    <script src="script.js"></script>
</body>
</html>
