<?php
    session_start();
    include 'koneksi.php';
    if(isset($_POST['submit'])) {
        // Ambil 1 id terbesar di kolom id pendaftaran, lalu ambil 5 karakter aja dari sebelah kanan
        
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
                '".$_POST['jk_Anggota']."',
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
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components." />
    <meta name="msapplication-tap-highlight" content="no" />

    <link href="./main.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Penting!!! -->
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
        <div class="app-header__content">
          
          </div>
      </div>
      <!-- Penting!!! -->
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
                  <a href="crud-input-anggota.php"><i class="metismenu-icon pe-7s-add-user"></i>
                    Pendaftaran 
                  </a>
                </li>
                <li class="app-sidebar__heading">Report</li>
                <li>
                  <a href="crud-read-anggota.php"  class="mm-active"><i class="metismenu-icon pe-7s-notebook"></i>
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
                    <i class="pe-7s-notebook icon-gradient bg-mean-fruit"> </i>
                  </div>
                  <div>
                    Data Anggota
                    <div class="page-title-subheading">Data Anggota yang berhasil mendaftar sebagai anggota.</div>
                  </div>
                </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
              <div class="card-title">
              <a class="btn btn-outline-primary" href="crud-input-anggota.php" role="button">Baru</a>
              <a class="btn btn-outline-primary" href="report-cetak-anggota.php" role="button">Cetak</a>
              <a class="btn btn-outline-primary" href="report-fpdf.php" role="button">Report FPDF</a>
              <a class="btn btn-outline-primary" href="report-dompdf.php" role="button">Report DomPDF</a>
                </div>
                <div class="main-card mb-3 card">
                  <div class="card-header">
                    Data Anggota
                  </div>
                  <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                      <thead>
                        <tr>
                          <th class="text-center">No.</th>
                          <th class="text-center">ID Anggota</th>
                          <th class="text-center">Nama</th>
                          <th class="text-center">Jenis kelamin</th>
                          <th class="text-center">Jurusan</th>
                          <th class="text-center">Alamat</th>
                          <th class="text-center">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $no = 1;
                        $list_peserta = mysqli_query($conn, "SELECT * FROM anggota ");
                        while($row = mysqli_fetch_array($list_peserta)){
                      ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['id_anggota'] ?></td>
                      <td><?php echo $row['nama_anggota'] ?></td>
                      <td><?php echo $row['jk_anggota'] ?></td>
                      <td><?php echo $row['jurusan_anggota'] ?></td>
                      <td><?php echo $row['alamat_anggota'] ?></td>
                      <td>
                        <a href="report-detail-anggota.php?id=<?php echo $row['id_anggota'] ?>" button type="button" class="btn btn-success">Detail</a>
                        <a href="crud-update-anggota.php?id=<?php echo $row['id_anggota'] ?>" button type="button" class="btn btn-primary">Edit</a>
                        <a href="crud-delete-anggota.php?id=<?php echo $row['id_anggota'] ?>" button type="button" class="btn btn-danger" onclick="return confirm('Yakin ?')">Hapus</a>
                      </td>
                    </tr>
                    <?php } ?>
                      </tbody>
                    </table>
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
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
      </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
  </body>
</html>
