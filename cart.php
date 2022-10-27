<?php include ('koneksi.php'); 

if(empty($_SESSION['id_user'])){
  header("Location: login.php");
}

  if (isset($_SESSION['id_user'])) {
    $sql_keranjang = mysqli_query($con,"SELECT * FROM keranjang ");
  }else{
    header("Location: login.php ");
  }

  

?>
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
    <link rel="stylesheet" href="styleIndex.css" />

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
            <?php if (empty($_SESSION['id_user'])) { ?>
            <a href="login.php" class="btn btn-outline-primary" >Masuk</a>
            <?php }else{ ?>
              <a href="logout.php" class="btn btn-outline-primary" >Logout</a>
            <?php } ?>
          </form>
        </div>
      </div>
    </div>
    <!-- Akhir Topbar -->

    <!-- Carousel -->
    <div id="myCarousel" class="container carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          
          <img src="../img/caraousel/1.png">

          <div class="container">
            <div class="carousel-caption text-start">
              <!-- <a href="#"></a> -->
            </div>
          </div>
        </div>
        <div class="carousel-item">
          
          <img src="../img/caraousel/2.png">

          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/caraousel/4.png">

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

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-8" >
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Nama Buku</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Qty</th>
                  <th scope="col">Total</th>    
                  <th scope="col">Action</th>                
                </tr>
              </thead>
              <tbody>
                <form id="updateqty" action="../admin/prosedur.php" method="get">
                  <input type="hidden" name="id_user" value="<?= $_SESSION['id_user']; ?>" >
                  <?php
                  $no = 1;
                  while ($keranjang = mysqli_fetch_array($sql_keranjang)) {
                    $sql = mysqli_query($con,"SELECT * FROM produk where id_produk='$keranjang[id_produk]' ");
                    $produk = mysqli_fetch_array($sql);
                    ?>
                  <tr>
                    <th scope="row"><?= $no ?></th>
                    <td>
                      <img src="../admin/assets/img/buku/<?= $produk['gambar_produk'] ?>" width="80px">
                    </td>
                    <td><?= $produk['nama_produk'] ?></td>
                    <td>
                      <?php 
                        if($produk['diskon'] > 0){
                          $harga = $produk['harga'] - $produk['harga'] * ($produk['diskon']/100);
                        }else{
                          $harga = $produk['harga'];
                        } 
                      
                      ?>
                      Rp <?= number_format($harga); ?>
                      <?php if($produk['diskon'] > 0){ ?>
                        <br>
                        <small class="text-danger" >
                          <s>Rp <?= number_format($produk['harga']); ?> </s>
                        </small>
                      <?php } ?>
                    </td>
                    <td>
                      
                      <input type="number" name="qty" onchange="update_qty(<?= $produk['id_produk'] ?>)" value="<?= $keranjang['qty'] ?>" min="1" class="col-sm-3">
                    </td>
                    <td>Rp <?php $total = $harga * $keranjang['qty']; echo number_format($total); ?></td>
                    <td>
                      <a href="../admin/prosedur.php?hapus_keranjang=<?= $keranjang['id_keranjang'] ?>" class="btn btn-danger btn-sm " title="Hapus<?= $produk['id_produk'] ?>" ><i class="fa-solid fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php } ?>
                  <input type="hidden" id="idproduk" name="id_produk" value="" >
                  <!-- <input type="hidden" id="asd" name="update_qty" value="" > -->
                  <!-- <input type="hidden" name="update_qty" value="12" > -->
                  <!-- <input type="submit" name="update_qty" value="update qty" style="display:hidden;"> -->
                </form>
              </tbody>
            </table>
          </div>
        </div>
        
        <div class="col-md-4" >
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th scope="row">TOTAL</th>
                <th>:</th>
                <td>
                  <?php  
                    $sqltotal = mysqli_query($con,"SELECT sum((produk.harga-produk.harga*(produk.diskon/100))*keranjang.qty) AS total FROM `keranjang` JOIN produk WHERE keranjang.id_produk = produk.id_produk");
                    $resulttotal = mysqli_fetch_array($sqltotal);
                    if (!empty($resulttotal)) {
                  ?>
                  Rp. <?= number_format($resulttotal['total']); ?>
                  <?php }else{ ?>
                    - 
                    <?php } ?>
                  </td>
                </tr>
              </table>
            </div>
            <div class="col-md-12" >
              <?php if (!empty($resulttotal) && $resulttotal['total'] > 0 ) { ?>
              <a href="checkout.php" class="btn btn-primary col-md-12 rounded-0" >CHECKOUT</a>
              <?php } ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="bg-primary text-center text-white" id="footer">
      <p><i class="fa-solid fa-copyright"></i> beliBuku.</p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
      function update_qty(id_produk) {
        document.getElementById('idproduk').value = id_produk ;
        // document.getElementById('asd').value = id_produk ;
        document.getElementById('updateqty').submit();
        
      }
    </script>
  </body>
</html>
