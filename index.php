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
$page = HOME_PAGE;
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include_once 'part/header-meta.php'; ?>
    </head>

    <body>

        <?php include_once 'part/header.php'; ?>
        <div class="container">
            <?php if (isset($_SESSION['sign_out_successful'])): ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Success!</strong> <?php echo $_SESSION['sign_out_successful']; ?>
                </div>
                <?php
                unset($_SESSION['sign_out_successful']);
            endif;
            ?>

            <div class="row">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="img-responsive" src="<?php echo IMAGE_URL ;?>/home-page/carousel-1.png" alt="First slide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Minimum 25% offers on Major Kid's Brands</h1>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?php echo IMAGE_URL ;?>/home-page/carousel-2.png" alt="Second slide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Introducing Winter Wears for Men</h1>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?php echo IMAGE_URL ;?>/home-page/carousel-3.png" alt="Third slide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Womens Hit the roads this Summer</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">Men</h2>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="<?php echo IMAGE_URL ;?>/home-page/home-men-1.png" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Men&s=Dress" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="<?php echo IMAGE_URL ;?>/home-page/home-men-2.png" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Men&s=Shoes" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="<?php echo IMAGE_URL ;?>/home-page/home-men-3.png" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Men&s=Watch" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">Women</h2>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="<?php echo IMAGE_URL ;?>/home-page/home-women-1.png" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Women&s=Dress" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="<?php echo IMAGE_URL ;?>/home-page/home-women-2.png" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Women&s=Jewelery" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="<?php echo IMAGE_URL ;?>/home-page/home-women-3.png" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Women&s=Bags" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">Kids</h2>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="<?php echo IMAGE_URL ;?>/home-page/home-kids-1.png" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Kids&s=Dress" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="<?php echo IMAGE_URL ;?>/home-page/home-kids-2.png" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Kids&s=Dress" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="<?php echo IMAGE_URL ;?>/home-page/home-kids-3.png" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Kids&s=Shoes" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">New Arrival</h2>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="<?php echo IMAGE_URL ;?>/home-page/home-new-1.png" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=New Arrival" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="<?php echo IMAGE_URL ;?>/home-page/home-new-2.png" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=New Arrival" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="<?php echo IMAGE_URL ;?>/home-page/home-new-3.png" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=New Arrival" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">Top Brands</h2>
                </div>
                <div class="col-sm-1">
                    <div class="thumbnail">
                        <img src="holder.js/80x30/random" alt="...">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="thumbnail">
                        <img src="holder.js/80x30/random" alt="...">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="thumbnail">
                        <img src="holder.js/80x30/random" alt="...">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="thumbnail">
                        <img src="holder.js/80x30/random" alt="...">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="thumbnail">
                        <img src="holder.js/80x30/random" alt="...">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="thumbnail">
                        <img src="holder.js/80x30/random" alt="...">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="thumbnail">
                        <img src="holder.js/80x30/random" alt="...">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="thumbnail">
                        <img src="holder.js/80x30/random" alt="...">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="thumbnail">
                        <img src="holder.js/80x30/random" alt="...">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="thumbnail">
                        <img src="holder.js/80x30/random" alt="...">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="thumbnail">
                        <img src="holder.js/80x30/random" alt="...">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="thumbnail">
                        <img src="holder.js/80x30/random" alt="...">
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
