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
$page = OFFERS_PAGE;
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
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="img-responsive" src="holder.js/2000x300/random/text: " alt="First slide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Example headline.</h1>
                                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="holder.js/2000x300/random/text: " alt="Second slide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Another example headline.</h1>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="holder.js/2000x300/random/text: " alt="Third slide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>One more for good measure.</h1>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="holder.js/2000x300/random/text: " alt="Third slide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>One more for good measure.</h1>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="holder.js/2000x300/random/text: " alt="Third slide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>One more for good measure.</h1>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
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
                        <span class="label label-info pull-right">Offer</span>
                        <img src="holder.js/400x250/random" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="#" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <span class="label label-info pull-right">Offer</span>
                        <img src="holder.js/400x250/random" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="#" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <span class="label label-info pull-right">Offer</span>
                        <img src="holder.js/400x250/random" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="#" class="btn btn-primary btn-block" role="button">View</a>
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
                        <span class="label label-info pull-right">Offer</span>
                        <img src="holder.js/400x250/random" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="#" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <span class="label label-info pull-right">Offer</span>
                        <img src="holder.js/400x250/random" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="#" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <span class="label label-info pull-right">Offer</span>
                        <img src="holder.js/400x250/random" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="#" class="btn btn-primary btn-block" role="button">View</a>
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
                        <span class="label label-info pull-right">Offer</span>
                        <img src="holder.js/400x250/random" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="#" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <span class="label label-info pull-right">Offer</span>
                        <img src="holder.js/400x250/random" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="#" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <span class="label label-info pull-right">Offer</span>
                        <img src="holder.js/400x250/random" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="#" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">Ethnic</h2>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <span class="label label-info pull-right">Offer</span>
                        <img src="holder.js/400x250/random" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="#" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <span class="label label-info pull-right">Offer</span>
                        <img src="holder.js/400x250/random" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="#" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <span class="label label-info pull-right">Offer</span>
                        <img src="holder.js/400x250/random" alt="...">
                        <div class="caption">
                            <p class="text-center">
                                <a href="#" class="btn btn-primary btn-block" role="button">View</a>
                            </p>
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
