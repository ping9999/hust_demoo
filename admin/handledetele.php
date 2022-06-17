<?php
$id = $_REQUEST['id'];
$link = mysqli_connect('localhost','root','') or die ("Could not connect: ".mysqli_error());
//Chon CSDL de lam viec
$db_selected = mysqli_select_db($link,"bku");
//=============================================================================================
$sql = "DELETE FROM post where id = '$id' ";
if (mysqli_query($link,$sql)) echo "Xoa thanh cong";
else echo "Error".$link->error;
//Chuyen ve trang editpost.php
echo'<br><a href="editpost.php" ><Input type = "button" value = "Back"></a>';
mysqli_close($link);
?>