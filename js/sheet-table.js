document.addEventListener("DOMContentLoaded", () => {
    const spreadsheetId = "1KDsJ8qJNbS3KtZAciXzKFGY_5pAtjz44vqvm-IjL7QA";
    const sheetName     = "Sheet1";

    // Susun query: select kolom A–F, maksimal 1000 baris
    const sql = encodeURIComponent("select A,B,C,D,E,F limit 1000");
    const url = `https://docs.google.com/spreadsheets/d/${spreadsheetId}/gviz/tq?sheet=${sheetName}&tq=${sql}`;

    fetch(url)
      .then(res => res.text())
      .then(txt => {
        // Ekstrak JSON dari callback Google Visualization
        const jsonStr = txt.match(
          /google\.visualization\.Query\.setResponse\(([\s\S]+)\);/
        )[1];
        return JSON.parse(jsonStr);
      })
      .then(data => {
        const table = document.getElementById("sheet-table");
        const thead = table.querySelector("thead tr");
        const tbody = table.querySelector("tbody");

        // 1) Render header
        data.table.cols.forEach(col => {
          const th = document.createElement("th");
          th.textContent = col.label || col.id;
          thead.appendChild(th);
        });

        // 2) Filter hanya baris dengan setidaknya satu nilai
        const rowsWithData = data.table.rows.filter(row =>
          row.c.some(cell => cell && cell.v != null && cell.v !== "")
        );

        console.log(`Total rows fetched: ${data.table.rows.length}`);
        console.log(`Rows with data: ${rowsWithData.length}`);

        // 3) Render setiap baris
        rowsWithData.forEach(row => {
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
        document.querySelector("#referensi-proyek .table-container")
                .innerHTML = "<p>Error loading data.</p>";
      });
  });