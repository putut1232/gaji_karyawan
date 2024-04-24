<?php 
    session_start();
    error_reporting(0);
    include "header.php";

    $page = $_GET['p'];

    if($page=="inputgaji"){
        include "input.php";
    }elseif($page=="datagaji"){
        include "datagaji.php";
    }else{
        include 'home.php';
    }
        
?>
<?php include "footer.php"; ?>
           