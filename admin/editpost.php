<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
<?php
session_start();
//Ket noi CSDL
$link = mysqli_connect("localhost","root","") or die ("Could not connect: ".mysqli_error());
//Chon CSDL de lam viec
$db_selected = mysqli_select_db($link,"bku");
$sql="select * from post";
$rs = mysqli_query($link,$sql);
//===================================================
echo '<Form action = "handleedit.php">';
echo '<table border = "1" width = "100%">';
echo '<h3 class="text-center"> Thông tin bai viet </h3 class="text-center">'; 
ECHO '<a class="nav-link bg-danger col-2 text-light" href="addpost.php">them bai viet</a>'; 
echo '<tr class="table">
        <th>id</th>
        <th>tieu de</th>
        <th>noi dung</th>
        <th>hinh anh</th>
        <th>thao tac</th>
      </tr>';
while ($row = mysqli_fetch_array($rs))
{
	echo '<tr>
			<td scope="col">'.$row['id'].'</td>
			<td scope="col">'.$row['tieude'].'</td>
			<td scope="col">'.$row['noidung'].'</td>
      <td scope="col">'.$row['img'].'  </td>
			<td scope="col" align = "center"><a href = "xemsua.php?id='.$row['id'].'">Cập nhật</a>
      <a href = "handledetele.php?id='.$row['id'].'">xoa</a></td>
      </tr>';
}
echo '</TABLE>';
echo '<br><a href="admin.html" ><Input type = "button" value = "Back"></a>';
mysqli_free_result($rs);
mysqli_close($link);
?>
   <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>