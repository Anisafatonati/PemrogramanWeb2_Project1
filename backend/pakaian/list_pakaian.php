<?php 
    require_once '../../database/dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM pesanan";
   $rs = $dbh->query($sql);
?>

<div class="container">
    <h2 class="text-center mb-3">List pakaian</h2>
    <a class="btn btn-success mb-3" href="from_pakaian.php" role="button">Create Pakaian</a>
    <div class="table-responsive">
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pakaian</th>
                    <th>Ukuran</th>
                    <th>Warna</th>
                    <th>Harga Jual</th>
                    <th>Id Tipe Pakaian</th>
                    <th>Qty</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1 ; foreach($rs as $row){ ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$row['nama']?></td>
                    <td><?=$row['ukuran']?></td>
                    <td><?=$row['warna']?></td>
                    <td><?=$row['harga']?></td>
                    <td><?=$row['tipe_pakaian_id']?></td>
                    <td><?=$row['stok']?></td>
                    <td>
                        <a class="btn btn-primary" href="view_pakaian.php?id=<?=$row['id']?>">View</a>
                        <a class="btn btn-primary" href="edit_pakaian.php?idedit=<?=$row['id']?>">Edit</a>
                        <a class="btn btn-primary" href="delete_pakaian.php?iddel=<?=$row['id']?>"
                            onclick="if(!confirm('Anda Yakin Hapus Data pakaian <?=$row['nama']?>?')) {return false}">Delete</a>
                    </td>
                </tr>
                <?php $nomor++; } ?>
            </tbody>
        </table>
    </div>
</div>