<?php
    // convert file ke bentuk excel 
    header("Content-type:application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Laporan Hasil Perintah Kerja.xls");
?>
   
    <h2 class="text-center p-3" style="font-weight:bold; text-align: center;">Laporan Akhir</h2>
    <h2 class="text-center p-3" style="font-weight:bold; text-align: center;"> Monitoring Pemeliharaan Mesin Pembangkit di PLN Keramasan</h2>
   
   
<table class="table table-bordered table-hover" border=2 width="100%" cellspacing="0" cellpadding="4">
    <tr>
        <th>No</th>
        <th>Kode Perintah Kerja</th>
        <th>Nama Teknisi</th>
        <th>Nama Unit Induk </th>
        <th>Lokasi</th>
        <th>Masalah Mesin</th>
        <th>Tanggal Selesai</th>
        <th>Hasil Kerja</th>
        <th>Catatan Kerja</th>
        <th>Status Akhir</th>
    </tr>
    <?php
    include "koneksi.php";
    $sql="select * from cat_kerja order by kode_perintah_kerja asc";

    $hasil=mysqli_query($conn,$sql);
    $no=1;
    while ($data = mysqli_fetch_array($hasil)) {
        $no++;
        ?>  
        <tr>
            <th><?php echo $no;?></th>
            <th><?php echo $data["kode_perintah_kerja"]; ?></th>
            <th><?php echo $data["teknisi"];   ?></th>
            <th><?php echo $data["unit"];   ?></th>
            <th><?php echo $data["lokasi"];   ?></th>
            <th><?php echo $data["perbaikan_mesin"];   ?></th>
            <th><?php echo $data["tgl_selesai"];   ?></th>
            <th><?php echo $data["hasil_kerja"];   ?></th>
            <th><?php echo $data["status_akhir"];   ?></th>
        </tr>
     <?php
    }
    ?>
</table>
    
