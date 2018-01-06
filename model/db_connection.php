<?php

function get_connection() {
    $con  = new mysqli("localhost", "root", "", "starter_db");
    if ($con->connect_errno) {
        echo "Failed to connect to MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
    } 
   return $con;
}

