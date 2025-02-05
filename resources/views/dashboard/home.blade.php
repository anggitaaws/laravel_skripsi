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
        <link href="{{ asset('halaman_dashboard/dist/css/styles.css')}}" rel="stylesheet" />
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
            <img src="{{ asset('halaman_dashboard/dist/assets/img/Logo_PLN.png') }}" width="40" height="50" alt="" class="d-inline-block align-text-center">
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
                                            <a class="nav-link" href="{{ route('BeritaAcaraPengoperasianGD') }}" style="color: #fff;">Gardu</a>
                                            <a class="nav-link" href="{{ route('BeritaAcaraPengoperasianJTR') }}" style="color: #fff;">JTR</a>
                                            <a class="nav-link" href="{{ route('BeritaAcaraPengoperasianJTM') }}" style="color: #fff;">JTM</a>
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
                                            <a class="nav-link" href="{{ route('BeritaAcaraPenghapusanGD') }}" style="color: #fff;">Gardu</a>
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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Aset PT PLN (Persero) UP3 Pinrang</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card mb-4" style="background-color:#EFE62F; color:#14A2BA;">
                                    <div class="card-body fw-bold fs-3">Data Aset Gardu</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="medium text-black" style="text-decoration: none;">Jumlah: {{ $garduCount }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card mb-4" style="background-color:#EFE62F; color:#14A2BA;">
                                    <div class="card-body fw-bold fs-3">Data Aset JTR</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="medium text-black" style="text-decoration: none;">Jumlah: {{ $jtrCount }} </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card mb-4" style="background-color:#EFE62F; color:#14A2BA;">
                                    <div class="card-body fw-bold fs-3">Data Aset JTM</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="medium text-black" style="text-decoration: none;">Jumlah: {{ $jtmCount }} </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                        <div id="lokasi-kami" class="card mt-5">
                            <div class="card-header" style="background-color: #14a2ba; color: white;">
                            <h5>Lokasi Kami</h5>
                            <div class="ratio ratio-21x9">
                                <iframe 
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.0315901648337!2d119.64671907497416!3d-3.80324629617059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d944d1e308ae079%3A0x3ff1908f442fc0b2!2sPT%20PLN%20(Persero)%20Area%20PINRANG!5e0!3m2!1sen!2sid!4v1738734410857!5m2!1sen!2sid"
                                    width="50%" 
                                    height="90" 
                                    style="border:0;" 
                                    allowfullscreen="" 
                                    loading="lazy" 
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                        <div id="about-us" class="card mt-5">
                            <div class="card-header" style="background-color: #14a2ba; color: white;">
                                <h3 class="align-items-center">About Us</h3>
                            </div>
                            <div class="card-body">
                                <h4>Selamat Datang di Sistem Manajemen Data Aset PLN</h4>
                                <p>
                                    Sistem ini dikembangkan untuk mempermudah pengelolaan data aset gardu, JTR, dan JTM.
                                    Dengan adanya sistem ini, diharapkan proses pencatatan dan monitoring aset menjadi lebih efisien.
                                </p>
                                <p>Jika Anda memiliki pertanyaan, silakan hubungi tim IT PLN UP3 Pinrang.</p>
                            </div>
                        </div>
                </main>
                <footer class="py-3 mt-auto" style="background-color: #D9D9D9; color: black;">
                    <div class="container-fluid px-3">
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
        <script src="{{ asset('halaman_dashboard/src/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('halaman_dashboard/src/js/datatables-simple-demo.js') }}"></script>
    </body>
</html>
