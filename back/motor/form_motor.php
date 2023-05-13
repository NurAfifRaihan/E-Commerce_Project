<?php 
require_once '../dbkoneksi.php';
require_once "../layouts/header.php";
require_once "../layouts/menu.php";
?>
            
<form method="POST" action="proses_motor.php">
  
  <div class="form-group row">
    <label for="nama_motor" class="col-4 col-form-label">Nama Motor</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <p></p>
          </div>
        </div> 
        <input id="nama_motor" name="nama_motor" type="text" class="form-control" 
        value="" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="cc" class="col-4 col-form-label">CC</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <p></p>
          </div>
        </div> 
        <input id="cc" name="cc" type="number" class="form-control" 
        value="" required="required">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="harga" class="col-4 col-form-label">Harga</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <p></p>
          </div>
        </div> 
        <input id="harga" name="harga" type="number" class="form-control" 
        value="" required="required">
      </div>
    </div>
  </div>
    <div class="form-group row">
        <label for="merk_id" class="col-4 col-form-label">Merk Motor</label> 
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <p></p>
                    </div>
                </div> 
                <select name="merk_id" id="merk_id" class="custom-select">
                    <option value="1">Honda</option>
                    <option value="2">Yamaha</option>
                    <option value="3">TVS</option>
                    <option value="4">Suzuki</option>
                    <option value="5">Viz1R</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <p></p>
          </div>
        </div> 
        <input id="stok" name="stok" type="number" class="form-control" 
        value="" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Simpan"/>
    </div>
  </div>
</form>
<?php require_once "../layouts/footer.php"?>