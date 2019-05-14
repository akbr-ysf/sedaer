<?php
  include 'functions.php';

  $artikel = query("SELECT * FROM artikel ORDER BY tanggal ASC LIMIT 5") ;

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <!-- My Font -->
  <link href="https://fonts.googleapis.com/css?family=Sniglet" rel="stylesheet">

  <!-- My CSS -->
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Icon -->
  <link rel="Icon" href="img/s_logo.png">

  <title>SEDAER RIVER TUBING</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3">
    <div class="container">
      <a class="navbar-brand" href="index.html">Sedaer.ID</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="#about">About Sedaer</a>
          <a class="nav-item nav-link" href="#service">Our Services</a>
          <a class="nav-item nav-link" href="#documentation">Documentations</a>
          <a class="nav-item nav-link" href="#contact">Contact</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir Navbar -->

  <!-- Carousel -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/cover1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-sm-block">
          <p>Bermain tubing di sungai dengan menggunakan ban kendaraan yang telah dimodifikasi untuk kenyamanan
            pengarungan!</p>
          <a href="#about" class="btn btn-primary tombol">About Sedaer</a>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/cover2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-sm-block">
          <p>Cocok untuk semua umur, menikmati pemandangan indah di alam terbuka yang masih segar sambil outbond,
            tubing, dan memanen tumbuhan sedaer!</p>
          <a href="#about" class="btn btn-primary tombol">About Sedaer</a>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/cover4.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-sm-block">
          <p>Bermalam di lapangan terbuka sambil melihat bintang dengan minuman panas dan api unggun di kaki
            gunung Bromo!</p>
          <a href="#about" class="btn btn-primary tombol">About Sedaer</a>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir Carousel -->

  <!-- About -->
  <section class="about" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9 text-center">
          <h3>About Sedaer</h3>
          <p>Sedaer river tubing give you water experience that shake your adrenaline for about 2-3 hours. Our guides
            will
            keep you safe and fun during river tubing. Every person will using safety gear (life vest, helmet, shoes)
            before
            the journey begins. We also provide outbond and trip to Bromo mountain.</p>
          <a href="#service" class="btn btn-primary tombol">Our Services</a>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir About -->

  <!-- Container -->
  <div class="container">

    <!-- Service -->
    <section class="service" id="service">
      <h1 class="text-center">Our Services</h1>
      <div class="row justify-content-center">
        <div class="col-lg-4 text-center">
          <h2 class="mt-5">Short Trip</h2>
          <img src="img/service1.jpg" alt="..." class="img-thumbnail">
          <h4 class="mt-2">Rp.125.000,00/orang</h4>
          <h5>Fasilitas</h5>
          <p class="text-muted mb-0 text-left ml-5">Makan</p>
          <p class="text-muted mb-0 text-left ml-5">Minum / Welcome Drink</p>
          <p class="text-muted mb-0 text-left ml-5">Guide / Rescue</p>
          <p class="text-muted mb-0 text-left ml-5">Peralatan Safety</p>
          <p class="text-muted mb-0 text-left ml-5">Kendaraan Loading</p>
          <p class="text-muted mb-0 text-left ml-5">Dokumentasi</p>
          <p class="text-muted mb-0 text-left ml-5">Toilet</p>
          <p class="text-muted mb-0 text-left ml-5">Parkir</p>
          <p class="text-muted mb-0 text-left ml-5">Track 2KM (estimasi 2 jam)</p>
        </div>
        <div class="col-lg-4 text-center">
          <h2 class=" mt-5">Long Trip</h2>
          <img src="img/service2.JPG" alt="..." class="img-thumbnail">
          <h4 class="mt-2">Rp.175.000,00/orang</h4>
          <h5>Fasilitas</h5>
          <p class="text-muted mb-0 text-left ml-5">Makan</p>
          <p class="text-muted mb-0 text-left ml-5">Minum / Welcome Drink</p>
          <p class="text-muted mb-0 text-left ml-5">Guide / Rescue</p>
          <p class="text-muted mb-0 text-left ml-5">Peralatan Safety</p>
          <p class="text-muted mb-0 text-left ml-5">Kendaraan Loading</p>
          <p class="text-muted mb-0 text-left ml-5">Dokumentasi</p>
          <p class="text-muted mb-0 text-left ml-5">Toilet</p>
          <p class="text-muted mb-0 text-left ml-5">Parkir</p>
          <p class="text-muted mb-0 text-left ml-5">Track 3.5KM (estimasi 3 jam)</p>
        </div>
        <div class="col-lg-4 text-center">
          <h2 class=" mt-5">Go To Bromo mt.</h2>
          <img src="img/service3.jpg" alt="..." class="img-thumbnail">
          <h4 class="mt-2">Rp. 0,- /orang</h4>
          <h5>Fasilitas</h5>
          <p class="text-muted mb-0 text-left ml-5">Makan</p>
          <p class="text-muted mb-0 text-left ml-5">Minum / Welcome Drink</p>
          <p class="text-muted mb-0 text-left ml-5">Guide / Rescue</p>
          <p class="text-muted mb-0 text-left ml-5">Peralatan Safety</p>
          <p class="text-muted mb-0 text-left ml-5">Kendaraan Loading</p>
          <p class="text-muted mb-0 text-left ml-5">Dokumentasi</p>
        </div>
      </div>
    </section>
    <!-- akhir Service -->
  </div>

  <!-- Documentations -->
  <section class="documentation pt-3" id="documentation">
    <h1 class="text-center pt-5 pb-3">Documentations</h1>
    <div class="container-fluid p-0">
      <div class="tz-gallery">
        <div class="row no-gutters">
          <div class="col-lg-3 col-sm-6">
            <a class="portfolio-box" href="img/dokumentasi/1.jpg">
              <img class="img-fluid" src="img/dokumentasi/1.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-3 col-sm-6">
            <a class="portfolio-box" href="img/dokumentasi/2.jpg">
              <img class="img-fluid" src="img/dokumentasi/2.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-3 col-sm-6">
            <a class="portfolio-box" href="img/dokumentasi/3.JPG">
              <img class="img-fluid" src="img/dokumentasi/3.JPG" alt="">
            </a>
          </div>
          <div class="col-lg-3 col-sm-6">
            <a class="portfolio-box" href="img/dokumentasi/4.JPG">
              <img class="img-fluid" src="img/dokumentasi/4.JPG" alt="">
            </a>
          </div>
          <div class="col-lg-3 col-sm-6">
            <a class="portfolio-box" href="img/dokumentasi/5.JPG">
              <img class="img-fluid" src="img/dokumentasi/5.JPG" alt="">
            </a>
          </div>
          <div class="col-lg-3 col-sm-6">
            <a class="portfolio-box" href="img/dokumentasi/6.JPG">
              <img class="img-fluid" src="img/dokumentasi/6.JPG" alt="">
            </a>
          </div>
          <div class="col-lg-3 col-sm-6">
            <a class="portfolio-box" href="img/dokumentasi/7.JPG">
              <img class="img-fluid" src="img/dokumentasi/7.JPG" alt="">
            </a>
          </div>
          <div class="col-lg-3 col-sm-6">
            <a class="portfolio-box" href="img/dokumentasi/8.JPG">
              <img class="img-fluid" src="img/dokumentasi/8.JPG" alt="">
            </a>
          </div>
          <div class="col-lg-3 col-sm-6">
            <a class="portfolio-box" href="img/dokumentasi/9.JPG">
              <img class="img-fluid" src="img/dokumentasi/9.JPG" alt="">
            </a>
          </div>
          <div class="col-lg-3 col-sm-6">
            <a class="portfolio-box" href="img/dokumentasi/10.jpg">
              <img class="img-fluid" src="img/dokumentasi/10.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-3 col-sm-6">
            <a class="portfolio-box" href="img/dokumentasi/11.jpg">
              <img class="img-fluid" src="img/dokumentasi/11.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-3 col-sm-6">
            <a class="portfolio-box" href="img/dokumentasi/12.jpg">
              <img class="img-fluid" src="img/dokumentasi/12.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row pt-5">
        <div class="col-lg-6 px-5 pb-5">
          <h1 class="text-center">Youtube</h1>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1L6XwXFyfxA" frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-lg-6">
          <h1 class="text-center">Artikel</h1>
            <?php foreach ($artikel as $row) : ?>
              <!-- <table class="table table-sm">
                <tbody>
                  <tr>
                    <td>
                      <?= $row["judul"]; ?>
                    </td>
                    <td>
                      <a href="detail.php?id=<?= $row["id"];?>" class="btn btn-primary">Detail</a>
                    </td>
                  </tr>
                </tbody>
              </table> -->
              <ul>
                <li class="text-white">
                  <?= $row["judul"]  ?>
                  <a href="detail.php?id=<?= $row["id"];?>" class="badge badge-warning">Detail</a> 
                </li>
                <!-- <li><a href="detail.php?id=<?= $row["id"];?>" class="btn btn-primary btn-sm">Detail</a></li> -->
              </ul>
              <!-- <a href="" style="display: block;"><?= $row['judul'] ?></a> -->
            <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir Documentation -->

  <!-- Contact -->
  <section class="contact" id="contact">
    <div class="container pt-3">
      <h1 class="text-center py-5">Calling me when you're ready!</h1>
      <div class="row justify-content-center">
        <div class="col-lg-4">
          <img src="img/logo.png" alt="">
          <div>
            <p class="text-white ">
              <i class="fas fa-map-pin fa-1x mb-1 text-white mt-4 mr-2"></i>
              Kunci Ndrigu Poncokusumo, Dusun IX,
              Poncokusumo,
              Malang,
              Jawa Timur 65157
            </p>
            <!-- +62 822 1018 4772 -->
          </div>
          <div>
            <p class="text-white mt-1">
              <i class="fas fa-phone fa-1x mb-1 text-white mt-1 mr-2"></i>
              +62 822 1018 4772
            </p>
          </div>
          <div>
            <p class="text-white mt-1">
              <i class="fas fa-envelope fa-1x mb-1 text-white mt-1 mr-2"></i>
              rivertubingsedaer@gmail.com
            </p>
          </div>
          <div>
            <a
              href="https://www.facebook.com/Sedaer-River-Tubing-758693347570594/?__tn__=kC-R&eid=ARAqKTsY1R6jGX-8EZyQkKk_rIe8kVW1Tmmr-pxj5kptgYMNThFAE56LPzCQus0MvP47TrUaxbWIrES7&hc_ref=ARQ46wytjxOzD-iKYxBsMS-q4M7TuICcasj0Z9GnXo4pA_S9yiYWl6VLw7gwrzoanu8&fref=nf">
              <i class="fab fa-facebook-f fa-2x mb-1 text-white mt-1 pr-5 pb-5 ml-4"></i>
            </a>
            <a href="https://www.instagram.com/sedaer_rivertubing/?hl=en">
              <i class="fab fa-instagram fa-2x mb-1 text-white mt-1 pr-5 pb-5"></i>
            </a>
            <a
              href="https://www.tripadvisor.com/Attraction_Review-g297710-d12193194-Reviews-Republik_A_Sedaer_River_Tubing-Malang_East_Java_Java.html">
              <i class="fab fa-tripadvisor fa-2x mb-1 text-white mt-1 pr-5 pb-5"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-2 pt-5">
          <a
            href="https://api.whatsapp.com/send?phone=6282210184772&amp;text=Halo,%20dengan%20admin%20Sedaer%20River%20Tubing?">
            <img src="img/whatsapp.png">
          </a>
        </div>
        <div class="col-lg-5 ml-auto py-5 ">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31604.86148908541!2d112.7989617526353!3d-8.039320105355102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdf028786ee0d4c8e!2sSedaer+River+Tubing!5e0!3m2!1sid!2sid!4v1551794079290"
              frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- akhir Contact -->
  <script src="jquery-3.3.1.js"></script>
  <script src="js/bootstrap.js"></script>
  <!-- Optional JavaScript -->
  <script src="script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
  <script>
    baguetteBox.run('.tz-gallery');
  </script>
</body>

</html>
