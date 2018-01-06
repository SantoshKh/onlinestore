<?php

require_once 'db_connection.php';

function insert($param) {
    $con = get_connection();
    $status = FALSE;

    $sql = "INSERT  INTO `user` ( `uname`,`password`,`email`,`contact`,`full_name`,`address`,`avatar`) "
            . "VALUE(?,?,?,?,?,?,?)";

    $stmt = $con->prepare($sql);

    $stmt->bind_param('sssssss', 
            $param['uname'], 
            $param['password'], 
            $param['email'], 
            $param['contact'],
            $param['full_name'],
            $param['address'], 
            $param['avatar']
    );

    $stmt->execute();

    if ($stmt->affected_rows === 1) {
        $status = TRUE;
    }
    $con->close();
    $stmt->close();

    return $status;
}

function delete($uname) {
    $con = get_connection();

    $sql = "DELETE * FROM `user` WHERE `uname`=?";
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

    $sql = "UPDATE  `user` SET `password`=?, `email`=?, `contact`=?, `full_name`=?, `address`=?, `avatar`=? where `user`=?";

    $stmt = $con->prepare($sql);

    $stmt->bind_param('sssssss',
    $param['password'],
    $param['email'],
    $param['contact'],
    $param['full_name'],
    $param['address'],
    $param['avatar'],
    $param['uname']
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

    $sql = "SELECT * FROM`user` WHERE `id` = '$uname'";

    $res = $con->query($sql);
    $row = $res->fetch_assoc();

    $con->close();

    return $row;
}

function count_all() {
    
}

function get_all() {
    $con = get_connection();

    $sql = "SELECT * FROM `user`";

    $res = $con->query($sql);
    $list = $res->fetch_all(MYSQLI_ASSOC);

    $con->close();

    return $list;
}
