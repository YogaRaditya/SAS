<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
    <body>
    <header class="p-3 text-bg-dark text-center">
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                  <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                  <img src="logo.png" alt="" width="125">
                  <h2>DINAS PENDIDIKAN  KOTA BANDUNG</h2>
                </a>
        
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 ms-auto" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>

                <div class="w">
                  <button type="button" class="btn btn-outline-light me-2" onclick="window.location.href='halamanutama.php'">Logut</button>
                  
                </div>
              </div>
          </header>

          <header>
          <ul class="nav col-12 mb-md-0 bg-dark text-light ms-auto">
        <li><a href="#" class="nav-link px-2 link-secondary" onclick="window.location.href='Beranda.php'">B e r a n d a</button></a></li>
        <li><a href="#" class="nav-link px-2 link-secondary" onclick="window.location.href='tokoh.php'">t o k o h</button></a></li>
        <li><a href="#" class="nav-link px-2 link-secondary" onclick="window.location.href='komentar.php'">k o m e n t a r </button></a></li>
      </ul>
         </header>

            <form action="" method="POST" name="nama">
                <div class="form">
                    <div class="container">
                        <div class="row mb-8">
                            <div class="text-center">
                                <h1>TINGGALKAN KOMENTAR UNTUK PENGEMBANGAN KAMI</h1>
                             </div>
                            
                    

              <form action=""method="POST" name="nama">
                <div class="form-group">
             <label for="exampleInputEmail1">Nama Pengguna</label>
             <input type="text" class="form-control" id="exampleInputEmail1" name="nama">
                <div class="form-group">
             <label for="exampleInputkomentar">Komentar</label>
             <input type="komentar" class="form-control" id="exampleInputkomentar" name="komentar"><br>
               <button type="submit" class="btn btn-primary" name="submit">kirim</button>
             </form>
             <hr>

<?php
   if(isset($_POST['submit'])){
        $barang =
   $_POST['nama'];
        $jumlah = 
   $_POST['komentar'];
        $harga = 
   $_POST['submit'];

   echo "<div class='container'>";
   echo "<h3 class='text-md-start'>TERIMA KASIH DAN PEMENANG GIVE AWAY MEYUSUSUL</h3>";

   echo "<hr><h3 class='text-md-start'>$harga</h3>";
   echo "</div>";
   };
?>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
                    
                    <footer class="bg-dark text-white py-4">
                <div class="row mb-5">
                  <div class="col-md-2">
                    <img src="logo.png" alt="" width="200">
                  </div>
                  <div class="col-md-4">
                    <h3>Sejarah Kota Bandung</h3>
                    <p>Peristiwa Bandung Lautan Api adalah peristiwa kebakaran besar yang terjadi di Bandung, provinsi Jawa Barat, Indonesia pada 23 Maret 1946.</p>
                  </div>
                  <div class="col-md-2 ml-auto ">
                    <h4>Useful Links</h4>
                    <ul class="list-unstyled">
                      <li><a href="#">Beranda</a></li>
                      <li><a href="#">Tentang</a></li>
                      <li><a href="#">Fitur</a></li>
                      <li><a href="#">News</a></li>
                      <li><a href="#">komentar</a></li>
                    </ul>
                    </div>
                  <div class="col-md-2 ml-auto ">
                    <h4>Contact Info</h4>
                    <a href="#" ><i class="bi bi-envelope mr-2"></i>yogaradityadr@gmail.com</a><br>
                    <a href="#" ><i class="bi bi-telephone mr-2"></i>+62 858 6216 1589</a><br>
                    <a href="#" ><i class="bi bi-geo-alt-fill mr-2"></i>Kab Bandung, Jawa Barat</a><br>
                  </div>
                </div>
                  <p class="text-center">Copyright ©2023 presented By Yoga Radityadr</p>
              </div>
            </footer>


         
        </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </html>