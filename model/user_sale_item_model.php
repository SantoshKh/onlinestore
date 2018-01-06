<?php

require_once 'db_connection.php';

function insert($param) {
    $con = get_connection();
    $status = FALSE;

    $sql = "INSERT  INTO `user_sale_item` ( `uname`,`product_id`, `units_available`,`rate`,`offered_discount`,net_rate`) "
            . "VALUE(?, ?, ?, ?, ?, ?, ?)";

    $stmt = $con->prepare($sql);

    $stmt->bind_param('siifff', $param['uname'], $param['product_id'], $param['units_available'], $param['rate'], $param['offered_discount'], $param['net_rate']);

    $stmt->execute();

    if ($stmt->affected_rows === 1) {
        $status = TRUE;
    }
    $con->close();
    $stmt->close();

    return $status;
}

function delete($uname, $product_id) {
    $con = get_connection();

    $sql = "DELETE FROM `user_sale_item` WHERE `uname`=? and `product_id`=?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('si', $uname, $product_id);
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

    $sql = "UPDATE  `user_sale_item` SET  `units_available`=?, `rate`=?, `offered_discount`=?, `net_rate`=? where `uname`=?";

    $stmt = $con->prepare($sql);

    $stmt->bind_param('ifffsi',
            $param['units_available'],
            $param['rate'], 
            $param['offered_discount'],
            $param['net_rate'], 
            $param['uname'], 
            $param['product_id']
    );


    $stmt->execute();

    if ($stmt->affected_rows === 1) {
        return TRUE;
    }
    $con->close();
    $stmt->close();

    return FALSE;
}

function get($uname) {
    $con = get_connection();

    $sql = "SELECT * FROM `user_sale_item` WHERE `uname` = '$uname'";

    $res = $con->query($sql);
    $row = $res->fetch_assoc();

    $con->close();

    return $row;
}

function count_all() {
    
}

function get_all() {
    $con = get_connection();

    $sql = "SELECT * FROM `user_sale_item`";

    $res = $con->query($sql);
    $list = $res->fetch_all(MYSQLI_ASSOC);

    $con->close();

    return $list;
}
