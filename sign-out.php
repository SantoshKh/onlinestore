<?php
session_start();
require_once 'util/constants.php';
$_SESSION['sign_out_successful'] = "You have successfully signed out.";
header('Location: http://localhost/onlinestore/');
