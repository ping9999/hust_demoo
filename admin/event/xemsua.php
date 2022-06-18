<?php
$myID = $_REQUEST['id'];
$bienketnoi = mysqli_connect('localhost','root','') or die ("Could not connect: ".mysqli_error());
//Chon CSDL de lam viec
$db_selected = mysqli_select_db($bienketnoi,"bku");
//Dung cau lenh Select de lay du lieu
$rs = mysqli_query($bienketnoi,"select * from event where id='$myID'");
$row = mysqli_fetch_array($rs);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sửa sự kiện</title>
</head>
<body>
	<form action = "handleedit.php?id=<?php echo $row['id'];?>" method = "post">
		<table width = "100%" border="0" style="">
			<caption>FORM CAP NHAT</caption>
			<tr>
				<td>id : </td>
				<td>
					<?php 
						echo "$myID" ; 
						session_start();
						$_REQUEST['id']=$myID;
					?>
				</td>
			</tr>	
			<tr>
				<td>tieu de</td>
				<td><input type="text" size = "20" name="txttieude" value="<?php echo $row['tieude'];?>"></td>
			</tr>
			<tr>
				<td>date </td>
				<td><input type="text" size = "20" name="txtdate"  value="<?php echo $row['date'];?>">
				<input type="datetime-local" size = "20" name="txtdate"  value="<?php echo $row['date'];?>" >	
			</td>
				
			</tr>
			<tr>
				<td>diadiem </td>
				<td><input type="text" size = "20" name="txtdiadiem"  value="<?php echo $row['diadiem'];?>">
				</td>
			</tr>
			<tr>
				<td>img </td>
				<td><input type="text" size = "20" name="txtimg"  value="<?php echo $row['img'];?>">
				<form method="POST" action="upload.php" enctype="multipart/form-data">
						<input type="hidden" name="size" value="1000000">
						<input type="file" name="txtimg">
						
					</form>
				</td>
			</tr>
			<tr align = "center">
				<td colspan = "2"> 
					<input type = "Submit" value = "Cập nhật">
					<input type = "Reset"  value = "Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>