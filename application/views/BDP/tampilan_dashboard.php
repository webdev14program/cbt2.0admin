<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>Dashboard_bdp">
            <div class="sidebar-brand-text mx-3">CBT 2.0 <br> ADMIN BDP</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() ?>Dashboard_bdp">
                <i class="fas fa-school"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Main Menu
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-align-justify"></i>
                <span>Data Master</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">List Data Master</h6>
                    <a class="collapse-item" href="<?= base_url() ?>Dashboard_bdp/mata_pelajaran_bdp">Master Mata Pelajaran</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>Dashboard_bdp/siswa_bdp">
                <i class="fas fa-user-graduate"></i>
                <span>Peserta Ujian</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>Dashboard_bdp/jadwal_ujian_bdp">
                <i class="far fa-calendar-alt"></i>
                <span>Jadwal Ujian</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Ujian
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="far fa-file-alt"></i>
                <span>Ujian Berbasis Komputer</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= base_url() ?>Dashboard_bdp/status_peserta_bdp">Status Peserta</a>
                    <a class="collapse-item" href="<?= base_url() ?>Dashboard_bdp/rekap_nilai_bdp">Cetak Daftar Nilai</a>
                </div>
            </div>
        </li>

        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            Logout
        </div>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>Dashboard/logout">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>

        <!-- Nav Item - Charts -->


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->

                <!-- Topbar Navbar -->

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <?php $this->load->view($content) ?>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- Footer -->
        <footer class="sticky-footer bg-warning ">
            <div class="container my-auto">
                <div class="copyright text-center text-white my-auto">
                    <h5 class="text-center font-weight-bold">Copyright &copy; CBT SMK Tunas Harapan</h5>
                    <h5 class="text-center text-white font-weight-bold">Design By Rahmadika S Setiawan, S.Kom</h5>
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