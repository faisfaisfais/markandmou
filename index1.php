<?php
$produk = [
  [
    "foto" => "item2.png",
    "nama" => "Hexa Watch White",
    "harga" => "49.0000",
    "deskripsi" => "Hexa Watch Black jam tangan hitam yang cocok untuk nongkrong dan dipakai untuk bekerja, kuliah, sekolah dan lain-lainnya",
  ],
  [
    "foto" => "item1.png",
    "nama" => "Hexa Watch Black",
    "harga" => "49.000",
    "deskripsi" => "Hexa Watch white jam tangan putih yang cocok untuk nongkrong dan dipakai untuk bekerja, kuliah, sekolah dan lain-lainnya",
  ],
  [
    "foto" => "item3.png",
    "nama" => "Hexa Watch Pink",
    "harga" => "49.000",
    "deskripsi" => "Hexa Watch Pink jam tangan pink yang cocok untuk nongkrong dan dipakai untuk bekerja, kuliah, sekolah dan lain-lainnya",
  ],
  [
    "foto" => "item4.png",
    "nama" => "Hexa Watch Purple",
    "harga" => "49.000",
    "deskripsi" => "Hexa Watch purple jam tangan purple yang cocok untuk nongkrong dan dipakai untuk bekerja, kuliah, sekolah dan lain-lainnya"
  ],
  [
    "foto" => "item5.png",
    "nama" => "Hexa Watch Clear",
    "harga" => "49.000",
    "deskripsi" => "Hexa Watch Clear jam tangan abu-abu yang cocok untuk nongkrong dan dipakai untuk bekerja, kuliah, sekolah dan lain-lainnya"
  ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rumah Kopi Senja</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- My Style -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!-- Navbar start -->
  <nav class="navbar">
    <a href="#" class="navbar-logo">Mark&Mou<span> Watches</span>.</a>

    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#menu">Product</a>
      <a href="#contact">Contact</a>
    </div>

    <div class="navbar-extra">
      <a href="#" id="search"><i data-feather="search"></i></a>
      <a href="#" id="shoping-cart"><i data-feather="shopping-cart"></i></a>
    </div>
  </nav>
  <!-- Navbar end -->

  <!-- Hero Section Start -->
  <section class="hero" id="home">
    <main class="content">
      <h1><span>Mark&Mou</span> cocok untuk pria dan wanita</h1>
      <p>
        Temukan pesona waktu di pergelangan tangan anda dalam setiap detik berharga, jam tangan MarkMou hadir sebagai simbol keanggunan dan keapresiasian
      </p>
      <a href="#menu" class="cta">Beli Sekarang</a>
    </main>
  </section>
  <!-- Hero Section End -->

  <!-- About Section Start -->
  <section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>
    <div class="row">
      <div class="about-img">
        <img src="img/about.jpg" alt="tentang kami" />
      </div>
      <div class="content">
        <h3><span>Mark and Mou:</span> Destinasi Anda untuk Jam Tangan Lucu yang Menawan!</h3>
        <p>
          Selamat datang di Mark and Mou, rumah bagi jam tangan lucu yang memikat hati! Kami menghadirkan koleksi jam tangan yang tidak hanya fungsional, tetapi juga memancarkan kegembiraan dan keunikannya sendiri. Dari pola lucu hingga karakter kartun yang menggemaskan, kami menawarkan berbagai macam desain yang menghadirkan senyuman pada wajah Anda setiap kali Anda memeriksanya.
        </p>
        <br>
        <p>
          Kualitas adalah prioritas utama kami, dengan setiap jam tangan dibuat dengan teliti menggunakan bahan-bahan berkualitas tinggi. Jadikan setiap momen lebih ceria dan bergaya bersama Mark and Mou, dan temukan jam tangan lucu yang menjadi ungkapan pribadi Anda hari ini!
        </p>
      </div>
    </div>
  </section>
  <!-- About Section End -->

  <!-- Section Product Start -->
  <section id="menu" class="menu">
    <h2><span>Pilihan</span> Jam</h2>
    <p>
      Temukan koleksi jam terbaik kami yang menggabungkan keanggunan dan ketangguhan. Mari jelajahi
      dan temukan jam yang sesuai dengan gaya dan kebutuhan Anda!
    </p>
    <div class="row">
      <?php foreach ($produk as $p) : ?>
        <div class="menu-card">
          <img src="img/Product/<?= $p["foto"]; ?>" alt="Hexa Watch Black" class="menu-card-img" />
          <h3 class="menu-card-tittle">&#8226; <?= $p["nama"]; ?> &#8226;</h3>
          <p class="menu-card-price-normal">Rp 100.000</p>
          <p class="menu-card-price">Rp <?= $p["harga"]; ?></p><br><br>
          <a href="index2.php?foto=<?= $p["foto"]; ?>&nama=<?= $p["nama"]; ?>&harga=<?= $p["harga"]; ?>&deskripsi=<?= $p["deskripsi"]; ?>" class="periksa">Periksa</a>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
  <!-- Section Menu End -->

  <!--Contact Session Start  -->
  <section id="contact" class="contact">
    <h2><span>Kontak</span> Kami</h2>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, laboriosam.
    </p>

    <div class="row">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.735589558021!2d110.44156015000001!3d-7.068136699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59d2b4e9dce1%3A0x3024e2b88cc96e8!2sSample%20Location!5e0!3m2!1sen!2suk!4v1649103225811!5m2!1sen!2suk" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

      <form id="whatsappForm" action="https://api.whatsapp.com/send" method="GET" target="_blank">
        <div class="input-group">
          <i class="bi bi-person-circle"></i>
          <input type="text" name="nama" placeholder="Nama Anda" required />
        </div>
        <div class="input-group">
          <i class="bi bi-chat-right-text"></i>
          <input type="text" name="pesan" placeholder="Pesan Anda" required></input>
        </div>
        <button type="submit" class="btn"><i class="bi bi-send"></i> Kirim pesan via WhatsApp</button>
      </form>
    </div>
  </section>
  <!--Contact Session End  -->

  <!-- Footer Start -->
  <footer>
    <div class="socials">
      <a href="https://www.instagram.com/markandmou" target="_blank"><i class="bi bi-instagram"></i></a>
      <a href="https://www.tiktok.com/@markandmou" target="_blank"><i class="bi bi-tiktok"></i></a>
      <a href="https://api.whatsapp.com/send?phone=6287814837560" target="_blank"><i class="bi bi-whatsapp"></i></a>
    </div>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="credit">
      <p>Created by <a href="">Kelompok 04</a> | &copy; 2024</p>
    </div>
  </footer>
  <!-- Footer End -->

  <!-- Feather Icons -->
  <script>
    feather.replace();
  </script>

  <!-- My Java Script -->
  <script src="js/script.js"></script>
</body>

</html>