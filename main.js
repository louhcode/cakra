let index = 0;
const slides = document.querySelectorAll(".hero-slide");
const container = document.querySelector(".hero-container");

function updateCarousel() {
  container.style.transform = `translateX(-${index * 100}%)`;
}

function moveSlide(dir) {
  index = (index + dir + slides.length) % slides.length;
  updateCarousel();
}

// auto-slide tiap 4 detik
setInterval(() => moveSlide(1), 4000);

const navbar = document.getElementById("navbar");
window.addEventListener("scroll", () => {
  if (window.scrollY > 250) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll("section");

  const observer = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          obs.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.1, // trigger saat 10% elemen terlihat
    }
  );

  sections.forEach((sec) => observer.observe(sec));
});

document.addEventListener("DOMContentLoaded", () => {
  const spreadsheetId = "1KDsJ8qJNbS3KtZAciXzKFGY_5pAtjz44vqvm-IjL7QA";
  const sheetName     = "Sheet1";
  // tambahkan tqx=out:json agar hasilnya JSONP
  const url = `https://docs.google.com/spreadsheets/d/${spreadsheetId}/gviz/tq` +
              `?sheet=${sheetName}&tqx=out:json`;

  fetch(url)
    .then(res => res.text())
    .then(txt => {
      // callback untuk JSONP: google.visualization.Query.setResponse(...)
      const jsonStr = txt.match(
        /google\.visualization\.Query\.setResponse\(([\s\S]+)\)/
      )[1];
      return JSON.parse(jsonStr);
    })
    .then(data => {
      const table = document.getElementById("sheet-table");
      const thead = table.querySelector("thead tr");
      const tbody = table.querySelector("tbody");

      // render header
      data.table.cols.forEach(col => {
        const th = document.createElement("th");
        th.textContent = col.label || col.id;
        thead.appendChild(th);
      });

      // ambil 20 baris pertama
      data.table.rows.slice(0,20).forEach(row => {
        const tr = document.createElement("tr");
        row.c.forEach(cell => {
          const td = document.createElement("td");
          td.textContent = (cell && cell.v != null) ? cell.v : "";
          tr.appendChild(td);
        });
        tbody.appendChild(tr);
      });
    })
    .catch(err => {
      console.error("Gagal load sheet:", err);
      document.querySelector("#referensi-proyek .table-container").innerHTML =
        "<p>Error loading data.</p>";
    });
});

