<?php

require_once "../koneksi/koneksi.php";

try {
    $sql = "SELECT * FROM applicants";
    $qonnect = $database_connection->prepare($sql);
    $qonnect->execute();

    $data = array();
    while ($row = $qonnect->fetch(PDO::FETCH_ASSOC)) {
        array_push ($data, $row);
    }


    echo json_encode($data);
}catch (PDOException $e) {
    die("Tidak dapat memuat database $database_name: ". $e->getMessage());
}