<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>thêm event</title>
	<script language="JavaScript">
		function kiemTra() {
			if ((document.them.txtID.value == "") || (document.them.txttieude.value == "") || (document.them.txtdate.value == "") || (document.them.txtdate.value == "")) {
				alert("Bạn phải nhập đầy đủ thông tin! ");
				document.them.action = 'addevent.php';
			}
		}

		function reset() {
			document.them.txtID.value == "";
			document.them.txttieude.value == "";
			document.them.txtdate.value == "";
			document.them.txtimg.value == "";
		}
	</script>
</head>

<body>
	<form action="handleadd.php" method="post" name="them">
		<h1 style="text-align: center;"> them su kien moi</h1>
		<table border="0" style="width: 400px" align="center">
			<tr>
				<td>ID</td>
				<td><input type="text" size="40" name="txtID"></td>
			</tr>
			<tr>
				<td>tieude</td>
				<td><input type="text" size="40"  name="txttieude"></td>
			</tr>
			<tr>
				<td>date</td>
				<td><input type="datetime-local" size="40"  name="txtdate"></td>
			</tr>
			<tr>
				<td>diadiem</td>
				<td><input type="text" size="40" name="txtdiadiem"></td>
			</tr>
			<tr>
				<td>img</td>
				<td>
					<form method="event" action="upload.php" enctype="multipart/form-data">
						<input type="hidden" name="size" value="1000000">
						<input type="file" name="image">
						
					</form>
				</td>
			</tr>
			<tr align="center">
				<td colspan="3">
					<input type="Submit" value="Thêm" onclick="kiemTra()">
				
					<a href="editpost.html"><input type="Button" value="Cacel"></a>
				</td>
			</tr>
		</table>
	</form>
</body>

</html>