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
    <header class="p-3 text-bg-dark">
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                  <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                  <img src="logo.png" alt="" width="125">
                  <h2>DINAS PENDIDIKAN KOTA BANDUNG</h2>
                </a>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 ms-auto" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>
        
              </div>
          </header>
        
          <div class="perjuangan mb-4">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-6 mt-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title text-center mb-4">Login</h5>
                      
                      <!-- Formulir Login -->
                      <form>
                        <!-- Nama Pengguna -->
                        <div class="mb-3">
                          <label for="username" class="form-label">Nama Pengguna:</label>
                          <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        
                        <!-- Nama Panjang -->
                        <div class="mb-3">
                          <label for="username" class="form-label">Nama Panjang:</label>
                          <input type="text" class="form-control" id="username" name="username" required>
                        </div>

                        <!-- Alamat -->
                        <div class="mb-3">
                          <label for="username" class="form-label">Alamat:</label>
                          <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        
                        <!-- Alamat Email -->
                        <div class="mb-3">
                          <label for="username" class="form-label">Alamat Email:</label>
                          <input type="text" class="form-control" id="username" name="password" required>
                        </div>

                        <!-- Kata Sandi -->
                        <div class="mb-3">
                          <label for="password" class="form-label"> Buat Sandi:</label>
                          <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <!-- Kata Sandi -->
                        <div class="mb-3">
                          <label for="password" class="form-label">Konfirmasi Sandi:</label>
                          <input type="password" class="form-control" id="password" name="password" required>
                        </div>
            
                        <!-- Tombol Login -->
                        <button type="button" class="btn btn-outline-warning me-2" onclick="window.location.href='halamanutama.php'">Login</button>
                        
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        
        <footer class="bg-dark text-white py-4">
            <div class="container">
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