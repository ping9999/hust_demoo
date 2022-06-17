<?php
session_start();
$link = mysqli_connect('localhost','root','') or die ('Could not connect: '.mysqli_error());
mysqli_select_db($link,"bku");
$sql="select * from post";
$rs = mysqli_query($link,$sql);
echo '<table border = "1" width = "100%">';
echo '<caption> dữ liệu bảng post </caption>';
//tieu de cua bang chua du lieu khi hien thi tren web
echo '<tr>
        <th>id</th>
        <th>tieude</th>
        <th>noidung</th>
        <th>img</th>
     </tr>';
//Hien thi tung bang
while ($row = mysqli_fetch_array($rs)) 
{
	echo'<tr>
	   <td>'.$row['id'].'</td>
	   <td>'.$row["tieude"].'</td>
	   <td>'.$row['noidung'].'</td>
	   <td>'.$row['img'].'</td>
	     </tr>';
}
echo '</TABLE>';
echo '<br><a href="addpost.php" ><Input type = "button" value = "Back"></a>';
mysqli_free_result($rs);
mysqli_close($link);
?>