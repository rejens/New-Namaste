<?php
session_start();



define("app", dirname(dirname(__FILE__)));
define("url", "http://localhost/New-Namaste/admin/");
// define("url", "https://thokupabhokta.coop.np/admin/");


define("product_url", url . "../uploads/products/");
define("product_upload", dirname(dirname(dirname(__FILE__))) . "/uploads/products/");

require app . "/../config/DB_CONFIG.php";

$link = $_SERVER['REQUEST_URI'];

$login = strpos($link, "login");
$forgot_password = strpos($link, "forgot_password");


// if (!isset($_SESSION['user_name']) && !$login && !$forgot_password) {
//     ?>
<script>
//     location.replace("<?php echo url?>login.php");
// </script>
    <?php
//     exit;
// }

// $staff = ['product', 'event', 'report', 'notice', 'index','change_password'];
// $hr = ['application', 'vacancy', 'index','change_password'];

// if (!$login && !$forgot_password) {
//     if ($_SESSION['role'] == 3) {
//         $counter = 0;
//         foreach ($staff as $auth) {
//             if (strpos($link, $auth)) {
//                 $counter++;
//             }
//         }
//         if (!$counter) {
//             header("Location:" . url . "products.php");
//             exit;
//         }
//     }

//     if ($_SESSION['role'] == 2) {
//         $counter = 0;
//         foreach ($hr as $auth) {
//             if (strpos($link, $auth)) {
//                 $counter++;
//             }
//         }
//         if (!$counter) {
//             header("Location:" . url . "vacancy.php");
//             exit;
//         }
//     }
// }

// function validation($size, $name)
// {
//     $allowed = ['jpg', 'jpeg', 'png'];
//     print_r($name);
//     $name = explode(".", $name);
//     $name = strtolower(end($name));
//     // if ($size < 10)
//     if ($size < 1048576 && in_array($name, $allowed))
//         return 1;
//     else
//         return 0;
// }


// function pdfValidation($name)
// {
//     $allowed = ['pdf'];
//     $name = explode(".", $name);
//     $name = strtolower(end($name));
//     // if ($size < 10)
//     if (in_array($name, $allowed))
//         return 1;
//     else
//         return 0;
// }