<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BA Pengoperasian JTM </title>
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
            <h2 class="title"> BERITA ACARA PENGOPERASIAN JARINGAN TEGANGAN MENENGAH </h2> 
            @if(@isset($berita_acara_pengoperasian_jtm->nomor_berita_acara))
            <p class="nomor"> NO: {{ $berita_acara_pengoperasian_jtm->nomor_berita_acara }}</p>   
            @endif
            <p class="hari-ini-text">Pada Hari ini {{ \Carbon\Carbon::parse($berita_acara_pengoperasian_jtm->tanggal)->translatedFormat('l, d F Y') }}, Kami yang bertanda tangan di bawah ini telah melaksanakan pengoperasian baru Jaringan Tegangan Menengah dengan data-data sebagai berikut: </p>
            <table class="info-table">
                <tr><td> ULP: {{ $berita_acara_pengoperasian_jtm->ulp }}</td></tr>
                <tr><td> NO SPBJ: {{ $berita_acara_pengoperasian_jtm->no_spbj }}</td></tr>
                <tr><td> PELAKSANA VENDOR: {{ $berita_acara_pengoperasian_jtm->vendor }}</td></tr>
                <tr><td> LOKASI: {{ $berita_acara_pengoperasian_jtm->location }}</td></tr>
                <tr><td> KOORDINAT AWAL: {{ $berita_acara_pengoperasian_jtm->initial_coordinates }}</td></tr>
                <tr><td> KOORDINAT AKHIR: {{ $berita_acara_pengoperasian_jtm->final_coordinates }}</td></tr>
                <tr><td> PENYULANG: {{ $berita_acara_pengoperasian_jtm->penyulang }}</td></tr>
                <tr><td> KEYPOINT: {{ $berita_acara_pengoperasian_jtm->keypoint }}</td></tr>
                <tr><td> SECTION: {{ $berita_acara_pengoperasian_jtm->section }}</td></tr>
                <tr><td> SEGMENT: {{ $berita_acara_pengoperasian_jtm->segment }}</td></tr>
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
                    <td>KAWAT</td>
                    <td>  {{ $berita_acara_pengoperasian_jtm->id_cabletype }} </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>PHASA</td>
                    <td> {{ $berita_acara_pengoperasian_jtm->phase}} </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>LUAS PENAMPANG KABEL</td>
                    <td> {{ $berita_acara_pengoperasian_jtm->spec_cablesize }} MM2 </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>PANJANG SIRKIT</td>
                    <td> {{ $berita_acara_pengoperasian_jtm->cable_length }} KMS </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>JENIS TIANG</td>
                    <td> {{ $berita_acara_pengoperasian_jtm->spec_pole }}  </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>KONSUL</td>
                    <td> {{ $berita_acara_pengoperasian_jtm->spec_consule }}  </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>TINGGI TIANG</td>
                    <td> {{ $berita_acara_pengoperasian_jtm->height_pole }} M </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>CIRCUIT</td>
                    <td> {{ $berita_acara_pengoperasian_jtm->spec_circuit }} </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>SEGMENT AWAL</td>
                    <td> {{ $berita_acara_pengoperasian_jtm->segment1 }} </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>SEGMENT AKHIR</td>
                    <td> {{ $berita_acara_pengoperasian_jtm->segment2 }} </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>JENIS MAIN/PERC</td>
                    <td> {{ $berita_acara_pengoperasian_jtm->environment }} </td>
                </tr>
            </table>
        </div>
        <div class="additional-info" style="margin-top: 30px;">
            <p>Pemeriksaan Nilai Tahanan Kabel yang terpasang:</p>
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td>R-Body: {{ $berita_acara_pengoperasian_jtm->insulation_r_body }} GΩ</td>
                </tr>
                <tr>
                    <td>S-Body: {{ $berita_acara_pengoperasian_jtm->insulation_s_body }} GΩ</td>
                </tr>
                <tr>
                    <td>T-Body: {{ $berita_acara_pengoperasian_jtm->insulation_t_body }} GΩ</td>
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