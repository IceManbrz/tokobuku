<?php include ('koneksi.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>beliBuku.</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Icons Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- CSS -->
    <link rel="stylesheet" href="style_index.css" />

  </head>
  <body>
    <!-- Topbar -->
    <div class="container">
      <div class="navbar navbar-expand-lg justify-content-between py-3" role="navigation">
        <div class="col-lg-2 px-5">
          <a href="index.php" role="navigation">
            <img src="img/icon.png" alt="" width="100" />
          </a>
        </div>
        <div class="col-lg-10">
          <form action="#" class="d-flex" role="search">
            <input class="form-control me-5" type="search" placeholder="Cari Buku" aria-label="Cari Buku" />
            <!-- Search Button -->
            <a href="#" class="btn btn-outline-primary me-2 ">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
              </svg>
            </a>
            <!-- Cart Button -->
            <a href="cart.php" class="btn btn-outline-primary me-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            <!-- Login Button -->
            </a>
            <a href="login.php" class="btn btn-outline-primary" >Masuk</a>
          </form>
        </div>
      </div>
    </div>
    <!-- Akhir Topbar -->
  
    <!-- Navbar -->
    <!-- <div class="container-fluid bg-primary" id="navbarBackground">
      <div class="container" id="nav-bg">
        <div class="navbar navbar-expand-md justify-content-between py-1 d-flex" role="navigation">
          <div class="d-flex">
            <div class="btn-group dropdown me-1">
              <button type="button" class="btn text-light dropdown-toggle me-1" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">Fiksi</button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuFiksi">
                <li><a class="dropdown-item" href="#">Metropop</a> </li>
                <li><a class="dropdown-item" href="#">Romance</a></li>
                <li><a class="dropdown-item" href="#">Thriller</a></li>
              </ul>
            </div>
            <div class="dropdown me-1">
              <button type="button" class="btn text-light dropdown-toggle me-1" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">Non-Fiksi</button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuNon-Fiksi">
                <li><a class="dropdown-item" href="#">Bisnis & Ekonomi</a></li>
                <li><a class="dropdown-item" href="#">Ilmu Sosial</a></li>
              </ul>
            </div>
          </div>
          <div class="text-light navbar-dark navbar-nav">
            <a class="nav-item nav-link active px-3 fw-bolder" href="index.php">Home</a>
            <a class="nav-item nav-link px-3" href="keranjang.php">Keranjang</a>
          </div>
          <div class="">
            <div class="navbar-nav">
              <a class="nav-item nav-link text-light fw-normal" href="login.php">Login</a>
              <a class="nav-item nav-link text-light fw-normal" href="#register">Register</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Akhir Navbar -->
    <!-- <br> -->

    <!-- Carousel -->
    <div id="myCarousel" class="container carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          
          <img src="img/banner/1.jpeg">

          <div class="container">
            <div class="carousel-caption text-start">
              <!-- <a href="#"></a> -->
            </div>
          </div>
        </div>
        <div class="carousel-item">
          
          <img src="img/banner/2.jpeg">

          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/banner/1.jpeg">

          <div class="container">
            <div class="carousel-caption text-end">
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Akhir Carousel -->

    <!-- Services -->
    <div class="container pt-5">
      <div class="row pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
          <div class="d-flex align-items-center border mb-1" style="padding: 30px">
            <h1 class="fa fa-check text-dark m-0 me-3" id="features"></h1>
            <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
          <div class="d-flex align-items-center border mb-4" style="padding: 30px">
            <h1 class="fa fa-shipping-fast text-dark m-0 me-2" id="features"></h1>
            <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
          <div class="d-flex align-items-center border mb-4" style="padding: 30px">
            <h1 class="fas fa-exchange-alt text-dark m-0 me-3" id="features"></h1>
            <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
          <div class="d-flex align-items-center border mb-4" style="padding: 30px">
            <h1 class="fa fa-phone-volume text-dark m-0 me-3" id="features"></h1>
            <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Services -->
    
    <!-- Category -->
    <div class="container pt-2">
      <div class="row pb-3 col-md-12">
          <?php 
            $sql = mysqli_query($con,"SELECT * FROM kategori");
            while ($kategori = mysqli_fetch_array($sql)) {
          ?>
        <div class="col-3 col-md-3 pb-1">
          <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px">
            <p class="text-center">5 Produk</p>
            <h5 class="font-weight-semi-bold m-0 text-center">
            <?php  
              $sql_kategori = "SELECT nama_kategori FROM kategori where id_kategori = '$kategori[id_kategori]'";
              $result = mysqli_query($con,$sql_kategori);
              while ($kategori = mysqli_fetch_array($result)) { 
            ?>
            <?= $kategori['nama_kategori'] ?>
            <?php } ?>
            </h5>
          </div>
        </div>
        <!-- <div class="col-lg-3 col-md-6 pb-1">
          <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px">
            <p class="text-center">5 Produk</p>
            <h5 class="font-weight-semi-bold m-0 text-center">Romance</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 pb-1">
          <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px">
            <p class="text-center">5 Produk</p>
            <h5 class="font-weight-semi-bold m-0 text-center">Thriller</h5>
          </div>
        </div> -->
        <!-- <div class="container justify-content-center d-flex">
          <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4 me-3" style="padding: 30px">
              <p class="text-center">5 Produk</p>
              <a href="" class="cat-img position-relative overflow-hidden mb-3">
                <img class="img-fluid" src="img/cat-4.jpg" alt="" />
              </a>
              <h5 class="font-weight-semi-bold m-0 text-center">Bisnis & Ekonomi</h5>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4 me-3" style="padding: 30px">
              <p class="text-center">5 Produk</p>
              <a href="" class="cat-img position-relative overflow-hidden mb-3">
                <img class="img-fluid" src="img/cat-6.jpg" alt="" />
              </a>
              <h5 class="font-weight-semi-bold m-0 text-center">Ilmu Sosial</h5>
            </div>
          </div>
        </div> -->
        <?php } ?>
      </div>
    </div>
    <!-- Akhir Categories -->

    <!-- produk -->
    <div class="container pt-2">
      <div class="row pb-3 col-md-12">
        <?php  
          $sql = mysqli_query($con,"SELECT * FROM produk");
          while ($produk = mysqli_fetch_array($sql)) { 
        ?>
        <div class="col-6 col-md-3 mt-4" >
          <div class="card border-0 shadow-sm" >
            <img src="../admin/assets/img/buku/<?= $produk['gambar_produk'] ?>" class="card-img-top" width="100">
            <div class="card-body">
              <h5 class="card-title text-center"><?= $produk['nama_produk'] ?></h5>
              <center>
                <small class="text-secondary" >
                  <?php  
                    $sql_kategori = "SELECT nama_kategori FROM kategori where id_kategori = '$produk[id_kategori]'";
                    $result = mysqli_query($con,$sql_kategori);
                    while ($kategori = mysqli_fetch_array($result)) { 
                  ?>
                  <?= $kategori['nama_kategori'] ?>
                  <?php } ?>
                </small>
              </center>
              <p class="card-text text-center ">
                <?php
                  $bil1 = $produk['diskon'];
                  $bil2 = $produk['harga'];

                  $nilai = $bil2 - (($bil1/100)*$bil2);
                  if($nilai == 0){
                    echo $bil2;
                  }
                  else if($nilai > 0){
                    echo $nilai;
                  }
                ?>
                <br>
                <s  class="text-danger" >
                  <small>
                    <?php
                      if($nilai == 0){
                        echo "Tidak Ada Diskon";
                      }
                      else if($nilai > 0){
                        echo $produk['harga'];
                      }
                    ?>
                  </small>
                </s>
              </p>

              <a href="#" class="btn btn-primary col-12 mb-1">Checkout</a>
              <a href="#" class="btn btn-info col-12 text-white" title="Masukkan Keranjang " >Masukkan Keranjang</a>
            </div>
          </div>
        </div>
        <?php } ?>

    </div>
    <!-- Akhir produk -->

    <!-- Footer -->
    <footer class="bg-primary text-center text-white" id="footer">
      <p><i class="fa-solid fa-copyright"></i> beliBuku.</p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  </body>
</html>
