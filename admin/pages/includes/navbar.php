<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/logo.png" alt="preloader" height="60" width="60">
        </div> -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url ?>change_password.php" role="button">
                        <i class="fas fa-user"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <form method="post">
                        <button type="submit" class="btn btn-danger" name="logout">logout</button>
                    </form>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->
        <?php
        if (isset($_POST['logout'])) {
            session_destroy();
            echo "<script> location.reload() </script>";
        }
        ?>