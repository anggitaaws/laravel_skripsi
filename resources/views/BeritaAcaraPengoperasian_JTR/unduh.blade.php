<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BA Pengoperasian JTR </title>
    <style>
     body { font-family: Arial, sans-serif; font-size: 12px; }
        .header { text-align: center; font-weight: bold; margin-bottom: 20px; }
        .content { margin-top: 20px; }
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid black; padding: 8px; text-align: center; }
        .info-table { width: 100%; margin-bottom: 20px; }
        .info-table td { border: none; text-align: left; padding: 5px; }
        .title { font-size: 16px; font-weight: bold; text-align: center; }
        .subtitle { text-align: center; font-weight: bold; }
        .logo { text-align: center; margin-bottom: 10px; }
    </style>
    </head>
    <body>
        <div class="logo">
            <img src="#" alt="Logo PLN" style="height: 80px;">
        </div>
        <div class="header">
            <p>UID SULSELRABAR</p>
            <p>UP3 PINRANG</p>
            <h2 class="title"> BERITA ACARA PENGOPERASIAN JARINGAN TEGANGAN RENDAH </h2> 
            @if(@isset($berita_acara_pengoperasian_jtr->nomor_berita_acara))
            <p class="nomor"> NO: {{ $berita_acara_pengoperasian_jtr->nomor_berita_acara }}</p>   
            @endif
            <p class="hari-ini-text">Pada Hari ini {{ \Carbon\Carbon::parse($berita_acara_pengoperasian_jtr->tanggal)->translatedFormat('l, d F Y') }}, Kami yang bertanda tangan di bawah ini telah melaksanakan pengoperasian baru Jaringan Tegangan Rendah dengan data-data sebagai berikut: </p>
            <table class="info-table">
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
            <table>
                <tr>
                    <th> NO </th>
                    <th> DATA </th>
                    <th> DIPASANG </th> 
                </tr>
                <tr>
                    <td>1</td>
                    <td>BAHAN</td>
                    <td>  {{ $berita_acara_pengoperasian_jtr->id_cabletype }} </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>PHASA</td>
                    <td> {{ $berita_acara_pengoperasian_jtr->phase}} </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>LUAS PENAMPANG KABEL</td>
                    <td> {{ $berita_acara_pengoperasian_jtr->spec_cablesize }} MM2 </td>
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
                    <td> {{ $berita_acara_pengoperasian_jtr->sumofpole }} BATANG </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>JURUSAN DARI GARDU</td>
                    <td> {{ $berita_acara_pengoperasian_jtr->jurusan_gardu }} </td>
                </tr>
                <tr>
            </table>
        </div>
        <div class="additional-info" style="margin-top: 30px;">
            <p>Pemeriksaan Tahanan Kabel yang terpasang:</p>
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td>R-Body: {{ $berita_acara_pengoperasian_jtr->insulation_r_body }} GΩ</td>
                </tr>
                <tr>
                    <td>S-Body: {{ $berita_acara_pengoperasian_jtr->insulation_s_body }} GΩ</td>
                </tr>
                <tr>
                    <td>T-Body: {{ $berita_acara_pengoperasian_jtr->insulation_t_body }} GΩ</td>
                </tr>
                <tr>
                    <td colspan="3">Tahanan Pentanahan Netral Trafo Dan Ujung JTR: {{ $berita_acara_pengoperasian_jtr->earthneutral }} GΩ</td>
                </tr>
            </table>
        </div>
        <div class="footer" style="margin-top: 30px; text-align: center;">
            <p> Demikian Berita Acara ini dibuat untuk dipergunakan sebagaimana mestinya </p>
            <br><br>
            <table width="100%">
                <tr>
                    <td align="center">Pelaksana </td>
                    <td align="center">Pengawas</td>
                    <td align="center">Manager ULP</td>
                </tr>
                <tr>
                    <td align="center" height="50"><input type="text" name="pelaksana"></td>
                    <td align="center" height="50"><input type="text" name="pengawas"></td>
                    <td align="center" height="50"><input type="text" name="manager"></td>
                </table>
            </div>
        </body>
</html>