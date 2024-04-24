<!DOCTYPE html>
<html>

<head>
    <title>LAPORAN GAJI KARYAWAN PT.BAROQAH</title>
</head>
<body>
    <center>
        <h2>LAPORAN GAJI KARYAWAN PT.BAROQAH</h2>
        <hr />
    </center>
    <br/>
    <table border="1" cellpadding="10" align = "center">
        <tr>
        <th>
                            No
                        </th>
                        <th>
                            Nama Karyawan
                        </th>
                        <th>
                            NIP
                        </th>
                        <th>
                            Jabatan
                        </th>
                        <th>
                            Alamat
                        </th>
                        <th>
                            Gaji Pokok
                        </th>
                        <th>
                            Bonus
                        </th>
                        <th>
                            Total Gaji (Sebelum PPH)
                        </th>
                        <th>
                            PPH
                        </th>
                        <th>
                            Total Gaji (Setelah PPH)
                        </th>
        </tr>
        <?php
                
                  include "koneksi.php";
                  $tampil = mysqli_query($mysqli, "select * from gaji");
                  $no =1;
                  while($hasil = mysqli_fetch_array($tampil)){
                ?>
        <tr>
        <td><?php echo $no++;?></td>
                  <td><?php echo $hasil['nama']; ?></td>
                  <td><?php echo $hasil['nip']; ?></td>
                  <td><?php echo $hasil['jabatan']; ?></td>
                  <td><?php echo $hasil['alamat']; ?></td>
                  <td><?php echo "Rp ".number_format($hasil['nominalGaji']); ?></td>
                  <td><?php echo "Rp ".number_format($hasil['bonus']); ?></td>
                  <td><?php echo "Rp ".number_format($hasil['totalGaji1']); ?></td>
                  <td><?php echo "Rp ".number_format($hasil['pph']); ?></td>
                  <td><?php echo "Rp ".number_format($hasil['totalgaji2']); ?></td>
        </tr>
   
    <?php
                
            }

          ?>
           </table>
    <script>
        window.print();
    </script>    
</body>
</html>