<?php 
require_once '../../database/dbkoneksi.php';
include_once"../template/head.php";
include_once"../template/navbar.php";

?>
            
            <div class="container">
    <h2 class="text-center">Form Pesanan</h2>
    <form method="POST" action="proses_pesanan.php">
        <div class="form-group">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input id="tanggal" name="tanggal" type="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pakaian_id" class="form-label">Tipe Pakaian</label>
            <?php 
            $sqltipe = "SELECT * FROM tipe_pakaian";
            $rstipe = $dbh->query($sqltipe);
            ?>
            <select id="pakaian_id" name="pakaian_id" class="form-control">
                <?php 
            foreach($rstipe as $rowtipe){
            ?>
                <option value="<?=$rowtipe['id']?>"><?=$rowtipe['tipe']?></option>
                <?php
            }
            ?>
            </select>
        </div>
        <div class="form-group">
            <label for="quantity" class="form-label">Quantity </label>
            <input id="quantity" name="quantity" type="number" class="form-control" required>
        </div>
        <div class="form-group mt-4">
            <input type="submit" name="proses" type="submit" class="btn btn-primary form-control" value="Simpan" />
        </div>
    </form>
</div>