<?php

require_once 'db_connection.php';

function insert($param) {
    $con = get_connection();
    $status = FALSE;

    $sql = "INSERT  INTO `users` ( `uname`,`password`, `avatar`) "
            . "VALUE(?, md5(?), ?)";

    $stmt = $con->prepare($sql);

    $stmt->bind_param('sss', $param['uname'], $param['password'], $param['avatar']);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $status = TRUE;
    }
    $con->close();
    $stmt->close();

    return $status;
}

function insertWithId($param) {
    $con = get_connection();
    $id = FALSE;

    $sql = "INSERT  INTO `users` ( `uname`,`email`,`joining_date`,`password`) "
            . "VALUE(?,?,?,md5(?))";

    $stmt = $con->prepare($sql);

    $stmt->bind_param('ssss', $param['uname'], $param['email'], $param['joining_date'], $param['password']);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $id = $con->insert_id;
    }
    $con->close();
    $stmt->close();

    return $id;
}

function delete($uname) {
    $con = get_connection();

    $sql = "DELETE FROM `users` WHERE `uname`=?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('s', $uname);
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

    $sql = "UPDATE  `users` SET `password`=md5(?),`avatar`=? where `uname`=?";

    $stmt = $con->prepare($sql);

    $stmt->bind_param('sss', $param['password'], $param['avatar'], $param['uname']);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        return TRUE;
    }
    $con->close();
    $stmt->close();

    return FALSE;
}

function get($uname) {
    $con = get_connection();

    $sql = "SELECT * FROM `users` WHERE `uname` = '$uname'";

    $res = $con->query($sql);
    $row = $res->fetch_assoc();

    $con->close();

    return $row;
}

function count_all() {
    
}

function get_all() {
    $con = get_connection();

    $sql = "SELECT * FROM `users`";

    $res = $con->query($sql);
    $list = $res->fetch_all(MYSQLI_ASSOC);

    $con->close();

    return $list;
}
