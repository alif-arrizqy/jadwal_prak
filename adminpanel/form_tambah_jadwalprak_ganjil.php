<h3>
    <center>Jadwal Semester Ganjil</center>
</h3>
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="addAksi_JadwalGanjil.php">
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hari<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="hari" placeholder="hari"> -->
            <select name="hari" id="hari" class="form-control col-md-7 col-xs-12">
                <option value="pilih">--- Pilih ---</option>
                <?php
                $hari = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
                $jlh_hari = count($hari);
                for ($c = 0; $c < $jlh_hari; $c += 1) {
                ?>
                    <option value="<?php echo $hari[$c]; ?>"><?php echo "$hari[$c]"; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mata Kuliah<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="asdos_1" placeholder="Pengajar 1"> -->
            <select name="matkul" id="matkul" class="form-control col-md-7 col-xs-12">
                <option value="pilih">--- Pilih ---</option>
                <?php
                include 'koneksi.php';
                $select = mysqli_query($koneksi, "select * from tb_matkul_ganjil");
                while ($_POST = mysqli_fetch_assoc($select)) {
                    $nama = $_POST['nama_matkul'];
                ?>
                    <!-- bagian ini menyimpan ke db dengan id -->
                    <!-- <option value="<?php echo $id; ?>"><?php echo "$nama"; ?></option> --> 
                    <!-- bagian ini menyimpan ke db dengan nama matkul -->
                    <option value="<?php echo $nama; ?>"> <?php echo "$nama"; ?> </option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kelas<span class="required">*</span>
            <p>Format Penulisan (Semester/Kelas)</p>
        </label>

        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="kelas" placeholder="contoh: 3/E">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pengajar 1<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="asdos_1" placeholder="Pengajar 1"> -->
            <select name="asdos_1" id="asdos1" class="form-control col-md-7 col-xs-12">
                <option value="pilih">--- Pilih ---</option>
                <?php
                include 'koneksi.php';
                $select = mysqli_query($koneksi, "select * from tb_asdos");
                while ($_POST = mysqli_fetch_assoc($select)) {
                    $nama = $_POST['nama_asdos'];
                ?>
                    <<!-- bagian ini menyimpan ke db dengan id -->
                    <!-- <option value="<?php echo $id; ?>"><?php echo "$nama"; ?></option> --> 
                    <!-- bagian ini menyimpan ke db dengan nama matkul -->
                    <option value="<?php echo $nama; ?>"> <?php echo "$nama"; ?> </option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pengajar 2<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="asdos_1" placeholder="Pengajar 1"> -->
            <select name="asdos_2" id="asdos2" class="form-control col-md-7 col-xs-12">
                <option value="pilih">--- Pilih ---</option>
                <?php
                include 'koneksi.php';
                $select = mysqli_query($koneksi, "select * from tb_asdos");
                while ($_POST = mysqli_fetch_assoc($select)) {
                    $nama = $_POST['nama_asdos'];
                ?>
                    <!-- bagian ini menyimpan ke db dengan id -->
                    <!-- <option value="<?php echo $id; ?>"><?php echo "$nama"; ?></option> --> 
                    <!-- bagian ini menyimpan ke db dengan nama matkul -->
                    <option value="<?php echo $nama; ?>"> <?php echo "$nama"; ?> </option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Laboratorium<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="lab" placeholder="Lab. DDI / Lab. Orkom"> -->
            <select name="lab" id="lab" class="form-control col-md-7 col-xs-12">
                <option value="pilih">--- Pilih ---</option>
                <option value="Lab. Organisasi Komputer">Lab. Organisasi Komputer</option>
                <option value="Lab. Mikrokontroller">Lab. Mikrokontroller</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jam Mulai<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="time" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="jam_mulai" placeholder="Jam Mulai">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jam Selesai<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="time" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="jam_selesai" placeholder="Jam Selesai">
        </div>
    </div>
    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <input id="send" type="submit" class="btn btn-success" value="Simpan" name="simpan" onclick="alertAdd()">
            <a href="viewJdwlPrak.php"><input type="submit" class="btn btn-primary" value="Cancel"></a>
        </div>
    </div>
</form>