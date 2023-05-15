<?php 
require_once '../../database/dbkoneksi.php';
include_once"../template/head.php";
include_once"../template/navbar.php";
?>
<?php
    $_id = $_GET['id'];
    $sql = "SELECT * FROM tipe_pakaian WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    
?>

<div class="container">
    <h2 class="text-center">View Tipe</h2>
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>ID</td>
                <td><?=$row['id']?></td>
            </tr>
            <tr>
                <td>Tipe</td>
                <td><?=$row['tipe']?></td>
            </tr>
        </tbody>
    </table>
</div>