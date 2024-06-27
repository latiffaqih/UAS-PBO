
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Menu - Restaurant</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Additional styles specific to menu page */
        body {
            background-image: url('{ asset ("/restaurant-background.jpg'); /* Replace with your background image path */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .menu-section {
            max-width: 425px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .menu-section h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            text-align: center;
        }

        .menu-category {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 40px;
        }

        .menu-category img {
            max-width: 150px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .menu-category h3 {
            font-size: 2em;
            margin-bottom: 15px;
            color: #333;
        }

        .menu-items {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .menu-item {
            justify-content: space-between;
            width: 100%;
            max-width: 600px;
            margin-bottom: 15px;
        }

        .menu-item p {
            margin: 0;
            font-size: 1.2em;
            color: #666;
        }

        .menu-item .price {
            font-weight: bold;
            color: #333;
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
            <img src="{{ asset ("img/921c97eede5b20e215965953690f5b15.png")}}" alt="Logo">
            <img src="{{ asset ("img/b3758108563d2a9eac6b747a77fb1ac6.png")}}" alt="Logo1">
            <img src="{{ asset ("img/8e32530251073c1bc293b2fb351b6c22.png")}}" alt="Logo2">
            <h1>Site Logo</h1>
        </div>
        <div class="nav-links">
            <a href="/reservasi">Reservasi</a>
            <a href="/teams">Team</a>
        </div>
        <div class="social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
    </nav>

    <!-- Menu Section -->
    <div class="menu-section" data-aos="fade-up">
        <h2 data-aos="fade-up">Our Menu</h2>
       
        <!-- Appetizers -->
        <div class="menu-category" data-aos="fade-up">
            <img src="{{ asset('img/appetizers.jpg') }}" alt="Appetizers"> <!-- Replace with your image path -->
            <!-- <h3>Appetizers</h3> -->
            <div class="menu-items">
            @foreach ($menuItems as $category => $items)
    <div class="menu-category" data-aos="fade-up">
    <img src="{{ asset($items["img"]) }}" alt="">
        <h3>{{ $category }}</h3>
        <div class="menu-items">
            @foreach ($items["items"] as $item)
                <div class="menu-item">
                    <h3>{{ $item['name'] }}</h3>
                    <p>{{ $item['description'] }}</p>
                    <p class="price">${{ $item['price'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endforeach

            </div>
        </div>

       

    <!-- Back to Home Button -->
    <div class="back-to-home">
        <a href="/" class="btn">Back to Home</a>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/sticky-js@1.3.0/dist/sticky.min.js"></script>
    <script src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
    <script>
        AOS.init({
            duration: 1000, // Duration of animation in milliseconds
            once: true // Whether animation should happen only once - while scrolling down
        });
        new Sticky('.sticky-effect');
    </script>
</body>
</html>
