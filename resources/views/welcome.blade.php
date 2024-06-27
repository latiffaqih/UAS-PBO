
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Restaurant</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- Navigation and Reservation Navbar -->
    <nav class="nav">
        <div class="nav-logo">
            <!-- <img src="./assets/921c97eede5b20e215965953690f5b15.png" alt="Logo">
            <img src="./assets/b3758108563d2a9eac6b747a77fb1ac6.png" alt="Logo1">
            <img src="./assets/8e32530251073c1bc293b2fb351b6c22.png" alt="Logo2"> -->
            <h1>Site Logo</h1>
        </div>
        <div class="nav-links">
            <a href="/menu">Menu</a>
            <a href="/reservasi">Reservasi</a>
            <a href="/teams">Team</a>
        </div>
        <div class="social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="untitled-page root">
        <div class="hero">
            <div class="hero-content">
                <h1 class="hero-title">RESTAURANT MAS ARYO</h1>
                <h2 class="hero-subtitle">Restaurant yang menyajikan makanan<br>Dari tangan sang pengocok handal</h2>
                <button onclick="redirectToPage()" class="btn">RESERVASI SEKARANG</button>                    
            </div>
            <img class="image" src="{{ asset('img/terong.png') }}" alt="Restaurant Image">
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/sticky-js@1.3.0/dist/sticky.min.js"></script>
    <script src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
    <script>
        function redirectToPage() {
            // Redirect to reservation.html
            window.location.href = "reservation.html";
        }
        AOS.init();
        new Sticky('.sticky-effect');
    </script>
</body>
</html>
