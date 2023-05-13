<?php 
require_once '../dbkoneksi.php';
require_once "../layouts/header.php";
require_once "../layouts/menu.php";

?>
<?php 
    $_idedit = $_GET['idedit'];
    if(!empty($_idedit)){
        // edit
        $sql = "SELECT * FROM motor WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_idedit]);
        $row = $st->fetch();
    }else{
        // new data
        $row = [];
    }
?>           
<form method="POST" action="proses_motor.php">
    <div class="form-group row">
        <label for="nama_motor" class="col-4 col-form-label">Nama Motor</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-anchor"></i>
            </div>
            </div> 
            <input id="nama_motor" name="nama_motor" type="text" class="form-control"
            value="<?=$row['nama_motor'];?>">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="cc" class="col-4 col-form-label">CC</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-anchor"></i>
            </div>
            </div> 
            <input id="cc" name="cc" type="number" class="form-control"
            value="<?=$row['cc'];?>">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="harga" class="col-4 col-form-label">Harga</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-anchor"></i>
            </div>
            </div> 
            <input id="harga" name="harga" type="text" class="form-control"
            value="<?=$row['harga'];?>">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="merk_id" class="col-4 col-form-label">Id Merk</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-anchor"></i>
            </div>
            </div> 
            <input id="merk_id" name="merk_id" type="text" class="form-control"
            value="<?=$row['merk_id'];?>">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="stok" class="col-4 col-form-label">Stok</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-anchor"></i>
            </div>
            </div> 
            <input id="stok" name="stok" type="text" class="form-control"
            value="<?=$row['stok'];?>">
        </div>
        </div>
    </div>
  <br>
  
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