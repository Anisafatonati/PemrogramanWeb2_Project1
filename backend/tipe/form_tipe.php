<?php 
require_once '../../database/dbkoneksi.php';
include_once"../template/head.php";
include_once"../template/navbar.php";

?>
            
            <div class="container">
    <h2 class="text-center">Form Pesanan</h2>
    <form method="POST" action="proses_tipe.php">
        <div class="form-group">
            <label for="tipe" class="form-label">Tipe</label>
            <input id="tipe" name="tipe" type="text" class="form-control" required>
        </div>
        <div class="form-group mt-4">
            <input type="submit" name="proses" type="submit" class="btn btn-primary form-control" value="Simpan" />
        </div>
    </form>
</div>