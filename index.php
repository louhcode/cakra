<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primas - Cabling Support System & Accessories</title>
  <link rel="icon" type="image/png" href="images/icon.svg">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <style>
    /* ========== RESET & GLOBAL ========== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      line-height: 1.6;
      background: #fff;
      scroll-snap-type: y mandatory;
      overflow-y: scroll;
    }

    /* ========== NAVBAR ========== */
    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      padding: 20px 60px;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 1000;
      background-color: transparent;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
      flex-wrap: nowrap;
    }

    .navbar.scrolled {
      background-color: rgba(0, 36, 103, 0.95);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    .navbar-logo img {
      height: 50px;
      width: auto;
      margin: 0 10px;
    }

    .navbar a {
      color: white;
      margin: 0 20px;
      text-decoration: none;
      font-size: 14px;
    }

    .navbar a:hover {
      color: #f8b400;
    }

    /* Hamburger toggle button for mobile */
    .navbar-toggle {
      display: none;
      background: none;
      border: none;
      color: white;
      font-size: 1.5rem;
      cursor: pointer;
    }

    /* ========== HERO ========== */
    .hero {
      position: relative;
      width: 100%;
      height: 500px;
      overflow: hidden;
    }

    .hero-container {
      display: flex;
      height: 100%;
      transition: transform 0.8s ease;
    }

    .hero-slide {
      position: relative;
      flex: 0 0 100%;
      height: 100%;
    }

    .hero-slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .hero-caption {
      position: absolute;
      top: 40%;
      width: 100%;
      text-align: center;
      color: white;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6);
      pointer-events: none;
    }

    .hero-caption h1 {
      font-size: 3rem;
      margin-bottom: 0.5rem;
    }

    .hero-caption h2 {
      font-size: 1rem;
      font-weight: normal;
    }

    .hero .prev,
    .hero .next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(0, 0, 0, 0.4);
      color: white;
      border: none;
      padding: 12px;
      font-size: 24px;
      cursor: pointer;
      z-index: 2;
    }

    .hero .prev {
      left: 20px;
    }

    .hero .next {
      right: 20px;
    }

    /* ========== SECTION GENERAL ========== */
    .section {
      padding: 100px 50px;
      max-width: 1200px;
      margin: auto;
      text-align: center;
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 1s ease-out, transform 1s ease-out;
    }

    section.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .section h2 {
      margin-bottom: 20px;
      font-size: 2rem;
      color: #0d47a1;
    }

    .section h3 {
      margin-bottom: 16px;
      font-size: 1rem;
      font-weight: 400;
    }


    .section p {
      font-size: 1rem;
      color: #333;
      line-height: 1.8;
    }

    /* ========== PRODUCT GRID ========== */
    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-top: 40px;
    }

    .product {
      background: #ffffff;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product img {
      max-width: 100%;
      max-height: 150px;
      border-radius: 6px;
      margin-bottom: 8px;
    }

    .download-catalog {
      text-align: center;
      margin-top: 2rem;
    }

    /* Styling tombol */
    .btn-download {
      display: inline-block;
      padding: 0.6rem 1.2rem;
      font-size: 1rem;
      color: #0056b3;
      background: #fff;
      border: 2px solid #0056b3;
      border-radius: 4px;
      text-decoration: none;
      transition: background-color .2s, color .2s;
    }

    .btn-download:hover {
      background-color: #0056b3;
      color: #fff;
    }


    /* .product:hover {
      transform: scale(1.03);
      box-shadow: 0 4px 10px rgb(147, 150, 155);
    } */

    /* ========== REFERENSI PROYEK ========== */
    .ref-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 15px;
      margin: 100px 0;
    }

    .ref-item {
      width: 135px;
      text-align: center;
    }

    .ref-item img {
      display: block;
      margin: 0 auto 8px;
      max-width: 100%;
      height: auto;
    }

    .ref-item p {
      font-size: 0.85rem;
      color: #333;
    }

    .table-container {
      overflow-x: auto;
      margin-top: 40px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin: auto;
    }

    th,
    td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #0d47a1;
      color: white;
    }

    /* ========== CONTACT GRID ========== */
    .contact-grid {
      display: flex;
      justify-content: center;
      /* ratakan anak‐anak flex di tengah */
      flex-wrap: wrap;
      /* pakai wrap kalau layar sempit */
      gap: 30px;
      /* jarak antar kartu */
      margin-top: 20px;
    }

    .contact-card {
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
    }

    .contact-card h3 {
      margin-bottom: 12px;
      color: #0d47a1;
    }

    .contact-card p {
      margin: 8px 0;
      font-size: 0.95rem;
    }

    .contact-card a {
      color: #0d47a1;
      text-decoration: none;
    }

    .contact-card .btn-wa {
      display: inline-block;
      margin-top: 12px;
      background-color: #25D366;
      color: #fff;
      padding: 8px 16px;
      border-radius: 4px;
      font-weight: bold;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .contact-card .btn-wa:hover {
      background-color: #1ebe5d;
    }

    /* ========== FOOTER ========== */
    .footer {
      background: #1a2b56;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 60px;
    }

    .view-more-btn {
      background: none;
      border: none;
      color: #0d47a1;
      cursor: pointer;
      font-weight: 600;
      text-decoration: underline;
    }

    .view-more-btn:hover {
      color: #08306b;
    }

    /* ========== RESPONSIVE MEDIA QUERIES ========== */
    /* Tablet / small desktop */
    @media (max-width: 992px) {
      .navbar {
        padding: 15px 30px;
      }

      .navbar-logo img {
        height: 25px;
      }

      .navbar a {
        margin: 0 10px;
        font-size: 13px;
      }
    }

    /* Mobile landscape & portrait */
    @media (max-width: 768px) {

      /* Navbar */
      .navbar {
        justify-content: space-between;
        padding: 10px 20px;
      }

      .navbar-toggle {
        display: block;
      }

      .navbar a {
        display: none;
        width: 100%;
        margin: 8px 0;
        text-align: center;
        font-size: 10px;
      }

      .navbar.open a {
        display: block;
      }

      /* Hero */
      .hero {
        height: 350px;
      }

      .hero-caption h1 {
        font-size: 2rem;
      }

      .hero-caption h2 {
        font-size: 0.9rem;
      }

      /* Section */
      .section {
        padding: 60px 20px;
      }

      .section h2 {
        font-size: 1.75rem;
      }

      /* Product grid */
      .product-grid {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 16px;
        margin-top: 30px;
      }

      .product {
        padding: 16px;
      }

      .product img {
        max-height: 120px;
        margin-bottom: 6px;
      }

      /* Referensi grid */
      .ref-grid {
        grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
        gap: 16px;
        margin: 60px 0;
      }

      .ref-item {
        width: 120px;
        /* dari 150px turun ke 120px */
      }

      .ref-item img {
        max-width: 100px;
        /* batasi lebar gambar */
        margin-bottom: 6px;
        /* spasi kalau perlu dipangkas */
      }

      .table-container {
        margin-top: 20px;
        /* kurangi jarak atas */
      }

      table {
        width: 100%;
        /* pastikan fill container */
        font-size: 0.85rem;
        /* kecilkan font */
      }

      th,
      td {
        padding: 6px 8px;
        /* lebih tipis */
      }

      /* Contact cards become single column */
      .contact-grid {
        grid-template-columns: 1fr;
        gap: 20px;
      }

      .hero .prev,
      .hero .next {
        padding: 10px;
        /* sedikit lebih kecil */
        font-size: 20px;
        /* huruf/icon lebih kecil */
      }

      .hero .prev {
        left: 15px;
      }

      .hero .next {
        right: 15px;
      }
    }

    /* Small phones */
    @media (max-width: 480px) {
      .hero {
        height: 300px;
      }

      .hero .prev,
      .hero .next {
        padding: 8px;
        /* minimal padding */
        font-size: 16px;
        /* icon lebih tipis */
      }

      .hero .prev {
        left: 10px;
      }

      .hero .next {
        right: 10px;
      }

      .hero-caption h1 {
        font-size: 1rem;
      }

      .hero-caption h2 {
        font-size: 0.7rem;
      }

      .section h2 {
        font-size: 1.3rem;
      }

      .section p {
        font-size: 0.7rem;
      }

      .table-container {
        margin-top: 16px;
      }

      .ref-item {
        width: 100px;
        /* box semakin kecil */
      }

      .ref-item img {
        max-width: 80px;
        /* gambar lebih kecil lagi */
        margin-bottom: 4px;
      }

      table {
        font-size: 0.75rem;
      }

      th,
      td {
        padding: 4px 6px;
      }

      .product-grid {
        grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
        gap: 12px;
        margin-top: 20px;
      }

      .product {
        padding: 12px;
      }

      .product img {
        max-height: 100px;
        margin-bottom: 4px;
      }

      .product h3 {
        font-size: 0.9rem;
      }
    }
  </style>
</head>

<body>
  <div class="navbar" id="navbar">
    <a href="#about">Tentang Produk</a>
    <a href="#produk">Produk</a>
    <div class="navbar-logo">
      <a href="#">
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
          <h1>HIGH QUALITY</h1>
          <h2>Standar mutu terbaik untuk sistem penyangga kabel</h2>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="hero-slide">
        <img src="images/HR/HR-2.svg" alt="Low Price">
        <div class="hero-caption">
          <h1>LOW PRICE</h1>
          <h2>Harga kompetitif tanpa mengurangi kualitas</h2>
        </div>
      </div>
      <!-- Slide 3 -->
      <div class="hero-slide">
        <img src="images/HR/HR-3.svg" alt="Good Service">
        <div class="hero-caption">
          <h1>GOOD SERVICE</h1>
          <h2>Layanan cepat dan andal untuk kepuasan Anda</h2>
        </div>
      </div>
    </div>

    <button class="prev" onclick="moveSlide(-1)">❮</button>
    <button class="next" onclick="moveSlide(1)">❯</button>
  </section>

  <section class="section" id="about">
    <h2>Tentang Produk</h2>
    <p>
      Primas adalah merek sistem penyangga kabel (cable management) yang diperkenalkan pada tahun 2020. Dirancang khusus untuk memenuhi kebutuhan instalasi kabel listrik dan data di berbagai sektor—mulai dari gedung komersial, industri berat, hingga proyek infrastruktur—Primas mengutamakan kekuatan, efisiensi, keandalan, dan kemudahan instalasi.
    </p>
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
        <h3>Ladder - SLW </h3>
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
        <h3>Cross Tray</h3>
        <!-- <p>Solusi tepat untuk pengaturan kabel secara vertikal dan horizontal.</p> -->
      </div>
    </div>
    <div class="download-catalog">
      <a href="files/PRODUCT CATALOG PRIMAS.pdf" class="btn-download">
        Download Product Catalog
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
      <button type="button" class="view-more-btn" id="open-modal">Klik untuk melihat selengkapnya</button>
    </div>
  </section>

  <section class="section" id="kontak">
    <h2>Kontak</h2>
    <p>Untuk detail dan dukungan lebih lanjut, silakan menghubungi kami pada kontak berikut.</p>

    <div class="contact-grid">
      <!-- Contact Person 1 -->
      <div class="contact-card">
        <h3>Contact 1</h3>
        <p><strong>Email:</strong>
          <a href="mailto:contact1@primas.com">contact1@primas.com</a>
        </p>
        <p><strong>Telp/WA:</strong>
          <a href="tel:+628111345013">+62 811-1345-013</a>
        </p>
        <a
          class="btn-wa"
          href="https://wa.me/6281122233344?text=Halo%20Budi,%20saya%20ingin%20tanya%20mengenai%20produk%20Primas"
          target="_blank"
          rel="noopener">
          Chat via WhatsApp
        </a>
      </div>

      <!-- Contact Person 2 -->
      <div class="contact-card">
        <h3>Contact 2</h3>
        <p><strong>Email:</strong>
          <a href="mailto:contact1@primas.com">contact1@primas.com</a>
        </p>
        <p><strong>Telp/WA:</strong>
          <a href="tel:+628111345013">+62 811-1345-013</a>
        </p>
        <a
          class="btn-wa"
          href="https://wa.me/6281122233344?text=Halo%20Budi,%20saya%20ingin%20tanya%20mengenai%20produk%20Primas"
          target="_blank"
          rel="noopener">
          Chat via WhatsApp
        </a>
      </div>
    </div>
  </section>



  <footer class="footer">
    &copy; 2025 Primas. All rights reserved.
  </footer>

  <script src="js/carousel.js"></script>
  <script src="js/navbar-scroll.js"></script>
  <script src="js/section-observer.js"></script>
  <script src="js/navbar-toggle.js"></script>
  <script src="js/sheet-table.js"></script>

</body>

</html>