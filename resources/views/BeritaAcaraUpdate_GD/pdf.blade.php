<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BA Update Gardu </title>
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
            <h2 class="title"> BERITA ACARA PENGGANTIAN GARDU DISTRIBUSI </h2> 
            @if(isset($berita_acara_update_gd->nomor_berita_acara))
            <p class="nomor"> NO: {{ $berita_acara_update_gd->nomor_berita_acara }}</p>   
            @endif
            <p class="hari-ini-text">Pada Hari ini {{ \Carbon\Carbon::parse($berita_acara_update_gd->tanggal)->translatedFormat('l, d F Y') }}, Kami yang bertanda tangan di bawah ini telah melaksanakan penggantian trafo Distribusi dengan data-data sebagai berikut: </p>
            <table class="info-table-no-border">
                <tr>
                    <td> ULP </td>
                    <td>{{ $berita_acara_update_gd->ulp }}</td>
                </tr>
                <tr>
                    <td> NO SPBJ</td>
                    <td> {{ $berita_acara_update_gd->no_spbj }}</td>
                </tr>
                <tr>
                    <td> PELAKSANA VENDOR </td>
                    <td> {{ $berita_acara_update_gd->vendor }}</td>
                </tr>
                <tr>
                    <td> NAMA GD </td>
                    <td> {{ $berita_acara_update_gd->name }}</td>
                </tr>
                <tr>
                    <td> LOKASI
                    <td> {{ $berita_acara_update_gd->location }}</td>
                </tr>
                <tr>
                    <td> KOORDINAT LATITUDE </td>
                    <td> {{ $berita_acara_update_gd->latitude }}</td>
                </tr>
                <tr>
                    <td> KOORDINAT LONGITUDE </td>
                    <td> {{ $berita_acara_update_gd->longitude }}</td>
                </tr>
                <tr>
                    <td> PENYULANG </td>
                    <td> {{ $berita_acara_update_gd->penyulang }}</td>
                </tr>
                <tr>
                    <td> KEYPOINT </td>
                    <td> {{ $berita_acara_update_gd->keypoint }}</td>
                </tr>
                <tr>
                    <td> SECTION </td>
                    <td> {{ $berita_acara_update_gd->section }}</td>
                </tr>
                <tr>
                    <td> SEGMENT </td>
                    <td> {{ $berita_acara_update_gd->segment }}</td>
                </tr>
                <tr>
                    <td> KONSTRUKSI</td>
                    <td> {{ $berita_acara_update_gd->construction }}</td>
                </tr>
                <tr>
                    <td> PHASA </td>
                    <td> {{ $berita_acara_update_gd->phase }}</td>
                </tr>
            </table> 
        </div>
        <div class="content">
            <table class="info-table">
                <tr>
                    <th> NO </th>
                    <th> DATA </th>
                    <th> DIBONGKAR </th>
                    <th> DIPASANG </th> 
                </tr>
                <tr>
                    <td>1</td>
                    <td>MERK/TYPE</td>
                    <td>{{ $data_aset_gardu->spec_fabrication }} </td>
                    <td>{{ $berita_acara_update_gd->spec_fabrication }} </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>NO.SERI</td>
                    <td>{{ $data_aset_gardu->serial_number }} </td>
                    <td>{{ $berita_acara_update_gd->serial_number}} </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>DAYA/PHASA</td>
                    <td>{{ $data_aset_gardu->id_transpower }} </td>
                    <td>{{ $berita_acara_update_gd->id_transpower}} </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>BERAT/VOL.MINYAK</td>
                    <td>{{ $data_aset_gardu->spec_oilweight }} L</td>
                    <td>{{ $berita_acara_update_gd->spec_oilweight}} L</td>
 
                </tr>
                <tr>
                    <td>5</td>
                    <td>BERAT TOTAL</td>
                    <td>{{ $data_aset_gardu->spec_transweight }} Kg</td>
                    <td>{{ $berita_acara_update_gd->spec_transweight}} Kg</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>IMPEDENSI</td>
                    <td>{{ $data_aset_gardu->impedance }} %</td>
                    <td>{{ $berita_acara_update_gd->impedance}} %</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>VEKTOR GROUP</td>
                    <td>{{ $data_aset_gardu->spec_wiring }} </td>
                    <td>{{ $berita_acara_update_gd->spec_wiring}} </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>POSISI TAP</td>
                    <td>{{ $data_aset_gardu->spec_transtap }} </td>   
                    <td>{{ $berita_acara_update_gd->spec_transtap}} </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>STANDAR</td>
                    <td>{{ $data_aset_gardu->standar }} </td>
                    <td>{{ $berita_acara_update_gd->standar}} </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>BAHAN BELITAN</td>
                    <td>{{ $data_aset_gardu->bahan_belitan }} </td>
                    <td>{{ $berita_acara_update_gd->bahan_belitan}} </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>SISTEM PENDINGIN</td>
                    <td>{{ $data_aset_gardu->spec_cooling_type }} </td>
                    <td>{{ $berita_acara_update_gd->spec_cooling_type}} </td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>SADAPAN</td>
                    <td>{{ $data_aset_gardu->spec_transtap1 }} </td>
                    <td>{{ $berita_acara_update_gd->spec_transtap1}} </td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>ARUS PENGENAL (A)</td>
                    <td> {{ $data_aset_gardu->spec_current }} </td>
                    <td> {{ $berita_acara_update_gd->spec_current}} </td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>TEG. PENGENAL (V)</td>
                    <td>{{ $data_aset_gardu->spec_voltage }} V</td>
                    <td>{{ $berita_acara_update_gd->spec_voltage }} V</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>KENAIKAN SUHU</td>
                    <td>{{ $data_aset_gardu->temperature }} </td>
                    <td>{{ $berita_acara_update_gd->temperature }} </td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>THN.BUAT</td>
                    <td>{{ $data_aset_gardu->spec_year }} </td>
                    <td>{{ $berita_acara_update_gd->spec_year }} </td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>BEBAN TRAFO</td>
                    <td>{{ $data_aset_gardu->trafo_load }} KVA </td>
                    <td>{{ $berita_acara_update_gd->trafo_load }} KVA </td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>KETERANGAN</td>
                    <td>{{ $data_aset_gardu->information }} </td>
                    <td>{{ $berita_acara_update_gd->information}} </td>
                </tr>
            </table>
        </div>
        <h3 class="title" style="font-weight: normal; text-align: left;">Pemeriksaan Tahanan Isolasi Trafo yang Terpasang </h3>
        <table class="info-table-no-border" style="width: 100%; text-align: center;">
            <tr>
                <td>R-Body</td>
                <td class="ohm-symbol">{{ $berita_acara_update_gd->insulation_r_body }} GΩ</td>
                <td>R-r</td>
                <td class="ohm-symbol">{{ $berita_acara_update_gd->insulation_R_r }} GΩ</td>
            </tr>
            <tr>
                <td>S-Body</td>
                <td class="ohm-symbol">{{ $berita_acara_update_gd->insulation_s_body }} GΩ</td>
                <td>S-s</td>
                <td class="ohm-symbol">{{ $berita_acara_update_gd->insulation_S_s }} GΩ</td>
            </tr>
            <tr>
                <td>T-Body</td>
                <td class="ohm-symbol">{{ $berita_acara_update_gd->insulation_t_body }} GΩ</td>
                <td>T-T</td>
                <td class="ohm-symbol">{{ $berita_acara_update_gd->insulation_T_t }} GΩ</td>
            </tr>
            <tr>
                <td>Tahanan Pentanahan Netral Trafo Dan Ujung JTR</td>
                <td class="ohm-symbol">{{ $berita_acara_update_gd->earthneutral}} GΩ</td>
            </tr>
            <tr>
                <td>Tahanan Pentanahan Lightning Arrester</td>
                <td class="ohm-symbol">{{ $berita_acara_update_gd->earthla}} GΩ</td>
            </tr>
            <tr>
                <td>Tahanan Pentanahan Body Trafo</td>
                <td class="ohm-symbol">{{ $berita_acara_update_gd->earthbody }} GΩ</td>
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