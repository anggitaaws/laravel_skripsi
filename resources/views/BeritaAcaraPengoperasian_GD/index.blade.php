<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dokumen Digital PLN</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('halaman_data_aset/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar" style="background-color: #14a2ba;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3 font-inter" href="#" style="color: #fff;">
            <img src="{{ asset('halaman_data_aset/assets/img/Logo_PLN.png') }}" width="40" height="50" alt="" class="d-inline-block align-text-center">
            PT PLN (Persero) UP3 Pinrang
         </a>
           <!-- Sidebar Toggle-->
           <button class="btn btn-link btn-sm order-1 order-lg-0 ms-auto me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion" id="sidenavAccordion" style="background-color: #125D72;">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading" style="color: #fff;">Menu</div>
                            <a class="nav-link" href="{{ route('home') }}" style="color: #fff;">
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#" style="color: #fff;" data-bs-toggle="collapse" data-bs-target="#collapseDataAset" aria-expanded="false" aria-controls="collapseDataAset">
                                Data Aset
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color: #fff;"></i></div>
                            </a>
                            <div class="collapse" id="collapseDataAset" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('DataAsetGardu') }}" style="color: #fff;">Data Aset Gardu</a>
                                    <a class="nav-link" href="{{ route('DataAsetJTR') }}" style="color: #fff;">Data Aset JTR</a>
                                    <a class="nav-link" href="{{ route('DataAsetJTM') }}" style="color: #fff;">Data Aset JTM</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" style="color: #fff;" data-bs-toggle="collapse" data-bs-target="#collapseBeritaAcara" aria-expanded="false" aria-controls="collapseBeritaAcara">
                                Berita Acara
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color: #fff;"></i></div>
                            </a>
                            <div class="collapse" id="collapseBeritaAcara" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionBeritaAcara">
                                    <a class="nav-link collapsed" href="#" style="color: #fff;" data-bs-toggle="collapse" data-bs-target="#beritaacaraCollapsePengoperasian" aria-expanded="false" aria-controls="beritacaraCollapsePengoperasian">
                                        Berita Acara Pengoperasian
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color: #fff;"></i></div>
                                    </a>
                                    <div class="collapse" id="beritaacaraCollapsePengoperasian" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionBeritaAcara">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#" style="color: #fff;">Gardu</a>
                                            <a class="nav-link" href="#" style="color: #fff;">JTR</a>
                                            <a class="nav-link" href="#" style="color: #fff;">JTM</a>
                                        </nav>
                                    </div>
                                </nav>
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionBeritaAcara">
                                    <a class="nav-link collapsed" href="#" style="color: #fff;" data-bs-toggle="collapse" data-bs-target="#beritaacaraCollapsePenghapusan" aria-expanded="false" aria-controls="beritacaraCollapsePenghapusan">
                                        Berita Acara Penghapusan
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color: #fff;"></i></div>
                                        </a>
                                    <div class="collapse" id="beritaacaraCollapsePenghapusan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionBeritaAcara">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#" style="color: #fff;">Gardu</a>
                                            <a class="nav-link" href="#" style="color: #fff;">JTR</a>
                                            <a class="nav-link" href="#" style="color: #fff;">JTM</a>
                                        </nav>
                                    </div>
                                </nav>
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionBeritaAcara">
                                    <a class="nav-link collapsed" href="#" style="color: #fff;" data-bs-toggle="collapse" data-bs-target="#beritaacaraCollapseUpdate" aria-expanded="false" aria-controls="beritacaraCollapseUpdate">
                                        Berita Acara Update
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color: #fff;"></i></div>
                                        </a>
                                            <div class="collapse" id="beritaacaraCollapseUpdate" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionBeritaAcara">
                                                <nav class="sb-sidenav-menu-nested nav">
                                                    <a class="nav-link" href="#" style="color: #fff;">Gardu</a>
                                                    <a class="nav-link" href="#" style="color: #fff;">JTR</a>
                                                    <a class="nav-link" href="#" style="color: #fff;">JTM</a>
                                                </nav>
                                            </div>
                                </div>
                                
                            <a class="nav-link" href="{{ route('logout') }}" style="color: #fff;">
                                Log out
                            </a>
                        </div>
                    </div>
                    <!--<div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div-->
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container">
                        <div class="text center">
                        <img src="{{ asset('halaman_data_aset/assets/img/Logo_PLN.png') }}" alt="logo pln">
                        <h5>UID SULSELBAR</h5>
                        <h5>UP3 PINRANG</h5>
                        <h3 class="mt-3"> BERITA ACARA PENGOPERASIAN GARDU DISTRIBUSI</h3>
                        <h5> NO: {{ $data_aset_gardu->no_dokumen }} </h5>
                    </div>
                        

                    <p> Pada hari ini, {{ $data_aset_gardu->timestamps }}, kami yang bertanda tangan di bawah ini menyatakan bahwa: </p>
                        <table class="table table-borderless">
                            <tr><td>ULP</td><td>:</td><td> {{ $data_aset_gardu->ulp }} </td></tr>
                            <tr><td>NO.SPBJ PELAKSANA</td><td>:</td><td> {{ $data_aset_gardu->no_spbj }}</td></tr>
                            <tr><td>VENDOR</td><td>:</td><td>{{ $data_aset_gardu->vendor }}</td></tr>
                            <tr><td>NAMA GD</td><td>:</td><td>{{ $data_aset_gardu->name }}</td></tr>
                            <tr><td>LOKASI</td><td>:</td><td>{{ $data_aset_gardu->location }}</td></tr>
                            <tr><td>KOORDINAT</td><td>:</td><td>{{ $data_aset_gardu->latitude }}</td></tr>
                            <tr><td>KOORDINAT</td><td>:</td><td>{{ $data_aset_gardu->longitude }}</td></tr>
                            <tr><td>PENYULANG</td><td>:</td><td>{{ $data_aset_gardu->penyulang }}</td></tr>
                            <tr><td>KEYPOINT</td><td>:</td><td>{{ $data_aset_gardu->keypoint }}</td></tr>
                            <tr><td>SECTION</td><td>:</td><td>{{ $data_aset_gardu->section }}</td></tr>
                            <tr><td>SEGMENT</td><td>:</td><td>{{ $data_aset_gardu->segment }}</td></tr>
                            <tr><td>KONSTRUKSI</td><td>:</td><td>{{ $data_aset_gardu->construction }}</td></tr>
                            <tr><td>PHASA</td><td>:</td><td>{{ $data_aset_gardu->phase }}</td></tr>
                        </table>

                        <table class="table table-bordered">
                            <tr>
                                <th>NO</th>
                                <th>DATA</th>
                                <th>DIPASANG</th>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>MERK/TYPE</td>
                                <td>{{ $data_aset_gardu->spec_fabrication }}</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>NO.SERI</td>
                                <td>{{ $data_aset_gardu->serial_number }}</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>DAYA/PHASA</td>
                                <td>{{ $data_aset_gardu->id_transpower }}</td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>BERAT/VOL.MINYAK</td>
                                <td>{{ $data_aset_gardu->spec_oilweight }}</td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>BERAT TOTAL</td>
                                <td>{{ $data_aset_gardu->spec_transweight }}</td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>IMPEDANSI</td>
                                <td>{{ $data_aset_gardu->impedance }}</td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>VEKTOR GROUP</td>
                                <td>{{ $data_aset_gardu->spec_wiring }}</td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>POSISI TAP</td>
                                <td>{{ $data_aset_gardu->spec_transtap }}</td>
                            </tr>
                            
                            <tr>
                                <td>9</td>
                                <td>STANDAR</td>
                                <td>{{ $data_aset_gardu->standar }}</td>
                            </tr>

                            <tr>
                                <td>10</td>
                                <td>BAHAN BELITAN</td>
                                <td>{{ $data_aset_gardu->bahan_belitan }}</td>
                            </tr>

                            <tr>
                                <td>11</td>
                                <td>SISTEM PENDINGIN</td>
                                <td>{{ $data_aset_gardu->spec_cooling_type }}</td>
                            </tr>

                            <tr>
                                <td>12</td>
                                <td>SADAPAN</td>
                                <td>{{ $data_aset_gardu->spec_transtap1 }}</td>
                            </tr>

                            <tr>
                                <td>13</td>
                                <td>ARUS PENGENAL (A)</td>
                                <td>{{ $data_aset_gardu->spec_current }}</td>
                            </tr>

                            <tr>
                                <td>14</td>
                                <td>TEG.PENGENAL (V)</td>
                                <td>{{ $data_aset_gardu->spec_voltage }}</td>
                            </tr>

                            <tr>
                                <td>15</td>
                                <td>THN.BUAT</td>
                                <td>{{ $data_aset_gardu->spec_year }}</td>
                            </tr>

                            <tr>
                                <td>16</td>
                                <td>BEBAN TRAFO</td>
                                <td>{{ $data_aset_gardu->trafo_load }}</td>
                            </tr>

                            <tr>
                                <td>17</td>
                                <td>KETERANGAN</td>
                                <td>{{ $data_aset_gardu->information }}</td>
                            </tr>

                        </table>
                        
                        <h5>PEMERIKSAAN TAHANAN ISOLASI TRAFO YANG TERPASANG</h5>
                        <table class="table table-borderless">
                            <tr>
                                <td>R-Body</td>
                                <td>{{ $data_aset_gardu->insulation_r_body }}</td>
                            </tr>
                            <tr>
                                <td>S-Body</td>
                                <td>{{ $data_aset_gardu->insulation_s_body }}</td>
                            </tr>
                            <tr>
                                <td>T-Body</td>
                                <td>{{ $data_aset_gardu->insulation_t_body }}</td>
                            </tr>
                            <tr>
                                <td>Tahanan Pentanahan Netral Trafo dan Ujung JTR</td>
                                <td>{{ $data_aset_gardu->earthneutral }}</td>
                            </tr>
                            <tr>
                                <td>Tahanan Pentanahan Lightning Arrester</td>
                                <td>{{ $data_aset_gardu->earthla }}</td>
                            </tr>
                            <tr>
                                <td>Tahanan Pentanahan Body Trafo</td>
                                <td>{{ $data_aset_gardu->earthbody }}</td>
                            </tr>
                        </table>

                        <p>Demikian Berita Acara ini dibuat untuk digunakan sebagaimana mestinya</p>
                    </div>
                </main>
                <footer class="py-3 mt-auto" style="background-color: #D9D9D9; color: black;">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Anggita-Maya 2025</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('halaman_data_aset/js/scripts.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('halaman_data_aset/js/datatables-simple-demo.js') }}"></script>
    </body>
</html> 


                            




