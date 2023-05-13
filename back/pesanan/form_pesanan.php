<?php 
require_once '../dbkoneksi.php';
require_once "../layouts/header.php";
require_once "../layouts/menu.php";
?>
            
<form method="POST" action="proses_pesanan.php">
  
  <div class="form-group row">
    <label for="nama_pelanggan" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <p></p>
          </div>
        </div> 
        <input id="nama_pelanggan" name="nama_pelanggan" type="text" class="form-control" 
        value="" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat_pelanggan" class="col-4 col-form-label">Alamat Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <p></p>
          </div>
        </div> 
        <input id="alamat_pelanggan" name="alamat_pelanggan" type="text" class="form-control" 
        value="" required="required">
      </div>
    </div>
  </div>
    <div class="form-group row">
        <label for="motor_id" class="col-4 col-form-label">Motor Pilihan</label> 
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <p></p>
                    </div>
                </div> 
                <select name="motor_id" id="motor_id" class="custom-select">
                    <option value="1">Supra Fit 2004</option>
                    <option value="2">Fiz 110</option>
                    <option value="3">TVS</option>
                    <option value="4">Suzuki</option>
                    <option value="5">Viz1R</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group row">
    <label for="quantity" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <p></p>
          </div>
        </div> 
        <input id="quantity" name="quantity" type="text" class="form-control" 
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