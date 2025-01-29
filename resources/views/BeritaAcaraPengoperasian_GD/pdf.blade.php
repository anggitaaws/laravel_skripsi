<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BA Pengoperasian Gardu </title>
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
            <h2 class="title"> BERITA ACARA PENGOPERASIAN GARDU DISTRIBUSI </h2> 
            @if(@isset($berita_acara_pengoperasian_gd->nomor_berita_acara))
            <p class="nomor"> NO: {{ $berita_acara_pengoperasian_gd->nomor_berita_acara }}</p>   
            @endif
            <p class="hari-ini-text">Pada Hari ini {{ $berita_acara_pengoperasian_gd->tanggal }}, Kami yang bertanda tangan di bawah ini telah melaksanakan pengoperasian baru trafo Distribusi dengan data-data sebagai berikut: </p>
            <table class="info-table-no-border">
                <tr><td> ULP: {{ $berita_acara_pengoperasian_gd->ulp }}</td></tr>
                <tr><td> NO SPBJ PELAKSANA: {{ $berita_acara_pengoperasian_gd->no_spbj }}</td></tr>
                <tr><td> VENDOR: {{ $berita_acara_pengoperasian_gd->vendor }}</td></tr>
                <tr><td> NAMA GD: {{ $berita_acara_pengoperasian_gd->name }}</td></tr>
                <tr><td> LOKASI: {{ $berita_acara_pengoperasian_gd->location }}</td></tr>
                <tr><td> KOORDINAT LATITUDE: {{ $berita_acara_pengoperasian_gd->latitude }}</td></tr>
                <tr><td> KOORDINAT LONGITUDE: {{ $berita_acara_pengoperasian_gd->longitude }}</td></tr>
                <tr><td> PENYULANG: {{ $berita_acara_pengoperasian_gd->penyulang }}</td></tr>
                <tr><td> KEYPOINT: {{ $berita_acara_pengoperasian_gd->keypoint }}</td></tr>
                <tr><td> SECTION: {{ $berita_acara_pengoperasian_gd->section }}</td></tr>
                <tr><td> SEGMENT: {{ $berita_acara_pengoperasian_gd->segment }}</td></tr>
                <tr><td> KONSTRUKSI: {{ $berita_acara_pengoperasian_gd->construction }}</td></tr>
                <tr><td> PHASA: {{ $berita_acara_pengoperasian_gd->phase }}</td></tr>
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
                    <td>MERK/TYPE</td>
                    <td> {{ $berita_acara_pengoperasian_gd->spec_fabrication }} </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>NO.SERI</td>
                    <td> {{ $berita_acara_pengoperasian_gd->serial_number}} </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>DAYA/PHASA</td>
                    <td> {{ $berita_acara_pengoperasian_gd->id_transpower }} </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>BERAT/VOL.MINYAK</td>
                    <td> {{ $berita_acara_pengoperasian_gd->spec_oilweight }} L </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>BERAT TOTAL</td>
                    <td> {{ $berita_acara_pengoperasian_gd->spec_transweight }} Kg </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>IMPEDENSI</td>
                    <td> {{ $berita_acara_pengoperasian_gd->impedance }} % </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>VEKTOR GROUP</td>
                    <td> {{ $berita_acara_pengoperasian_gd->spec_wiring }} </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>POSISI TAP</td>
                    <td> {{ $berita_acara_pengoperasian_gd->spec_transtap }} </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>STANDAR</td>
                    <td> {{ $berita_acara_pengoperasian_gd->standar }} </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>BAHAN BELITAN</td>
                    <td> {{ $berita_acara_pengoperasian_gd->bahan_belitan }} </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>SISTEM PENDINGIN</td>
                    <td> {{ $berita_acara_pengoperasian_gd->spec_cooling_type }} </td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>SADAPAN</td>
                    <td> {{ $berita_acara_pengoperasian_gd->spec_transtap1 }} </td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>ARUS PENGENAL (A)</td>
                    <td> {{ $berita_acara_pengoperasian_gd->spec_current }} </td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>TEG. PENGENAL (V)</td>
                    <td> {{ $berita_acara_pengoperasian_gd->spec_voltage }} </td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>KENAIKAN SUHU</td>
                    <td> {{ $berita_acara_pengoperasian_gd->temperature }} </td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>THN.BUAT</td>
                    <td> {{ $berita_acara_pengoperasian_gd->spec_year }} </td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>BEBAN TRAFO</td>
                    <td> {{ $berita_acara_pengoperasian_gd->trafo_load }} % </td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>KETERANGAN</td>
                    <td> {{ $berita_acara_pengoperasian_gd->information }} </td>
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