<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Display Jadwal Sholat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="dist/css/style.css" />
  </head>
  <body class="gambar" onload="initClock()">
    <div class="">
      <div class="abs flex-row-reverse">
        <a href="login" class=" abs2">Login</a>
        <a href="index" class="abs2"><i class="bi bi-house-door-fill pe-2"></i>Beranda</a>
      </div>
      <div class="">
        <div class="text-center pt-3 masjid">
          <h1 class="text-white">Masjid Al-Birru</h1>
          <h6 class="text-white-50">
            <i class="bi bi-geo-alt-fill mx-2"></i>
            Jln. Gathotkaca No.54, Sambang, Kota Bogor
          </h6>
        </div>
        <!-- JAM Utama  -->
        <div class="timer time5 text-white">
          <div class="h3 waktu">
            <p id="hour">00</p>
          </div>
          <div class="h3 waktu">
            <p class="value">:</p>
          </div>
          <div class="h3 waktu">
            <p id="minutes">00</p>
          </div>
          <div class="h3 waktu">
            <p class="value">:</p>
          </div>
          <div class="h3 waktu">
            <p id="seconds">00</p>
          </div>
        </div>
        {{-- <div class="position-relative abs">
          
        </div> --}}
        
        <div class="text-light text-lg-end timer2">
          <p class="m-0 tanggal">Rabu,  2022 </p>
          <p class="m-1">12 Robi'ul Awal 1444 H </p>
        </div>
      </div>
    

      <div class="jam text-center ">
        <!--- jadwal sholat -->
        <div class="d-flex text-light row g-0 h-100">
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="px-4 py-2 border bg5">
              <h3 class="time subuh">04</h3>
              <h5>Subuh</h5>
            </div>
          </div>
          <div class="col-lg-2 col-6 ">
            <!-- small box -->
            <div class="px-4 py-2 border bg5">
              <h3 class="time terbit">06</h3>
              <h5>Syuruq</h5>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6 ">
            <!-- small box -->
            <div class="px-4 py-2 border bg5">
              <h3 class="time dzuhur">12.</h3>
              <h5>Dzuhur</h5>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6 ">
            <!-- small box -->
            <div class="px-4 py-2 border bg5">
                <h3 class="time ashar">14</h3>
                <h5>Ashar</h5>
            </div>
          </div>
          <div class="col-lg-2 col-6 ">
            <!-- small box -->
            <div class="px-4 py-2 border bg5">
                <h3 class="time maghrib">19</h3>
                <h5>Maghrib</h5>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6 ">
          <!-- small box -->
          <div class="px-4 py-2 border bg5">
              <h3 class="time isya">17</h3>
              <h5>Isya'</h5>
          </div>
        </div>

      </div>
    </div>


    <footer class="position-relative d-flex text-dark align-items-end text-uppercase">
      <marquee class="actived">
        <div class="h4 py-1 mb-0">
          Selamat datang di masjid jami' Al Birru.- "Sesungguhnya sholat Mencegah Dari perbuatan keji dan mungkar(QS.A Ankabut:45)." - "Sholat berjamaah lebih utama 27 derajat dibanding sholat sendirian.(HR. Bukhari dan Muslim" 
        </div>
      </marquee>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="dist/js/app.js"></script>
  </body>
</html>
