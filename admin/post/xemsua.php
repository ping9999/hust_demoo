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
$rs = mysqli_query($bienketnoi,"select * from post where id='$myID'");
$row = mysqli_fetch_array($rs);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sửa bài viết</title>
</head>
<body>
	<form action = "handleedit.php?id=<?php echo $row['id'];?>" method = "post">
		<table width = "100%" border="0">
			<caption>FORM CAP NHAT</caption>
			<tr>
				<td>id : </td>
				<td>
					<?php 
						echo "$myID" ; 
					
						$_REQUEST['id']=$myID;
					?>
				</td>
			</tr>	
			<tr>
				<td>tieu de</td>
				<td><input type="text" size = "170" name="txttieude" value="<?php echo $row['tieude'];?>"></td>
			</tr>
			<tr>
				<td>noi dung </td>
				<td><input type="text" size = "170" name="txtnoidung"  value="<?php echo $row['noidung'];?>">
				</td>
			</tr>
			<tr>
				<td>img </td>
				<td><?php echo $row['img'];?>
				<form method="POST" action="upload.php" enctype="multipart/form-data">
						<input type="hidden" name="size" value="1000000">
						<input type="file" name="image">
						
					</form>
				</td>
			</tr>
			<tr>
				<td colspan = "2"> 
				<input style="margin-top: 2%; margin-left:36%; width: 200px; height: 30px" type = "Submit" value = "luu lai">
				<a href="editpost.php">	<input style="margin-top: 2%;   width: 200px; height: 30px" type = "button" value = "quay lai"></a>
				
				</td>
			</tr>
		</table>
	</form>
</body>
</html>