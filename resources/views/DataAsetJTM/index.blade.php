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
                        <div class="card mb-3">
                            <div class="card-header d-flex  align-items-center justify-content-between fw-bold">
                                Tabel Data Aset JTM
                                <a href="{{ route('DataAsetJTM.create') }}" class="btn btn-group btn-primary rounded submit px-1 float-end" margin="right" style="background-color:#14A2BA; color:#fff;">Tambah Data</a>
                            </div>
                            @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                            @endif
                            <form action="{{ route('DataAsetJTM.search') }}" method="get">
                            <div class="input-group mt-3 mb-4">
                                <input type="text" name="query" class="form-control" placeholder="Cari Data Aset JTM..." value="">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" style="background-color: #125d72;">Cari</button>
                                </div>
                            </div>
                        </form>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="align-items-center" style="background-color: #e7f6f9; color: #125d72;">
                                            <th>No</th>
                                            <th>Id JTM</th>
                                            <th>ULP</th>
                                            <th>Keypoint</th>
                                            <th>Kawat</th>
                                            <th>Penyulang</th>
                                            <th>Section</th>
                                            <th>Segmen</th>
                                            <th>Fasa</th>
                                            <th>Panjang Sirkit (KMS)</th>
                                            <th>Luas Penampang Kabel (MM2)</th>
                                            <th>Jenis Tiang</th>
                                            <th>Konsul</th>
                                            <th>Tinggi (M)</th> 
                                            <th>(Circuit)</th> 
                                            <th>Segment Awal</th>  
                                            <th>Segment Akhir</th>
                                            <th>Main/PERC</th>
                                            <th>Opsi</th>                              
                                        </tr>
                                    </thead>
                                        <tbody>
                                            @if ($data_aset_jtm->count() > 0)
                                            @foreach ($data_aset_jtm as $rs)
                                            <tr>
                                                <td class="align-middle">{{ $loop->iteration }}</td>
                                                <td class="align-middle">{{ $rs->id_jtm }}</td>
                                                <td class="align-middle">{{ $rs->ulp }}</td>
                                                <td class="align-middle">{{ $rs->keypoint}}</td>
                                                <td class="align-middle">{{ $rs->id_cabletype }}</td>
                                                <td class="align-middle">{{ $rs->penyulang }}</td>
                                                <td class="align-middle">{{ $rs->section }}</td>
                                                <td class="align-middle">{{ $rs->segment }}</td>
                                                <td class="align-middle">{{ $rs->phase }}</td>
                                                <td class="align-middle">{{ $rs->cable_length }}</td>
                                                <td class="align-middle">{{ $rs->spec_cablesize }}</td>
                                                <td class="align-middle">{{ $rs->spec_pole }}</td>
                                                <td class="align-middle">{{ $rs->spec_consule }}</td>
                                                <td class="align-middle">{{ $rs->height_pole }}</td>
                                                <td class="align-middle">{{ $rs->spec_circuit }}</td>
                                                <td class="align-middle">{{ $rs->segment1 }}</td>
                                                <td class="align-middle">{{ $rs->segment2 }}</td>
                                                <td class="align-middle">{{ $rs->environment }}</td>
                                                <td class="align-middle">
                                                <div class = "btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('DataAsetJTM.show', $rs->id) }}" type="button" class="btn btn-primary rounded submit px-1 btn-gap" style="background-color: #14A2BA;">Detail</a>
                                                    <a href="{{ route('DataAsetJTM.edit',$rs->id) }}" type="button" class="btn btn-primary rounded submit px-1 btn-gap" style="background-color: #14A2BA;">Edit</a>
                                                    <form action ="{{ route('DataAsetJTM.destroy',$rs->id) }}" method="post" type="button" class="btn btn-primary px-1" style="background-color: #14A2BA;" onsubmit="return confirm('Delete?')">
                                                        @csrf
                                                        @method('delete')
                                                    <button class = "btn btn-group btn-primary rounded submit" style="background-color: #14A2BA;">Hapus</button>
                                                    </form>
                                                </div>
                                            </td>
                                            </tr> 
                                            @endforeach
                                            @else
                                            <tr>
                                         <td class="align-middle text-center" colspan="24"> Data Aset JTM Kosong </td>
                                            </tr>
                                            @endif
                                    </tbody>
                                </table>
                                <script>
                                </script>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('halaman_data_aset/js/scripts.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('halaman_data_aset/js/datatables-simple-demo.js') }}"></script>
    </body>
</html>
