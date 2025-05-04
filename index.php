<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primas - Cabling Support System & Accessories</title>
  <link rel="icon" type="image/png" href="images/icon.svg">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <style>
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
    }

    .navbar.scrolled {
      background-color: rgba(0, 36, 103, 0.95);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    .navbar-logo img {
      height: 30px;
      width: auto;
      margin: 0 10px;
    }

    .navbar a {
      color: white;
      margin-left: 0;
      margin: 0 20px;
      text-decoration: none;
      font-size: 14px;
    }

    .navbar a:hover {
      color: #f8b400;
    }

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

    .section p {
      font-size: 1rem;
      color: #333;
      line-height: 1.8;
    }

    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-top: 40px;
    }

    .product {
      background: #f9f9f9;
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

    .product:hover {
      transform: scale(1.03);
      box-shadow: 0 4px 10px rgb(147, 150, 155);
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

    .footer {
      background: #1a2b56;
      color: white;
      text-align: center;
      padding: 20px 20px;
      margin-top: 60px;
    }

    .footer .social-icons {
      margin-top: 20px;
    }

    .footer .social-icons a {
      color: white;
      margin: 0 10px;
      font-size: 1.5rem;
      text-decoration: none;
    }

    .footer .social-icons a:hover {
      color: #f8b400;
    }

    .ref-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      /* center setiap baris */
      gap: 20px;
      margin: 100px 0;
    }

    .ref-item {
      width: 150px;
      /* atur lebar box logo */
      text-align: center;
    }

    .ref-item img {
      display: block;
      margin: 0 auto 8px;
      max-width: 100%;
      /* isi penuh lebar .ref-item */
      height: auto;
      /* pertahankan rasio */
      /* opsional: batasi tinggi kalau gambarnya terlalu tinggi */
      /* max-height: 120px; */
    }


    .ref-item p {
      font-size: 0.85rem;
      color: #333;
    }

    /* Grid untuk contact card */
    .contact-grid {
      display: grid;
      grid-template-columns: repeat(3, minmax(240px, 1fr));
      gap: 30px;
      margin-top: 20px;
    }

    /* Card styling */
    .contact-card {
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
      /* box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); */
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

    /* .contact-card a:hover {
      text-decoration: underline;
    } */

    /* Tombol WhatsApp khusus di dalam card */
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
  </div>

  <section class="hero">
    <div class="hero-container">
      <!-- Slide 1 -->
      <div class="hero-slide">
        <img src="images/hero1.svg" alt="High Quality">
        <div class="hero-caption">
          <h1>HIGH QUALITY</h1>
          <h2>Standar mutu terbaik untuk sistem penyangga kabel</h2>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="hero-slide">
        <img src="images/hero2.svg" alt="Low Price">
        <div class="hero-caption">
          <h1>LOW PRICE</h1>
          <h2>Harga kompetitif tanpa mengurangi kualitas</h2>
        </div>
      </div>
      <!-- Slide 3 -->
      <div class="hero-slide">
        <img src="images/hero3.svg" alt="Good Service">
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
        <h3>Cover Straight Tray & Ladder </h3>
        <!-- <p>Solusi rapi dan aman untuk jalur kabel horizontal.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/2.svg" alt="Produk 2">
        <h3>Straight Ladder Type - SLW </h3>
        <!-- <p>Kuat dan efisien untuk kabel berat dalam jalur vertikal maupun horizontal.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/3.svg" alt="Produk 3">
        <h3>Straight Tray Type - C </h3>
        <!-- <p>Berbagai aksesoris pendukung untuk koneksi dan penguatan sistem.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/4.svg" alt="Produk 4">
        <h3>Produk 4</h3>
        <!-- <p>Solusi tepat untuk pengaturan kabel secara vertikal dan horizontal.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/5.svg" alt="Produk 5">
        <h3>Cover Straight Tray & Ladder </h3>
        <!-- <p>Solusi rapi dan aman untuk jalur kabel horizontal.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/6.svg" alt="Produk 6">
        <h3>Straight Ladder Type - SLW </h3>
        <!-- <p>Kuat dan efisien untuk kabel berat dalam jalur vertikal maupun horizontal.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/7.svg" alt="Produk 7">
        <h3>Straight Tray Type - C </h3>
        <!-- <p>Berbagai aksesoris pendukung untuk koneksi dan penguatan sistem.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/8.svg" alt="Produk 8">
        <h3>Produk 4</h3>
        <!-- <p>Solusi tepat untuk pengaturan kabel secara vertikal dan horizontal.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/9.svg" alt="Produk 9">
        <h3>Produk 4</h3>
        <!-- <p>Solusi tepat untuk pengaturan kabel secara vertikal dan horizontal.</p> -->
      </div>
      <div class="product">
        <img src="images/pi/10.svg" alt="Produk 10">
        <h3>Produk 4</h3>
        <!-- <p>Solusi tepat untuk pengaturan kabel secara vertikal dan horizontal.</p> -->
      </div>
    </div>
  </section>

  <!-- New Referensi Proyek Section -->
  <section class="section" id="referensi-proyek">
    <h2>Referensi Proyek</h2>

    <!-- Grid ikon perusahaan -->
    <div class="ref-grid">
      <div class="ref-item">
        <img src="images/rp/1.svg" alt="Logo Perusahaan 1">
      </div>
      <div class="ref-item">
        <img src="images/rp/2.svg" alt="Logo Perusahaan 2">
      </div>
      <div class="ref-item">
        <img src="images/rp/3.svg" alt="Logo Perusahaan 3">
      </div>
      <div class="ref-item">
        <img src="images/rp/4.svg" alt="Logo Perusahaan 4">
      </div>
      <div class="ref-item">
        <img src="images/rp/5.svg" alt="Logo Perusahaan 5">
      </div>
      <div class="ref-item">
        <img src="images/rp/6.svg" alt="Logo Perusahaan 6">
      </div>
      <div class="ref-item">
        <img src="images/rp/7.svg" alt="Logo Perusahaan 7">
      </div>
      <div class="ref-item">
        <img src="images/rp/8.svg" alt="Logo Perusahaan 8">
      </div>
      <div class="ref-item">
        <img src="images/rp/9.svg" alt="Logo Perusahaan 9">
      </div>
      <div class="ref-item">
        <img src="images/rp/10.svg" alt="Logo Perusahaan 10">
      </div>
      <div class="ref-item">
        <img src="images/rp/13.svg" alt="Logo Perusahaan 11">
      </div>
      <div class="ref-item">
        <img src="images/rp/12.svg" alt="Logo Perusahaan 12">
      </div>
      <!-- ...tambahkan sesuai jumlah -->
    </div>
    <div class="table-container">
      <table id="sheet-table">
        <thead>
          <tr></tr>
        </thead>
        <tbody></tbody>
      </table>
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

      <!-- Contact Person 3 -->
      <div class="contact-card">
        <h3>Contact 3</h3>
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
  <script src="js/sheet-loader.js"></script>

</body>

</html>