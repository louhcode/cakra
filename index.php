<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primas - Cabling Support System & Accessories</title>
  <link rel="icon" type="image/png" href="images/icon.svg">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="navbar" id="navbar">
    <a href="#about">Tentang Produk</a>
    <a href="#produk">Produk</a>
    <div class="navbar-logo">
      <a href="/">
        <img src="images/PRIMAS.svg" alt="Primas Logo" />
      </a>
    </div>
    <a href="#referensi-proyek">Referensi Proyek</a>
    <a href="#kontak">Kontak</a>
    <button class="navbar-toggle" id="navbar-toggle" aria-label="Toggle navigation">☰</button>

  </div>

  <section class="hero">
    <div class="hero-container">
      <!-- Slide 1 -->
      <div class="hero-slide">
        <img src="images/HR/HR-1.svg" alt="High Quality">
        <div class="hero-caption">
          <h2>Primas Cabling Management Solutions</h2>
          <h1>HIGH QUALITY</h1>
          <h2>Standar mutu terbaik untuk sistem penyangga kabel</h2>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="hero-slide">
        <img src="images/HR/HR-2.svg" alt="Low Price">
        <div class="hero-caption">
          <h2>Primas Cabling Management Solutions</h2>
          <h1>LOW PRICE</h1>
          <h2>Harga kompetitif tanpa mengurangi kualitas</h2>
        </div>
      </div>
      <!-- Slide 3 -->
      <div class="hero-slide">
        <img src="images/HR/HR-3.svg" alt="Good Service">
        <div class="hero-caption">
          <h2>Primas Cabling Management Solutions</h2>
          <h1>GOOD SERVICE</h1>
          <h2>Layanan cepat dan andal untuk kepuasan Anda</h2>
        </div>
      </div>
    </div>

    <button class="prev" onclick="moveSlide(-1)">❮</button>
    <button class="next" onclick="moveSlide(1)">❯</button>
  </section>

  <section class="section" id="about">
    <h2>Primas Tray & Ladder</h2>

    <p>
      Primas Cable Tray & Ladder Solutions, produsen lokal terkemuka sejak 2007, menghadirkan solusi instalasi kabel yang komprehensif—mulai dari Cable Tray & Ladder hingga Terminal Box dan Pintu Darurat—dengan desain dan manufaktur yang sepenuhnya menyesuaikan kebutuhan Anda. Berbekal fasilitas produksi modern, kami mengolah bahan berkualitas tinggi seperti plat besi SPHC, aluminium, dan stainless steel untuk menghasilkan berbagai bentuk serta ukuran sesuai standar industri. Setiap produk dapat difinishing sesuai permintaan, termasuk Hot Dipped Galvanized (HDG), powder coating, maupun electroplating, demi menjamin ketahanan korosi dan umur pakai yang optimal, sekaligus memenuhi persyaratan Standar NEMA untuk keamanan dan performa instalasi kabel.
    </p>

    <!-- Di Tengah Sini DIkasih Konten Gambar ini -->
    <figure class="about-figure">
      <img src="images/cableSS.svg"
        alt="Primas Tray & Ladder dalam aplikasi industri" />
      <!-- <figcaption>Contoh penerapan Primas Tray & Ladder di lapangan</figcaption> -->
    </figure>

    <p>
      Dalam kondisi cuaca ekstrem atau lingkungan dengan tingkat korosi tinggi, rangkaian Ladder Cable baja las Primas menjadi pilihan ideal berkat kemampuannya menahan beban kabel berat pada bentang panjang. Sistem ini tersedia dalam varian beban sedang, berat, serta ekstra berat, dan dapat diproduksi menggunakan material pra-galvanis, hot dipped galvanis, atau stainless steel. Keandalan dan daya tahan produk kami telah terbukti dalam berbagai sektor—mulai dari minyak dan gas, petrokimia, energi, hingga fasilitas manufaktur—yang menuntut ketahanan terhadap atmosfer bersalinitas dan paparan bahan korosif ringan. Percayakan desain, presisi, dan daya tahan instalasi kabel Anda kepada Primas Cable Tray & Ladder Solutions sebagai mitra andal untuk solusi jangka panjang.
    </p>
  </section>

  <section id="features" class="section">
    <h2>Keunggulan Primas</h2>
    <div class="feature-grid">
      <div class="feature-card">
        <div class="feature-icon">
          <!-- contoh pakai SVG atau font-icon -->
          🔒
        </div>
        <h3>Bahan Berkualitas Tinggi</h3>
        <p>Kami hanya menggunakan plat SPHC, aluminium & stainless steel terbaik untuk memastikan kekuatan dan ketahanan.</p>
        <!-- <a href="#" class="feature-link">→</a> -->
      </div>

      <div class="feature-card">
        <div class="feature-icon">🛠️</div>
        <h3>Desain & Kustomisasi</h3>
        <p>Solusi yang sepenuhnya disesuaikan dengan kebutuhan proyek Anda, mulai dari ukuran hingga finishing.</p>
        <!-- <a href="#" class="feature-link">→</a> -->
      </div>

      <div class="feature-card">
        <div class="feature-icon">🌧️</div>
        <h3>Ketahanan Korosi</h3>
        <p>Finishing HDG, powder coating atau electroplating menjamin umur pakai yang optimal di segala kondisi.</p>
        <!-- <a href="#" class="feature-link">→</a> -->
      </div>

      <div class="feature-card">
        <div class="feature-icon">⚙️</div>
        <h3>Standar Industri NEMA</h3>
        <p>Memenuhi persyaratan keamanan dan performa kabel sesuai regulasi NEMA Amerika Serikat.</p>
        <!-- <a href="#" class="feature-link">→</a> -->
      </div>

  </section>

  <section class="section" id="produk">
    <h2>Produk Kami</h2>
    <div class="product-grid">
      <div class="product">
        <img src="images/pi/1.svg" alt="Produk 1">
        <h3>Cover Tray & Ladder </h3>
        <!-- <p>Solusi rapi dan aman untuk jalur kabel horizontal.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/2.svg" alt="Produk 2">
        <h3>Straight Ladder </h3>
        <!-- <p>Kuat dan efisien untuk kabel berat dalam jalur vertikal maupun horizontal.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/3.svg" alt="Produk 3">
        <h3>Straight Tray </h3>
        <!-- <p>Berbagai aksesoris pendukung untuk koneksi dan penguatan sistem.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/4.svg" alt="Produk 4">
        <h3>Elbow Radius</h3>
        <!-- <p>Solusi tepat untuk pengaturan kabel secara vertikal dan horizontal.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/5.svg" alt="Produk 5">
        <h3>Elbow Siku </h3>
        <!-- <p>Solusi rapi dan aman untuk jalur kabel horizontal.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/6.svg" alt="Produk 6">
        <h3>Inside Riser </h3>
        <!-- <p>Kuat dan efisien untuk kabel berat dalam jalur vertikal maupun horizontal.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/7.svg" alt="Produk 7">
        <h3>Cable Cage</h3>
        <!-- <p>Berbagai aksesoris pendukung untuk koneksi dan penguatan sistem.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/8.svg" alt="Produk 8">
        <h3>Reducer</h3>
        <!-- <p>Solusi tepat untuk pengaturan kabel secara vertikal dan horizontal.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/9.svg" alt="Produk 9">
        <h3>Left Hand Reducer</h3>
        <!-- <p>Solusi tepat untuk pengaturan kabel secara vertikal dan horizontal.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/10.svg" alt="Produk 10">
        <h3>Tee Tray</h3>
        <!-- <p>Solusi tepat untuk pengaturan kabel secara vertikal dan horizontal.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/11.svg" alt="Produk 1">
        <h3>Cross Tray</h3>
        <!-- <p>Solusi rapi dan aman untuk jalur kabel horizontal.</p> -->
      </div>      
      <div class="product">
        <img src="images/pi/13.svg" alt="Produk 3">
        <h3>Elbow </h3>
        <!-- <p>Berbagai aksesoris pendukung untuk koneksi dan penguatan sistem.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/14.svg" alt="Produk 4">
        <h3>Inside Ladder</h3>
        <!-- <p>Solusi tepat untuk pengaturan kabel secara vertikal dan horizontal.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/15.svg" alt="Produk 5">
        <h3>Outside Ladder</h3>
        <!-- <p>Solusi rapi dan aman untuk jalur kabel horizontal.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/16.svg" alt="Produk 6">
        <h3>Tee Ladder </h3>
        <!-- <p>Kuat dan efisien untuk kabel berat dalam jalur vertikal maupun horizontal.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/20.svg" alt="Produk 7">
        <h3>Cable Cage</h3>
        <!-- <p>Berbagai aksesoris pendukung untuk koneksi dan penguatan sistem.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/18.svg" alt="Produk 8">
        <h3>Reducer</h3>
        <!-- <p>Solusi tepat untuk pengaturan kabel secara vertikal dan horizontal.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/19.svg" alt="Produk 9">
        <h3>Cross Ladder</h3>
        <!-- <p>Solusi tepat untuk pengaturan kabel secara vertikal dan horizontal.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/17.svg" alt="Produk 10">
        <h3>Accessories</h3>
        <!-- <p>Solusi tepat untuk pengaturan kabel secara vertikal dan horizontal.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/21.svg" alt="Produk 10">
        <h3>Accessories</h3>
        <!-- <p>Solusi tepat untuk pengaturan kabel secara vertikal dan horizontal.</p> -->
      </div>
    </div>
    <div class="download-catalog">
      <a href="files/product_catalog_primas.pdf" download="product_catalog_primas.pdf" class="btn-download">
        Unduh Katalog
      </a>
    </div>
  </section>

  <!-- New Referensi Proyek Section -->
  <section class="section" id="referensi-proyek">
    <h2>Referensi Proyek</h2>

    <!-- Grid ikon perusahaan -->
    <div class="ref-grid">
      <div class="ref-item">
        <img src="images/RP/RP-1.svg" alt="Logo Perusahaan 1">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-2.svg" alt="Logo Perusahaan 2">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-3.svg" alt="Logo Perusahaan 3">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-4.svg" alt="Logo Perusahaan 4">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-5.svg" alt="Logo Perusahaan 5">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-6.svg" alt="Logo Perusahaan 6">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-7.svg" alt="Logo Perusahaan 7">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-8.svg" alt="Logo Perusahaan 8">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-9.svg" alt="Logo Perusahaan 9">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-10.svg" alt="Logo Perusahaan 10">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-11.svg" alt="Logo Perusahaan 11">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-12.svg" alt="Logo Perusahaan 12">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-13.svg" alt="Logo Perusahaan 12">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-14.svg" alt="Logo Perusahaan 12">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-15.svg" alt="Logo Perusahaan 12">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-16.svg" alt="Logo Perusahaan 12">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-17.svg" alt="Logo Perusahaan 12">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-18.svg" alt="Logo Perusahaan 12">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-19.svg" alt="Logo Perusahaan 12">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-20.svg" alt="Logo Perusahaan 12">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-21.svg" alt="Logo Perusahaan 12">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-22.svg" alt="Logo Perusahaan 12">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-23.svg" alt="Logo Perusahaan 12">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-24.svg" alt="Logo Perusahaan 12">
      </div>
      <div class="ref-item">
        <img src="images/RP/RP-25.svg" alt="Logo Perusahaan 12">
      </div>
      <!-- ...tambahkan sesuai jumlah -->
    </div>
    <div id="referensi-proyek" class="table-container">
      <table id="sheet-table">
        <thead>
          <tr></tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>

    <div class="view-more" style="margin: 50px 0;">
      <a href="rp.php" class="view-more-btn">Klik untuk melihat selengkapnya</a>
    </div>
  </section>

  <section class="section" id="kontak">
    <h2>Kontak</h2>
    <p>Untuk detail dan dukungan lebih lanjut, silakan menghubungi kami pada kontak berikut.</p>

    <ul class="contact-list">
      <li>
        <h3>Henry DS.</h3>
        <p><strong>Email:</strong> <a href="mailto:primastray@yahoo.com">primastray@yahoo.com</a></p>
        <p><strong>Telp/WA:</strong> <a href="tel:+628111345013">+62 811-1345-013</a></p>
        <a class="btn-wa" href="https://wa.me/6281122233344?text=Halo%20Henry,%20saya%20ingin%20tanya%20mengenai%20produk%20Primas" target="_blank" rel="noopener">
          Chat via WhatsApp
        </a>
      </li>
      <li>
        <h3>Yusuf K.</h3>
        <p><strong>Email:</strong> <a href="mailto:primastray@yahoo.com">primastray@yahoo.com</a></p>
        <p><strong>Telp/WA:</strong> <a href="tel:+6287882960991">+62 878-8296-0991</a></p>
        <a class="btn-wa" href="https://wa.me/6287882960991?text=Halo%20Yusuf,%20saya%20ingin%20tanya%20mengenai%20produk%20Primas" target="_blank" rel="noopener">
          Chat via WhatsApp
        </a>
      </li>
    </ul>
  </section>

  <footer class="footer">
    <p>&copy; 2025 Primas. All rights reserved.</p>
  </footer>


  <script src="js/carousel.js"></script>
  <script src="js/navbar-scroll.js"></script>
  <script src="js/section-observer.js"></script>
  <script src="js/navbar-toggle.js"></script>
  <script src="js/sheet-table.js"></script>

</body>

</html>