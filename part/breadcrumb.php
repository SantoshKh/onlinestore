<div class="col-lg-12">
    <ol class="breadcrumb">
        <li><a href="<?php echo HOME_PAGE_URL; ?>"><?php echo HOME_PAGE; ?></a></li>
        <?php if (isset($category_name)): ?>
            <li><a href="#"><?php echo $category_name; ?></a></li>
        <?php endif; ?>
        <?php if (isset($sub_category_name)): ?>
            <li><a href="#"><?php echo $sub_category_name; ?></a></li>
        <?php endif; ?>
        <li class="active"><?php echo $page; ?></li>
    </ol>
</div>