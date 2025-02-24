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
            <a class="navbar-brand ps-3 font-inter d-flex w-100" href="{{ Route('home') }}" style="color: #fff;">
            <div class="d-flex align-items-center">
            <img src="{{ asset('halaman_data_aset/assets/img/Logo_PLN.png') }}" width="40" height="50" alt="" class="d-inline-block align-text-center">
            PT PLN (Persero) UP3 Pinrang
          </div>
          <div class="d-flex align-items-center ms-auto" style="font-size: 18px; color:#000;">
              <i class="fas fa-clock"></i> <span id="clock"></span> | <span id="date"></span>
          </div>
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
                                            <a class="nav-link" href="{{ Route('BeritaAcaraPengoperasianGD') }}" style="color: #fff;">Gardu</a>
                                            <a class="nav-link" href="{{ Route('BeritaAcaraPengoperasianJTR') }}" style="color: #fff;">JTR</a>
                                            <a class="nav-link" href="{{ Route('BeritaAcaraPengoperasianJTM') }}" style="color: #fff;">JTM</a>
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
                                            <a class="nav-link" href="{{ Route('BeritaAcaraPenghapusanGD') }}" style="color: #fff;">Gardu</a>
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
                                                    <a class="nav-link" href="{{ Route('BeritaAcaraUpdateGD') }}" style="color: #fff;">Gardu</a>
                                                    <a class="nav-link" href="{{ Route('BeritaAcaraUpdateJTR') }}" style="color: #fff;">JTR</a>
                                                    <a class="nav-link" href="{{ Route('BeritaAcaraUpdateJTM') }}" style="color: #fff;">JTM</a>
                                                </nav>
                                            </div>
                                </div>
                                @if(auth()->user()->role === 'superadmin')
                                <a class="nav-link" href="{{ Route('Pengguna') }}" style="color: #fff;">
                                    Daftar Pengguna 
                                </a>
                                @endif
                            <a class="nav-link" href="{{ route('logout') }}" style="color: #fff;">
                                Log out
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                      <div class="small text-white">Logged in as:</div>
                      <div class="fw-bold text-white">
                          {{ Auth::user()->name }}
                      </div>
                  </div>
                </nav>
            </div>


            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4" style="color: #14a2ba;">Berita Acara Penggantian Gardu Distribusi PT PLN (Persero) UP3 Pinrang</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Berita Acara Penggantian Gardu Distribusi</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body fw-semi-bold" style="color: #125D72;">
                                Halaman berita acara penggantian gardu merupakan sekumpulan berita acara penggantian gardu yang dimiliki PT PLN (Persero) UP3 Pinrang
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header fw-bold">
                                Buat Berita Acara Penggantian Gardu
                            </div>
                            <div class="card-body">
                            <form action="{{ Route('BeritaAcaraUpdateGD.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Pilih Data Aset Gardu</label>
                                <div class="col-sm-10">
                                <select name="id_aset_gardu" id="id_aset_gardu" class="form-control" required>
                                    <option value="" disabled selected>Pilih Aset Gardu</option>
                                    @foreach($data_aset_gardu as $aset_gardu)
                                        <option value="{{ $aset_gardu->id_gardu }}">{{ $aset_gardu->id_gardu }}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Id Gardu</label>
                                <div class="col-sm-10">
                                  <input type="text" name="id_gardu" class="form-control form-control-sm" id="id_gardu" placeholder="id_gardu">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Nomor Berita Acara</label>
                                <div class="col-sm-10">
                                  <input type="text" name="nomor_berita_acara" class="form-control form-control-sm" id="nomor_berita_acara" placeholder="nomor_berita_acara">
                                </div>
                            </div>
                            <div class="form-group row">
                              <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Tanggal</label>
                              <div class="col-sm-10">
                                <input type="date" name="tanggal" class="form-control form-control-sm" id="tanggal" placeholder="tanggal">
                                <small id="formatted-date" class="text-muted"></small>
                              </div>
                          </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">ULP</label>
                                <div class="col-sm-10">
                                  <input type="text" name="ulp" class="form-control form-control-sm" id="ulp" placeholder="ulp">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">No.SBPJ</label>
                                <div class="col-sm-10">
                                  <input type="text" name="no_spbj" class="form-control form-control-sm" id="no_spbj" placeholder="no_spbj">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Pelaksana Vendor</label>
                                <div class="col-sm-10">
                                  <input type="text" name="vendor" class="form-control form-control-sm" id="vendor" placeholder="vendor">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Nama GD</label>
                                <div class="col-sm-10">
                                  <input type="text" name="name" class="form-control form-control-sm" id="name" placeholder="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Location</label>
                                <div class="col-sm-10">
                                  <input type="text" name="location" class="form-control form-control-sm" id="location" placeholder="location">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Latitude</label>
                                <div class="col-sm-10">
                                  <input type="text" name="latitude" class="form-control form-control-sm" id="latitude" placeholder="latitude">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Longitude</label>
                                <div class="col-sm-10">
                                  <input type="text" name="longitude" class="form-control form-control-sm" id="longitude" placeholder="longitude">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Penyulang</label>
                                <div class="col-sm-10">
                                  <input type="text" name="penyulang" class="form-control form-control-sm" id="penyulang" placeholder="penyulang">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Keypoint</label>
                                <div class="col-sm-10">
                                  <input type="text" name="keypoint" class="form-control form-control-sm" id="keypoint" placeholder="keypoint">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Section</label>
                                <div class="col-sm-10">
                                  <input type="text" name="section" class="form-control form-control-sm" id="section" placeholder="section">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Segment</label>
                                <div class="col-sm-10">
                                  <input type="text" name="segment" class="form-control form-control-sm" id="segment" placeholder="segment">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Konstruksi</label>
                                <div class="col-sm-10">
                                  <input type="text" name="construction" class="form-control form-control-sm" id="construction" placeholder="construction">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Phasa</label>
                                <div class="col-sm-10">
                                  <input type="text" name="phase" class="form-control form-control-sm" id="phase" placeholder="phase">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Merk/Type</label>
                                <div class="col-sm-10">
                                  <input type="text" name="spec_fabrication" class="form-control form-control-sm" id="spec_fabrication" placeholder="spec_fabrication">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">No.Seri</label>
                                <div class="col-sm-10">
                                  <input type="text" name="serial_number" class="form-control form-control-sm" id="serial_number" placeholder="serial_number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Daya</label>
                                <div class="col-sm-10">
                                  <input type="text" name="id_transpower" class="form-control form-control-sm" id="id_transpower" placeholder="id_transpower">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Berat/Vol.Minyak</label>
                                <div class="col-sm-10">
                                  <input type="text" name="spec_oilweight" class="form-control form-control-sm" id="spec_oilweight" placeholder="spec_oilweight">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Berat Total</label>
                                <div class="col-sm-10">
                                  <input type="text" name="spec_transweight" class="form-control form-control-sm" id="spec_transweight" placeholder="spec_transweight">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Impedensi</label>
                                <div class="col-sm-10">
                                  <input type="text" name="impedance" class="form-control form-control-sm" id="impedance" placeholder="impedance">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Vektor Group</label>
                                <div class="col-sm-10">
                                  <input type="text" name="spec_wiring" class="form-control form-control-sm" id="spec_wiring" placeholder="spec_wiring">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Posisi TAP</label>
                                <div class="col-sm-10">
                                  <input type="text" name="spec_transtap" class="form-control form-control-sm" id="spec_transtap" placeholder="spec_transtap">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Standar</label>
                                <div class="col-sm-10">
                                  <input type="text" name="standar" class="form-control form-control-sm" id="standar" placeholder="standar">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Bahan_Belitan</label>
                                <div class="col-sm-10">
                                  <input type="text" name="bahan_belitan" class="form-control form-control-sm" id="bahan_belitan" placeholder="bahan_belitan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Sistem Pendingin</label>
                                <div class="col-sm-10">
                                  <input type="text" name="spec_cooling_type" class="form-control form-control-sm" id="spec_cooling_type" placeholder="spec_cooling_type">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Sadapan</label>
                                <div class="col-sm-10">
                                  <input type="text" name="spec_transtap1" class="form-control form-control-sm" id="spec_transtap1" placeholder="spec_transtap1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Arus Pengenal (A)</label>
                                <div class="col-sm-10">
                                  <input type="text" name="spec_current" class="form-control form-control-sm" id="spec_current" placeholder="spec_current">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Teg. Pengenal (V)</label>
                                <div class="col-sm-10">
                                  <input type="text" name="spec_voltage" class="form-control form-control-sm" id="spec_voltage" placeholder="spec_voltage">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Kenaikan Suhu</label>
                                <div class="col-sm-10">
                                  <input type="text" name="temperature" class="form-control form-control-sm" id="temperature" placeholder="temperature">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">THN.Buat</label>
                                <div class="col-sm-10">
                                  <input type="text" name="spec_year" class="form-control form-control-sm" id="spec_year" placeholder="spec_year">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Beban Trafo</label>
                                <div class="col-sm-10">
                                  <input type="text" name="trafo_load" class="form-control form-control-sm" id="trafo_load" placeholder="trafo_load">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Keterangan</label>
                                <div class="col-sm-10">
                                  <input type="text" name="information" class="form-control form-control-sm" id="information" placeholder="information">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">R-Body</label>
                                <div class="col-sm-10">
                                  <input type="text" name="insulation_r_body" class="form-control form-control-sm" id="insulation_r_body" placeholder="insulation_r_body">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">S-Body</label>
                                <div class="col-sm-10">
                                  <input type="text" name="insulation_s_body" class="form-control form-control-sm" id="insulation_s_body" placeholder="insulation_s_body">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">T-Body</label>
                                <div class="col-sm-10">
                                  <input type="text" name="insulation_t_body" class="form-control form-control-sm" id="insulation_t_body" placeholder="insulation_t_body">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">R-r</label>
                                <div class="col-sm-10">
                                  <input type="text" name="insulation_R_r" class="form-control form-control-sm" id="insulation_R_r" placeholder="insulation_R_r">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">S-s</label>
                                <div class="col-sm-10">
                                  <input type="text" name="insulation_S_s" class="form-control form-control-sm" id="insulation_S_s" placeholder="insulation_S_s">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">T-t</label>
                                <div class="col-sm-10">
                                  <input type="text" name="insulation_T_t" class="form-control form-control-sm" id="insulation_T_t" placeholder="insulation_T_t">
                                </div>
                            </div>
                            <div class="form-group row">
                              <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Tahanan Pentanahan Netral Trafo dan Ujung JTR</label>
                              <div class="col-sm-10">
                                <input type="text" name="earthneutral" class="form-control form-control-sm" id="earthneutral" placeholder="earthneutral">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Tahanan Pentanahan Lightning Arrester</label>
                              <div class="col-sm-10">
                                <input type="text" name="earthla" class="form-control form-control-sm" id="earthla" placeholder="earthla">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Tahanan Pentanahan Body Trafo</label>
                              <div class="col-sm-10">
                                <input type="text" name="earthbody" class="form-control form-control-sm" id="earthbody" placeholder="earthbody">
                              </div>
                          </div>
                          <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Pelaksana</label>
                            <div class="col-sm-10">
                              <input type="text" name="pelaksana" class="form-control form-control-sm" id="pelaksana" placeholder="pelaksana">
                            </div>
                        </div>
                          <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Pengawas</label>
                            <div class="col-sm-10">
                              <input type="text" name="pengawas" class="form-control form-control-sm" id="pengawas" placeholder="pengawas">
                            </div>
                        </div>
                          <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Manager ULP</label>
                            <div class="col-sm-10">
                              <input type="text" name="manager_ulp" class="form-control form-control-sm" id="manager_ulp" placeholder="manager_ulp">
                            </div>
                        </div>
                            <div class="form-group col-sm-2">
                                <div class="d-grid">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-2" style="background-color: #14A2BA;">SIMPAN</button>
                            </div>
                        </form>
                    </div>
                        </div>
                    </div>
                </main>
                <footer class="py-3 mt-auto sticky-bottom" style="background-color: #D9D9D9; color: black;">
                    <div class="container-fluid px-3" width="100%">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Anggita-Maya 2025</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script>
          function updateClock() {
              const now = new Date();
              
              const hours = now.getHours().toString().padStart(2, '0');
              const minutes = now.getMinutes().toString().padStart(2, '0');
              const seconds = now.getSeconds().toString().padStart(2, '0');
              const timeString = `${hours}:${minutes}:${seconds}`;
              document.getElementById('clock').textContent = timeString;

              // Format Date
              const day = now.getDate();
              const month = now.getMonth() + 1; // Month is 0-based
              const year = now.getFullYear();
              const dateString = `${day < 10 ? '0' + day : day}-${month < 10 ? '0' + month : month}-${year}`;
              document.getElementById('date').textContent = dateString;
          }

          // Update the clock every second
          setInterval(updateClock, 1000);

          // Call updateClock immediately to show the time as soon as the page loads
          updateClock();
      </script>
        <script>
          document.getElementById('tanggal').addEventListener('change', function() {
              let inputTanggal = this.value;
              if (inputTanggal) {
                  let options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                  let formattedDate = new Date(inputTanggal).toLocaleDateString('id-ID', options);
      
                  document.getElementById('formatted-date').innerText = "Tanggal dipilih: " + formattedDate;
              } else {
                  document.getElementById('formatted-date').innerText = "";
              }
          });
      </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('halaman_data_aset/js/scripts.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('halaman_data_aset/js/datatables-simple-demo.js') }}"></script>
    </body>
</html>