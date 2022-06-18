<?php
    session_start(); //Dịch vụ bảo vệ
    if(!isset($_SESSION['loginOK'])){
        header("Location:../login.php");
    }
?>
<?php
    require('../db.php');

    if(isset($_GET["id"])){
        $eventID = $_GET['id'];
    }
    $sql = "DELETE FROM event  WHERE id = $eventID";

    if (mysqli_query($link, $sql)) {?>
        <script>
            alert("Xóa su kien thành công");

        </script>

    <?php        
    } else {
        echo "Lỗi xóa su kien: " . mysqli_error($conn);
    }
    mysqli_close($link);
    
?>