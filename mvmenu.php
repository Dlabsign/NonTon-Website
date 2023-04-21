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
    

    <!-- <div class="kosong"></div> -->

    
    
    <section class="mvmenu">
        <div class="top-bar">
            
            <div class="top-left-bar">
                <a class="btn-back" href="dashboard.php">
                    <img src="mvMenu/img/Back.svg" alt="">
                </a>
            </div>

            <div class="top-left-bar">
                <img src="Dashboard/img/searchBar.svg" alt="" />
                <input
                    type="text"
                    name="search"
                    placeholder="Cari Film yang Sedang tayang"
                />
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
                    <img src="https://m.media-amazon.com/images/M/MV5BMTlmYTFkNTMtYWMyYy00NTdlLWEwZTctOWJlYzYzYmQ5OGJlXkEyXkFqcGdeQXVyNDc0Njc1NTY@._V1_FMjpg_UX1000_.jpg" alt="">
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
                <div class="mvmenu-left-txt">
                    <p>Rating</p>
                    <p>Durasi</p>
                    <p>Genre</p>
                    <p>Usia</p>
                    <p>Trailer</p>
                </div>
                <div class="mvmenu-right-txt">
                    <div class="rating">
                        <p>4.5</p>
                        <object data="Dashboard/img/banner-rating.svg" type=""></object>
                        <object data="Dashboard/img/banner-rating.svg" type=""></object>
                        <object data="Dashboard/img/banner-rating.svg" type=""></object>
                        <object data="Dashboard/img/banner-rating.svg" type=""></object>
                    </div>
                    <p>82 Menit</p>
                    <p>Komedi, Drama</p>
                    <p>18+</p>
                    <div class="box-trailer">
                        <img src="" alt="">
                        <button class="btn-fill">Watch Trailer</button>
                    </div>
                </div>
                
            </div>
        </div>


        <div class="mvmenu-list">
            <div class="list-date">
                <button class="box-date" id="select">
                    <p>SENIN</p>
                    <h4>12 APR</h4>
                </button>
                <button class="box-date">
                    <p>SELASA</p>
                    <h4>13 APR</h4>
                </button>
                <button class="box-date">
                    <p>RABU</p>
                    <h4>14 APR</h4>
                </button>
                <button class="box-date">
                    <p>KAMIS</p>
                    <h4>15 APR</h4>
                </button>
                <button class="box-date">
                    <p>JUMAT</p>
                    <h4>16 APR</h4>
                </button>
                <button class="box-date">
                    <p>SABTU</p>
                    <h4>17 APR</h4>
                </button>
                <button class="box-date">
                    <p>MINGGU</p>
                    <h4>18 APR</h4>
                </button>
            </div>

            <div class="mvmenu-option">
                <select name="mvmenu-lokasi" id="">
                    <option value="Sidoarjo">Sidoarjo</option>
                    <option value="Surabaya">Surabaya</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Bandung">Bandung</option>
                </select>
                <select name="mvmenu-cinema" id="">
                    <option value="cgv">CGV</option>
                    <option value="xxi">Cinema XXI</option>
                    <option value="cineplex">Cineplex</option>
                </select>
                <div class="line"></div>
            </div>
            
            <div class="mvmenu-container">

                <div class="mvmenu-row-container">
                    <div class="container-left-menu">
                        <div class="mvmenu-container-headline">
                            <h3>CINEPOLIS</h3>
                            <h4 class="headline-lokasi">EXAMPLE</h4>
                            <button>Reguler</button>
                        </div>

                        <div class="mvmmenu-container-coloumn-menu">
                            <div class="mvmenu-clock">
                                <button class="1">10.00</button>
                                <button class="2">13.25</button>
                                <button class="3">16.15</button>
                                <button class="4">18.30</button>
                            </div>
        
                            <div class="mvmenu-ticket">
                                <div class="harga-tket">
                                    <button>Pilih Kursi</button>
                                    <p>50.000</p>
                                </div>
                                <p id="information">(2 TIket)</p>
                            </div>
                        </div>
                    </div>
                    <div class="container-right-btn">
                        <button class="BookBtn">Booking Ticket</button>
                    </div>
                </div>
                
                <div class="mvmenu-row-container">
                    <div class="container-left-menu">
                        <div class="mvmenu-container-headline">
                            <h3>CINEPOLIS</h3>
                            <h4 class="headline-lokasi">EXAMPLE</h4>
                            <button>Reguler</button>
                        </div>

                        <div class="mvmmenu-container-coloumn-menu">
                            <div class="mvmenu-clock">
                                <button class="1">10.00</button>
                                <button class="2">13.25</button>
                                <button class="3">16.15</button>
                                <button class="4">18.30</button>
                            </div>
        
                            <div class="mvmenu-ticket">
                                <div class="harga-tket">
                                    <button>Pilih Kursi</button>
                                    <p>50.000</p>
                                </div>
                                <p id="information">(2 TIket)</p>
                            </div>
                        </div>
                    </div>
                    <div class="container-right-btn">
                        <button class="BookBtn">Booking Ticket</button>
                    </div>
                </div>

                <div class="mvmenu-row-container">
                    <div class="container-left-menu">
                        <div class="mvmenu-container-headline">
                            <h3>CINEPOLIS</h3>
                            <h4 class="headline-lokasi">EXAMPLE</h4>
                            <button>Reguler</button>
                        </div>

                        <div class="mvmmenu-container-coloumn-menu">
                            <div class="mvmenu-clock">
                                <button class="1">10.00</button>
                                <button class="2">13.25</button>
                                <button class="3">16.15</button>
                                <button class="4">18.30</button>
                            </div>
        
                            <div class="mvmenu-ticket">
                                <div class="harga-tket">
                                    <button>Pilih Kursi</button>
                                    <p>50.000</p>
                                </div>
                                <p id="information">(2 TIket)</p>
                            </div>
                        </div>
                    </div>
                    <div class="container-right-btn">
                        <button class="BookBtn">Booking Ticket</button>
                    </div>
                </div>
                
                <div class="mvmenu-row-container">
                    <div class="container-left-menu">
                        <div class="mvmenu-container-headline">
                            <h3>CINEPOLIS</h3>
                            <h4 class="headline-lokasi">EXAMPLE</h4>
                            <button>Reguler</button>
                        </div>

                        <div class="mvmmenu-container-coloumn-menu">
                            <div class="mvmenu-clock">
                                <button class="1">10.00</button>
                                <button class="2">13.25</button>
                                <button class="3">16.15</button>
                                <button class="4">18.30</button>
                            </div>
        
                            <div class="mvmenu-ticket">
                                <div class="harga-tket">
                                    <button>Pilih Kursi</button>
                                    <p>50.000</p>
                                </div>
                                <p id="information">(2 TIket)</p>
                            </div>
                        </div>
                    </div>
                    <div class="container-right-btn">
                        <button class="BookBtn">Booking Ticket</button>
                    </div>
                </div>
            </div>


        </div>

    </section>





</body>
</html>