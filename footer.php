<footer class="footer">
  <p>&copy; 2025 Cakra. All rights reserved.</p>
</footer>

<script src="js/section-observer.js"></script>
<script src="js/navbar-toggle.js"></script>
<script src="js/sheet-table.js"></script>
<!-- di akhir body, sebelum </body> -->


<script>
  // ambil semua carousel
  document.querySelectorAll('.product-carousel').forEach(carousel => {
    const list = carousel.querySelector('.product-list');
    const cards = Array.from(carousel.querySelectorAll('.product-card'));
    const btnNext = carousel.querySelector('.carousel-arrow.next');
    const btnPrev = carousel.querySelector('.carousel-arrow.prev');
    let index = 0;

    // fungsi untuk scroll ke card ke-i
    function showCard(i) {
      index = Math.max(0, Math.min(cards.length - 1, i));
      cards[index].scrollIntoView({
        behavior: 'smooth',
        inline: 'start', // horizontal alignment
        block: 'nearest' // mencegah vertical scrolling
      });
    }

    // pasang listener
    btnNext.addEventListener('click', () => showCard(index + 1));
    btnPrev.addEventListener('click', () => showCard(index - 1));

    // (opsional) bisa start di index 0
    showCard(0);
  });
</script>

<script>
  document.querySelectorAll('.navbar a[href^="#"]').forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth'
        });
      }
    });
  });
</script>

</body>

</html>