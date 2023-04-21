<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sidebar/side.css">
    <link rel="stylesheet" href="mvMenu/mvmenu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    

    

    <section class="sidebarside">
        <div class="container-sidebar">
            <div class="navTop" id="Logo">
                <div class="sidebar-brand">
                    <object
                    type="image/svg+xml"
                    data="sidebar/img/icon/Logo.svg"
                    ></object>
                </div>

                <ul class="nav-container">
                    <button id="dashBtn" style="background-color: #4339f2">
                        <object type="image/svg+xml" data="sidebar/img/icon/Home-after.svg" id="after"></object>
                        <a href="dashboard.php" style="color: #fafafa;" id="txtButton">Dashboard</a>
                    </button>
                    <button id="ticketBtn" onclick="redirectTicket()">
                        <object
                            type="image/svg+xml"
                            data="sidebar/img/icon/ticket-Before.svg"
                        ></object>
                    <a href="ticket.php" id="txtButton">Ticket</a>
                    </button>
                    <button id="movieBtn" onclick="redirectMovie()">
                        <object
                            type="image/svg+xml"
                            data="sidebar/img/icon/movie-Before.svg"
                        ></object>
                        <a href="movie.php" id="txtButton">Movie</a>
                    </button>
                    <button id="pesanBtn" onclick="redirectPemesanan()">
                        <object type="image/svg+xml" data="sidebar/img/icon/transaction-Before.svg"></object>
                        <a href="pemesanan.php" id="txtButton">Pemesanan</a>
                    </button>
                    <button id="lokasiBtn" onclick="redirectLokasi()">
                        <object type="image/svg+xml" data="sidebar/img/icon/location-Before.svg"></object>
                        <a href="lokasi.php" id="txtButton">Lokasi</a>
                    </button>
                </ul>

            <script>
                function redirectTicket() {
                    window.location.href = "Ticket.php";
                }
                function redirectMovie() {
                    window.location.href = "Movie.php";
                }
                function redirectPemesanan() {
                    window.location.href = "Pemesanan.php";
                }
                function redirectLokasi() {
                    window.location.href = "Lokasi.php";
                }
                function redirectLokasi() {
                    window.location.href = "Lokasi.php";
                }
            </script>
        </div>

            <div class="navBottom">
                <div class="nav-container">
                    <ul>
                        <button id="signBtn">
                            <object
                            type="image/svg+xml"
                            data="sidebar/img/icon/signin-Before.svg"
                            ></object>
                            <a href="#">Sign In</a>
                        </button>
                        <button id="stngsBtn">
                            <object
                            type="image/svg+xml"
                            data="sidebar/img/icon/setting-Before.svg"
                            ></object>
                            <a href="#">Settings</a>
                        </button>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="kosong"></div>
    
    <section class="mvmenu">
        <div class="top-bar">
            <div class="top-left-bar">
                <a class="btn-back" href="dashboard.php">
                    <img src="mvMenu/img/Back.svg" alt="">
                </a>
            </div>
            <div class="top-right-bar">
                <div class="notif" href="#">
                    <button class="notif-area">
                    <a href="#">Notifikasi</a>
                    <img src="Dashboard/img/Bell-Notif.svg" alt="" />
                    </button>
                </div>
                <div class="profile">
                <p>John Doe</p>
                <div class="circle">
                    <img src="" alt="" />
                </div>
                </div>
            </div>
        </div>
        

        <div class="mvmenu-head">
            <div class="mvmenu-left">
                <div class="mvmenu-head-banner">
                    <img src="" alt="">
                </div>
                <div class="mvmenu-head-fill">
                    <div class="head-headline">
                        <h3>The House Of No Man</h3>
                        <div class="head-cast">
                            <p id="cast"><Span>Director   : </Span>John Doe</p>
                            <p id="cast"><Span>Cast       : </Span>Adam Drive, Ariana GreenBalt</p>
                        </div>
                    </div>
                    <div class="head-btn">
                        <button class="btn-fill">Beli Tiket</button>
                        <button class="btn-outline">Order Tiket</button>
                    </div>
                    <p class="head-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate optio excepturi molestias, sit in voluptatem cumque, inventore distinctio voluptates, totam ratione ducimus quos error ipsam praesentium. Maiores minus odio enim rerum atque? Sequi commodi animi dolor, sunt minima mollitia perferendis incidunt earum dolorum.</p>
                </div>
            </div>

            <div class="mvmenu-right">
                <div class="mvmenu-rating">
                    <p>Rating</p>
                    <p class="rating-bold">4.5 <span><img src="" alt=""></span></p>
                </div>
                <div class="mvmenu-duration">
                    <p>Durasi</p>
                    <p class="duration-bold">4.5</p>
                </div>
                <div class="mvmovie-genre">
                    <p>Genre</p>
                    <p class="genre-bold">4.5</p>
                </div>
                <div class="mvmovie-usia">
                    <p>Usia</p>
                    <p class="usia-bold">19</p>
                    
                </div>
                <div class="mvmovie-trailer">
                    <div class="trailer-img"><img src="" alt=""></div>
                    <button class="btn-fill">Watch Trailer</button>
                </div>
                
                
            </div>


        </div>




    </section>





</body>
</html>