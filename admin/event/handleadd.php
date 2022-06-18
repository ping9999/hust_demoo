<?php
    session_start(); //Dịch vụ bảo vệ
    if(!isset($_SESSION['loginOK'])){
        header("Location:../login.php");
    }
?>

<?php
$ID   = $_POST['txtID'];
$tieude  = $_POST['txttieude'];
$date   = $_POST['txtdate'];
$diadiem   = $_POST['txtdiadiem'];
$img = $_POST['txtimg'];
$link = mysqli_connect('localhost','root','') or die ('Could not connect: '.mysqli_error());
//Chon CSDL de lam viec
$db_selected = mysqli_select_db($link,"bku");
//=============================================================================================
$sql = "INSERT INTO event (`ID`, `tieude`, `date`,`diadiem`, `img`) 
VALUES ('$ID', '$tieude', '$date','$diadiem', '$img')";
$rs = mysqli_query($link,$sql);
//Chuyen ve trang hien thi su kien
header("Location:editevent.php");
mysqli_free_result($rs);
mysqli_close($link);
?>
