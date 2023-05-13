<?php 
require_once '../dbkoneksi.php';
require_once "../layouts/header.php";
require_once "../layouts/menu.php";
?>
<?php 
    $_idedit = $_GET['idedit'];
    if(!empty($_idedit)){
        // edit
        $sql = "SELECT * FROM pesanan WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_idedit]);
        $row = $st->fetch();
    }else{
        // new data
        $row = [];
    }
?>           
<form method="POST" action="proses_pesanan.php">
    <div class="form-group row">
        <label for="nama_pelanggan" class="col-4 col-form-label">Nama Customer</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-anchor"></i>
            </div>
            </div> 
            <input id="nama_pelanggan" name="nama_pelanggan" type="text" class="form-control"
            value="<?=$row['nama_pelanggan'];?>">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="alamat_pelanggan" class="col-4 col-form-label">Alamat Customer</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-anchor"></i>
            </div>
            </div> 
            <input id="alamat_pelanggan" name="alamat_pelanggan" type="text" class="form-control"
            value="<?=$row['alamat_pelanggan'];?>">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="motor_id" class="col-4 col-form-label">Id Motor</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-anchor"></i>
            </div>
            </div> 
            <input id="motor_id" name="motor_id" type="text" class="form-control"
            value="<?=$row['motor_id'];?>">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="quantity" class="col-4 col-form-label">Jumlah</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-anchor"></i>
            </div>
            </div> 
            <input id="quantity" name="quantity" type="text" class="form-control"
            value="<?=$row['quantity'];?>">
        </div>
        </div>
    </div>
  
  
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Update"/>
      <input type="hidden" name="idedit" value="<?=$_idedit;?>">
    </div>
  </div>
</form>
<?php require_once "../layouts/footer.php"?>