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
$page = SINGLE_PRODUCT_PAGE;
$category_name = "Products";
$sub_category_name = "Sub Products";
$image_name = "No Image";
if (isset($_GET['c'])) {
    $category_name = $_GET['c'];
}
if (isset($_GET['s'])) {
    $sub_category_name = $_GET['s'];
}
if (isset($_GET['i'])) {
    $image_name = $_GET['i'];
}
$image = IMAGE_URL;
switch ($category_name) {
    case 'Men': $image .= "/men";
        break;
    case 'Women': $image .= "/women";
        break;
    case 'Kids': $image .= "/kids";
        break;
}

switch ($sub_category_name) {
    case 'Dress': $image .= "/dress";
        break;
    case 'Shoes': $image .= "/shoes";
        break;
    case 'Jewelery': $image .= "/jewelery";
        break;
    case 'Bags': $image .= "/bags";
        break;
    case 'Watch': $image .= "/watch";
        break;
}
$image .= "/$image_name.jpg";
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
                <div class="col-sm-6">
                    <img  class="img-responsive single-image" src="<?php echo $image; ?>" />
                </div>
                <div class="col-sm-6">
                    <h1><?php echo $category_name; ?></h1>
                    <hr>

                    <button class="btn btn-primary add-to-cart" data-item="<?php echo $image_name; ?>" data-href="<?php echo ADD_TO_CART_HANDLER_URL; ?>">Add to Cart</button>
                    <hr>
                    <div class="label label-success label-price">Price: 10,000.00</div>
                    <hr>
                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                        <div class="lead">
                            <div class="starrr"></div>
                        </div>
                        </p>
                    </div>
                    
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <div class="caption-full">
                        <h4 class="pull-right">$24.99</h4>
                        <h4><a href="#">Product Name</a>
                        </h4>
                        <p><a target="_blank" href="#">See more products like these</a>.</p>
                        <p>Want to make these reviews work? Check out
                            <strong><a href="#">this building a review system tutorial</a>
                            </strong>over at maxoffsky.com!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="well">

                        <div class="text-right">
                            <a class="btn btn-success">Leave a Review</a>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-12">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                Anonymous
                                <span class="pull-right">10 days ago</span>
                                <p>This product was great in terms of quality. I would definitely buy another!</p>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-12">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                Anonymous
                                <span class="pull-right">12 days ago</span>
                                <p>I've alredy ordered another one!</p>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-12">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                Anonymous
                                <span class="pull-right">15 days ago</span>
                                <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <footer>
                <?php include_once 'part/footer.php'; ?>
            </footer>

        </div>

        <?php include_once 'part/footer-meta.php'; ?>
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })
        </script>
    </body>

</html>
