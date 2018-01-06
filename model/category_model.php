<?php

require_once 'db_connection.php';


function insertWithId($string_value) {
    $con = get_connection();
    $id = FALSE;

    $sql = "INSERT  INTO `category` ( `id`,`name`,`description`,`parent_catrgory_id`,`image_folder`) "
            . "VALUE(?,?,?,?,?)";

    $stmt = $con->prepare($sql);

    $stmt->bind_param('issis',
            $param['id'],
            $param['name'],
            $param['desceiption'],
            $param['parent_category_id'],
            $param['image_folder']
            );

    $stmt->execute();

    if ($stmt->affected_rows === 1) {
        $status = TRUE;
    }
    $con->close();
    $stmt->close();

    return $status;
}

function delete($id) {
    $con = get_connection();

    $sql = "DELETE FROM `category` WHERE `id`=?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    if ($stmt->affected_rows === 1) {
        return TRUE;
    }
    $con->close();
    $stmt->close();

    return FALSE;
}

function update($param) {
    $con = get_connection();

    $sql = "UPDATE  `category` SET `name`=?, `description`=?, `parent_category_id`=?, `image_folder`=? where `id`=?";

    $stmt = $con->prepare($sql);

    $stmt->bind_param('ssisi',
            $param['name'],
            $param['description'],
            $param['parent_category_id'],
            $param['image_folder'],
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

    $sql = "SELECT * FROM `category` WHERE `id` = '$id'";

    $res = $con->query($sql);
    $row = $res->fetch_assoc();

    $con->close();

    return $row;
}

function count_all() {
    
}

function get_all() {
    $con = get_connection();

    $sql = "SELECT * FROM `category`";

    $res = $con->query($sql);
    $list = $res->fetch_all(MYSQLI_ASSOC);

    $con->close();

    return $list;
}


