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
                                            <a class="nav-link" href="#" style="color: #fff;">Gardu</a>
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
                                                    <a class="nav-link" href="#" style="color: #fff;">JTR dan JTM</a>
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
                    <div class="container-fluid px-4">
                        <h1 class="mt-4" style="color: #14a2ba;">Data Aset JTM PT PLN (Persero) UP3 Pinrang</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Aset JTM</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body fw-semi-bold" style="color: #125D72;">
                                Halaman data aset merupakan sekumpulan data aset yang dimiliki PT PLN (Persero) UP3 Pinrang
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header fw-bold">
                            Edit Data Aset JTM
                        </div>
                        <form action="#" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Id JTM</label>
                                <div class="col-sm-10">
                                  <input type="text" name="id_jtm" class="form-control form-control-sm" id="id_jtm" placeholder="id_jtm" value="{{ $data_aset_jtm->id_jtm }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">ULP</label>
                                <div class="col-sm-10">
                                  <input type="text" name="ulp" class="form-control form-control-sm" id="ulp" placeholder="ulp" value="{{ $data_aset_jtm->ulp }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Kawat</label>
                                <div class="col-sm-10">
                                  <input type="text" name="id_cabletype" class="form-control form-control-sm" id="id_cabletype" placeholder="id_cabletype" value="{{ $data_aset_jtm->id_cabletype }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Keterangan</label>
                                <div class="col-sm-10">
                                  <input type="text" name="location" class="form-control form-control-sm" id="location" placeholder="location" value="{{ $data_aset_jtm->location }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Penyulang</label>
                                <div class="col-sm-10">
                                  <input type="text" name="penyulang" class="form-control form-control-sm" id="penyulang" placeholder="penyulang" value="{{ $data_aset_jtm->penyulang }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Section</label>
                                <div class="col-sm-10">
                                  <input type="text" name="section" class="form-control form-control-sm" id="section" placeholder="section" value="{{ $data_aset_jtm->section }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Segment</label>
                                <div class="col-sm-10">
                                  <input type="text" name="segment" class="form-control form-control-sm" id="segment" placeholder="segment" value="{{ $data_aset_jtm->segment }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Phase</label>
                                <div class="col-sm-10">
                                  <input type="text" name="phase" class="form-control form-control-sm" id="phase" placeholder="phase" value="{{ $data_aset_jtm->phase }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">(KMS)</label>
                                <div class="col-sm-10">
                                  <input type="text" name="cable_length" class="form-control form-control-sm" id="cable_length" placeholder="cable_length" value="{{ $data_aset_jtm->cable_length }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">(MM2)</label>
                                <div class="col-sm-10">
                                  <input type="text" name="spec_cablesize" class="form-control form-control-sm" id="spec_cablesize" placeholder="spec_cablesize" value="{{ $data_aset_jtm->spec_cablesize }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Tiang</label>
                                <div class="col-sm-10">
                                  <input type="text" name="spec_pole" class="form-control form-control-sm" id="spec_pole" placeholder="spec_pole" value="{{ $data_aset_jtm->spec_pole }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Konsul</label>
                                <div class="col-sm-10">
                                  <input type="text" name="spec_consule" class="form-control form-control-sm" id="spec_consule" placeholder="spec_consule" value="{{ $data_aset_jtm->spec_consule }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">(M)</label>
                                <div class="col-sm-10">
                                  <input type="text" name="height_pole" class="form-control form-control-sm" id="height_pole" placeholder="height_pole" value="{{ $data_aset_jtm->height_pole }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Circuit</label>
                                <div class="col-sm-10">
                                  <input type="text" name="spec_circuit" class="form-control form-control-sm" id="spec_circuit" placeholder="spec_circuit" value="{{ $data_aset_jtm->spec_circuit }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Antara</label>
                                <div class="col-sm-10">
                                  <input type="text" name="segment1" class="form-control form-control-sm" id="segment1" placeholder="segment1" value="{{ $data_aset_jtm->segment1 }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Dan</label>
                                <div class="col-sm-10">
                                  <input type="text" name="segment2" class="form-control form-control-sm" id="segment2" placeholder="segment2" value="{{ $data_aset_jtm->segment2 }}">
                                </div>
                            </div>
                            <div class="form-group col-sm-2">
                                <div class="d-grid">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-2" style="background-color: #14A2BA;">PERBARUI</button>
                            </div>
                        </form>  
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('halaman_data_aset/js/scripts.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('halaman_data_aset/js/datatables-simple-demo.js') }}"></script>
    </body>
</html>