<div class="container">
    <div class="collapse navbar-collapse js-navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown mega-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <span class="caret"></span></a>				
                <div class="dropdown-menu mega-dropdown-menu">
                    <div class="container-fluid">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="men">
                                <ul class="nav-list list-inline">
                                    <li><a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Men&s=Dress"><img src="<?php echo IMAGE_URL; ?>/men/dress/1.jpg"><span>Dress</span></a></li>
                                    <li><a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Men&s=Shoes"><img src="<?php echo IMAGE_URL; ?>/men/shoes/1.jpg"><span>Shoes</span></a></li>
                                    <li><a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Men&s=Watch"><img src="<?php echo IMAGE_URL; ?>/men/watch/1.jpg"><span>Accessories</span></a></li>
                                </ul>
                            </div>
                            <div class="tab-pane" id="women">
                                <ul class="nav-list list-inline">
                                    <li><a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Women&s=Bags"><img src="<?php echo IMAGE_URL; ?>/women/bags/1.jpg"><span>Bags</span></a></li>
                                    <li><a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Women&s=Dress"><img src="<?php echo IMAGE_URL; ?>/women/dress/1.jpg"><span>Dress</span></a></li>
                                    <li><a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Women&s=Jewelry"><img src="<?php echo IMAGE_URL; ?>/women/jewelry/1.jpg"><span>Jewelry</span></a></li>
                                    <li><a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Women&s=Shoes"><img src="<?php echo IMAGE_URL; ?>/women/shoes/1.jpg"><span>Shoes</span></a></li>                                
                                </ul>
                            </div>
                            <div class="tab-pane" id="kids">
                                <ul class="nav-list list-inline">
                                    <li><a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Kids&s=Dress"><img src="<?php echo IMAGE_URL; ?>/kids/dress/1.jpg"><span>Dress</span></a></li>
                                    <li><a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Kids&s=Shoes"><img src="<?php echo IMAGE_URL; ?>/kids/shoes/1.jpg"><span>Shoes</span></a></li>
                                </ul>
                            </div>
                            <div class="tab-pane" id="ethnic">
                                <ul class="nav-list list-inline">                                
                                    <li><a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Men&s=Dress"><img src="<?php echo IMAGE_URL; ?>/men/dress/2.jpg"><span>Men</span></a></li>
                                    <li><a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Women&s=Dress"><img src="<?php echo IMAGE_URL; ?>/women/dress/2.jpg"><span>Women</span></a></li>
                                    <li><a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Kids&s=Dress"><img src="<?php echo IMAGE_URL; ?>/kidsdress/2.jpg"><span>Kids</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#men" role="tab" data-toggle="tab">Men</a></li>
                        <li><a href="#women" role="tab" data-toggle="tab">Women</a></li>
                        <li><a href="#kids" role="tab" data-toggle="tab">Kids</a></li>
                        <li><a href="#ethnic" role="tab" data-toggle="tab">Ethnic</a></li>
                    </ul>                    
                </div>				
            </li>
            <li<?php echo $page === OFFERS_PAGE ? ' class="active"':''; ?>>
                <a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Men&s=Dress&p=o"><?php echo OFFERS_PAGE; ?></a>
            </li>
            <li<?php echo $page === NEW_ARRIVAL_PAGE ? ' class="active"':''; ?>>
                <a href="<?php echo PRODUCTS_PAGE_URL; ?>?c=Women&s=Dress&p=n"><?php echo NEW_ARRIVAL_PAGE; ?></a>
            </li>
        </ul>
    </div>
</div>