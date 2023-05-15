<?php 
    require_once "../../database/dbkoneksi.php";
    include_once"../template/head.php";
    include_once"../template/navbar.php";
?>
<?php
$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
    $sql = "SELECT * FROM pesanan WHERE id=?";
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
	<title>Edit Pesanan</title>
    <link href="../css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2>Edit Pesanan</h2>
    <?php 
    $sql = "SELECT * FROM pesanan WHERE  id=?";
    $st = $dbh->prepare($sql);
    ?>
    <form method="POST" action="proses_pesanan.php">
    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal:</label>
        <input id="tanggal" name="tanggal" type="date" class="form-control" value="<?= $row['tanggal']?>">
    </div><br>
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
    <div class="mb-3">
        <label for="quantity" class="form-label">Quantity :</label>
        <input id="quantity" name="quantity" type="number" class="form-control" value="<?= $row['quantity']?>">
    </div>
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
