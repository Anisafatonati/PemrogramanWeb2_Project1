<?php
require_once"../../database/dbkoneksi.php";
$id = $_GET['iddel'];
$sql = "DELETE FROM tipe_pakaian WHERE id = ?";
$statement = $dbh->prepare($sql);
$statement->execute([$id]);

header("Location: list_tipe.php");
?>