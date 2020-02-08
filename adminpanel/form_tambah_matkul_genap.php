<h3>
    <center>Jadwal Semester Genap</center>
</h3>
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="addAksi_MatkulGenap.php">
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Matkul<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="kode_matkul" placeholder="Kode Matkul">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Mata Kuliah<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nama_matkul" placeholder="Nama Mata Kuliah">
        </div>
    </div>
    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <input id="send" type="submit" class="btn btn-success" value="Simpan" name="simpan" onclick="alertAdd()">
            <a href="viewMatkul.php"><input type="submit" class="btn btn-primary" value="Cancel"></a>
        </div>
    </div>
</form>