<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SHE||RSUD KALISAT</title>
    <link rel="icon" href="bahan/dist/img/kalisat.ico" type="image/x-icon">
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url()?>latar/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>latar/css/sb-admin-2.min.css" rel="stylesheet">
   
   <!-- Masukkan CSS di sini -->
   <style>
        /* CSS untuk styling tabel */
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        /* CSS untuk header kolom */
        .table thead th { 
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        /* CSS untuk sel data */
        .table tbody td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        /* CSS untuk baris ganjil */
        .table tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        /* CSS untuk baris saat hover */
        .table tbody tr:hover {
            background-color: #f2f2f2;
        }
        .bg-custom-samping {
            background-color: #07243c;
        }

        .bg-custom-atas {
         
          background-color: #0F4C81;
        }
    </style>

</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-custom-samping sidebar sidebar-dark accordion font-weight-bold" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon ">
                    <i ><img src="<?php echo base_url() ?>bahan/dist/img/kalisat.png" width="40" height="40" alt="logo" /> </i>
                </div>
               <!-- <div class="sidebar-brand-text mx-3"><?php echo $this->session->userdata('access'); ?></div>  -->
                <div 
                    class="sidebar-brand-text mx-3"><?php echo $this->session->userdata('namaruangan');  ?>
                </div>                                       
            </a>   
                     
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('visitor'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
            Report
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Laporan Rawat Inap </span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pasien Rawat Inap:</h6>                      
                        <a class="collapse-item" href="Vpasienmasuk">Pasien Masuk</a>
                        <a class="collapse-item" href="Vpasienpulang">Pasien Keluar</a>
                        <a class="collapse-item" href="Vpasienmati">Pasien Meninggal</a>
                               
                    </div>
                </div>
            </li>        
            <!-- Heading -->
            <div class="sidebar-heading">
              
            </div>    
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseU"
                    aria-expanded="true" aria-controls="collapseUtilitis">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Laporan Indikator</span>
                </a>
                <div id="collapseU" class="collapse" aria-labelledby="headingUtilitis"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Laporan Indikator</h6>                       
                        <a class="collapse-item" href="Vlaporanruangan">Lap.Indikator Ruangan </a>
                        <a class="collapse-item" href="Vlaporankelas">Lap Indikator Kelas </a>
                        <a class="collapse-item" href="Vlaporanrumahsakit">Lap.Indikator Rumah Sakit</a>                       
                        <a class="collapse-item" href="Vlaporanmati">Lap. Kematian per-ruangan </a> 
                                           
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Laporan Statistik</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Statistik</h6>
                        <a class="collapse-item" href="Vstatistikruangan">Statistik Ruangan </a>
                        <a class="collapse-item" href="Vstatistikkelas">Statistik Kelas</a>
                        <!--<a class="collapse-item" href="VstatistikrumahSakit">Statistik Rumah Sakit</a>-->
                        <a class="collapse-item" href="VperiodeStatistik">Statistik Rumah Sakit</a> 
                        <a class="collapse-item" href="VgRumahsakit">Grafik Bor Rumah Sakit </a>                                             
                    </div>
                </div>
            </li>
         <!--      <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collap"
                    aria-expanded="true" aria-controls="collapseUtilitis">
                    <i class="fas fa-fw fa-chart-line"></i>
                    <span>Laporan Grafik</span>
                </a>
                <div id="collap" class="collapse" aria-labelledby="headingUtilitis"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Grafik</h6>
                        <a class="collapse-item" href="VgrafikRuangan">Grafik Ruangan Perawatan </a>  
                        <a class="collapse-item" href="VgrafikKelas">Grafik Kelas Perawatan </a>  
                        <a class="collapse-item" href="VgrafikRumahsakit">Grafik Rumah Sakit </a>
                        <a class="collapse-item" href="VgRumahsakit">Grafik Bor Rumah Sakit </a>                     
                    </div>
                </div>
            </li>   -->
            <!-- Divider -- <span>Info Ruangan & Kelas </span>>
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Tambahan
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabel"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Info Ruangan & Kelas </span>
                   
                </a>
                <div id="tabel" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Informasi:</h6>                                  
                        <a class="collapse-item" href="VTbruangan">Info Ruang Perawatan </a>
                        <a class="collapse-item" href="VTbkelas">Info Kelas Perawatan </a>                                            
                    </div>
                </div>
            </li>
           <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url("Gpassowner");?>">
                <i class='fas fa-key'></i>
                    <span>Ubah Password</span></a>
            </li>
            </li>
           <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                <span>Logout</span></a>
            </li>          

           
            <hr class="sidebar-divider d-none d-md-block">            
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>     
        </ul>     
        <div id="content-wrapper" class="d-flex flex-column">           
            <div id="content">              
            <nav class="navbar navbar-expand navbar-light bg-custom-atas topbar mb-4 static-top shadow">                   
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Search -->
                    <h3 class="h3 mb-0 text-white font-weight-bold ">Sensus Harian Elektronik</h3>     
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">                                                           
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                              
                                <div style="display: flex; flex-direction: column; align-items: center;">
                                    <div style="margin-bottom:0px;">
                                        <span class="d-none d-lg-inline text-white font-weight-bold"><h5>Selamat Datang...<?php echo $this->session->userdata('name'); ?></h5></span>
                                    </div>
                                    <div>
                                        <span class="d-none d-lg-inline text-white font-weight-bold"><h6><?php echo $this->session->userdata('jabatan');  ?> </h6></span>
                                    </div>
                                </div>                 
                                  </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">                           
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>                        
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                       
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                              <b>Total Ruang Perawatan</b>
                                              <b></b></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$Jruangan;?></div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                              <b>Jumlah Kelas Perawatan</b>
                                              <b></b></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$Jkelas;?></div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                <b>Total Tempat Tidur Tersedia</b>
                                                <b></b></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">                                      
                                           <?php echo $jumlah;?></td>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>           
         

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright @ G41221595 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-info py-3">
                    <h5 class="modal-title m-0 font-weight-bold text-white">Konfirmasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-0 font-weight-bold ">
                    Anda yakin akan meninggalkan program ini..? jika ya tekan logout
                </div>
                <div class="modal-footer">
                <div class="modal-body m-0 font-weight-bold">
                    @G41221595                  
                </div>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="<?= base_url('');?>Utama">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url()?>vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url()?>js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url()?>js/demo/chart-pie-demo.js"></script>
   

</body>

</html>