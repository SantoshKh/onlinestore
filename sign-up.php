<?php
/* contains all the constant declaration used by various part of this page */
require_once 'util/constants.php';

/** this variable is required by header-meta.php * */
$page = SIGN_UP_PAGE;
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include_once 'part/header-meta.php'; ?>
    </head>

    <body>
        <?php include_once 'part/header.php'; ?>

        <div class="container">

            <?php include_once 'part/sign-in-form.php'; ?>

            <hr>

            <footer>
                <?php include_once 'part/footer.php'; ?>
            </footer>

        </div>

        <?php include_once 'part/footer-meta.php'; ?>

    </body>

</html>
