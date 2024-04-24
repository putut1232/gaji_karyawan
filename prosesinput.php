<?php
    include "koneksi.php";

    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $jabatan = $_POST['jabatan'];
    $alamat = $_POST['alamat'];

    $manager = 12000000;
    $supervisor = 6000000;
    $staff = 3000000;

    if($jabatan == "manager"){
        $nominalgaji = $manager;
    }elseif($jabatan == "supervisor"){
        $nominalgaji = $supervisor;
    }else{
        $nominalgaji = $staff;
    }
    // Perhitungan gaji karyawan dilakukan berdasarkan gaji pokok, bonus dan PPH 
    // 5%. Bonus di dapat berdasarkan jabatan karyawan, dengan ketentuan Jabatan Manager 
    // 50% dari gaji pokok, Supervisor 40% dari gaji pokok, dan jabatan staff 30% dari gaji 
    // pokok
    if($jabatan == "manager"){
        $bonus = $nominalgaji*50/100;
    }elseif($jabatan == "supervisor"){
        $bonus = $nominalgaji*40/100;
    }else{
        $bonus = $nominalgaji*30/100;
    }

    $totalgaji1 = $nominalgaji+$bonus;
   
    if($jabatan == "manager"){
        $pph = $totalgaji1*5/100;
    }elseif($jabatan == "supervisor"){
        $pph = $totalgaji1*5/100;
    }else{ 
        $pph = $totalgaji1*5/100;
    }
    $totalgaji2 = $totalgaji1-$pph;

        $insert = mysqli_query($mysqli, "insert into gaji set 
            nama = '$nama',
            nip = '$nip',
            jabatan = '$jabatan',
            alamat = '$alamat',
            nominalGaji = '$nominalgaji',
            bonus = '$bonus',
            totalGaji1 = '$totalgaji1',
            pph = '$pph',
            totalgaji2 = '$totalgaji2'
        ");
        
        if($insert){
            echo "<script>alert('Data Berhasil Ditambah');window.location.href='index.php?p=datagaji'</script>";
        }else{
            echo "<script>alert('Data Gagal Ditambah');window.history.go(-1);</script>";
        }
?>