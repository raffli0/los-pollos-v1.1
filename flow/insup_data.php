<?php

require_once "../koneksi/koneksi.php";

$fullname = $_POST["fname"];
$email = $_POST["mail"];
$phone = $_POST["phn"];
$position = $_POST["pos"];
$applied_at = $_POST["appat"];

if (!empty($_POST["id"])) {
    // kalau id tidak kosong, update
    try {
        // move_uploaded_file($photo_tmp, '../photo/' . $photo_name);

        $sql = 'UPDATE `applicants`
                SET `fullname` = ?,
                `email` = ?,
                `phone` = ?,
                `position` = ?,
                `applied_at` = ?
                WHERE id = ?';

        $qonnect = $database_connection->prepare($sql);
        $qonnect->execute([
            $fullname,
            $email,
            $phone,
            $position,
            $applied_at,
            $_POST["id"]
        ]);
        echo "Data updated succesfully";
    } catch (PDOException $err) {
        die("Error updating data: " . $err->getMessage());
    }
} else {
    // kalau kosong, insert
    try {

        // move_uploaded_file($photo_tmp, "../photo/" . $photo_name);

        $sql = 'INSERT INTO `applicants`
            (`fullname`, `email`, `phone`, `position`, `applied_at`)
            VALUES (?, ?, ?, ?, ?)';
        $qonnect = $database_connection->prepare($sql);
        $qonnect->execute([
            $fullname,
            $email,
            $phone,
            $position,
            $applied_at
        ]);

        echo 'Data inserted succesfully';
    } catch (PDOException $err) {
        die('Error inserting data: ' . $err->getMessage());
    }
}