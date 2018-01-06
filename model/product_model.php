<?php


require_once 'db_connection.php';


function insertWithId() {
    $con = get_connection();
    $id = FALSE;

    $sql = "INSERT  INTO `product` ( `name`,`category_id`,`brand`,`mrp`,`added_on`) "
            . "VALUE(?,?,?,?,CURRENT_TIMESTAMP)";

    $stmt = $con->prepare($sql);

    $stmt->bind_param('sisd', 
            $param['name'],
            $param['category_id'],
            $param['brand'],
            $param['mrp']
            );

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $id = $con->insert_id;
    }
    $con->close();
    $stmt->close();

    return $id;
}

function delete($id) {
    $con = get_connection();

    $sql = "DELETE FROM `product` WHERE `id`=?";
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

    $sql = "UPDATE  `product` SET `name`=?, `category_id`=?, `brand`=?, `mrp`=? where `id`=?";

    $stmt = $con->prepare($sql);

    $stmt->bind_param('sisdi',
            $param['name'],
            $param['category_id'],
            $param['brand'],
            $param['mrp'],
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

    $sql = "SELECT * FROM `product` WHERE `id` = $id";

    $res = $con->query($sql);
    $row = $res->fetch_assoc();

    $con->close();

    return $row;
}

function count_all() {
    
}

function get_all() {
    $con = get_connection();

    $sql = "SELECT * FROM `product`";

    $res = $con->query($sql);
    $list = $res->fetch_all(MYSQLI_ASSOC);

    $con->close();

    return $list;
}


