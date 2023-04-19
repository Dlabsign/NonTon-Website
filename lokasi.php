<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="sidebar/sidebar.css">
    </head>
    <body>
        
        <div class="container-sidebar">
            <div class="navTop" id="Logo">
                <div class="sidebar-brand">
                    <object type="image/svg+xml" data="sidebar/img/icon/Logo.svg"></object>
                </div>

                <ul class="nav-container" >
                    <button id="dashBtn" onclick="redirectDashboard()">
                        <object type="image/svg+xml" data="sidebar/img/icon/Home-before.svg"></object>
                        <a href="dashboard.php" id="txtButton" >Dashboard</a>
                    </button>
                    <button id="ticketBtn" onclick="redirectTicket()">
                        <object type="image/svg+xml" data="sidebar/img/icon/ticket-Before.svg"></object>
                        <a href="ticket.php" id="txtButton">Ticket</a>
                    </button>
                    <button id="movieBtn" onclick="redirectMovie()">
                        <object type="image/svg+xml" data="sidebar/img/icon/movie-Before.svg"></object>
                        <a href="movie.php" id="txtButton">Movie</a>
                    </button>
                    <button id="pesanBtn" onclick="redirectPemesanan()">
                        <object type="image/svg+xml" data="sidebar/img/icon/transaction-Before.svg"></object>
                        <a href="pemesanan.php" id="txtButton">Pemesanan</a>
                    </button>
                    <button id="lokasiBtn" onclick="redirectLokasi()" style="background-color:#4339F2;">
                        <object type="image/svg+xml" data="sidebar/img/icon/location-after.svg"></object>
                        <a href="lokasi.php" style="color:#fafafa;" id="txtButton">Lokasi</a>
                    </button>
                </ul>
                
                <script>
                    function redirectTicket() {window.location.href = "Ticket.php";}
                    function redirectDashboard() {window.location.href = "Dashboard.php";}
                    function redirectMovie() {window.location.href = "Movie.php";}
                    function redirectPemesanan() {window.location.href = "Pemesanan.php";}
                    function redirectLokasi() {window.location.href = "Lokasi.php";}
                </script>
            </div>


            <div class="navBottom">
                <div class="nav-container">
                    <ul>
                        <button id="signBtn">
                            <object type="image/svg+xml" data="sidebar/img/icon/signin-Before.svg"></object>
                            <a href="#">Sign In</a>
                        </button>
                        <button id="stngsBtn">
                            <object type="image/svg+xml" data="sidebar/img/icon/setting-Before.svg"></object>
                            <a href="#">Settings</a>
                        </button>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-dashboard">
            <div class="top-bar">
                <div class="top-left-bar">
                    <form action="" class="search-bar">
                        <img src="sidebar/img/icon/search-icon.png" alt="">
                        <input type="text" name="search" placeholder="Cari Film yang Sedang tayang">
                    </form>
                </div>

                <div class="top-right-bar">
                    <div class="notif">
                        <a href="#">Notifikasi</a>
                        <img src="sidebar/img/icon/Bell-After.png" alt="">
                    </div>
                </div>
            </div>
        </div>



    </body>
    </html> 