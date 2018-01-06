<?php

session_start();
if (!isset($_POST['item'])) {
    echo 'error';
    return false;
}
$item = $_POST['item'];
if (!isset($_SESSION['shopping-cart'])) {
    $_SESSION['shopping-cart'] = 1;
} else {
    $_SESSION['shopping-cart']++;
}
echo $_SESSION['shopping-cart'];
return true;

