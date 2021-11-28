<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <title>Artikel Kimia X Bahasa Indonesia</title>
  </head>
  <body>
    <div id="particles-js"></div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container blur">
        <a class="navbar-brand" href="http://www.sman31jakarta.sch.id/">
          <img src="properti/logo .jpeg" class="gambar" alt="" width="25" height="35" />
          <b style="color: #e4dede; margin-left: 10px"> KELOMPOK 8</b>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link tombol" href="artikel.php">Artikel</a>
            <a class="nav-link tombol" href="anggota.php">Anggota</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Judul -->
    <div class="container bodi" style="margin-top: 50px;" data-aos-duration="1000" data-aos="fade-down">
      <h1 class="pt-5  fw-bold fs-1" style="text-align: center;"></h1>
      <ul class="mb-5 pb-5 ">
        <li class="mt-5">
          <img  src="properti/daffa2.jpeg" alt="daffaaryapp" width="200" class=" rounded-circle mb-3 rondo kotak img-thumbnail" />
          <h4>Nama: Daffa Aryasatya Pratama</h4>
          <h4>Absen: 9</h4>
          <h4>Kelas: XII IPA 4</h4>
          <h4>Sekolah: SMAN 31 JAKARTA</>
        </li>
        <li class="mt-5">
          <img  src="properti/yudho2.jpeg" alt="" width="200" class=" rounded-circle mb-3 kotak" />
          <h4>Nama: Yudho Keita Siahaan</>
          <h4>Absen: 35</>
          <h4>Kelas: XII IPA 4</h4>
          <h4>Sekolah: SMAN 31 JAKARTA</>
        </li>
        <li class="mt-5">
          <img  src="properti/rayyan2.jpeg" alt="" width="200" class=" rounded-circle mb-3 rondo kotak" />
          <h4>Nama: Muhammad Rayyan Zahri Lubis</>
          <h4>Absen: 18</>
          <h4>Kelas: XII IPA 4</>
          <h4>Sekolah: SMAN 31 JAKARTA</h3>
        </li>
        <li class="mt-5 ">
          <img  src="properti/ridwan2.jpeg" alt="" width="200" class=" rounded-circle mb-3 kotak" />
          <h4>Nama: Ridwan Ferdiansyah</h4>
          <h4>Absen: 28</h4>
          <h4>Kelas: XII IPA 4</h4>
          <h4>Sekolah: SMAN 31 JAKARTA</h4>
        </li>
      </ul>
    </div>

    <!-- Footer -->
    <footer class="bg-warning text-center p-3 mt-5">
      <p class="mySes">Copyright 2021 | created by kelompok 8 <i class="bi bi-emoji-sunglasses"></i></p>
      <a href="https://github.com/daffaaryapp" target="_blank" class="btn btn-primary mySos ib-t"> <i class="bi bi-github"></i></a>
      <a href="https://www.instagram.com/daffa_aryasatya_/" target="_blank" class="btn btn-primary mySos"> <i class="bi bi-instagram"></i></a>
    </footer>
    <!-- Akhir Footer -->

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/TextPlugin.min.js"></script>
    <script>
      // plugin gsap
      gsap.registerPlugin(TextPlugin);
      gsap.to(".fs-1", { duration: 3, text: "Anggota Kelompok 8" });
      gsap.from(".navbar", { y: -100, ease: "back.out(1.7)", duration: 2 });
    </script>
    <!-- Tilt js -->
    <script type="text/javascript" src="js/vanilla-tilt.min.js"></script>
    <script>
      VanillaTilt.init(document.querySelectorAll(".kotak"), {
        max: 25,
        speed: 500,
      });
    </script>
  </body>
</html>
