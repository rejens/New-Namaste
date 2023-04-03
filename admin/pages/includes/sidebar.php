<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo url ?>" class="brand-link">
        <img src="<?php echo url ?>dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8;background:white">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="<?php echo url ?>index.php" class="nav-link index">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p class="text">Dashboard</p>
                    </a>
                </li>

                <?php //if ($_SESSION['role'] == 3 || $_SESSION['role'] == 1) : ?>
                    <li class="nav-item">
                        <a href="<?php echo url ?>products.php" class="nav-link products">
                            <i class="nav-icon fas fa-boxes"></i>
                            <p class="text">Products</p>
                        </a>
                    </li>
                <?php //endif; ?>



             

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>