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
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 text-center" style="color: #14a2ba;">
                            BERITA ACARA PENGOPERASIAN
                            <img src="{{ asset('halaman_data_aset/assets/img/Logo_PLN.png') }}" width="50" height="50" alt="Logo PLN" class="mx-2">
                            GARDU DISTRIBUSI
                        </h1>
                        <p class="text-center">NO: {{ $data->nomor_dokumen }}</p>
                    
                        <div class="card mb-4">
                            <div class="card-body fw-semi-bold" style="color: #125D72;">
                                <p><strong>UID:</strong> {{ $data->uid }}</p>
                                <p><strong>UP3:</strong> {{ $data->up3 }}</p>
                                <p><strong>ULP:</strong> {{ $data->ulp }}</p>
                                <p><strong>NO SPBJ:</strong> {{ $data->no_spbj }}</p>
                                <p><strong>Pelaksana:</strong> {{ $data->pelaksana }}</p>
                                <p><strong>Vendor:</strong> {{ $data->vendor }}</p>
                                <p><strong>Nama GD:</strong> {{ $data->nama_gd }}</p>
                                <p><strong>Hari/Tanggal:</strong> {{ $data->hari }}, {{ $data->tanggal }}</p>
                                <p><strong>Lokasi:</strong> {{ $data->lokasi }}</p>
                                <p><strong>Koordinat:</strong> {{ $data->koordinat }}</p>
                                <p><strong>Keypoint:</strong> {{ $data->keypoint }}</p>
                                <p><strong>Konstruksi:</strong> {{ $data->konstruksi }}</p>
                            </div>
                        </div>
                    
                        <div class="card mb-4">
                            <div class="card-header fw-bold">Detail Transformator</div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr><th>Merk / Type</th><td>{{ $data->merk_type }}</td></tr>
                                    <tr><th>No. Seri</th><td>{{ $data->nomor_seri }}</td></tr>
                                    <tr><th>Daya / Phasa</th><td>{{ $data->daya_phasa }}</td></tr>
                                    <tr><th>Berat / Volume Minyak</th><td>{{ $data->berat_minyak }} L</td></tr>
                                    <tr><th>Berat Total</th><td>{{ $data->berat_total }} Kg</td></tr>
                                    <tr><th>Impedansi</th><td>{{ $data->impedansi }}</td></tr>
                                    <tr><th>Vektor Group</th><td>{{ $data->vektor_group }}</td></tr>
                                    <tr><th>Posisi Tap</th><td>{{ $data->posisi_tap }}</td></tr>
                                    <tr><th>Standar</th><td>{{ $data->standar }}</td></tr>
                                    <tr><th>Bahan Belitan</th><td>{{ $data->bahan_belitan }}</td></tr>
                                    <tr><th>Sistem Pendingin</th><td>{{ $data->sistem_pendingin }}</td></tr>
                                    <tr><th>Sadapan</th><td>{{ $data->sadapan }}</td></tr>
                                    <tr><th>Arus Pengenal (A)</th><td>{{ $data->arus_pengenal }}</td></tr>
                                    <tr><th>Tegangan Pengenal (V)</th><td>{{ $data->tegangan_pengenal }}</td></tr>
                                    <tr><th>Kenaikan Suhu</th><td>{{ $data->kenaikan_suhu }}</td></tr>
                                    <tr><th>Tahun Buat</th><td>{{ $data->tahun_buat }}</td></tr>
                                    <tr><th>Beban Trafo</th><td>{{ $data->beban_trafo }}%</td></tr>
                                    <tr><th>Keterangan</th><td>{{ $data->keterangan }}</td></tr>
                                </table>
                            </div>
                        </div>
                    
                        <div class="card mb-4">
                            <div class="card-header fw-bold">Data Pemasangan</div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Data Dipasang</th>
                                            <th>Spesifikasi</th>
                                            <th>Jumlah</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data->pemasangan as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->spesifikasi }}</td>
                                            <td>{{ $item->jumlah }}</td>
                                            <td>{{ $item->keterangan }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    
                        <div class="card mb-4">
                            <div class="card-header fw-bold">Pemeriksaan Tahanan</div>
                            <div class="card-body">
                                <ul>
                                    <li>R - Body: {{ $data->tahanan_r_body }} GΩ</li>
                                    <li>S - Body: {{ $data->tahanan_s_body }} GΩ</li>
                                    <li>T - Body: {{ $data->tahanan_t_body }} GΩ</li>
                                    <li>Tahanan Pentanahan Netral: {{ $data->tahanan_netral }} Ω</li>
                                    <li>Tahanan Pentanahan Body: {{ $data->tahanan_body }} Ω</li>
                                </ul>
                            </div>
                        </div>
                    
                        <div class="mt-4">
                            <p>Demikian berita acara ini dibuat untuk dapat digunakan sebagaimana mestinya.</p>
                            <div class="row mt-5">
                                <div class="col text-center">
                                    <p>Mengetahui,</p>
                                    <p><strong>{{ $data->nama_manager }}</strong></p>
                                    <p>Manager UP3 {{ $data->up3 }}</p>
                                </div>
                                <div class="col text-center">
                                    <p>Disetujui,</p>
                                    <p><strong>{{ $data->nama_asman }}</strong></p>
                                    <p>Asman Jaringan</p>
                                </div>
                                <div class="col text-center">
                                    <p>Pelaksana,</p>
                                    <p><strong>{{ $data->nama_pelaksana }}</strong></p>
                                    <p>JTC Kons. & Log</p>
                                </div>
                                <div class="col text-center">
                                    <p>Pengawas,</p>
                                    <p><strong>{{ $data->nama_pengawas }}</strong></p>
                                    <p>TL Teknik</p>
                                </div>
                            </div>
                        </div>
                    </div>
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