<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= site_url('Welcome') ?>" class="nav-link">Home</a>
      </li>
     <!--  <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= site_url('Engineering') ?>" class="nav-link">Data Reparasi</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= site_url('Operasional') ?>" class="nav-link">Operasional</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= site_url('Humanresoure') ?>" class="nav-link">Human Resource</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= site_url('Finance') ?>" class="nav-link">Finance</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= site_url('Marketing') ?>" class="nav-link">Marketing</a>
      </li> -->
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?=base_url()."assets/"?>img/logo.png"  class="brand-image" style="opacity: .8">
      <span class="brand-text font-weight-light">Aplikasi PFN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
<!--           <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="#" class="d-block">Kelompok Saya Sendiri</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Data Reparasi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                            <li class="nav-item">
                <a href="<?= site_url('Engineering') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Data Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('Engineering/Create_Data_engineering') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data</p>
                </a>
              </li>
               <!--   

           -->
            </ul>
          </li>


<li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Data Budgeting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                            <li class="nav-item">
                <a href="<?= site_url('Finance') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Data Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('Finance/Create_Data_Budgeting') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data</p>
                </a>
              </li>
               <!--   

           -->
            </ul>
          </li>


<li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Data Periklanan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                            <li class="nav-item">
                <a href="<?= site_url('Marketing') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Data Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('Marketing/Create_Data_iklan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data</p>
                </a>
              </li>

                          </ul>
          </li>

<li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Data Rekruitasi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                            <li class="nav-item">
                <a href="<?= site_url('Humanresoure') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Data Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('Humanresoure/Create_Data_recruit') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data</p>
                </a>
              </li>

                          </ul>
          </li>




<li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Data Reparasi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                            <li class="nav-item">
                <a href="<?= site_url('Operasional') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Data Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('Operasional/Create_data_reparasi') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data</p>
                </a>
              </li>

                          </ul>
          </li>

<li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Data Absensi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                            <li class="nav-item">
                <a href="<?= site_url('absensi') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Data Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('absensi/Create_data_absensi') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data</p>
                </a>
              </li>

                          </ul>
          </li>


          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Data Karyawan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                            <li class="nav-item">
                <a href="<?= site_url('Karyawan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Data Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('Karyawan/Create_data_Karyawan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data</p>
                </a>
              </li>

                          </ul>
          </li>

  <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Data Gaji
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                            <li class="nav-item">
                <a href="<?= site_url('Gaji') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Data Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('Karyawan/Create_data_Gaji') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data</p>
                </a>
              </li>

                          </ul>
          </li>

            <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Data Quality Control
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                            <li class="nav-item">
                <a href="<?= site_url('Qualitycontrol') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Data Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('Qualitycontrol/Create_data_qc') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data</p>
                </a>
              </li>

                          </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  