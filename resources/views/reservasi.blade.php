<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-900 text-white"> 
    <div class="flex justify-center">
        <div>
            <h1 class="text-2xl text-center mb-10 mt-10 font-bold">Add Album</h1>
            <form enctype="multipart/form-data" class="bg-slate-950 p-10 rounded-lg mb-10" method="POST" action="{{ route('reservasi.add') }}" id="insertdata">
                @csrf
                <label for="album_name">Album Name</label><br>
                <input class="border bg-gray-950" type="text" id="nama" name="nama" required><br>
                <label for="years">Year </label><br>
                <input class="border bg-gray-950" type="text" id="telepon" name="telepon" required><br>
                <label for="genre">Genre</label><br>
                <input class="border bg-gray-950" type="text" id="email" name="email" required><br>                
                <label for="bpm">BPM</label><br>
                <input class="border bg-gray-950" type="text" id="jml_orang" name="jml_orang" required><br>
                <label for="kunci">Key</label><br>
                <input class="border bg-gray-950" type="text" id="pesanan" name="pesanan" required><br>
                <label for="image">Image</label><br>
                <input accept=".jpg,.jpeg,.png" class="border bg-gray-950" type="file" id="image" name="image" required><br>
                <label for="audio_sample" >Audio Sample</label><br>
                <input accept=".mp3" class="border bg-gray-950" type="file" id="audio_sample" name="audio_sample" required><br>
                <label for="music_list">Music List</label><br>                
            

                <input type="submit" class="rounded-md px-2 cursor-pointer p-1 bg-blue-600 hover:bg-blue-700 active:bg-blue-800" value="Submit">
            </form>
        </div>
    </div>
</body>
</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Reservation - Restaurant</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style> .reservation-form {
            max-width: 600px;
            margin: 150px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            align-items: center;
        }

        .reservation-form h2 {
            font-size: 2em;
            margin-bottom: 20px;
            text-align: center;
        }

        .reservation-form label {
            display: block;
            margin-bottom: 15px;
            font-weight: bold;
            margin-top: 25px;
        }

        .reservation-form input[type="text"],
        .reservation-form input[type="email"],
        .reservation-form input[type="tel"],
        .reservation-form select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        .reservation-form button {
            padding: 10px 20px;
            background: linear-gradient(to bottom, #4CAF50, #45a049);
            color: white;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px; /* Add margin-top for spacing */
        }

        .reservation-form button:hover {
            background-color: #ff4c4c;
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
            <img src="{{asset("img/921c97eede5b20e215965953690f5b15.png")}}" alt= "Logo">
            <img src="{{asset("img/b3758108563d2a9eac6b747a77fb1ac6.png")}}" alt="Logo1">
            <img src="{{asset("img/8e32530251073c1bc293b2fb351b6c22.png")}}" alt="Logo2">
            <h1>Site Logo</h1>
        </div>
        <div class="nav-links">
            <a href="/menu">Menu</a>
            <a href="/reservasi">Reservasi</a>
            <!-- <a href="team.html">Team</a> -->
        </div>
        <div class="social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
    </nav>

    <!-- Reservation Form -->
    <div class="reservation-form" data-aos="fade-up">
        <h2 data-aos="fade-up">Reservation Form</h2>
        <form action="{{ route('reservasi.add') }}" id="insertdata" method="POST">
        @csrf
            <label for="name" data-aos="fade-up">Nama</label>
            <input type="text" id="nama" name="nama" required data-aos="fade-up">

            <label for="email_telefon" data-aos="fade-up">email atau no telepon</label>
            <input type="text" id="email_telefon" name="email_telefon" required data-aos="fade-up">

            <label for="jumlah_orang" data-aos="fade-up">Jumlah Orang</label>
            <input type="number" id="jumlah_orang" name="jumlah_orang" required data-aos="fade-up">

            <label for="tanggal_reservasi" data-aos="fade-up">tanggal reservasi</label>
            <input type="date" id="tanggal_reservasi" name="tanggal_reservasi" required data-aos="fade-up">

            <button type="submit" class="btn" data-aos="fade-up">Submit</button>
        </form>
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
        AOS.init();
        new Sticky('.sticky-effect');
    </script>
</body>
</html>
</style>