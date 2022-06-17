<?php
$tieude = $_REQUEST['txttieude'];
$date  = $_REQUEST['txtdate'];
$diadiem  = $_REQUEST['txtdiadiem'];
$img  = $_REQUEST['txtimg'];
$myID  = $_REQUEST['id'];
$bienketnoi = mysqli_connect('localhost','root','') or die ('Could not connect: '.mysqli_error());
//Chon CSDL de lam viec
$db_selected = mysqli_select_db($bienketnoi,"bku");
//=============================================================================================
$sql = "update event set tieude = '$tieude', date = '$date',diadiem = '$diadiem', img = '$img' where id = '$myID' ";
$rs = mysqli_query($bienketnoi,$sql);
//Chuyen ve trang hien thi danh sach phong ban
header("Location:editevent.php");
mysqli_free_result($rs);
mysqli_close($bienketnoi);
?>
