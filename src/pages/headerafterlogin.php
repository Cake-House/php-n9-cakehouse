<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="../css/style.css">
  
</head>
<body>
  <?php
    $sql_danhmuc1="SELECT * FROM category WHERE id<13";
    $query_danhmuc1=mysqli_query($conn,$sql_danhmuc1);   
    $sql_danhmuc2="SELECT * FROM category WHERE id>12";
    $query_danhmuc2=mysqli_query($conn,$sql_danhmuc2); 
  ?>

  <div class="header flex w-full">
    <div class="h-[70px] flex justify-between px-6 header__inner">
      <div class="left flex items-center">
        <a href="index.php">
          <img class="logo_header max-w-[200px] max-h-[70px] ml-10 mr-12" 
          src="images/logo-1.png" alt="Logo" />
        </a>
      </div>
      <div class="middle flex items-center">
        <ul class="flex justify-between items-center list__menu">
          <li class="p-[23px] cursor-pointer">
            <a href="index.php?page=about">VỀ THE CAKE HOUSE</a>
          </li>
          <li class="p-[23px] cursor-pointer">
            <a href="index.php?page=category&id=10">BÁNH SINH NHẬT <i class="fa fa-caret-down"></i></a>
            <ul class="sub__menu list-none shadow-lg">
              <?php
                while ($row_danhmuc1 = mysqli_fetch_array($query_danhmuc1)) {
              ?>
                <li><a href="index.php?page=category&id=<?php echo $row_danhmuc1['id'] ?>"><?php echo $row_danhmuc1['name']?></a></li>
              <?php  
                }
              ?>
            </ul>
          </li>
          <li class="p-[23px] cursor-pointer">
            <a href="index.php?page=category&id=13">SẢN PHẨM KHÁC <i class="fa fa-caret-down"></i></a>
            <ul class="sub__menu list-none shadow-lg">
              <?php
                while ($row_danhmuc2 = mysqli_fetch_array($query_danhmuc2)) {
              ?>
                <li><a href="index.php?page=category&id=<?php echo $row_danhmuc2['id'] ?>"><?php echo $row_danhmuc2['name']?></a></li>
              <?php  
                }
              ?>
            </ul>
          </li>
          <li class="p-[23px] cursor-pointer">
            <a href="index.php?page=contact">LIÊN HỆ</a>
          </li>
        </ul>
        <div class="flex p-[23px]">
          <input class="border-solid border-2 border-red-400 rounded-2xl indent-4" 
            type="text" name="search" id="search" placeholder="Tìm kiếm...">
        </div>
      </div>
      <div class="flex items-center justify-between gap-5 right">
        <div class="scale-150 ml-10 cursor-pointer">
          <a href="index.php?page=giohang">
            <i class="fa-solid fa-basket-shopping "></i>
          </a>
        </div>
        <div class="menu__user mx-12 scale-150 cursor-pointer">
          <i class="fa-regular fa-circle-user scale-150"></i>
          <i class="fa-solid fa-caret-down scale-50"></i>
        </div>
        <ul class="submenu__user list-none shadow-lg">
          <li><a href=""><i class="fa-solid fa-arrow-right-from-bracket"></i> Đăng xuất</a></li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>

