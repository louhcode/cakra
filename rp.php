<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="images/icon.svg">
    <title>Primas - Referensi Proyek</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin:0; padding:0; box-sizing:border-box; font-family:'Poppins',sans-serif; }
        body { background:#fff; line-height:1.6; }
        .navbar { position:fixed; top:0; left:0; width:100%; padding:20px 60px; background-color:rgba(0,36,103,0.95); box-shadow:0 2px 10px rgba(0,0,0,0.2); display:flex; justify-content:center; align-items:center; z-index:1000; }
        .navbar a { color:white; margin:0 20px; text-decoration:none; font-size:14px; }
        .navbar a:hover { color:#f8b400; }
        .navbar-logo img { height:50px; width:auto; margin:0 10px; }
        .section { padding:80px 5px; max-width:1200px; margin:100px auto 0; text-align:center; }
        .section h2 { margin-bottom:20px; font-size:2rem; color:#0d47a1; }
        .table-container { overflow-x:auto; margin-top:40px; }
        table { width:100%; border-collapse:collapse; margin:auto; }
        th, td { border:1px solid #ddd; padding:5px; text-align:left; }
        th { background-color:#0d47a1; color:white; }
        @media (max-width:768px) { .navbar { padding:10px 20px; } .navbar-logo a { display:inline-block; } .navbar-logo img { height:30px; width:auto; } .section { padding:60px 20px; margin-top:80px; } table { width:100%; font-size:0.85rem; } th, td { padding:6px 8px; } }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="navbar" id="navbar">
        <div class="navbar-logo">
            <a href="#"><img src="images/PRIMAS.svg" alt="Primas Logo"></a>
        </div>
    </div>

    <!-- Section Referensi Proyek -->
    <section class="section" id="referensi-proyek">
        <h2>Referensi Proyek</h2>
        <!-- Tombol Back -->
        <div style="text-align: left; margin-bottom: 20px;">
            <button type="button" onclick="window.history.back()"
                style="
                background-color: #0d47a1;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 4px;
                cursor: pointer;
              ">
                ← Kembali
            </button>
        </div>
        <div class="table-container">
            <table id="sheet-table">
                <thead>
                    <tr>
                        <!-- Tambahkan header kolom di sini -->
                    </tr>
                </thead>
                <tbody>
                    <!-- Tambahkan baris data di sini -->
                </tbody>
            </table>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Ganti ID spreadsheet sesuai link baru
            const spreadsheetId = "1sPIs6eN_N1-1rU0kFEN7QKL2U6W53PtkDiNGMh9YTwI";
            const sheetName = "Sheet1"; // sesuaikan jika nama sheet berbeda

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
    </script>
</body>

</html>