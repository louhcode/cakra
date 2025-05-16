// Fungsi untuk load Google Sheet
function loadSheet(spreadsheetId, sheetName = "Sheet1") {
  const sql = encodeURIComponent("select A,B,C,D,E,F limit 1000");
  const url = `https://docs.google.com/spreadsheets/d/${spreadsheetId}/gviz/tq?sheet=${sheetName}&tq=${sql}`;

  fetch(url)
    .then((res) => res.text())
    .then((txt) => {
      const jsonStr = txt.match(
        /google\.visualization\.Query\.setResponse\(([\s\S]+)\);/
      )[1];
      return JSON.parse(jsonStr);
    })
    .then((data) => {
      const table = document.getElementById("sheet-table");
      const thead = table.querySelector("thead tr");
      const tbody = table.querySelector("tbody");

      thead.innerHTML = "";
      tbody.innerHTML = "";

      data.table.cols.forEach((col) => {
        const th = document.createElement("th");
        th.textContent = col.label || col.id;
        thead.appendChild(th);
      });

      const rowsWithData = data.table.rows.filter((row) =>
        row.c.some((cell) => cell && cell.v != null && cell.v !== "")
      );

      rowsWithData.forEach((row) => {
        const tr = document.createElement("tr");
        row.c.forEach((cell) => {
          const td = document.createElement("td");
          td.textContent = cell && cell.v != null ? cell.v : "";
          tr.appendChild(td);
        });
        tbody.appendChild(tr);
      });
    })
    .catch((err) => {
      console.error("Gagal load sheet:", err);
      document.querySelector("#referensi-proyek .table-container").innerHTML =
        "<p>Error loading data.</p>";
    });
}

// Jalankan saat DOM siap
document.addEventListener("DOMContentLoaded", () => {
  const btn = document.getElementById("toggle-sheet-btn");

  const sheetAwal = "1KDsJ8qJNbS3KtZAciXzKFGY_5pAtjz44vqvm-IjL7QA"; // Spreadsheet awal
  const sheetLengkap = "1sPIs6eN_N1-1rU0kFEN7QKL2U6W53PtkDiNGMh9YTwI"; // Spreadsheet selengkapnya
  let expanded = false; // status tombol (default tertutup)

  // Tampilkan data awal saat load pertama
  loadSheet(sheetAwal);

  // Saat tombol diklik
  btn.addEventListener("click", () => {
    expanded = !expanded;

    if (expanded) {
      // Load data lengkap
      loadSheet(sheetLengkap);
      btn.innerHTML = `<i class="fas fa-arrow-up"></i> Tutup Selengkapnya`;
    } else {
      // Kembali ke data awal
      loadSheet(sheetAwal);
      btn.innerHTML = `<i class="fas fa-arrow-right"></i> Lihat Selengkapnya`;
    }
  });
  window.history.scrollRestoration = "manual";
  window.scrollTo({ top: 0, behavior: "instant" });
});
