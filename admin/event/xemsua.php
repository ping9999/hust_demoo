<?php
    session_start(); //Dịch vụ bảo vệ
    if(!isset($_SESSION['loginOK'])){
        header("Location:../login.php");
    }
?>
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
	<form style="margin: 30px; border: 1px black solid ;" action = "handleedit.php?id=<?php echo $row['id'];?>" method = "post">
		<table width = "100%"  >
			<h3 style=" margin-left:43%; "  >FORM CAP NHAT</h3 >
			<tr >
				<td>id : </td>
				<td>
					<?php 
						echo "$myID" ; 
						
						$_REQUEST['id']=$myID;
					?>
				</td>
			</tr>	
			<tr>
				<td >tieu de</td>
				<td><input type="text" size = "170" name="txttieude" value="<?php echo $row['tieude'];?>"></td>
			</tr>
			<tr>
				<td>date </td>
				<td><?php echo $row['date'];?>
				<input type="datetime-local" size = "20" name="txtdate"  value="<?php echo $row['date'];?>" >	
			</td>
				
			</tr>
			<tr>
				<td>diadiem </td>
				<td><input type="text" size = "170" name="txtdiadiem"  value="<?php echo $row['diadiem'];?>">
				</td>
			</tr>
			<tr>
				<td>img </td>
				<td><?php echo $row['img'];?>
				<form method="POST" action="upload.php" enctype="multipart/form-data">
						<input type="hidden" name="size" value="1000000">
						<input type="file" name="txtimg">
						
					</form>
				</td>
			</tr>
			<tr >
				<td colspan = "2"> 
					<input style="margin-top: 2%;  margin-left:33%; width: 200px; height: 30px" type = "Submit" value = "Luu lai">
				<a href="editevent.php">	<input style="margin-top: 2%;   width: 200px; height: 30px" type = "button" value = "quay lai"></a>
					
				</td>
			</tr>
		</table>
	</form>
</body>
</html>