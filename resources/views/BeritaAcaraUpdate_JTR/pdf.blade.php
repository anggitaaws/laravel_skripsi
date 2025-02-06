<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BA Update JTR </title>
    <style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    font-size: 10pt;
}


.header-table {
                width: 100%;
                border: none;
                margin-bottom: 20px;
            }

            .header-table td {
                vertical-align: middle;
                padding: 0;
            }

            .header-table img {
                height: 60px; /* Sesuaikan ukuran logo */
            }

            .header-table .text-container {
                padding-left: 10px;
            }

            .header-table .title {
                font-weight: bold;
                font-size: 12pt;
                color: purple;
                margin: 0;
            }

            .header-table .subtitle {
                font-weight: bold;
                font-size: 10pt;
                color: purple;
                margin: 0;
            }

/* Judul */
.title {
    font-size: 12pt;
    font-weight: bold;
    text-align: center;
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
       
       /* Table style */
    .info-table, .info-table-no-border {
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
        font-size: 14px;
        table-layout: auto;
    }
    
    /* Table with border */
    .info-table td, .info-table th {
        padding: 8px;
        border: 1px solid #000;
        vertical-align: top;
        word-wrap: break-word;
    }

    /* Table without border */
    .info-table-no-border td {
        padding: 6px; /* Reduced padding */
        font-size: 10pt; /* Smaller font size */
    }

    /* Menjadikan titik dua sejajar */
    .info-table td:first-child, .info-table-no-border td:first-child {
        font-weight: normal;
        width: 30%;
        text-align: left;
        white-space: nowrap; /* Mencegah teks label terpotong */
        position: relative;
        padding-right: 20px; /* Memberi ruang untuk titik dua */
    }

    .info-table-no-border td:first-child::after {
    content: ":"; /* Tambahkan titik dua */
    position: absolute;
    right: 10px; /* Menjaga agar titik dua sejajar */
}

/* Pastikan kolom NO tidak memiliki titik dua */
.info-table th:first-child, .info-table td:first-child {
    width: auto;
    text-align: center;
    padding: 6px;
}

    .info-table td:last-child, .info-table-no-border td:last-child {
        width: auto;
        text-align: left;
        padding-left: 15px;
    }
    .info-table-no-border td:nth-child(3) {
    font-weight: normal;
    text-align: left;
    white-space: nowrap;
    position: relative;
    padding-right: 20px; /* Space for the colon */
}

.info-table-no-border td:nth-child(3)::after {
    content: ":"; /* Add colon after the text */
    position: absolute;
    right: 10px; /* Position colon */
}
.ohm-symbol {
    font-family: 'DejaVu Sans', sans-serif; /* Pastikan font yang mendukung Unicode */
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
        <table class="header">
            <tr>
           <td> <img src="{{ public_path('Logo_PLN.png') }}" alt="Logo PLN" style="height: 80px;"> </td>
           <td class="text-container">
               <p>UID SULSELRABAR</p>
               <p>UP3 PINRANG</p>
           </td>
        </tr>
    </table>
            <h2 class="title"> BERITA ACARA PENGGANTIAN JARINGAN TEGANGAN RENDAH </h2> 
            @if(isset($berita_acara_update_jtr->nomor_berita_acara))
            <p class="nomor"> NO: {{ $berita_acara_update_jtr->nomor_berita_acara }}</p>   
            @endif
            <p class="hari-ini-text">Pada Hari ini {{ \Carbon\Carbon::parse($berita_acara_update_jtr->tanggal)->translatedFormat('l, d F Y') }}, Kami yang bertanda tangan di bawah ini telah melaksanakan penggantian konstruksi Jaringan Tegangan Rendah dengan data-data sebagai berikut: </p>
            <table class="info-table-no-border">
                <tr>
                    <td> ULP </td>
                    <td>{{ $berita_acara_update_jtr->ulp }}</td>
                </tr>
                <tr>
                    <td> NO SPBJ</td>
                    <td> {{ $berita_acara_update_jtr->no_spbj }}</td>
                </tr>
                <tr>
                    <td> PELAKSANA VENDOR </td>
                    <td> {{ $berita_acara_update_jtr->vendor }}</td>
                </tr>
                <tr>
                    <td> LOKASI
                    <td> {{ $berita_acara_update_jtr->location }}</td>
                </tr>
                <tr>
                    <td> KOORDINAT AWAL </td>
                    <td> {{ $berita_acara_update_jtr->initial_coordinates }}</td>
                </tr>
                <tr>
                    <td> KOORDINAT AKHIR </td>
                    <td> {{ $berita_acara_update_jtr->final_coordinates }}</td>
                </tr>
                <tr>
                    <td> PENYULANG </td>
                    <td> {{ $berita_acara_update_jtr->penyulang }}</td>
                </tr>
                <tr>
                    <td> KEYPOINT </td>
                    <td> {{ $berita_acara_update_jtr->keypoint }}</td>
                </tr>
                <tr>
                    <td> SECTION </td>
                    <td> {{ $berita_acara_update_jtr->section }}</td>
                </tr>
                <tr>
                    <td> SEGMENT </td>
                    <td> {{ $berita_acara_update_jtr->segment }}</td>
                </tr>
                <tr>
                    <td> GARDU DISTRIBUSI</td>
                    <td> {{ $berita_acara_update_jtr->nama_gardu }}</td>
                </tr>
            </table> 
        </div>
        <div class="content">
            <table class="info-table">
                <tr>
                    <th> NO </th>
                    <th> DATA </th>
                    <th> SEBELUM PERUBAHAN </th>
                    <th> SETELAH PERUBAHAN </th> 
                </tr>
                <tr>
                    <td>1</td>
                    <td>BAHAN</td>
                    <td>{{ $data_aset_jtr->id_cabletype }} </td>
                    <td>{{ $berita_acara_update_jtr->id_cabletype }} </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>PHASA</td>
                    <td>{{ $data_aset_jtr->phase }} </td>
                    <td>{{ $berita_acara_update_jtr->phase}} </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>LUAS PENAMPANG KABEL</td>
                    <td>{{ $data_aset_jtr->spec_cablesize}} MM2 </td>
                    <td>{{ $berita_acara_update_jtr->spec_cablesize}} MM2 </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>PANJANG SIRKIT</td>
                    <td>{{ $data_aset_jtr->cable_length }} KMS</td>
                    <td>{{ $berita_acara_update_jtr->cable_length}} KMS </td>
 
                </tr>
                <tr>
                    <td>5</td>
                    <td>JENIS TIANG</td>
                    <td>{{ $data_aset_jtr->spec_pole }} </td>
                    <td>{{ $berita_acara_update_jtr->spec_pole}} </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>JENIS JTR</td>
                    <td>{{ $data_aset_jtr->jtr_type }} </td>
                    <td>{{ $berita_acara_update_jtr->jtr_type}} </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>JUMLAH TIANG</td>
                    <td>{{ $data_aset_jtr->sumofpole }} BATANG</td>
                    <td>{{ $berita_acara_update_jtr->sumofpole}} BATANG</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>JURUSAN DARI GARDU</td>
                    <td>{{ $data_aset_jtr->jurusan_gardu }} </td>   
                    <td>{{ $berita_acara_update_jtr->jurusan_gardu}} </td>
                </tr>
            </table>
        </div>
        <h3 class="title" style="font-weight: normal; text-align: left;">Pemeriksaan Nilai Tahanan Kabel yang Terpasang </h3>
        <table class="info-table-no-border" style="width: 100%; text-align: center;">
            <tr>
                <td>R-Body</td>
                <td class="ohm-symbol">{{ $berita_acara_update_jtr->insulation_r_body }} GΩ</td>
            </tr>
            <tr>
                <td>S-Body</td>
                <td class="ohm-symbol">{{ $berita_acara_update_jtr->insulation_s_body }} GΩ</td>
            </tr>
            <tr>
                <td>T-Body</td>
                <td class="ohm-symbol">{{ $berita_acara_update_jtr->insulation_t_body }} GΩ</td>
            </tr>
            <tr>
                <td>Tahanan Pentanahan Netral Trafo Dan Ujung JTR</td>
                <td class="ohm-symbol">{{ $berita_acara_update_jtr->earthneutral}} GΩ</td>
            </tr>
        </table>

    <p> Demikian Berita Acara ini dibuat untuk dipergunakan sebagaimana mestinya </p>
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