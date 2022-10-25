<?php
// view data
include '../core/koneksi.php';
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
if (empty($_GET)) {
    $query = mysqli_query($koneksi, "SELECT * FROM users");
    $result = array();
    while ($row = mysqli_fetch_array($query)) {
        array_push($result, array(
            'id' => $row['id_users'],
            'email' => $row['email'],
            'password' => $row['password'],
            'level' => $row['level']
        ));
    }

    echo json_encode(
        array('result' => $result)
    );
} else {
    $query = mysqli_query($koneksi, "SELECT * FROM userr where id =". $_GET['id']);
    $result = array();
    while ($row = $query->fetch_assoc()) {
        $result = array(
            'id' => $row['id'],
            'nama' => $row['email'],
            'email' => $row['email'],
            'password' => $row['password']
        );
    }
    echo json_encode(
        $result
    );
}
