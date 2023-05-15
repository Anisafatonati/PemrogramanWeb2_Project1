<?php 
    require_once "../../database/dbkoneksi.php";
    include_once"../template/head.php";
    include_once"../template/navbar.php";
?>
<?php
$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
    $sql = "SELECT * FROM pakaian WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_idedit]);
    $row = $st->fetch();
} else {
    $row = [];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Produk</title>
    <link href="../css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2>Edit Produk</h2>
    <?php 
    $sql = "SELECT * FROM pakaian WHERE  id=?";
    $st = $dbh->prepare($sql);
    ?>
    <form method="POST" action="proses_pakaian.php">
    <div class="mb-3">
        <label for="id" class="form-label">Id :</label>
        <input id="id" name="id" type="text" class="form-control" value="<?= $row['id']?>">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama :</label>
        <input id="nama" name="nama" type="text" class="form-control" value="<?= $row['nama']?>">
    </div>
    <div class="mb-3">
        <label for="ukuran" class="form-label">Ukuran:</label>
        <input id="ukuran" name="ukuran" type="text" class="form-control" value="<?= $row['ukuran']?>">
    </div>
    <div class="mb-3">
        <label for="warna" class="form-label">Warna :</label>
        <input id="warna" name="warna" type="text" class="form-control" value="<?= $row['warna']?>">
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">Stok :</label>
        <input id="stok" name="stok" type="text" class="form-control" value="<?= $row['stok']?>">
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga :</label>
        <input id="harga" name="harga" type="text" class="form-control" value="<?= $row['harga']?>">
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
    </div><br>
    <div class="form-group row">
        <div class="offset col-8">
            <?php $button = (empty($_idedit)) ? "Simpan" : "Update"; ?>
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" />
            <input type="hidden" name="idedit" value="<?= $_idedit ?>" />
        </div>
        </div>
    </form>
</div>
</body>
</html>
