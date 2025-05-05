document.addEventListener("DOMContentLoaded", () => {
  // Ganti dengan ID spreadsheet-mu yang baru
  const spreadsheetId = "1KDsJ8qJNbS3KtZAciXzKFGY_5pAtjz44vqvm-IjL7QA";
  const sheetName = "Sheet1";
  // const url = `https://docs.google.com/spreadsheets/d/${spreadsheetId}/gviz/tq?sheet=${sheetName}&tq=select A,B,C,D,E,F`;

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

      // Render header
      data.table.cols.forEach((col) => {
        const th = document.createElement("th");
        th.textContent = col.label || col.id;
        thead.appendChild(th);
      });

      // Ambil 30 baris pertama saja
      const rows30 = data.table.rows.slice(0, 30);

      // Render 30 baris tersebut
      rows30.forEach((row) => {
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
});
