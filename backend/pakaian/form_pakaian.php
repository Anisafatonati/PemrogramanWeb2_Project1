<?php 
require_once '../../database/dbkoneksi.php';
include_once"../template/head.php";
include_once"../template/navbar.php";

?>
            
            <div class="container">
    <h2 class="text-center">Form Pakaian</h2>
    <form method="POST" action="proses_pakaian.php">
        <div class="form-group">
            <label for="nama" class="form-label">Nama Pakaian</label>
            <input id="nama" name="nama" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="ukuran" class="form-label">Ukuran</label>
            <input id="ukuran" name="ukuran" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="warna" class="form-label">Warna</label>
            <input id="warna" name="warna" required type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="stok" class="form-label">Stok</label>
            <input id="stok" name="stok" required type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="harga" class="form-label">Harga</label>
            <input id="harga" name="harga" required type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="tipe" class="form-label">Tipe Pakaian</label>
            <?php 
            $sqltipe = "SELECT * FROM tipe_pakaian";
            $rstipe = $dbh->query($sqltipe);
            ?>
            <select id="tipe" name="tipe" class="form-control">
                <?php 
            foreach($rstipe as $rowtipe){
            ?>
                <option value="<?=$rowtipe['id']?>"><?=$rowtipe['tipe']?></option>
                <?php
            }
            ?>
            </select>
        </div>
        
        <div class="form-group mt-4">
            <input type="submit" name="proses" type="submit" class="btn btn-primary form-control" value="Simpan" />
        </div>
    </form>
</div>