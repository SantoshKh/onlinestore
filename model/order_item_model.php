<?php

require_once 'db_connection.php';

function insert($array) {
    $con = get_connection();
    $status = FALSE;

    $sql = "INSERT  INTO `order_item` ( `order_id`,`product_id`, `rate`, `quantity`,`overall_discount`) "
            . "VALUE(?, ?, ?, ?, ?)";

    $stmt = $con->prepare($sql);

    $stmt->bind_param('iidid',
            $array['order_id'],
            $array['product_id'],
            $array['rate'],
            $array['quantity'],
            $array['overall_discount']
            );

    $stmt->execute();

    if ($stmt->affected_rows === 1) {
        $status = TRUE;
    }
    $con->close();
    $stmt->close();

    return $status;
}



function delete($order_id, $product_id) {
    $con = get_connection();

    $sql = "DELETE FROM `order_item` WHERE `order_id`=? and `product_id` = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('ii', $order_id, $product_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        return TRUE;
    }
    $con->close();
    $stmt->close();

    return FALSE;
}

function update($array) {
    $con = get_connection();

    $sql = "UPDATE  `order_item` SET `rate`=?, `quantity`=?,`overall_discount`=? where `prodc`=?";

    $stmt = $con->prepare($sql);

    $stmt->bind_param('iifif',
            
            $array['rate'], 
            $array['quantity'],
            $array['overall_discount'],
            $array['order_id'],
            $array['product_id']
            );

    $stmt->execute();

    if ($stmt->affected_rows === 1) {
        return TRUE;
    }
    $con->close();
    $stmt->close();

    return FALSE;
}

function get($order_id,$product_id) {
    $con = get_connection();

    $sql = "SELECT * FROM `order_item` WHERE `uname` = '$uname'";

    $res = $con->query($sql);
    $row = $res->fetch_assoc();

    $con->close();

    return $row;
}

function count_all() {
    
}

function get_all() {
    $con = get_connection();

    $sql = "SELECT * FROM `order_item`";

    $res = $con->query($sql);
    $list = $res->fetch_all(MYSQLI_ASSOC);

    $con->close();

    return $list;
}

