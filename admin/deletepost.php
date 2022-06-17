<?php
    require('../db.php');

    if(isset($_GET["id"])){
        $postID = $_GET['id'];
    }
    $sql = "DELETE FROM post  WHERE id = $postID";

    if (mysqli_query($link, $sql)) {?>
        <script>
            alert("Xóa bài thành công");
            location.href = "manageUser.php";
            // alert("hshshsh");
        </script>

    <?php        
    } else {
        echo "Lỗi xóa bài: " . mysqli_error($conn);
    }
    mysqli_close($link);
    
?>