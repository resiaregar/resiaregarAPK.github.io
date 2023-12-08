<?php
    require 'koneksi.php';
    if(isset($_POST['simpan'])) {

        // fungsi function untuk mengubah post menjadi data agar lebih mudah

        function tambah($data) {
            global $conn;
            // agar data dapat diisi dengan baik dan benar maka dapat menambahkan sebelum $data yaitu htmlspecialcharts
            $kode_work_order = htmlspecialchars($data['kode_work_order']);
            $teknisi =  htmlspecialchars($data['teknisi']);
            $tgl_mulai = htmlspecialchars($data['tgl_mulai']);
            $tgl_selesai =  htmlspecialchars($data['tgl_selesai']);
            $masalah_mesin =  htmlspecialchars($data['masalah_mesin']);
            $status =  htmlspecialchars($data['status']);
            $kondisi_mesin_last =  htmlspecialchars($data['kondisi_mesin_last']);
    
             // query untuk menyimpan data 
             $query = "INSERT INTO work_order VALUES ('','$kode_work_order', '$teknisi', '$tgl_mulai', '$tgl_selesai', '$masalah_mesin', '$status', '$kondisi_mesin_last')";
             mysqli_query($conn, $query);
    
             return mysqli_affected_rows($conn); }
         
    
   if( tambah($_POST) > 0) {
    echo "<script> alert ('data berhasil ditambah');
          document.location.href = 'data_work.php'; </script>";
   } else {
    echo "<script> alert ('data gagal ditambah');
        document.location.href = 'data_work.php';  </script>";
   } 
}
?>


<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Aplikasi Pemeliharaan Korekktfif</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/images/pln.jpg"
    />
    <!-- Custom CSS -->
    <link
      href="assets/libs/fullcalendar/dist/fullcalendar.min.css"
      rel="stylesheet"
    />
    <link href="assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <link href="dist/css/style.min.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full">
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="home.php">
              <!-- Logo icon -->
              <b class="logo-icon ps-2">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <!--<img
                  src="assets/images/logo1.png"
                  alt="homepage"
                  class="light-logo"
                  width="25"
                />-->
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text ms-1">
                <!-- dark Logo text -->
                <img
                  src="admin/assets/images/pln.jpg" width="170px"
                  alt="homepage"
                  class="light-logo mx-2"
                />
              </span>
              <!-- Logo icon -->
              <!-- <b class="logo-icon"> -->
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

              <!-- </b> -->
              <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i
                ></a>
              </li>
              <!-- ============================================================== -->
              <!-- create new -->
              <!-- ============================================================== -->
              
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li class="nav-item search-box">
                <a
                  class="nav-link waves-effect waves-dark"
                  href="javascript:void(0)"
                  ><i class="mdi mdi-magnify fs-4"></i
                ></a>
                <form class="app-search position-absolute">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search &amp; enter"
                  />
                  <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                </form>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
          
              <li class="nav-item dropdown">
                <a
                  class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  "
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img
                    src="admin/assets/images/f.jpg"
                    alt="user"
                    class="rounded-circle"
                    width="31"/>
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end user-dd animated"
                  aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="index.php"></i>Logout</a>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="home.php"
                  aria-expanded="false"
                  ><i class="fas fa-layer-group fa-1x text-gray-300"></i>
                  <span class="hide-menu">Dashboard</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="data_work.php"
                  aria-expanded="false"
                  ><i class="fas fa-fw fa-cog"></i>
                  <span class="hide-menu">Data Perintah Kerja</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="data_cat_kerja.php"
                  aria-expanded="false"
                  ><i class="fas fa-fw fa-wrench"></i>
                  <span class="hide-menu">Data Umpan Balik</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="laporan.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-logout"></i
                  ><span class="hide-menu">Laporan</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="index.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-logout"></i
                  ><span class="hide-menu">keluar</span></a
                >
              </li>
            </ul>
          </nav>
           <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper" style="background-image: url(admin/assets/images/d.png); background-repeat: no-repeat; background-size: cover;">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h3 class="page-title">Form Tambah Perintah Kerja</h3>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="data_work.php">Home</a></li>
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                
                <!--TABEL RESPONSIVE --> 
                <div class="card" style="background-color: azure;">
                    <div class="card-body">
                         <div class="card-title" style="display: grid; justify-content: end;"></div>
                    <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered table-primary table-hover text-center text-capitalize">

                    <form method="POST" action="tambah_datawo.php">
                         <div class="form-group row">
                              <label for="inputEmail3" class="col-sm-3 col-form-label" style="font-weight:bold; color: black;">Kode Work Order</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" id="kode_work_order" name="kode_work_order" style="font-weight:bold" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label" style="font-weight:bold; color: black;">Teknisi</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" id="teknisi" name="teknisi"  style="font-weight:bold" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label" style="font-weight:bold; color: black;" >Start Date</label>
                    <div class="col-sm-6">
                    <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" style="font-weight:bold" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label" style="font-weight:bold; color: black;" >Target Date</label>
                    <div class="col-sm-6">
                    <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" style="font-weight:bold" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label" style="font-weight:bold; color: black;" >Masalah Mesin</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" id="masalah_mesin" name="masalah_mesin" style="font-weight:bold" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label" style="font-weight:bold; color: black;" >Status</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" id="status" name="status" style="font-weight:bold" required> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label"style="font-weight:bold; color: black;" >Level Kerusakan</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" id="kondisi_mesin_last" name="kondisi_mesin_last" style="font-weight:bold" required> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-5">
                    <button type="submit" name="simpan"class="btn btn-lg btn-primary btn-block">Simpan</button>
                    <input type="button" value="Kembali!" class="btn btn-lg btn-info btn-block" onclick="history.back()"></input>
                    </div>
                </div>
                </form>
                    </table>
                 </div>

                 
            </div>
            </div>
             <!--TABEL RESPONSIVE --> 

           <!--Form Tambah Data--> 
            <!--Last Form Tambah Data--> 
            

      
        </div>  
    </div>  
          <!-- batas akhir dari kolom -->
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="mt-4 footer text-center bg-light">
          Copyright &copy; Teresia Tiur Maida Sormin 2023
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="dist/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="dist/js/jquery-ui.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="assets/libs/moment/min/moment.min.js"></script>
    <script src="assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="dist/js/pages/calendar/cal-init.js"></script>
  </body>
</html>
