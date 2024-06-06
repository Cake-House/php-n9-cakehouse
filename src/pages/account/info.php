<?php
  include("../../admincp/config/connect.php");
  if(isset($_POST['btn_update'])){
    $id = $_GET['id'];
    $fullname = $_POST['u_fullname'];
    $phone = $_POST['u_phone'];
    $addr = $_POST['u_addr'];

    $avt = $_FILES['img_avt']['name'];
    $target_dir = "../../images/";
    $target_file = $target_dir . basename($avt);
    $uploadOk = 1;

    $check = getimagesize($_FILES['img_avt']['tmp_name']);
    if($check !== false) {
      $uploadOk = 1;
    } else {
      echo '<script>alert("Tệp không phải là hình ảnh!");</script>';
      $uploadOk = 0;
    }

    $sql_info = "SELECT * FROM user WHERE id='$id' LIMIT 1";
    $query_info = mysqli_query($conn, $sql_info);
    $count = mysqli_num_rows($query_info);
    if($count > 0 && $uploadOk > 0){
      move_uploaded_file($_FILES['img_avt']['tmp_name'], $target_file);
      
      $sql_update = "UPDATE user SET fullname='$fullname', avatar='$avt', phone='$phone', address='$addr' WHERE id='$id' ";
      $query_update = mysqli_query($conn, $sql_update);
      echo '<script>alert("Thông tin cá nhân đã được cập nhật!");';
      echo 'window.location.href="../../index.php?page=user-info&id='.$id.'";</script>';
      exit; 
    }
    else {
      echo '<script>window.location.href="../../index.php?page=user-info&id='.$id.'";</script>';

    }
  } 
?>