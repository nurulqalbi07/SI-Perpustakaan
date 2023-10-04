<?php
    session_start();
    include 'koneksi.php';
    if($_SESSION['stat_login'] != true){
        echo '<script>window.location = "login.php"</script>';
    }
    if(isset($_POST['submit'])) {
        $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_anggota, 5)) AS id FROM anggota");
        $d = mysqli_fetch_object($getMaxId);
        $generateId = 'P'.date('Y').sprintf("%05s", $d->id + 1);
        echo $generateId;

        //proses insert
        $insert = mysqli_query($conn, "INSERT INTO anggota VALUES (
                '".$generateId."', 
                '".date('Y-m-d')."',
                '".$_POST['thn_ajaran']."',
                '".$_POST['nama_anggota']."',
                '".$_POST['tmp_lahir']."',
                '".$_POST['tgl_lahir']."',
                '".$_POST['jk_anggota']."',
                '".$_POST['jurusan_anggota']."',
                '".$_POST['notelp_anggota']."',
                '".$_POST['alamat_anggota']."'
            )");

            if($insert){
                echo '<script>window.location="report-input-berhasil.php?id='.$generateId.'"</script>';
            }else{
                echo 'huft coba lagi '.mysqli_error($conn);
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Language" content="en" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Pendaftaran Anggota Perpustakaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Wide selection of forms controls, using the Bootstrap 4 code base, but built with React." />
    <meta name="msapplication-tap-highlight" content="no" />

    <link href="./main.css" rel="stylesheet" />
  </head>
  <body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
      <div class="app-header header-shadow">
        <div class="app-header__logo">
          <div class="logo-src"></div>
          <div class="header__pane ml-auto">
            <div>
              <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>
        <div class="app-header__mobile-menu">
          <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
        <div class="app-header__menu">
          <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
              <span class="btn-icon-wrapper">
                <i class="fa fa-ellipsis-v fa-w-6"></i>
              </span>
            </button>
          </span>
        </div>
        
      </div>
      <!-- Awal -->
      <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
          <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
              <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </button>
              </div>
            </div>
          </div>
          <div class="app-header__mobile-menu">
            <div>
              <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
          <div class="app-header__menu">
            <span>
              <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                  <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
              </button>
            </span>
          </div>
          <div class="scrollbar-sidebar">
            <div class="app-sidebar__inner">
              <ul class="vertical-nav-menu">
              <li class="app-sidebar__heading"><a href="index.php">Dashboards</a></li>
                <li class="app-sidebar__heading">Forms</li>
                <li>
                  <a href="crud-input-anggota.php" class="mm-active"> <i class="metismenu-icon pe-7s-add-user"></i>
                    Pendaftaran 
                  </a>
                </li>
                <li class="app-sidebar__heading">Report</li>
                <li>
                  <a href="crud-read-anggota.php"><i class="metismenu-icon pe-7s-notebook"></i>
                    Data Anggota  
                  </a>
                </li>
                <li class="app-sidebar__heading">Setting</li>
                <li>
                <a href="logout.php"><i class="metismenu-icon pe-7s-power"></i>
                    Logout
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="app-main__outer">
          <div class="app-main__inner">
            <div class="app-page-title">
              <div class="page-title-wrapper">
                <div class="page-title-heading">
                  <div class="page-title-icon">
                    <i class="pe-7s-add-user icon-gradient bg-premium-dark"> </i>
                  </div>
                  <div>
                    Form Pendaftaran Anggota
                    <div class="page-title-subheading">
                      Silahkan Isi Biodata Anda Di bawah Ini Dengan Tepat.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-content">
              <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="row">
                  <div class="col-md-6">
                    <div class="main-card mb-3 card">
                      <div class="card-body">
                        <h5 class="card-title">BIODATA CALON ANGGOTA PERPUSTAKAAN</h5>
                        <form action="" method="post">
                          <div class="position-relative form-group"><label>Tahun Ajaran</label><input name="thn_ajaran" class="form-control" value="2021/2022" readonly /></div>
                          <div class="position-relative form-group">
                            <label>Jurusan</label>
                            <select name="jurusan_anggota" class="form-control" required>
                              <option value="">--Pilih--</option>
                              <option value="Sistem Informasi">Sistem Informasi</option>
                              <option value="Teknik Informatika">Teknik Informatika</option>
                              <option value="Manajemen Informatika">Manajemen Informatika</option>
                            </select>
                          </div>
                          <div class="position-relative form-group"><label>Nama Lengkap</label><input name="nama_anggota" class="form-control" required /></div>
                          <div class="position-relative form-group"><label>Tempat Lahir</label><input name="tmp_lahir" class="form-control" required /></div>
                          <div class="position-relative form-group"><label>Tanggal Lahir</label><input type="date" name="tgl_lahir" class="form-control" required /></div>
                          <div id="position-relative form-group">
                            <label>Jenis Kelamin</label>
                            <div class="form-check">
                              <input type="radio" name="jk_anggota" class="form-check-input" value="Laki-laki" />
                              <label class="form-check-label" for="exampleRadios1"> Laki-laki </label>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <input type="radio" name="jk_anggota" class="form-check-input" value="Perempuan" />
                              <label class="form-check-label" for="exampleRadios1"> Perempuan </label>
                            </div>
                          </div>
                          <div class="position-relative form-group"><label>No. Telpon</label><input name="notelp_anggota" class="form-control" required /></div>
                          <div class="position-relative form-group"><label for="exampleText" class="">Alamat Lengkap</label><textarea name="alamat_anggota" id="exampleText" class="form-control" required></textarea></div>
                          <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="app-wrapper-footer">
            <div class="app-footer">
              <div class="app-footer__inner">
                <div class="app-footer-right">
                  <ul class="nav">
                    <li class="nav-item">
                      <a href="javascript:void(0);" class="nav-link">
                        copyright by @11194036 @11194048 2021
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
  </body>
</html>
