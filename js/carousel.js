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
// setInterval(() => moveSlide(1), 4000);
