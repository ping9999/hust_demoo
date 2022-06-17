<?php
$id = $_REQUEST['id'];
$link = mysqli_connect('localhost','root','') or die ("Could not connect: ".mysqli_error());
//Chon CSDL de lam viec
$db_selected = mysqli_select_db($link,"bku");
//=============================================================================================
$sql = "DELETE FROM event where id = '$id' ";
if (mysqli_query($link,$sql)) echo "<h1 style='margin: 10% 40%; margin-bottom:0; color: red;'> Xoa thanh cong</h1> ";
else echo "Error".$link->error;
//Chuyen ve trang editevent.php
echo'<br><a href="editevent.php" ><Input style=" width: 210px;margin: 10% 40%; margin-top:0" type = "button" value = "Back"></a>';
mysqli_close($link);
?>