<div class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo BASE_URL; ?>">
                <img class="img-responsive" src="<?php echo IMAGE_URL; ?>/new-logo.jpg" />
            </a>
        </div>
        <div class="navbar-collapse collapse">

            <div class="navbar-right">

                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            <span id="shopping-cart-item-count" class="badge">
                                <?php echo isset($shopping_cart_item_count) ? $shopping_cart_item_count : 0; ?>
                            </span>
                        </a>
                    </li>
                    <li><a href="<?php echo SIGN_IN_PAGE_URL; ?>"><?php echo SIGN_IN_PAGE; ?></a></li>
                    <li><a href="<?php echo SIGN_UP_PAGE_URL; ?>"><?php echo SIGN_UP_PAGE; ?></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Username <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo SIGN_OUT_HANDLER_URL; ?>"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;<?php echo SIGN_OUT_HANDLER; ?></a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <form class="navbar-form">
                <div class="form-group" style="display:inline;">
                    <div class="input-group" style="display:table;">
                        <input class="form-control" name="search" placeholder="Search Here" autocomplete="off" autofocus="autofocus" type="text">
                        <span id="nav-search-button" class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                    </div>
                </div>
            </form>

        </div><!--/.nav-collapse -->
    </div>
</div>