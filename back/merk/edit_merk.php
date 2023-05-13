<?php 
require_once '../dbkoneksi.php';
require_once "../layouts/header.php";
require_once "../layouts/menu.php";

?>
<?php 
    $_idedit = $_GET['idedit'];
    if(!empty($_idedit)){
        // edit
        $sql = "SELECT * FROM merk WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_idedit]);
        $row = $st->fetch();
    }else{
        // new data
        $row = [];
    }
?>           
<form method="POST" action="proses_merk.php">
  <div class="form-group row">
    <label for="merk" class="col-4 col-form-label">Merk</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="merk" name="merk" type="text" class="form-control"
        value="<?=$row['merk'];?>">
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