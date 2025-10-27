<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Simulasi Angsuran - BPR WAWAY LAMPUNG</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.28/jspdf.plugin.autotable.min.js"></script>
    <style>
        .custom-select-wrapper {
            position: relative;
        }

        .custom-select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 12px 40px 12px 15px;
            border-radius: 8px;
            width: 100%;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            background-image: url('data:image/svg+xml;utf8,<svg fill="gray" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 16px 16px;
        }

        .custom-select:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
            outline: none;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f8f9fa;
            padding: 30px;
        }

        .simulasi {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            max-width: 550px;
            margin: auto;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: 500;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            border: none;
            border-radius: 8px;
            background-color: #007bff;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .hasil {
            margin-top: 25px;
            padding: 20px;
            background: #e8f5e9;
            border-radius: 12px;
            font-size: 15px;
        }

        .warning {
            color: #d93025;
            margin-top: 10px;
            font-weight: bold;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fff;
            margin: 5% auto;
            padding: 20px;
            border-radius: 12px;
            width: 90%;
            max-width: 800px;
            position: relative;
        }

        .close {
            float: right;
            font-size: 28px;
            font-weight: bold;
            color: #aaa;
            cursor: pointer;
        }

        .close:hover {
            color: black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 4px;
            text-align: center;
            font-size: 11px;
        }

        th {
            background-color: #f1f1f1;
        }

        .download-btn {
            margin-top: 15px;
            padding: 10px;
            width: auto;
            background-color: #28a745;
        }

        .download-btn:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>

    <div class="simulasi">
        <div style="text-align: center;">
            <a href="{{ url('/profile') }}">
                <img src="{{ asset('assetGuest/img/logo-website.png') }}" class="img-fluid" width="320" alt="Logo">
            </a>
        </div>
        <h2>Simulasi Angsuran <br>PT BPR WAWAY LAMPUNG</h2>

        <label for="produk">Produk:</label>
        <div class="custom-select-wrapper">
            <select id="produk" onchange="aturBatasan()" class="custom-select">
                <option value="">-- Pilih Produk --</option>
                <option value="PNS">PNS</option>
                <option value="P3K">P3K</option>
                <option value="UMKM">UMKM</option>
                <option value="TUKIN">TUKIN</option>
            </select>
        </div>

        <label for="plafon">Plafon Pinjaman:</label>
        <input type="text" id="plafon" placeholder="Contoh: Rp 100.000.000" oninput="formatRupiah(this)">

        <label for="tenor">Tenor bulan :</label>
        <input type="number" id="tenor" placeholder="Contoh: 5">

        <div class="warning" id="warning"></div>

        <button onclick="hitungAngsuran()">Hitung Angsuran</button>

        <div class="hasil" id="hasil" style="display:none;"></div>
        <button id="btnRincian" onclick="tampilkanModal()" style="display:none;">Lihat Rincian Angsuran</button>
    </div>

    <!-- Modal -->
    <div id="modalRincian" class="modal">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('modalRincian').style.display='none'">&times;</span>
            <h3>Rincian Angsuran</h3>
            <div id="rincian"></div>
            <button class="download-btn" onclick="downloadPDF()">Download PDF</button>
        </div>
    </div>

    <script>
        window.jsPDF = window.jspdf.jsPDF;

        function formatRupiah(input) {
            let value = input.value.replace(/[^\d]/g, "");
            if (!value) return input.value = '';
            let formatted = new Intl.NumberFormat("id-ID").format(value);
            input.value = "Rp " + formatted;
        }

        // Batas plafon sesuai produk
        function getMaxPlafon(produk) {
            return {
                PNS: 500000000,
                P3K: 150000000,
                UMKM: 500000000,
                TUKIN: 200000000
            } [produk] || Infinity;
        }

        // Batas tenor (bulan) sesuai produk
        function getMaxTenor(produk) {
            return {
                PNS: 240, // 20 tahun
                P3K: 60, // 5 tahun
                UMKM: 60, // 5 tahun
                TUKIN: 24 // 2 tahun
            } [produk] || Infinity;
        }

        // Atur placeholder otomatis
        function aturBatasan() {
            const produk = document.getElementById('produk').value;
            const tenor = document.getElementById('tenor');
            const plafon = document.getElementById('plafon');
            document.getElementById('warning').innerHTML = '';
            tenor.value = '';
            plafon.value = '';

            if (produk) {
                tenor.placeholder = `Contoh: ${getMaxTenor(produk)} bulan`;
                plafon.placeholder = `Contoh: Rp ${getMaxPlafon(produk).toLocaleString('id-ID')}`;
            } else {
                tenor.placeholder = "Contoh: 12 bulan";
                plafon.placeholder = "Contoh: Rp 100.000.000";
            }
        }

        let rincianHTML = "";

        function hitungAngsuran() {
            const produk = document.getElementById('produk').value;
            const plafon = parseFloat(document.getElementById('plafon').value.replace(/[^\d]/g, ""));
            const tenorInput = parseInt(document.getElementById('tenor').value);
            const hasil = document.getElementById('hasil');
            const warning = document.getElementById('warning');
            hasil.style.display = 'none';
            warning.innerHTML = '';
            document.getElementById('btnRincian').style.display = 'none';
            rincianHTML = "";

            if (!produk || isNaN(plafon) || isNaN(tenorInput)) {
                alert("Lengkapi semua input!");
                return;
            }

            if (plafon > getMaxPlafon(produk)) {
                warning.innerHTML =
                    `⚠️ Maksimal plafon untuk ${produk}: Rp ${getMaxPlafon(produk).toLocaleString('id-ID')}`;
                return;
            }

            if (tenorInput > getMaxTenor(produk)) {
                warning.innerHTML = `⚠️ Maksimal tenor untuk ${produk}: ${getMaxTenor(produk)} bulan`;
                return;
            }

            let bunga = 0;
            let bulan = tenorInput; // tenor sudah dalam bulan
            let angsuran = 0;
            let r = 0;

            // tentukan persen bunga tahunan sesuai produk (logika sebelumnya)
            if (produk === 'PNS') {
                if (bulan <= 72) bunga = 7.45;
                else if (bulan <= 180) bunga = 8.35;
                else bunga = 8.90;
            } else if (produk === 'P3K') {
                bunga = 11.5; // effective annuitas
            } else if (produk === 'UMKM') {
                if (bulan <= 24) bunga = 10;
                else if (bulan <= 48) bunga = 11;
                else bunga = 12;
            } else if (produk === 'TUKIN') {
                bunga = 12;
            } else if (produk === 'P3K') {
                // P3K: effective annuitas 11.5% per tahun
                bunga = 11.5;
            } else if (produk === 'UMKM') {
                // UMKM: 10% jika <=24 bln, 11% jika <=48 bln, else 12%
                if (bulan <= 24) bunga = 10;
                else if (bulan <= 48) bunga = 11;
                else bunga = 12;
            } else if (produk === 'TUKIN') {
                bunga = 12;
            }

            // Hitung angsuran & rincian berbeda tergantung P3K (annuitas) atau produk lain (flat)
            if (produk === 'P3K') {
                // annuitas / effective
                r = bunga / 12 / 100;
                angsuran = plafon * (r * Math.pow(1 + r, bulan)) / (Math.pow(1 + r, bulan) - 1);
            } else {
                // flat: pokok per bulan + bunga flat dihitung dari plafon
                const pokokFlat = plafon / bulan;
                const bungaFlat = (plafon * (bunga / 100)) / 12;
                angsuran = pokokFlat + bungaFlat;
            }

            hasil.innerHTML = `
    <strong>Hasil Simulasi:</strong><br>
    Produk: ${produk}<br>
    Plafon: Rp ${plafon.toLocaleString('id-ID')}<br>
    Tenor: ${bulan} bulan<br>
    <strong>Angsuran per bulan: Rp ${Math.round(angsuran).toLocaleString('id-ID')}</strong>
  `;
            hasil.style.display = 'block';
            document.getElementById('btnRincian').style.display = 'inline-block';

            // Buat rincian tabel: kolom Pokok | Bunga | Angsuran | Sisa
            let sisa = plafon;
            rincianHTML = `<table><thead>
    <tr>
      <th>Bulan</th>
      <th>Pokok</th>
      <th>Bunga</th>
      <th>Angsuran</th>
      <th>Sisa Pinjaman</th>
    </tr>
    </thead><tbody>`;

            if (produk === 'P3K') {
                // annuitas: bunga tiap bulan berdasarkan sisa, angsuran sama tiap bulan (angsuran variable sudah dihitung)
                r = bunga / 12 / 100;
                for (let i = 1; i <= bulan; i++) {
                    let bungaBulan = sisa * r; // bunga dari outstanding
                    let pokok = angsuran - bungaBulan; // komponen pokok = angsuran - bunga bulan ini
                    sisa -= pokok;
                    rincianHTML += `
        <tr>
          <td>${i}</td>
          <td>Rp ${Math.round(pokok).toLocaleString('id-ID')}</td>
          <td>Rp ${Math.round(bungaBulan).toLocaleString('id-ID')}</td>
          <td>Rp ${Math.round(angsuran).toLocaleString('id-ID')}</td>
          <td>Rp ${Math.max(0, Math.round(sisa)).toLocaleString('id-ID')}</td>
        </tr>`;
                }
            } else {
                // flat: pokok tetap berdasarkan plafon, bunga flat berdasarkan plafon
                let pokokFlat = plafon / bulan;
                let bungaFlat = (plafon * (bunga / 100)) / 12;
                let angsuranFlat = pokokFlat + bungaFlat;
                for (let i = 1; i <= bulan; i++) {
                    sisa -= pokokFlat;
                    rincianHTML += `
        <tr>
          <td>${i}</td>
          <td>Rp ${Math.round(pokokFlat).toLocaleString('id-ID')}</td>
          <td>Rp ${Math.round(bungaFlat).toLocaleString('id-ID')}</td>
          <td>Rp ${Math.round(angsuranFlat).toLocaleString('id-ID')}</td>
          <td>Rp ${Math.max(0, Math.round(sisa)).toLocaleString('id-ID')}</td>
        </tr>`;
                }
            }

            rincianHTML += `</tbody></table>`;
        }


        function tampilkanModal() {
            document.getElementById('rincian').innerHTML = rincianHTML;
            document.getElementById('modalRincian').style.display = 'block';
        }

        function downloadPDF() {
            const {
                jsPDF
            } = window.jspdf;
            const produk = document.getElementById("produk").value.toUpperCase();
            const plafonText = document.getElementById("plafon").value || "";
            const tenor = document.getElementById("tenor").value || "";
            const today = new Date();
            const tanggal = today.toLocaleDateString("id-ID", {
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            });

            // ambil baris dari tabel rincian (text termasuk "Rp ...")
            const rows = Array.from(document.querySelectorAll("#rincian tbody tr")).map(row => {
                return Array.from(row.querySelectorAll("td")).map(cell => cell.innerText);
            });

            if (rows.length === 0) {
                alert("Rincian kosong. Silakan hitung angsuran terlebih dahulu lalu klik 'Lihat Rincian'.");
                return;
            }

            const doc = new jsPDF("p", "mm", "a4");
            const pageWidth = doc.internal.pageSize.getWidth();
            const pageHeight = doc.internal.pageSize.getHeight();

            doc.autoTable({
                head: [
                    ["Bulan", "Pokok", "Bunga", "Angsuran", "Sisa Pinjaman"]
                ],
                body: rows,
                startY: 45,
                margin: {
                    top: 45,
                    bottom: 25
                },
                theme: 'grid',
                headStyles: {
                    fillColor: [240, 240, 240],
                    textColor: 0,
                    fontStyle: 'bold'
                },
                styles: {
                    font: "helvetica",
                    fontSize: 10,
                    cellPadding: 3
                },
                didDrawPage: function (data) {
                    // HEADER
                    doc.setFontSize(13);
                    doc.setFont(undefined, "bold");
                    doc.text(`TABEL ANGSURAN ${produk}`, pageWidth / 2, 15, {
                        align: "center"
                    });

                    doc.setFontSize(12);
                    doc.setFont(undefined, "normal");
                    doc.text("PT BPR WAWAY LAMPUNG (Perseroda)", pageWidth / 2, 22, {
                        align: "center"
                    });

                    doc.setFontSize(11);
                    doc.text(`Tanggal: ${tanggal}`, pageWidth / 2, 29, {
                        align: "center"
                    });

                    // Ringkasan singkat (Plafon & Tenor)
                    doc.setFontSize(10);
                    doc.text(`Plafon: ${plafonText}    |    Tenor: ${tenor} bulan`, pageWidth / 2, 36, {
                        align: "center"
                    });

                    // FOOTER
                    doc.setFontSize(9);
                    doc.text(
                        "Kantor Pusat: Jl. P.Diponegoro No.28 Gulak Galik Teluk Betung Utara | Telp +62 812-7952-2102",
                        pageWidth / 2,
                        pageHeight - 10, {
                            align: "center"
                        }
                    );
                }
            });

            doc.save("rincian-angsuran.pdf");
        }

        // ⬇️ Tambahkan supaya input plafon selalu format Rp
        document.addEventListener("DOMContentLoaded", function () {
            const plafonInput = document.getElementById("plafon");
            if (plafonInput) {
                plafonInput.addEventListener("input", function () {
                    formatRupiah(this);
                });
            }
        });
    </script>

</body>

</html>
