<?php 
    require_once '../dbkoneksi.php';
    require_once "../layouts/header.php";
    require_once "../layouts/menu.php";

?>
<main>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pesanan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?=$row['id']?></td></tr>
        <tr>  <td>Nama Customer</td><td><?=$row['nama_pelanggan']?></td></tr>
        <tr>   <td>Alamat Customer</td><td><?=$row['alamat_pelanggan']?></td></tr>
        <tr>   <td>Motor</td><td><?=$row['motor_id']?></td></tr>
        <tr>   <td>Quantity</td><td><?=$row['quantity']?></td></tr>
        
    </tbody>
</table>

<?php require_once "../layouts/footer.php"?>