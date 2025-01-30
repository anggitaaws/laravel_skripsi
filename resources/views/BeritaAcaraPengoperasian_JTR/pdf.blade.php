<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BA Pengoperasian JTR </title>
    <style>
 body { font-family: Arial, sans-serif; margin: 0; padding: 20px; font-size: 8pt; }

/* Center the title and nomor */
.header {
    text-align: center; /* Centering the entire header */
    margin-bottom: 20px; /* Space below the header */
}

/* Title Style */
.title {
    font-size: 12pt; /* Reduced font size */
    font-weight: bold;
    margin: 10px 0;
}

/* Nomor Style */
.nomor {
    font-size: 10pt; /* Reduced font size */
    font-weight: normal;
    text-align: center; /* Centering the NO text */
}

/* Left and right align for the "Pada Hari ini" text */
.hari-ini-text {
    text-align: justify; /* Left and right justification */
    margin: 10px 0; /* Margin for spacing */
}

/* Specific border for the second table */
.info-table {
    width: 80%; /* Set table width */
    margin: 10px auto; /* Center the second table */
    border-collapse: collapse; /* Ensure borders are collapsed */
}

.info-table th, .info-table td {
    padding: 6px; /* Reduced padding */
    border: 1px solid #000; /* Border around each cell */
    text-align: left;
    font-size: 8pt; /* Smaller font size */
}

th {
    font-weight: bold;
}

/* The first table has no borders and is not centered */
.info-table-no-border td {
    padding: 6px; /* Reduced padding */
    font-size: 8pt; /* Smaller font size */
}
.footer-container {
    display: flex;
    justify-content: space-between; /* Memisahkan Pelaksana & Pengawas ke kiri dan kanan */
    align-items: flex-start; /* Menyusun elemen sejajar di atas */
    width: 100%;
    text-align: center;
    margin-top: 40px;
    padding: 0 10%; /* Memberi ruang dari tepi */
}

.footer-container div {
    flex: 1; /* Membagi ruang secara adil */
}

.mengetahui {
    text-align: center;
    margin-top: 40px;
    width: 100%;
}
    </style>
    </head>
    <body>
        <div class="header">
            <div class="logo">
                <img src="#" alt="Logo PLN" style="height: 80px;">
            </div>
            <p>UID SULSELRABAR</p>
            <p>UP3 PINRANG</p>
            <h2 class="title"> BERITA ACARA PENGOPERASIAN JARINGAN TEGANGAN RENDAH </h2> 
            @if(@isset($berita_acara_pengoperasian_jtr->nomor_berita_acara))
            <p class="nomor"> NO: {{ $berita_acara_pengoperasian_jtr->nomor_berita_acara }}</p>   
            @endif
            <p class="hari-ini-text">Pada Hari ini {{ $berita_acara_pengoperasian_jtr->tanggal }}, Kami yang bertanda tangan di bawah ini telah melaksanakan pengoperasian baru trafo Distribusi dengan data-data sebagai berikut: </p>
            <table class="info-table-no-border">
                <tr><td> ULP: {{ $berita_acara_pengoperasian_jtr->ulp }}</td></tr>
                <tr><td> NO SPBJ PELAKSANA: {{ $berita_acara_pengoperasian_jtr->no_spbj }}</td></tr>
                <tr><td> VENDOR: {{ $berita_acara_pengoperasian_jtr->vendor }}</td></tr>
                <tr><td> LOKASI: {{ $berita_acara_pengoperasian_jtr->location }}</td></tr>
                <tr><td> KOORDINAT AWAL: {{ $berita_acara_pengoperasian_jtr->initial_coordinates }}</td></tr>
                <tr><td> KOORDINAT AKHIR: {{ $berita_acara_pengoperasian_jtr->final_coordinates }}</td></tr>
                <tr><td> PENYULANG: {{ $berita_acara_pengoperasian_jtr->penyulang }}</td></tr>
                <tr><td> KEYPOINT: {{ $berita_acara_pengoperasian_jtr->keypoint }}</td></tr>
                <tr><td> SECTION: {{ $berita_acara_pengoperasian_jtr->section }}</td></tr>
                <tr><td> SEGMENT: {{ $berita_acara_pengoperasian_jtr->segment }}</td></tr> 
                <tr><td> NAMA GARDU: {{ $berita_acara_pengoperasian_jtr->nama_gardu }}</td></tr>
            </table> 
        </div>
        <div class="content">
            <table class="info-table">
                <tr>
                    <th> NO </th>
                    <th> DATA </th>
                    <th> DIPASANG </th> 
                </tr>
                <tr>
                    <td>1</td>
                    <td>BAHAN</td>
                    <td> {{ $berita_acara_pengoperasian_jtr->id_cabletype }} </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>PHASA</td>
                    <td> {{ $berita_acara_pengoperasian_jtr->phase}} </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>LUAS PENAMPANG KABEL</td>
                    <td> {{ $berita_acara_pengoperasian_jtr->spec_cablesize }} MM2</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>PANJANG SIRKIT</td>
                    <td> {{ $berita_acara_pengoperasian_jtr->cable_length }} KMS </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>JENIS TIANG</td>
                    <td> {{ $berita_acara_pengoperasian_jtr->spec_pole }}  </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>JENIS JTR</td>
                    <td> {{ $berita_acara_pengoperasian_jtr->jtr_type }}  </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>JUMLAH TIANG</td>
                    <td> {{ $berita_acara_pengoperasian_jtr->sumofpole }} </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>JURUSAN DARI GARDU</td>
                    <td> {{ $berita_acara_pengoperasian_jtr->jurusan_gardu }} </td>
                </tr>
            </table>
        </div>
<!-- Footer dengan tabel untuk layout yang lebih stabil -->
<table style="width: 100%; text-align: center; margin-top: 40px;">
    <tr>
        <td style="width: 50%;">
            Pelaksana,<br>
            JTC KONS. DAN LOG<br>
            <br><br><br><br>
            <strong>ERFAN ARSYAD</strong>
        </td>
        <td style="width: 50%;">
            Pengawas,<br>
            TL. TEKNIK<br>
            <br><br><br><br>
            <strong>HAYYA</strong>
        </td>
    </tr>
</table>

<!-- Mengetahui tetap di tengah -->
<div style="text-align: center; margin-top: 40px;">
    Mengetahui,<br>
    MANAGER ULP<br>
    <br><br><br><br>
    <strong>YANTO YULIASMIN LINTHIN</strong>
</div>
        </body>
</html>