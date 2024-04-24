<div class="col-xs-12 col-md-12">
    <div class="widget">
        <div class="widget-header ">
            <span class="widget-caption">Data Gaji</span>
            <span  class="btn btn-outline-primary"><a href = "cetak.php" target="_blank">CETAK DATA KARYAWAN</a></span>
            <div class="widget-buttons">
                <a href="#" data-toggle="maximize">
                    <i class="fa fa-expand"></i>
                </a>
                <a href="#" data-toggle="collapse">
                    <i class="fa fa-minus"></i>
                </a>
            </div>
        </div>
        <div class="widget-body">
            <div id="editabledatatable_wrapper" class="dataTables_wrapper form-inline no-footer">
                <div class="DTTT btn-group">
                    
                        </div>
                        </div><div class="dataTables_length" id="editabledatatable_length"><label></label></div><table class="table table-striped table-hover table-bordered dataTable no-footer" id="editabledatatable" role="grid" aria-describedby="editabledatatable_info">
                <thead>
                    <tr role="row">
                        <th>
                            <center>No</center>
                        </th>
                        <th>
                            <center>Nama Karyawan</center>
                        </th>
                        <th>
                            <center>NIP</center>
                        </th>
                        <th>
                            <center>Jabatan</center>
                        </th>
                        <th>
                            <center>Alamat</center>
                        </th>
                        <th>
                            <center>Gaji Pokok</center>
                        </th>
                        <th>
                            <center>Bonus</center>
                        </th>
                        <th>
                           <center>Total Gaji (Sebelum PPH)</center>
                        </th>
                        <th>
                            <center>
                            PPH
                            </center>
                        </th>
                        <th>
                           <center> Total Gaji (Setelah PPH)</center>
                        </th>
                        <th colspan="2">
                            <center>Aksi</center>
                        </th>
                    </tr>
                </thead>
                <?php
                
                  include "koneksi.php";
                  $tampil = mysqli_query($mysqli, "select * from gaji");
                  $no =1;
                  while($hasil = mysqli_fetch_array($tampil)){
                ?>
                <tbody>  
                <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $hasil['nama']; ?></td>
                  <td><?php echo $hasil['nip']; ?></td>
                  <td><?php echo $hasil['jabatan']; ?></td>
                  <td><?php echo $hasil['alamat']; ?></td>
                  <td><?php echo "Rp.".number_format($hasil['nominalGaji']); ?></td>
                  <td><?php echo "Rp.".number_format($hasil['bonus']); ?></td>
                  <td><?php echo "Rp.".number_format($hasil['totalGaji1']); ?></td>
                  <td><?php echo "Rp.".number_format($hasil['pph']); ?></td>
                  <td><?php echo "Rp.".number_format($hasil['totalgaji2']); ?></td>
                 
                  <td> <a href="update.php?p=<?php echo $hasil['idGaji']; ?>" class="btn btn-warning">Update</a></td>
                    
                  <td> <a href="hapus.php?p=<?php echo $hasil['idGaji']; ?>" onclick="return confirm('Apakah Yakin Untuk Dihapus')" class="btn btn-danger">Delete</a></td>
                    <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
                
                </tr>
                <?php
                
                  }

                ?>
                </tbody>
            </table></div>
    </div>
</div>