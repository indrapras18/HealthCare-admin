<?php
include '../core/koneksi.php';
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
if (empty($_GET)) {
    $query = mysqli_query($koneksi, "SELECT * FROM tenaga_medis");
    $result = array();
    while ($row = mysqli_fetch_array($query)) {
        array_push($result, array(
            'id_tenagamedis' => $row['id_tenagamedis'],
            'nama' => $row['nama'],
            'email' => $row['email'],
            'no_str' => $row['no_str'],
            'password' => $row['password'],
            'id_poli' => $row['id_poli']
        ));
    }

    echo json_encode(
        array('result' => $result)
    );
} else {
    $query = mysqli_query($koneksi, "SELECT * FROM tenaga_medis where id_tenagamedis =". $_GET['id_tenagamedis']);
    $result = array();
    while ($row = $query->fetch_assoc()) {
        $result = array(
            'id_tenagamedis' => $row['id_tenagamedis'],
            'nama' => $row['nama'],
            'email' => $row['email'],
            'no_str' => $row['no_str'],
            'password' => $row['password'],
            'id_poli' => $row['id_poli']
        );
    }
    echo json_encode(
        $result
    );
}
