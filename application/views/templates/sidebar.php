<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
        </div>
        <div class="sidebar-brand-text mx-2 mt-1">My-album</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Dashboard -->

            <!-- Heading -->
            <div class="sidebar-heading">
                <span style="font-size: 14px; color: white; font-weight: 600;">MENU</span>
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('user/beranda'); ?>">
                    <i class="fas fa-fw fa-bars"></i>
                    <span>Beranda</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('user/album'); ?>">
                    <i class="fas fa-fw fa-border-all"></i>
                    <span>Album</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('user/foto'); ?>">
                    <i class="fas fa-fw fa-images"></i>
                    <span>Foto</span></a>
            </li>
            
            <br>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- style="position: fixed; z-index: 1; overflow-x: hidden;" -->
