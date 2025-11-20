<?php
$database_hostname = "localhost";
$database_username = "root";
$database_password = "";
$database_name = "los-pollos";

try {
    $database_connection = new PDO (
        "mysql:host=$database_hostname;dbname=$database_name",
        $database_username,
        $database_password,
    );
//   echo "koneksi berhasil";
}catch (PDOException $x) {
    echo "". $x->getMessage () ."";
}