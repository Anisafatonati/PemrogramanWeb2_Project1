<?php 
    require_once "../../database/dbkoneksi.php";
    include_once"../template/head.php";
    include_once"../template/navbar.php";

?>
<?php
$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
    $sql = "SELECT * FROM tipe_pakaian WHERE id=?";
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
	<title>Edit Merk</title>
    <link href="../css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2>Edit Tipe</h2>
    <?php 
    $sql = "SELECT * FROM tipe_pakaian WHERE  id=?";
    $st = $dbh->prepare($sql);
    ?>
    <form method="POST" action="proses_tipe.php">
    <div class="mb-3">
        <label for="tipe" class="form-label">Tipe Pakaian :</label>
        <input id="tipe" name="tipe" type="text" class="form-control" value="<?= $row['tipe']?>">

        <div class="form-group row">
            <div class="offset col-8">
                <?php $button = (empty($_idedit)) ? "Simpan" : "Update"; ?>
                <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" />
                <input type="hidden" name="idedit" value="<?= $_idedit ?>" />
            </div>
        </div>
</div>

</body>
</html>
