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
                        <h1 class="mt-4" style="color: #14a2ba;">Berita Acara Pengoperasian JTR PT PLN (Persero) UP3 Pinrang</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Berita Acara Pengoperasian JTR</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body fw-semi-bold" style="color: #125D72;">
                                Halaman berita acara merupakan sekumpulan berita acara yang dimiliki PT PLN (Persero) UP3 Pinrang
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header fw-bold">
                                Detail Berita Acara Pengoperasian JTR
                            </div>
                            <div class="card-body">
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Id JTR</label>
                                <div class="col-sm-10">
                                    <input type="text" name="id_jtr" class="form-control form-control-sm" id="id_jtr" placeholder="id_jtr" value="{{ $berita_acara_pengoperasian_jtr->id_jtr  }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Nomor Berita Acara</label>
                                <div class="col-sm-10">
                                  <input type="text" name="nomor_berita_acara" class="form-control form-control-sm" id="nomor_berita_acara" placeholder="nomor_berita_acara" value="{{ $berita_acara_pengoperasian_jtr->nomor_berita_acara  }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                              <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Tanggal</label>
                              <div class="col-sm-10">
                                <input type="date" name="tanggal" class="form-control form-control-sm" id="tanggal" placeholder="tanggal" value="{{ $berita_acara_pengoperasian_jtr->tanggal}}"readonly>
                                <small id="formatted-date" class="text-muted"></small>
                              </div>
                          </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">ULP</label>
                                <div class="col-sm-10">
                                  <input type="text" name="ulp" class="form-control form-control-sm" id="ulp" placeholder="ulp" value="{{ $berita_acara_pengoperasian_jtr->ulp }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">No.SBPJ Pelaksana</label>
                                <div class="col-sm-10">
                                  <input type="text" name="no_spbj" class="form-control form-control-sm" id="no_spbj" placeholder="no_spbj" value="{{ $berita_acara_pengoperasian_jtr->no_spbj  }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Vendor</label>
                                <div class="col-sm-10">
                                  <input type="text" name="vendor" class="form-control form-control-sm" id="vendor" placeholder="vendor" value="{{ $berita_acara_pengoperasian_jtr->vendor  }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Lokasi</label>
                                <div class="col-sm-10">
                                  <input type="text" name="location" class="form-control form-control-sm" id="location" placeholder="location" value="{{ $berita_acara_pengoperasian_jtr->location  }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Koordinat Awal</label>
                                <div class="col-sm-10">
                                  <input type="text" name="initial_coordinates" class="form-control form-control-sm" id="initial_coordinates" placeholder="initial_coordinates" value="{{ $berita_acara_pengoperasian_jtr->initial_coordinates  }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Koordinat Akhir</label>
                                <div class="col-sm-10">
                                  <input type="text" name="final_coordinates" class="form-control form-control-sm" id="final_coordinates" placeholder="final_coordinates" value="{{ $berita_acara_pengoperasian_jtr->final_coordinates  }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Penyulang</label>
                                <div class="col-sm-10">
                                  <input type="text" name="penyulang" class="form-control form-control-sm" id="penyulang" placeholder="penyulang" value="{{ $berita_acara_pengoperasian_jtr->penyulang   }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Keypoint</label>
                                <div class="col-sm-10">
                                  <input type="text" name="keypoint" class="form-control form-control-sm" id="keypoint" placeholder="keypoint" value="{{ $berita_acara_pengoperasian_jtr->keypoint  }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Section</label>
                                <div class="col-sm-10">
                                  <input type="text" name="section" class="form-control form-control-sm" id="section" placeholder="section" value="{{ $berita_acara_pengoperasian_jtr->section   }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Segment</label>
                                <div class="col-sm-10">
                                  <input type="text" name="segment" class="form-control form-control-sm" id="segment" placeholder="segment" value="{{ $berita_acara_pengoperasian_jtr->segment   }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Nama Gardu</label>
                                <div class="col-sm-10">
                                  <input type="text" name="nama_gardu" class="form-control form-control-sm" id="nama_gardu" placeholder="nama_gardu" value="{{ $berita_acara_pengoperasian_jtr->nama_gardu   }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Bahan</label>
                                <div class="col-sm-10">
                                  <input type="text" name="id_cabletype" class="form-control form-control-sm" id="id_cabletype" placeholder="id_cabletype" value="{{ $berita_acara_pengoperasian_jtr->id_cabletype   }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Phasa</label>
                                <div class="col-sm-10">
                                  <input type="text" name="phase" class="form-control form-control-sm" id="phase" placeholder="phase" value="{{ $berita_acara_pengoperasian_jtr->phase   }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Luas Penampang Kabel</label>
                                <div class="col-sm-10">
                                  <input type="text" name="spec_cablesize" class="form-control form-control-sm" id="spec_cablesize" placeholder="spec_cablesize" value="{{ $berita_acara_pengoperasian_jtr->spec_cablesize   }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Panjang Sirkit</label>
                                <div class="col-sm-10">
                                  <input type="text" name="cable_length" class="form-control form-control-sm" id="cable_length" placeholder="cable_length" value="{{ $berita_acara_pengoperasian_jtr->cable_length   }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Jenis Tiang</label>
                                <div class="col-sm-10">
                                  <input type="text" name="spec_pole" class="form-control form-control-sm" id="spec_pole" placeholder="spec_pole" value="{{ $berita_acara_pengoperasian_jtr->spec_pole   }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Jenis JTR</label>
                                <div class="col-sm-10">
                                  <input type="text" name="jtr_type" class="form-control form-control-sm" id="jtr_type" placeholder="jtr_type" value="{{ $berita_acara_pengoperasian_jtr->jtr_type   }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Jumlah Tiang</label>
                                <div class="col-sm-10">
                                  <input type="text" name="sumofpole" class="form-control form-control-sm" id="sumofpole" placeholder="sumofpole" value="{{ $berita_acara_pengoperasian_jtr->sumofpole   }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Jurusan Dari Gardu</label>
                                <div class="col-sm-10">
                                  <input type="text" name="jurusan_gardu" class="form-control form-control-sm" id="jurusan_gardu" placeholder="jurusan_gardu" value="{{ $berita_acara_pengoperasian_jtr->jurusan_gardu   }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">R-Body</label>
                                <div class="col-sm-10">
                                  <input type="text" name="insulation_r_body" class="form-control form-control-sm" id="insulation_r_body" placeholder="insulation_r_body" value="{{ $berita_acara_pengoperasian_jtr->insulation_r_body   }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">S-Body</label>
                                <div class="col-sm-10">
                                  <input type="text" name="insulation_s_body" class="form-control form-control-sm" id="insulation_s_body" placeholder="insulation_s_body" value="{{ $berita_acara_pengoperasian_jtr->insulation_s_body   }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">T-Body</label>
                                <div class="col-sm-10">
                                  <input type="text" name="insulation_t_body" class="form-control form-control-sm" id="insulation_t_body" placeholder="insulation_t_body" value="{{ $berita_acara_pengoperasian_jtr->insulation_t_body   }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Pemeriksaan Tahanan Pentanahan JTR</label>
                                <div class="col-sm-10">
                                  <input type="text" name="earthneutral" class="form-control form-control-sm" id="earthneutral" placeholder="earthneutral" value="{{ $berita_acara_pengoperasian_jtr->earthneutral   }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Pengawas</label>
                                <div class="col-sm-10">
                                  <input type="text" name="pengawas" class="form-control form-control-sm" id="pengawas" placeholder="pengawas" value="{{ $berita_acara_pengoperasian_jtr->pengawas   }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Pelaksana</label>
                                <div class="col-sm-10">
                                  <input type="text" name="pelaksana" class="form-control form-control-sm" id="pelaksana" placeholder="pelaksana" value="{{ $berita_acara_pengoperasian_jtr->pelaksana   }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Manager ULP</label>
                                <div class="col-sm-10">
                                  <input type="text" name="manager_ulp" class="form-control form-control-sm" id="manager_ulp" placeholder="manager_ulp" value="{{ $berita_acara_pengoperasian_jtr->manager_ulp   }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Created At</label>
                                <div class="col-sm-10">
                                  <input type="text" name="created_at" class="form-control form-control-sm" id="created_at" placeholder="created_at" value="{{ $berita_acara_pengoperasian_jtr->created_at   }}"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Updated At</label>
                                <div class="col-sm-10">
                                  <input type="text" name="updated_at" class="form-control form-control-sm" id="updated_at" placeholder="updated_at" value="{{ $berita_acara_pengoperasian_jtr->updated_at   }}"readonly>
                                </div>
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