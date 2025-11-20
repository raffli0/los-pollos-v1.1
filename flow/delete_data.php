<?php

require_once "../koneksi/koneksi.php";

$id = $_POST["id"];

try {
    $sql = "DELETE FROM applicants WHERE id = ?";
    $qonnect = $database_connection->prepare($sql);
    $qonnect->execute([$id]);

    echo "Data deleted succesfully";
} catch (PDOException $err) {
    die("Error deleting data: " . $err->getMessage());
}
?>