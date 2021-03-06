<!-- Bootstrap -->
<link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- Datatables -->
<link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
<link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="build/css/custom.min.css" rel="stylesheet">
<h3>
    <center>Jadwal Praktikum Genap</center>
</h3>
<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <!-- <a href="addJdwlPrak.php"><button type="button" class=" col-md btn btn-primary">Tambah Data</button></a> -->
    <thead>
        <tr>
            <th>No</th>
            <th>Hari</th>
            <th>Kelas</th>
            <th>Matkul</th>
            <th>Pengajar 1</th>
            <th>Pengajar 2</th>
            <th>Jam Mulai</th>
            <th>Jam Selesai</th>
            <th>Lab</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select*from tb_jdwl_genap");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['hari']; ?></td>
                <td><?php echo $d['kelas']; ?></td>
                <td><?php echo $d['matkul']; ?></td>
                <td><?php echo $d['asdos_1']; ?></td>
                <td><?php echo $d['asdos_2']; ?></td>
                <td><?php echo $d['jam_mulai']; ?></td>
                <td><?php echo $d['jam_selesai']; ?></td>
                <td><?php echo $d['lab']; ?></td>
                <td>
                    <a href="editJdwlGenap.php?id_jdwl_genap=<?php echo $d['id_jdwl_genap']; ?>">
                        <input type="submit" class="btn btn-info btn-xs" value="Edit">
                    </a>
                    <a href="hapusJdwlGenap.php?id_jdwl_genap=<?php echo $d['id_jdwl_genap']; ?>">
                        <input type="submit" class="btn btn-danger btn-xs" value="Hapus" onclick="alertHapus()">
                    </a>

                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Datatables -->
<script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="vendors/jszip/dist/jszip.min.js"></script>
<script src="vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="build/js/custom.min.js"></script>