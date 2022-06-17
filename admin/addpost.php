<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>thêm post</title>
	<script language="JavaScript">
		function kiemTra() {
			if ((document.them.txtID.value == "") || (document.them.txttieude.value == "") || (document.them.txtnoidung.value == "") || (document.them.txtimg.value == "")) {
				alert("Bạn phải nhập đầy đủ thông tin! ");
				document.them.action = 'addpost.php';
			}
		}

		function reset() {
			document.them.txtID.value == "";
			document.them.txttieude.value == "";
			document.them.txtnoidung.value == "";
			document.them.txtimg.value == "";
		}
	</script>
</head>

<body>
	<form action="handleadd.php" method="post" name="them">
		<table border="0" style="width: 400px" align="center">
			<tr>
				<td>ID</td>
				<td><input type="text" size="20" name="txtID"></td>
			</tr>
			<tr>
				<td>tieude</td>
				<td><input type="text" size="20" name="txttieude"></td>
			</tr>
			<tr>
				<td>noidung</td>
				<td><input type="text" size="20" name="txtnoidung"></td>
			</tr>
			<tr>
				<td>img</td>
				<td>
					<form method="POST" action="upload.php" enctype="multipart/form-data">
						<input type="hidden" name="size" value="1000000">
						<input type="file" name="image">
						
					</form>
				</td>
			</tr>
			<tr align="center">
				<td colspan="3">
					<input type="Submit" value="Thêm" onclick="kiemTra()">
					<input type="Button" value="Reset" onclick="reset()">
					<a href="admin.html"><input type="Button" value="Cacel"></a>
				</td>
			</tr>
		</table>
	</form>
</body>

</html>