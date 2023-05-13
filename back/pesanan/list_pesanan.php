
<?php 
    require_once '../dbkoneksi.php';
    require_once "../layouts/header.php";
    require_once "../layouts/menu.php";

?>
<?php 
   $sql = "SELECT * FROM pesanan";
   $rs = $dbh->query($sql);
?>
    <div class="container">
      <a class="btn btn-success" href="form_pesanan.php" role="button">Buat Pesanan Baru</a>
        <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr class="table-primary text-uppercase">
                    <th>No</th>
                    <th>Nama Customer</th>
                    <th>Alamat Customer</th>
                    <th>Id Motor</th>
                    <th>Jumlah</th>
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
                        <td><?=$row['nama_pelanggan']?></td>
                        <td><?=$row['alamat_pelanggan']?></td>
                        <td><?=$row['motor_id']?></td>
                        <td><?=$row['quantity']?></td>
                        
                        <td>

<a class="btn btn-warning" href="edit_pesanan.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-warning" href="view_pesanan.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-danger" href="delete_pesanan.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Customer <?=$row['nama_pelanggan']?>?')) {return false}"
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