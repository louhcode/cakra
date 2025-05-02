<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primas - Cabling Support System & Accessories</title>
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

    /* Navbar */
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

    .navbar a {
      color: white;
      margin-left: 20px;
      text-decoration: none;
      /* font-weight: bold; */
      font-size: 20px;
    }

    .navbar a:hover {
      color: #f8b400;
    }

    .hero {
      position: relative;
      width: 100%;
      height: 600px;
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
      font-size: 4rem;
      margin-bottom: 0.5rem;
    }

    .hero-caption h2 {
      font-size: 1.5rem;
      font-weight: normal;
    }

    /* Prev/Next Buttons */
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


    /* Section */
    .section {
      padding: 100px 70px;
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

    /* Product Grid */
    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
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
      border-radius: 6px;
      margin-bottom: 10px;
    }

    .product:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }

    /* Table Styles */
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

    /* Footer */
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
  </style>
</head>

<body>
  <div class="navbar" id="navbar">
    <a href="#about">Tentang Produk</a>
    <a href="#produk">Produk</a>
    <a href="#referensi-proyek">Referensi Proyek</a>
    <a href="#kontak">Kontak</a>
  </div>

  <section class="hero">
    <div class="hero-container">
      <!-- Slide 1 -->
      <div class="hero-slide">
        <img src="https://imgur.com/nTF9PWx.png" alt="High Quality">
        <div class="hero-caption">
          <h1>HIGH QUALITY</h1>
          <h2>Standar mutu terbaik untuk sistem penyangga kabel</h2>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="hero-slide">
        <img src="https://imgur.com/MekHeQi.png" alt="Low Price">
        <div class="hero-caption">
          <h1>LOW PRICE</h1>
          <h2>Harga kompetitif tanpa mengurangi kualitas</h2>
        </div>
      </div>
      <!-- Slide 3 -->
      <div class="hero-slide">
        <img src="https://imgur.com/Pl8aHkL.png" alt="Good Service">
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
      Sistem pendukung kabel seperti cable tray dan cable ladder dari Primas dirancang untuk memenuhi kebutuhan instalasi kabel listrik dan industri, mengutamakan kekuatan dan efisiensi.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat deleniti, aperiam et laborum, dolorem accusantium reprehenderit fugit dolorum molestias autem voluptates sequi quisquam. Deserunt cum numquam, architecto nulla cumque nam.
      Laudantium labore aut nihil aliquid, delectus ipsam numquam neque accusantium sapiente et totam, est, dolorum velit quis enim minus tenetur repellendus laborum saepe culpa odit autem placeat? Illum, est ipsam?
      Vitae, illo nostrum obcaecati dolorem, pariatur laboriosam nulla cumque ullam perferendis, architecto corporis doloremque repudiandae? Voluptatum voluptate repellendus magni excepturi mollitia esse officia a sunt, ad ea architecto natus unde!
    </p>
  </section>

  <section class="section" id="produk">
    <h2>Produk Kami</h2>
    <div class="product-grid">
      <div class="product">
        <img src="https://imgur.com/9vY8UwI.png" alt="Produk 1">
        <h3>Produk 1</h3>
        <p>Solusi rapi dan aman untuk jalur kabel horizontal.</p>
      </div>
      <div class="product">
        <img src="https://imgur.com/9vY8UwI.png" alt="Produk 2">
        <h3>Produk 2</h3>
        <p>Kuat dan efisien untuk kabel berat dalam jalur vertikal maupun horizontal.</p>
      </div>
      <div class="product">
        <img src="https://imgur.com/9vY8UwI.png" alt="Produk 3">
        <h3>Produk 3</h3>
        <p>Berbagai aksesoris pendukung untuk koneksi dan penguatan sistem.</p>
      </div>
      <div class="product">
        <img src="https://imgur.com/9vY8UwI.png" alt="Produk 4">
        <h3>Produk 4</h3>
        <p>Solusi tepat untuk pengaturan kabel secara vertikal dan horizontal.</p>
      </div>
    </div>
  </section>

  <!-- New Referensi Proyek Section -->
  <section class="section" id="referensi-proyek">
    <h2>Referensi Proyek</h2>
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
    <p>Untuk informasi lebih lanjut mengenai produk Primas, silakan hubungi kami melalui email atau WhatsApp.</p>
    <p><strong>Email:</strong> info@primas.com</p>
    <p><strong>WhatsApp:</strong> +62 812-3456-7890</p>
  </section>

  <footer class="footer">
    &copy; 2025 Primas. All rights reserved.
  </footer>

  <script>
    let index = 0;
    const slides = document.querySelectorAll('.hero-slide');
    const container = document.querySelector('.hero-container');

    function updateCarousel() {
      container.style.transform = `translateX(-${index * 100}%)`;
    }

    function moveSlide(dir) {
      index = (index + dir + slides.length) % slides.length;
      updateCarousel();
    }

    // auto-slide tiap 4 detik
    setInterval(() => moveSlide(1), 4000);
  </script>

  <script>
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 400) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const sections = document.querySelectorAll('section');

      const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            obs.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.1 // trigger saat 10% elemen terlihat
      });

      sections.forEach(sec => observer.observe(sec));
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // Ganti dengan ID spreadsheet-mu
      const spreadsheetId = '1sPIs6eN_N1-1rU0kFEN7QKL2U6W53PtkDiNGMh9YTwI';
      const sheetName = 'Sheet1';
      const url = `https://docs.google.com/spreadsheets/d/${spreadsheetId}/gviz/tq?sheet=${sheetName}&tq=`;

      fetch(url)
        .then(res => res.text())
        .then(txt => {
          const jsonStr = txt.match(/google\.visualization\.Query\.setResponse\(([\s\S]+)\);/)[1];
          return JSON.parse(jsonStr);
        })
        .then(data => {
          const table = document.getElementById('sheet-table');
          const thead = table.querySelector('thead tr');
          const tbody = table.querySelector('tbody');

          // 1) Render header
          data.table.cols.forEach(col => {
            const th = document.createElement('th');
            th.textContent = col.label || col.id;
            thead.appendChild(th);
          });

          // 2) Ambil 20 baris pertama saja
          const rows20 = data.table.rows.slice(0, 20);

          // 3) Render 20 baris tersebut
          rows20.forEach(row => {
            const tr = document.createElement('tr');
            row.c.forEach(cell => {
              const td = document.createElement('td');
              td.textContent = (cell && cell.v != null) ? cell.v : '';
              tr.appendChild(td);
            });
            tbody.appendChild(tr);
          });
        })
        .catch(err => {
          console.error('Gagal load sheet:', err);
          document.querySelector('#referensi-proyek .table-container')
            .innerHTML = '<p>Error loading data.</p>';
        });
    });
  </script>

</body>

</html>