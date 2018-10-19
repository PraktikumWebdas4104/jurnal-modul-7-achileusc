<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "mhs";

$conn = new mysqli($host, $username, $password, $db);

$qry = "DELETE FROM data_mhs WHERE nim = '$nim'";
$has = mysqli_query($conn, $qry);

echo "Data Telah Dihapus";
?>