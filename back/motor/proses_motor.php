<?php 
require_once '../dbkoneksi.php';
?>
<?php 
   $_nama_motor = $_POST['nama_motor'];
   $_cc = $_POST['cc'];
   $_harga = $_POST['harga'];
   $_stok = $_POST['stok'];
   $_merk_id = $_POST['merk_id'];
   
   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama_motor;
   $ar_data[]=$_cc;
   $ar_data[]=$_harga;
   $ar_data[]=$_stok;
   $ar_data[]=$_merk_id;
   
   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO motor (nama_motor,cc,harga,stok,merk_id) VALUES (?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE motor SET nama_motor=?,cc=?,harga=?,stok=?,merk_id=?
     WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_motor.php');
?>