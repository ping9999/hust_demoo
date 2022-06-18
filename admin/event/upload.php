<?php
  
  $image = addslashes(file_get_contents($_FILES['image'])); //SQL Injection defence!
  
  $sql = "INSERT INTO `product_images` (`id`, `image`, ) VALUES ('1', '{$image}', '{$image_name}')";
  if (!mysql_query($sql)) { // Error handling
      echo "Something went wrong! :("; 
  }
?>