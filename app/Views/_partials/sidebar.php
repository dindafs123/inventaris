<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo base_url('/'); ?>" class="brand-link">
        <img src="<?php echo base_url('themes/dist'); ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Inventaris Barang Sekolah</span>
    </a>


    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('themes/dist'); ?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo base_url('/'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('barang'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Data Barang</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('barangmasuk'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-in-alt"></i>
                        <p>Barang Masuk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('barangkeluar'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Barang Keluar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('peminjaman'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-dolly"></i>
                        <p>Peminjaman</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('pengembalian'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-truck-loading"></i>
                        <p>Pengembalian</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('transaksi'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-truck-loading"></i>
                        <p>Transaksi</p>
                    </a>
                </li>
                <li class="nav-header">ACCOUNT</li>
                <li class="nav-item">
                    <a href="<?php echo base_url('auth/logout'); ?>" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>