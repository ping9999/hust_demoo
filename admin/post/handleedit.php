<?php
    session_start(); //Dịch vụ bảo vệ
    if(!isset($_SESSION['loginOK'])){
        header("Location:../login.php");
    }
?>
<?php
$tieude = $_REQUEST['txttieude'];
$noidung  = $_REQUEST['txtnoidung'];
$img  = $_REQUEST['txtimg'];
$myID  = $_REQUEST['id'];
$bienketnoi = mysqli_connect('localhost','root','') or die ('Could not connect: '.mysqli_error());
//Chon CSDL de lam viec
$db_selected = mysqli_select_db($bienketnoi,"bku");
//=============================================================================================
$sql = "update post set tieude = '$tieude', noidung = '$noidung', img = '$img' where id = '$myID' ";
$rs = mysqli_query($bienketnoi,$sql);
//Chuyen ve trang hien thi danh sach phong ban
header("Location:editpost.php");
mysqli_free_result($rs);
mysqli_close($bienketnoi);
?>
