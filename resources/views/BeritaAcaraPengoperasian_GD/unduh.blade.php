<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BA Pengoperasian Gardu </title>
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
    </style>
    </head>
    <body>
        <div class="logo">
            <img src="#" alt="Logo PLN">
        </div>
        <div class="header">
            <p>UID SULSELRABAR</p>
            <p>UP3 PINRANG</p>
            <h2 class="title"> BERITA ACARA PENGOPERASIAN GARDU DISTRIBUSI </h2> 
            @if(isset($berita_acara_pengoperasian_gd->nomor_berita_acara))
            <p class="nomor"> NO: {{ $berita_acara_pengoperasian_gd->nomor_berita_acara }}</p>   
            @endif
            <table class="info-table">
                <tr><td> ULP: {{ $berita_acara_pengoperasian_gd->ulp }}</td></tr>
                <tr><td> NO SPBJ: {{ $berita_acara_pengoperasian_gd->no_spbj }}</td></tr>
                <tr><td> PELAKSANA VENDOR: {{ $berita_acara_pengoperasian_gd->vendor }}</td></tr>
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
            <table>
                <tr>
                    <th> NO </th>
                    <th> DATA </th>
                    <th> DIPASANG </th> 
                </tr>
                <tr>
                    <td>1</td>
                    <td>MERK/TYPE</td>
                    <td>  {{ $berita_acara_pengoperasian_gd->spec_fabrication }} </td>
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
        <div class="additional-info" style="margin-top: 30px;">
            <p>Pemeriksaan Tahanan Isolasi Trafo yang terpasang:</p>
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td>R-Body: {{ $berita_acara_pengoperasian_gd->insulation_r_body }} GΩ</td>
                    <td>R-r: {{ $berita_acara_pengoperasian_gd->insulation_R_r }} GΩ</td>
                </tr>
                <tr>
                    <td>S-Body: {{ $berita_acara_pengoperasian_gd->insulation_s_body }} GΩ</td>
                    <td>S-s: {{ $berita_acara_pengoperasian_gd->insulation_S_s }} GΩ</td>
                </tr>
                <tr>
                    <td>T-Body: {{ $berita_acara_pengoperasian_gd->insulation_t_body }}GΩ</td>
                    <td>T-T:{{ $berita_acara_pengoperasian_gd->insulation_T_t }} GΩ</td>
                </tr>
                <tr>
                    <td colspan="3">Tahanan Pentanahan Netral Trafo Dan Ujung JTR: {{ $berita_acara_pengoperasian_gd->earthneutral }} GΩ</td>
                </tr>
                <tr>
                    <td colspan="3">Tahanan Pentanahan Lightning Arrester: {{ $berita_acara_pengoperasian_gd->earthla }} GΩ</td>
                </tr>
                <tr>
                    <td colspan="3">Tahanan Pentanahan Body Trafo: {{ $berita_acara_pengoperasian_gd->earthbody }} GΩ</td>
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