<?php
    session_start(); //Dịch vụ bảo vệ
    if(!isset($_SESSION['loginOK'])){
        header("Location:../login.php");
    }
?>

<?php
$ID   = $_POST['txtID'];
$tieude  = $_POST['txttieude'];
$noidung   = $_POST['txtnoidung'];
$img = $_POST['txtimg'];
$link = mysqli_connect('localhost','root','') or die ('Could not connect: '.mysqli_error());
//Chon CSDL de lam viec
$db_selected = mysqli_select_db($link,"bku");
//=============================================================================================
$sql = "INSERT INTO post (`ID`, `tieude`, `noidung`, `img`) 
VALUES ('$ID', '$tieude', '$noidung', '$img')";
$rs = mysqli_query($link,$sql);
//Chuyen ve trang hien thi thong tin nhan vien
header("Location:editpost.php");
mysqli_free_result($rs);
mysqli_close($link);
?>
