<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
    }

    .breadcrumb {
        font-size: 14px;
        margin-bottom: 10px;
    }

    .product {
        display: flex;
        gap: 20px;
    }

    .product-details {
        max-width: 50%;
    }

    .product-details h1 {
        font-size: 24px;
        margin: 0;
    }

    .product-details .price {
        color: red;
        font-size: 24px;
        margin: 10px 0;
    }

    .product-details .size {
        font-size: 16px;
        margin-bottom: 10px;
    }

    .description {
        margin: 20px 0;
    }

    .additional-info {
        margin: 20px 0;
    }

    .cart {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .cart input {
        width: 40px;
        text-align: center;
    }

    .cart button {
        padding: 10px 20px;
        background-color: #0056b3;
        color: white;
        border: none;
        cursor: pointer;
    }

    .cart button:hover {
        background-color: #003d80;
    }
</style>
<?php
include ("admincp/config/connect.php");
$get_prod_by_id = "SELECT * FROM product WHERE product.id = '$_GET[id]'";
$prod_query = mysqli_query($conn, $get_prod_by_id);
$prod_row = mysqli_fetch_array($prod_query);
$get_related_prod = "SELECT * FROM product WHERE product.category_id ='$prod_row[1]'";
$related_query = mysqli_query($conn, $get_related_prod);
$related_row = mysqli_fetch_array($related_query);
?>
<div class="container">
    <div>
        <img src="https://origato.com.vn/wp-content/themes/3btheme/lib/images/bg-ar.png" alt="">
    </div>
    <div class="mx-auto px-14 py-3 max-w-6xl">
        <div class="about__container">
            <div class="breadcrumb flex list-none py-2">
                <span class="font-medium">
                    <a href="index.php?page=home"><i class="fa-solid fa-house"></i> Trang chủ <i
                            class="fa-solid fa-angles-right scale-75"></i></a>
                    Sản phẩm
                </span>
            </div>
        </div>
    </div>
    <div class="product mx-auto px-14 max-w-6xl">
        <div class="product-image w-[800px] h-[800px]">
            <img src="<?php echo $prod_row['thumbnail'] ?>" alt="image">
        </div>
        <div class="product-detail">
            <h1 class="product__title uppercase font-semibold min-h-[50px] my-2"><?php echo $prod_row['title'] ?></h1>
            <!-- <div class="product__category">Danh mục:</div> -->
            <div class="product__price"><?php echo number_format($prod_row['price'], 0, ',', '.') . ' đ' ?></div>
            <!-- <div class="product__size">Kích thước:</div> -->
            <div class="description">
                <p>Mô tả cốt bánh: cốt bánh 4 lớp. bông lan truyền thống kết hợp kem tươi vị vani, trang trí socola và
                    bánh macaron.</p>
                <p>Bánh size 16, cao 4 lớp phù hợp cho 6-7 người ăn.</p>
                <p>Với bánh đặt theo yêu cầu Quý khách vui lòng đặt trước 24h - 48h để Origato phục vụ Quý khách chu đáo
                    nhất!</p>
                <p>Hotline tư vấn và đặt bánh: 0911.638.166</p>
            </div>
            <div class="cart">
                <input type="number" value="1" min="1">
                <button>THÊM VÀO GIỎ HÀNG</button>
            </div>
        </div>
    </div>
    <div class="additional-info max-w-6xl">
        <h2>Mô tả</h2>
        <p>Bánh sinh nhật tại Origato có độ ngọt vừa phải, thanh mát, dịu nhẹ, tươi ngon 100%. Đặc biệt, bánh tại
            Origato không dùng phụ gia, hương liệu, chất bảo quản, bánh tươi 100% sản xuất theo quy trình Nhật Bản, đảm
            bảo vệ sinh an toàn thực phẩm. Các nguyên liệu được nhập khẩu từ các thương hiệu nổi tiếng của nước ngoài...
            mang đến cho khách hàng những hương vị bánh hảo hạng, đẳng cấp.</p>
    </div>
    <div class="product__related max-w-6xl">
        <h2>Sản phẩm tương tự</h2>
        <ul class="product__list flex justify-center mb-6">
            <div class="grid grid-cols-4 gap-10">
                <?php
                while ($related_row = mysqli_fetch_array($related_query)) {
                    ?>
                    <li class="w-[240px]">
                        <a href="index.php?page=product&id=<?php echo $related_row['id'] ?>">
                            <div class="text-center mb-[30px]">
                                <img class="w-[240px] h-[240px]" src="<?php echo $related_row['thumbnail'] ?>" alt="image">
                                <p class="uppercase font-semibold min-h-[50px] my-2"><?php echo $related_row['title'] ?></p>
                                <p><?php echo number_format($related_row['price'], 0, ',', '.') . ' đ' ?></p>
                                <p><i class="fa-solid fa-cart-shopping text-red-600"></i></p>
                            </div>
                        </a>
                    </li>
                <?php
                }
                ?>
            </div>
        </ul>
    </div>