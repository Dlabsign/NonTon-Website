<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="sidebar/side.css" />
    <link rel="stylesheet" href="Dashboard/Dash.css" />

    <style>
      body {
        display: flex;
        background-color: #fcffff;
      }
    </style>
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
                    <object
                      type="image/svg+xml"
                      data="sidebar/img/icon/transaction-Before.svg"
                    ></object>
                    <a href="pemesanan.php" id="txtButton">Pemesanan</a>
                  </button>
                  <button id="lokasiBtn" onclick="redirectLokasi()">
                    <object
                      type="image/svg+xml"
                      data="sidebar/img/icon/location-Before.svg"
                    ></object>
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

    <section class="kosong"></section>

    <section class="dashboard">
      <div class="top-bar">
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

      <div class="banner">
        <div class="banner-image">
          <div class="gradient">
            <div class="headline">
              <h1>X-MEN <br />Appocalypse</h1>
              <div class="headline-row-rating">
                <p class="txt1">Rating</p>
                <p class="txt2">4.5</p>
                <object data="Dashboard/img/banner-rating.svg" type=""></object>
                <object data="Dashboard/img/banner-rating.svg" type=""></object>
                <object data="Dashboard/img/banner-rating.svg" type=""></object>
                <object data="Dashboard/img/banner-rating.svg" type=""></object>
              </div>
              <p class="headline-para">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio,
                eveniet? Quibusdam quidem accusamus aliquam asperiores impedit
                minima amet sit aspernatur. Quas modi ipsa optio? Dolore eum
                quasi pariatur eos sed, voluptate perspiciatis autem excepturi
                quisquam molestiae modi, qui, explicabo doloremque magni hic.
              </p>
              <button class="btn-headline">Beli Tiket</button>
            </div>
            <img src="Dashboard/img/Gradient.png" alt="" />
          </div>
          <img
            class="banner-img"
            src="Dashboard/img/banner-landscape.jpg"
            alt=""
          />
        </div>
      </div>

      <div class="row-opsi-movie-container">
        <div class="row-time-left">
          <a class="opsitxt1" href="#" style="font-weight: 800"
            >SEDANG TAYANG</a
          >
          <a class="opsitxt2" href="#" style="font-weight: 700">SEGERA</a>
        </div>
        <div class="row-time-right">
          <select name="opsi-jam" id="" class="row-jam">
            <option value="none">
              <img src="Dashboard/img/Drop-Down.svg" alt="" />Pilih Jam Tayang
            </option>
            <option value="Hari Ini">18 April</option>
            <option value="Besok">12 April</option>
          </select>
          <select name="opsi-lokasi" id="" class="row-lokasi">
            <option value="">Pilih Lokasi Bioskop</option>
            <option value="Surabaya">Surabaya</option>
            <option value="Jakarta">Jakarta</option>
            <option value="Sidoarjo">Sidoarjo</option>
            <option value="Balikpapan">Balikpapan</option>
            <option value="Bogor">Bogor</option>
            <option value="Bandung">Bandung</option>
          </select>
        </div>
      </div>

      <div class="row-menu-container">
        <div class="menu-first-list">
          <section class="box-row">

            <button class="box-container" onclick="redirectMvMenu()">
              <div class="box-image">
                <img src="https://pasjabar.com/wp-content/uploads/2022/11/313635234_659987445685210_250055050142034092_n.jpg" alt="" />
              </div>
              <div class="box-headline" >
                <h4>AVATAR</h4>
              </div>
            </button>

            <button class="box-container">
              <div class="box-image">
                <img src="https://media.21cineplex.com/webcontent/gallery/pictures/167878663353703_287x421.jpg" alt="" />
              </div>
              <div class="box-headline">
                <h4>Mario Bross</h4>
              </div>
            </button >

            <button class="box-container">
              <div class="box-image">
                <img src="https://pbs.twimg.com/media/Fq2qSFHaEAAdJxc.jpg:large" alt="" />
              </div>
              <div class="box-headline">
                <h4>Jin & Jun</h4>
              </div>
            </button>

            <button class="box-container">
              <div class="box-image">
                <img src="https://assets-a1.kompasiana.com/items/album/2022/12/07/fjofz55xgaijmok-638fe60adfb6a154682d5612.jpg" alt="" />
              </div>
              <div class="box-headline">
                <h4>Dungeons And Dragons</h4>
              </div>
            </button>

            <button class="box-container" href="mvmenu.php">
              <div class="box-image">
                <img src="https://stat5.bollywoodhungama.in/wp-content/uploads/2023/03/65-English-2.jpg" alt="" />
              </div>
              <div class="box-headline">
                <h4>65 (2023)</h4>
              </div>
            </button>
          </section>
        </div>
        <div class="menu-second-list">
          <div class="menu-head">
            <h3>Trending</h3>
            <div class="line"></div>
          </div>
          <section class="box-row">
            <box class="box-container">
              <div class="box-image">
                <img src="https://assets-a1.kompasiana.com/items/album/2022/12/07/fjofz55xgaijmok-638fe60adfb6a154682d5612.jpg" alt="" />
              </div>
              <div class="box-headline">
                <h4>Example</h4>
              </div>
            </box>
            <box class="box-container">
              <div class="box-image">
                <img src="https://assets-a1.kompasiana.com/items/album/2022/12/07/fjofz55xgaijmok-638fe60adfb6a154682d5612.jpg" alt="" />
              </div>
              <div class="box-headline">
                <h4>Example</h4>
              </div>
            </box>
            <div class="box-container">
              <div class="box-image">
                <img src="https://assets-a1.kompasiana.com/items/album/2022/12/07/fjofz55xgaijmok-638fe60adfb6a154682d5612.jpg" alt="" />
              </div>
              <div class="box-headline">
                <h4>Example</h4>
              </div>
            </div>
            <div class="box-container">
              <div class="box-image">
                <img src="https://assets-a1.kompasiana.com/items/album/2022/12/07/fjofz55xgaijmok-638fe60adfb6a154682d5612.jpg" alt="" />
              </div>
              <div class="box-headline">
                <h4>Example</h4>
              </div>
            </div>
            <div class="box-container">
              <div class="box-image">
                <img src="https://assets-a1.kompasiana.com/items/album/2022/12/07/fjofz55xgaijmok-638fe60adfb6a154682d5612.jpg" alt="" />
              </div>
              <div class="box-headline">
                <h4>Example</h4>
              </div>
            </div>
          </section>
        </div>
        <div class="menu-third-list">
          <box class="box-container">
            <div class="box-image">
              <img src="https://assets-a1.kompasiana.com/items/album/2022/12/07/fjofz55xgaijmok-638fe60adfb6a154682d5612.jpg" alt="" />
            </div>
            <div class="box-headline">
              <h4>Example</h4>
            </div>
          </box>
          <box class="box-container">
            <div class="box-image">
              <img src="https://assets-a1.kompasiana.com/items/album/2022/12/07/fjofz55xgaijmok-638fe60adfb6a154682d5612.jpg" alt="" />
            </div>
            <div class="box-headline">
              <h4>Example</h4>
            </div>
          </box>
          <div class="box-container">
            <div class="box-image">
              <img src="https://assets-a1.kompasiana.com/items/album/2022/12/07/fjofz55xgaijmok-638fe60adfb6a154682d5612.jpg" alt="" />
            </div>
            <div class="box-headline">
              <h4>Example</h4>
            </div>
          </div>
          <div class="box-container">
            <div class="box-image">
              <img src="https://assets-a1.kompasiana.com/items/album/2022/12/07/fjofz55xgaijmok-638fe60adfb6a154682d5612.jpg" alt="" />
            </div>
            <div class="box-headline">
              <h4>Example</h4>
            </div>
          </div>
          <div class="box-container">
            <div class="box-image">
              <img src="https://assets-a1.kompasiana.com/items/album/2022/12/07/fjofz55xgaijmok-638fe60adfb6a154682d5612.jpg" alt="" />
            </div>
            <div class="box-headline">
              <h4>Example</h4>
            </div>
          </div>
        </div>
      </div>
      <script>
        function redirectMvMenu() {
                  window.location.href = "mvmenu.php";
                }
      </script>
    </section>
  </body>
</html>
