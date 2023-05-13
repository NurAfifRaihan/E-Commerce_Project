
<?php 
    require_once '../dbkoneksi.php';
    require_once "../layouts/header.php";
    require_once "../layouts/menu.php";

?>
<?php 
   $sql = "SELECT * FROM motor";
   $rs = $dbh->query($sql);
?>
    <div class="container">
      <a class="btn btn-success" href="form_motor.php" role="button">Create Produk</a>
        <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr class="table-primary text-uppercase">
                    <th>No</th>
                    <th>Nama Motor</th>
                    <th>CC</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Id merek</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['nama_motor']?></td>
                        <td><?=$row['cc']?></td>
                        <td><?=$row['harga']?></td>
                        <td><?=$row['stok']?></td>
                        <td><?=$row['merk_id']?></td>
                        
                        <td>

<a class="btn btn-warning" href="edit_motor.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-warning" href="view_motor.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-danger" href="delete_motor.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Customer <?=$row['nama_motor']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
        </div>
        <?php require_once "../layouts/footer.php"?>