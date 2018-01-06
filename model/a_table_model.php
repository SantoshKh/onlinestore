<?php

require_once 'db_connection.php';


function insertWithId($string_value) {
    $con = get_connection();
    $id = FALSE;

    $sql = "INSERT  INTO `a_table` ( `string_value`) "
            . "VALUE(?)";

    $stmt = $con->prepare($sql);

    $stmt->bind_param('s', $string_value);

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

    $sql = "DELETE FROM `a_table` WHERE `id`=?";
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

    $sql = "UPDATE  `a_table` SET `string_value`=? where `id`=?";

    $stmt = $con->prepare($sql);

    $stmt->bind_param('si', $param['string_value'], $param['id']);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        return TRUE;
    }
    $con->close();
    $stmt->close();

    return FALSE;
}

function get($id) {
    $con = get_connection();

    $sql = "SELECT * FROM `a_table` WHERE `id` = '$id'";

    $res = $con->query($sql);
    $row = $res->fetch_assoc();

    $con->close();

    return $row;
}

function count_all() {
    
}

function get_all() {
    $con = get_connection();

    $sql = "SELECT * FROM `a_table`";

    $res = $con->query($sql);
    $list = $res->fetch_all(MYSQLI_ASSOC);

    $con->close();

    return $list;
}
