<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Team - Restaurant</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Additional styles for team page */
        .team-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 50px auto;
            max-width: 1200px;
            padding: 20px;
            gap: 20px;
        }

        .team-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 250px;
            text-align: center;
            padding: 20px;
            margin-top: 75px;
        }

        .team-card img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .team-card h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .team-card p {
            font-size: 1em;
            color: #666;
            margin-bottom: 15px;
        }

        .team-card .social-icons a {
            margin: 0 10px;
            margin-right: 10px;
            color: #333;
            text-decoration: none;
            font-size: 1.2em;
        }

        /* Style for back to home button */
        .back-to-home {
            text-align: center;
            margin-top: 20px; /* Adjust margin-top as needed */
        }

        .back-to-home a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 20px;
            transition: background-color 0.3s ease;
        }

        .back-to-home a:hover {
            background-color: #ffd700;
        }
        
    </style>
</head>
<body>
    <!-- Navigation and Reservation Navbar -->
    <nav class="nav">
        <div class="nav-logo">
            <img src="./assets/921c97eede5b20e215965953690f5b15.png" alt="Logo">
            <img src="./assets/b3758108563d2a9eac6b747a77fb1ac6.png" alt="Logo1">
            <img src="./assets/8e32530251073c1bc293b2fb351b6c22.png" alt="Logo2">
            <h1>Site Logo</h1>
        </div>
        <div class="nav-links">
            <a href="menu.html">Menu</a>
            <a href="Reservation.html">Reservasi</a>
            <a href="team.html">Team</a>
        </div>
        <div class="social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
    </nav>

    <!-- Team Section -->
    <div class="team-container">
        <div class="team-card" data-aos="fade-up">
            <img src="team1.jpg" alt="Team Member 1">
            <h3>Latif Faqih</h3>
            <p>Executive Chef</p>
            <div class="social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </div>
        </div>
        <div class="team-card" data-aos="fade-up">
            <img src="team2.jpg" alt="Team Member 2">
            <h3>Ilham Ambia Muhammad</h3>
            <p>Head Sommelier</p>
            <div class="social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </div>
        </div>
        <div class="team-card" data-aos="fade-up">
            <img src="team3.jpg" alt="Team Member 3">
            <h3>Aryo Yonatan</h3>
            <p>Pastry Chef</p>
            <div class="social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </div>
        </div>
        <div class="team-card" data-aos="fade-up">
            <img src="team4.jpg" alt="Team Member 4">
            <h3>Abdurahman Azzam</h3>
            <p>Sous Chef</p>
            <div class="social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </div>
        </div>
        <div class="team-card" data-aos="fade-up">
            <img src="team5.jpg" alt="Team Member 5">
            <h3>Farhan Fawaz</h3>
            <p>Restaurant Manager</p>
            <div class="social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </div>
    <!-- Back to Home Button -->
    <div class="back-to-home">
        <a href="index.html" class="btn">Back to Home</a>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/sticky-js@1.3.0/dist/sticky.min.js"></script>
    <script src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
    <script>
        AOS.init();
        new Sticky('.sticky-effect');
    </script>
</body>
</html>
