<?php
//koneksi ke database
require 'koneksi.php';

// Jumlah data per halaman
$limit = 10;

// Halaman saat ini
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Kolom dan kata kunci pencarian
$kolomCari = isset($_GET['Kolom']) ? $_GET['Kolom'] : "";
$kolomKataKunci = isset($_GET['KataKunci']) ? $_GET['KataKunci'] : "";

// Hitung offset data
$offset = ($page - 1) * $limit;

// Query SQL dengan pencarian dan limit
$sql = "SELECT * FROM work_order";
if (!empty($kolomCari) && !empty($kolomKataKunci)) {
    $sql .= " WHERE $kolomCari LIKE '%$kolomKataKunci%'";
}
$sql .= " LIMIT $offset, $limit";

// Eksekusi query
$result = mysqli_query($conn, $sql);

// Total jumlah data
$totalData = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM work_order"));
$totalPages = ceil($totalData / $limit);?>

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
                  src="assets/images/pln.jpg" width="170px"
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
              ><i class="ti-menu ti-close"></i></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i></a>
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
                  ><i class="mdi mdi-cube"></i>
                  <span class="hide-menu">Data Umpan Balik</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="laporan.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-file-pdf"></i
                  ><span class="hide-menu">Laporan</span></a>
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
              <h3 class="page-title">Tabel Perintah Kerja</h3>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
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
                 <!--Panel Form pencarian  -->
                    <div class="col-md-4 mb-4 mx-2">
                         <div class="panel panel-default">
                             <div class="panel-body">
                                <form class="form-inline" >
                                     <div class="form-group">
                                     <select class="form-control" id="Kolom" name="Kolom" required="">
                                     <?php
                                     $kolom=(isset($_GET['Kolom']))? $_GET['Kolom'] : "";
                                     ?>
                                     <option value="teknisi" <?php if ($kolom=="teknisi") echo "selected"; ?>>Teknisi</option>
                                     <option value="status" <?php if ($kolom=="status") echo "selected"; ?>>Status</option>
                                     <option value="masalah_mesin" <?php if ($kolom=="masalah_mesin") echo "selected";?>>Masalah Mesin</option>
                                     <option value="perbaikan_mesin" <?php if ($kolom=="perbaikan_mesin") echo "selected"; ?>>Perbaikan Pada Mesin</option>
                                     <option value="kondisi_mesin_last" <?php if ($kolom=="kondisi_mesin_last") echo "selected";?>>Level Kerusakan</option>
                                     </select>
                                     </div>
                                     <div class="form-group mb-2">
                                     <input type="text" class="form-control" id="KataKunci" name="KataKunci" placeholder="Kata kunci.." required="" value="<?php if (isset($_GET['KataKunci']))  echo $_GET['KataKunci']; ?>">
                                     </div>
                                     <button type="submit" class="btn btn-success ">Cari</button>
                                     <a href="data_work.php" class="btn btn-danger ">Reset</a>
                                 </form>
                             </div>
                         </div>
                    </div>
                <!--Akhir Panel Form pencarian  --> 
                <!--TABEL RESPONSIVE --> 
                <div class="card">
                    <div class="card-body">
                         <div class="card-title" style="display: grid; justify-content: end;">
                         <a class="btn btn-sm btn-primary" href="tambah_datawo.php"><i class="mdi mdi-plus"></i> Tambah Data</a>
                         </div>
                             <div class="table-responsive">
                    <table id="zero_config"
                             class="table table-striped table-bordered table-primary table-hover text-center text-capitalize">
                        <thead>
                        <tr class="table-danger table-active text-uppercase text-black">
                             <th>No</th>
                             <th>Kode Work Order</th>
                             <th>Teknisi</th>
                             <th>Start Date</th>
                             <th>Target Date</th>
                             <th>Masalah Mesin</th>
                             <th>Status</th>
                             <th>Level Kerusakan</th>
                             <th>Opsi</th>
                        </tr>
                        </thead>
                            <?php $i = ($page - 1) * $limit + 1; // Calculate the starting number for each page
                            while ($row = mysqli_fetch_array($result)) { ?>
                    <tbody>
                        <tr>
                             <td><?= $i; ?></td>
                             <td><?= $row["kode_work_order"]; ?></td>
                             <td><?= $row["teknisi"]; ?></td>
                             <td><?= $row["tgl_mulai"]; ?></td>
                             <td><?= $row["tgl_selesai"]; ?></td>
                             <td><?= $row["masalah_mesin"]; ?></td>
                             <td><?= $row["status"]; ?></td>
                            <td><?= $row["kondisi_mesin_last"]; ?></td>
                            <td>
                                 <a href="edit_work.php?id=<?= $row["id"]; ?>" class="btn btn-primary">edit</a>
                                 <a href="delete_work.php?id=<?= $row["id"]; ?>" class="btn btn-info">hapus</a>
                          </td>
                        </tr>
                        <?php $i++;
                        } ?>
                      </tbody>
                    </table>
                 </div>

                  <!-- Pagination -->
                <div align="right">
                    <ul class="pagination">
                     <?php if ($page > 1) : ?>
                     <li class="page-item">
                         <a class="page-link" href="data_work.php?Kolom=<?php echo $kolomCari; ?>&KataKunci=<?php echo $kolomKataKunci; ?>&page=1">First</a>
                     </li>

                     <li class="page-item">
                         <a class="page-link" href="data_work.php?Kolom=<?php echo $kolomCari; ?>&KataKunci=<?php echo $kolomKataKunci; ?>&page=<?php echo $page - 1; ?>">Previous</a>
                     </li>

                 <?php endif; ?>

                 <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                     <li class="page-item <?php if ($page === $i) echo 'active'; ?>">
                         <a class="page-link" href="data_work.php?Kolom=<?php echo $kolomCari; ?>&KataKunci=<?php echo $kolomKataKunci; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                     </li>

                <?php endfor; ?>

                 <?php if ($page < $totalPages) : ?>
                     <li class="page-item">
                         <a class="page-link" href="data_work.php?Kolom=<?php echo $kolomCari; ?>&KataKunci=<?php echo $kolomKataKunci; ?>&page=<?php echo $page + 1; ?>">Next</a>
                     </li>
                     <li class="page-item">
                         <a class="page-link" href="data_work.php?Kolom=<?php echo $kolomCari; ?>&KataKunci=<?php echo $kolomKataKunci; ?>&page=<?php echo $totalPages; ?>">Last</a>
                     </li>
                 <?php endif; ?>
                     </ul>
                </div>
               </div>
            </div>
             <!--TABEL RESPONSIVE --> 

      
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
