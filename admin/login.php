<?php
include "./config/config.php";
include "./pages/includes/header.php";
?>
</body>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="login.php"><b>Admin</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="login_post.php" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div> -->
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>



                <p class="my-3 text-center">
                    <a href="forgot_password.php">I forgot my password</a>
                </p>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <?php
    require app . "/pages/includes/js_links.php";


    if (isset($_SESSION['password_recovery'])) {
        if ($_SESSION['password_recovery'] == "successful")
            echo "<script>success('success', 'check you email for password'); </script>";
        else
            echo "<script>success('error', 'sorry could not send email'); </script>";

        unset($_SESSION['password_recovery']);
    }
    ?>