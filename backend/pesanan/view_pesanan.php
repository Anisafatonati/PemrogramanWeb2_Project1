<?php 
require_once '../../database/dbkoneksi.php';
include_once"../template/head.php";
include_once"../template/navbar.php";
?>
<?php
    $_id = $_GET['id'];
    $sql = "SELECT * FROM pesanan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    
?>

<div class="container">
    <h2 class="text-center">View Pesanan</h2>
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>ID</td>
                <td><?=$row['id']?></td>
            </tr>
            <tr>
                <td>Tanggal Pesanan</td>
                <td><?=$row['tanggal']?></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><?=$row['quantity']?></td>
            </tr>
            <tr>
                <td>Tipe Pakaian</td>
                <td><?=$row['pakaian_id']?></td>
            </tr>
        </tbody>
    </table>
</div>