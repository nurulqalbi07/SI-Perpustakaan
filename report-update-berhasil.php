<?php
    include 'koneksi.php';
    $anggota =mysqli_query($conn, "SELECT * FROM anggota WHERE id_anggota = '".$_GET['id']."'");
    $a = mysqli_fetch_object($anggota);
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
                <li>
                  <a href="#"><i class="metismenu-icon pe-7s-rocket"></i>
                    Login
                  </a>
                </li>
                <li class="app-sidebar__heading">Forms</li>
                <li>
                  <a href="crud-input-anggota.php"><i class="metismenu-icon pe-7s-mouse"></i>
                    Pendaftaran 
                  </a>
                </li>
                <li class="app-sidebar__heading">Report</li>
                <li>
                  <a href="crud-read-anggota.php"  class="mm-active"><i class="metismenu-icon pe-7s-rocket"></i>
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
                    Kartu Anggota
                    <div class="page-title-subheading"></div>
                  </div>
                </div>
                </div>
            </div>
            <h4>UPDATE BERHASIL</h4>
            <p>
                Silahkan Kembali ke halaman <a href="crud-read-anggota.php">data-anggota</a>
            </p>
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
