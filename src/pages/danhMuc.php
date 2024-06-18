<?php
include("admincp/config/connect.php");
$sql_show = "SELECT * FROM product WHERE product.category_id ='$_GET[id]' ORDER BY id DESC ";
$query_show= mysqli_query($conn, $sql_show);

$sql_cate = "SELECT * FROM category WHERE id ='$_GET[id]' LIMIT 1 ";
$query_cate =mysqli_query($conn,$sql_cate);
$row_title =mysqli_fetch_array($query_cate);
?>

<div class="main w-full">
  <!-- Bento cake -->
  <div class="home__container py-[45px]">
    <div class="flex justify-center items-center mb-[30px]">
      <h2 >
      <?php 
            if(isset($row_title['name'])){
                echo $row_title['name'];
            }else{
                echo "lỗi không lấy được data";
            }
    ?>
      </h2>
      </div>
      <ul class="product__list flex justify-center gap-[30px]">
    <?php
        while($row_pro=mysqli_fetch_array($query_show)){
    ?>
                    <li> 
                    <div class="text-center mb-[30px]">
                        <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id'] ?>">
                            <img class="w-[255px] h-[255px]" src="<?php echo $row_pro['thumbnail'] ?>" alt="">
                            <p class="uppercase font-semibold min-h-[50px] my-2"><?php echo $row_pro['title'] ?></p>
                            <p><?php echo number_format($row_pro['price'],0,',','.').' đ' ?></p>
                            <p><i class="fa-solid fa-cart-shopping text-red-600"></i></p>
                        </a>
                    </div>
                    </li>
    <?php
        }
    ?>
                   
</ul>
    </div>
    <div>
    





















