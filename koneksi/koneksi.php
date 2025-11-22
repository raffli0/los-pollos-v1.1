<?php
$database_hostname = "localhost";
$database_username = "root";
$database_password = "";
$database_name = "los-pollos";

try {
    $database_connection = new PDO(
        "mysql:host=$database_hostname;dbname=$database_name;charset=utf8mb4",
        $database_username,
        $database_password
    );
    $database_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "koneksi berhasil";
}catch (PDOException $x) {
    echo "". $x->getMessage () ."";
}