<?php

require_once 'db_connection.php';

function insertWithId($string_value) {
    $con = get_connection();
    $id = FALSE;

    $sql = "INSERT  INTO `order` ( `id`,`uname`,order_on`,`status`,`total_price`,`discount`,`tax`,`paid`,`mode_of_payment`) "
            . "VALUE(?,?,?,?,?,?,?,?,?)";

    $stmt = $con->prepare($sql);

    $stmt->bind_param('isisfffff', 
          $param['id'],
            $param['uname'],
            $param['order_on'],
            $param['status'],
            $param['total_price'],
            $param['discount'],
            $param['tax'],
            $param['paid'],
            $param['mode_of_payment']
            );

    $stmt->execute();

    if ($stmt->affected_rows === 1) {
        $id = $con->insert_id;
    }
    $con->close();
    $stmt->close();

    return $status;
}

function delete($id) {
    $con = get_connection();

    $sql = "DELETE FROM `order` WHERE `id`=?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        return TRUE;
    }
    $con->close();
    $stmt->close();

    return FALSE;
}

function update($param) {
    $con = get_connection();

    $sql = "UPDATE  `order` SET `uname`=?, `order_on`=?, `status`=?, `total_price`=?, `discount`=?,`tax`=?, `paid`=?, `mode_of_payment`=? where `id`=?";

    $stmt = $con->prepare($sql);

    $stmt->bind_param('sisfffffi',
            $param['uname'],
            $param['order_on'],
            $param['status'],
            $param['total_price'],
            $param['discount'],
            $param['tax'],
            $param['paid'],
            $param['mode_of_payment'],
            $param['id']
            );

    $stmt->execute();

    if ($stmt->affected_rows === 1) {
        return TRUE;
    }
    $con->close();
    $stmt->close();

    return FALSE;
}

function get($id) {
    $con = get_connection();

    $sql = "SELECT * FROM `order` WHERE `id` = '$id'";

    $res = $con->query($sql);
    $row = $res->fetch_assoc();

    $con->close();

    return $row;
}

function count_all() {
    
}

function get_all() {
    $con = get_connection();

    $sql = "SELECT * FROM `order`";

    $res = $con->query($sql);
    $list = $res->fetch_all(MYSQLI_ASSOC);

    $con->close();

    return $list;
}
