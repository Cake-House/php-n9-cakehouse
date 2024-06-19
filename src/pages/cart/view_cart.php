<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['update_cart'])) {
        foreach ($_SESSION['cart'] as $key => &$item) {
            if (isset($_POST['quantity_hidden'][$key])) {
                $item['quantity_hidden'] = (int) $_POST['quantity_hidden'][$key];
            }
        }
        unset($item);
    } elseif (isset($_POST['delete'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($_POST['delete'] == $key) {
                unset($_SESSION['cart'][$key]);
            }
        }
    }
}
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $key => &$item) {
        if (isset($_POST['quantity_hidden'][$key])) {
            $item['quantity_hidden'] = (int) $_POST['quantity_hidden'][$key];
        }
    }
    unset($item);
}
$total = 0;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['quantity_hidden'] * $item['price'];
    }
}
?>

<style>
    .cart-container {
        width: 80%;
        margin: 20px auto;
    }

    .cart-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 0;
    }

    .cart-header a {
        text-decoration: none;
        color: red;
    }

    .cart-table {
        width: 100%;
        border-collapse: collapse;
    }

    .cart-table th,
    .cart-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    .cart-table th {
        background-color: #f2f2f2;
    }

    .cart-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
    }

    .cart-actions button {
        padding: 10px 20px;
        background-color: red;
        color: white;
        border: none;
        cursor: pointer;
    }

    .cart-actions button:hover {
        background-color: darkred;
    }

    .total {
        text-align: right;
        font-size: 20px;
        margin-top: 20px;
    }
</style>
<div class="cart-container">
    <div class="breadcrumb__container">
        <div class="breadcrumb flex list-none py-4">
            <span class="font-medium">
                <a href="src/index.php?page=home"><i class="fa-solid fa-house"></i> Trang chủ <i
                        class="fa-solid fa-angles-right scale-75"></i></a>
                Giỏ hàng
            </span>
        </div>
    </div>
    <form method="post">
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $item): ?>
                        <tr>
                            <td>
                                <div class="grid grid-cols-12">
                                    <img class="col-span-2" src="<?php echo $item['thumbnail']; ?>" alt="image" width="100">
                                    <h2 class="col-span-10 text-justify"><?php echo $item['title']; ?></h2>
                                    
                                </div>
                            </td>
                            <td>
                                <?php echo number_format($item['price'], 0, ',', '.'); ?> đ
                            </td>
                            <td>
                                <input type="number" name="quantity_hidden" value="<?php echo $item['quantity_hidden']; ?>">
                            </td>
                            <td>
                                <?php echo number_format($item['price'] * $item['quantity_hidden'], 0, ',', '.'); ?> đ
                            </td>
                            <td>
                                <input type="submit" name="delete" value="x">
                            </td>
                        </tr>
                <?php 
                    endforeach; }
                    else {
                        echo "<tr><td colspan=5><h2>Giỏ hàng trống!</h2></td></tr>";
                    } 
                ?>
            </tbody>
        </table>
        <div class="cart-actions">
            <button type="submit" name="update_cart">Cập nhật giỏ hàng</button>
            <button><a href="./index.php">Tiếp tục mua hàng</a></button>
        </div>
    </form>
    <div class="total">
        Tổng:
        <?php echo number_format($total, 0, ',', '.'); ?> đ
    </div>
    <div class="cart-actions">
        <button>THANH TOÁN</button>
    </div>
</div>