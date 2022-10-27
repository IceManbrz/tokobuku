<?php
  include ('koneksi.php');
  if (isset($_GET['pp'])) {
    $id_produk = $_GET['pp'];
    $sql = mysqli_query($con,"SELECT * FROM produk where id_produk = '$id_produk' ");
    $produk = mysqli_fetch_array($sql);

    $query = mysqli_query($con,"SELECT * FROM detail_produk where id_detail_produk = $produk[id_detail_produk] ");
    $detail = mysqli_fetch_array($query);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="style.js"></script>
    
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

  <div class="container" >
    <br>  
    <div class="row">
      <div class="col-md-4">
        <img src="../admin/assets/img/buku/<?= $produk['gambar_produk'] ?>" width="250">
      </div>
      <div class="col-md-8 ms-auto">
        <center>
          <h3><?= $produk['nama_produk'] ?></h3>
        </center>
        <div class="col-md-12 row" >
          <div class="col-md-3 fw-bold" >
            JUDUL 
          </div>
          <div class="col-md-8 me-auto" >
            : <?= $produk['nama_produk'] ?>
          </div>
          <div class="col-md-3 fw-bold" >
            KATEGORI 
          </div>
          <?php  
            $sql_kategori = "SELECT nama_kategori FROM kategori where id_kategori = '$produk[id_kategori]'";
            $result = mysqli_query($con,$sql_kategori);
            while ($kategori = mysqli_fetch_array($result)) { 
          ?>
          <div class="col-md-8 me-auto" >
            : <?= $kategori['nama_kategori'] ?>
          </div>
          <?php } ?>
          <div class="col-md-3 fw-bold" >
            HARGA 
          </div>
          <div class="col-md-8 me-auto" >
            : Rp.<?= number_format($produk['harga']) ?>
          </div>
          <div class="col-md-3 fw-bold" >
            STOK 
          </div>
          <div class="col-md-8 me-auto" >
            : <?= $produk['stok'] ?>
          </div>
          <div class="col-md-12 fw-bold text-center" >
            DETAIL BUKU
          </div>
          <?php  
            $sql_detail = "SELECT * FROM detail_produk where id_detail_produk = '$produk[id_detail_produk]'";
            $result = mysqli_query($con,$sql_detail);
            while ($detail = mysqli_fetch_array($result)) { 
          ?>
          <div class="col-md-6 fw-bold fs-6" >
            Jumlah Halaman 
          </div>
          <div class="col-md-6 me-auto " >
            : <?= $detail['jumlah_halaman'] ?>
          </div>
          <div class="col-md-6 fw-bold fs-6" >
            Tanggal Terbit 
          </div>
          <div class="col-md-6 me-auto " >
            : <?= date('d F Y',strtotime($detail['tanggal_terbit'])); ?>
          </div>
          <div class="col-md-6 fw-bold fs-6" >
            ISBN 
          </div>
          <div class="col-md-6 me-auto " >
            : <?= $detail['isbn'] ?>
          </div>
          <div class="col-md-6 fw-bold fs-6" >
            BAHASA 
          </div>
          <div class="col-md-6 me-auto " >
            : <?= $detail['bahasa'] ?>
          </div>
          <div class="col-md-6 fw-bold fs-6" >
            PENERBIT 
          </div>
          <div class="col-md-6 me-auto " >
            : <?= $detail['penerbit'] ?>
          </div>
          <div class="col-md-6 fw-bold fs-6" >
            BERAT 
          </div>
          <div class="col-md-6 me-auto " >
            : <?= $detail['berat'] ?> KG
          </div>
          <div class="col-md-6 fw-bold fs-6" >
            LEBAR 
          </div>
          <div class="col-md-6 me-auto " >
            : <?= $detail['lebar'] ?> CM
          </div>
          <div class="col-md-6 fw-bold fs-6" >
            PANJANG 
          </div>
          <div class="col-md-6 me-auto " >
            : <?= $detail['panjang'] ?> CM
          </div>
          <?php } ?>
        </div>
      </div>
      <div class="col-md-12" >
        <div class="col-md-12 fw-bold text-center" >
          DESKRIPSI
        </div>
        <div class="col-md-12" style="text-align: justify;" >
          <?= $produk['deskripsi_produk'] ?>
        </div>
      </div>
      <center>
        <!-- <a href="#" class="btn btn-warning">Checkout</a> -->
        <?php if (!empty($_SESSION['id_user'])) { ?>
        <form action="../admin/prosedur.php" method="post">
          QTY : <input type="number" name="qty" min="0" value="1" class="col-md-1" ><br><br>
          <input type="hidden" name="id_user" value="<?= $_SESSION['id_user'] ?>" >
          <input type="hidden" name="id_produk" value="<?= $produk['id_produk'] ?>" >
          <!-- <button type="submit" name="checkout" value="checkout" class="btn btn-warning">checkout</button> -->
          <button type="submit" name="keranjang" value="keranjang" class="btn btn-primary" >keranjang</button>
          
        </form>
        <?php }else{ ?>
          <a href="login.php" class="btn btn-primary col-12" >Masukkan Keranjang</a>
        <?php } ?>
      </center>
    </div>
  </div>



</body>

</html>