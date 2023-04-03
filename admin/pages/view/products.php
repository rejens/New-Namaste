<?php
include "../../includes.php";

if (!isset($_GET['id'])) {
?>
    <script>
        location.replace("<?php echo url . "products.php" ?>")
    </script>
<?php
    exit;
}


$id = $_GET['id'];
$sql = "select * from products where id='$id'";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
?>
    <script>
        location.replace("<?php echo url . "products.php" ?>")
    </script>
<?php
    exit;
}
$rows = $result->fetch_assoc();

$sql = "select * from product_image where id='$id'";
$images = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);


?>


<body>
    <div class="items">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">View Products</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body" style="height: fit-content;">
                <div class="title">
                    <span class="font-weight-bold">Product Name:</span>
                    <?php echo $rows['name'] ?>
                </div>
                <hr>

                <div class="category">
                    <span class="font-weight-bold">Category:</span>
                    <?php
                    $cat_id = $rows['category'];
                    $sql = "select name from category where id='$cat_id'";
                    $cat_name = $conn->query($sql)->fetch_assoc()['name'];
                    echo $cat_name ?>
                </div>
                <hr>

                <div class="short_description">
                    <span class="font-weight-bold">Short Description:</span>
                    <?php echo $rows['short_description'] ?>
                </div>
                <hr>

                <div class="description">
                    <span class="font-weight-bold"> Description:</span>
                    <?php echo $rows['description'] ?>
                </div>
                <hr>

                <div class="tags">
                    <span class="font-weight-bold"> Tags:</span>
                    <?php echo $rows['tags'] ?>
                </div>
                <hr>

                <div class="images">
                    <span class="font-weight-bold">Images:</span>
                    <div class="image-preview">
                        <?php foreach ($images as $image) :
                        ?>
                            <div class="position-relative">
                                <div class="image">
                                    <a href="<?php echo product_url . $image['name'] ?>" data-toggle="lightbox">
                                        <img src="<?php echo product_url . $image['name'] ?>" width=" 80px" class="img-fluid mb-2" alt="image" />
                                        <?php if ($image['featured']) :  ?>
                                            <div class="ribbon-wrapper">
                                                <div class="ribbon bg-info">
                                                    Featured
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <?php require app . "/pages/includes/js_links.php" ?>






</body>