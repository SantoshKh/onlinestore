<?php
session_start();
if(isset($_SESSION['shopping-cart'])) {
    $shopping_cart_item_count = $_SESSION['shopping-cart'];
} else {
    $shopping_cart_item_count = 0;
}

/* contains all the constant declaration used by various part of this page */
require_once 'util/constants.php';

/** this variable is required by header-meta.php * */
$page = PRODUCTS_PAGE;
$category_name = "Products";
$sub_category_name = "Sub Products";
if (isset($_GET['p'])) {
    switch ($_GET['p']) {
        case 'o': $page = OFFERS_PAGE;
            break;
        case 'n';
            $page = NEW_ARRIVAL_PAGE;
            break;
    }
}

if (isset($_GET['c'])) {
    $category_name = $_GET['c'];
}
if (isset($_GET['s'])) {
    $sub_category_name = $_GET['s'];
}
$image_folder = IMAGE_URL;
switch ($category_name) {
    case 'Men': $image_folder .= "/men";
        break;
    case 'Women': $image_folder .= "/women";
        break;
    case 'Kids': $image_folder .= "/kids";
        break;
}

switch ($sub_category_name) {
    case 'Dress': $image_folder .= "/dress";
        break;
    case 'Shoes': $image_folder .= "/shoes";
        break;
    case 'Jewelery': $image_folder .= "/jewelery";
        break;
    case 'Bags': $image_folder .= "/bags";
        break;
    case 'Watch': $image_folder .= "/watch";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
<?php include_once 'part/header-meta.php'; ?>
    </head>

    <body>

                    <?php include_once 'part/header.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <?php include_once 'part/left-nav.php'; ?>
                </div>
                <div class="col-sm-9">
                        <?php include_once 'part/breadcrumb.php'; ?>
                    <div class="row">

                        <?php
                        for ($i = 1; $i < 10; $i++):
                            $product_url = SINGLE_PRODUCT_PAGE_URL . "?i=$i&c=$category_name&s=$sub_category_name";
                            $product_name = "$category_name $sub_category_name";
                            ?>
                            <div class="col-sm-4 col-lg-4 col-md-4">
                                <div class="thumbnail">
                                    <a href="<?php echo $product_url; ?>">
                                        <img class="img-responsive" src="<?php echo $image_folder . "/$i.jpg"; ?>" alt="<?php echo $product_name; ?>">
                                    </a>
                                    <div class="caption">
                                        <h4 class="pull-right">Rs.24.99</h4>
                                        <h4><a href="<?php echo $product_url; ?>"><?php echo $product_name; ?></a></h4>
                                    </div>
                                    <div class="ratings">
                                        <p class="pull-right">15 reviews</p>
                                        <div class="lead">
                                            <div class="starrr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php endfor; ?>
                    </div>
                    <div class="row text-center">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <footer>
        <?php include_once 'part/footer.php'; ?>
            </footer>
        </div>
<?php include_once 'part/footer-meta.php'; ?>

    </body>

</html>
