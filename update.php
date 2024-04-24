
<?php
    include "header.php";
              ?>

<?php
                $id = $_GET['p'];

                include "koneksi.php";
                $tampil = mysqli_query($mysqli, "select * from gaji where idGaji='$id'");
                $no =1;
                while($hasil = mysqli_fetch_array($tampil)){
              ?>
<div>
    <div class="widget">
        <div class="widget-header bordered-bottom bordered-blue">
            <span class="widget-caption">Update Data Karyawan</span>
        </div>
        <div class="widget-body">
            <div>
                <form role="form" action="prosesupdate.php" method="post">
                <input type="hidden" value="<?php echo $hasil['idGaji'];?>" name="idGaji">
                    <div class="form-group">
                        <label>Nama Karyawan</label>
                        <input type="text" class="form-control" value="<?php echo $hasil['nama'];?>" name="nama" <?php echo $hasil['nama']; ?>>
                    </div>
                    <div class="form-group">
                        <label>Nomor Induk Pegawai</label>
                        <input type="text" class="form-control" name="nip" value="<?php echo $hasil['nip'];?>" name="nip">
                    </div>
                    <div class="form-group">
                        <label>Alamat Pegawai</label>
                        <input type="text" class="form-control" name="alamat" value="<?php echo $hasil['alamat'];?>">
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <select name="jabatan" class="form-control">
                        <option value="manager" >Manager</option>
                        <?php
                          if ($hasil["jabatan"]=='manager')  
                          {
                            echo"selected";
                          }
?>
                        <option value="supervisor" >Supervisor</option>
                            <?php
                            
                          if ($hasil["jabatan"]=='supervisor')  
                          {
                            echo"selected";
                          }
?>
                <option value="staff" >Staff</option>
             <?php
                          if ($hasil["jabatan"]=='staff')  
                          {
                            echo"selected";
                          }
?>
                        </select>
             
                    </div>
            
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-blue">Submit</button>
                </form>
              <?php
                
                  }

                ?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>