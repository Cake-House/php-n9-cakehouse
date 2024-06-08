<table border=1 class="mt-5 ml-5 h-[100px]">
    <caption class="text-[30px] font-medium mb-5">Quản lý sản phẩm</caption>
    <tr>
        <th>PRODUCT</th>
        <th>CATEGORY</th>
        <th>TITLE</th>
        <th>PRICE</th>
        <th>THUMBNAIL</th>
        <th>DESCRIPTION</th>
        <th>CREATE_AT</th>
        <th>UPDATE_AT</th>
        <th>Manager</th>
    </tr>
    <?php
    $sql_lietke_sanpham = "SELECT product.id, product.category_id, product.title, product.price, product.thumbnail, product.description, product.created_at, product.updated_at FROM product INNER JOIN category ON product.category_id = category.id";
    $query_lietke_sanpham = mysqli_query($conn, $sql_lietke_sanpham);
    while ($row = mysqli_fetch_array($query_lietke_sanpham)) {
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['category_id'] ?></td>
            <td><?php echo $row['title'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td><img src="<?php echo $row['thumbnail'] ?>" alt="Product" width="100px"></td>
            <td><?php echo $row['description'] ?></td>
            <td><?php echo $row['created_at'] ?></td>
            <td><?php echo $row['updated_at'] ?></td>

            <td><a class="p-3 bg-red-400 rounded-2xl" href="modules/quanlysanpham/xuly.php?action=delete&idsanpham=<?php echo $row['id'] ?>">Xoá</a></td>
            <td><a class="p-3 bg-gray-400 rounded-2xl" href="index.php?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id'] ?>">Sửa</a></td>
        </tr>
    <?php
    }
    ?>
    <tr>
        <td><a href="index.php?action=quanlydanhmuc&query=them">Thêm sản phẩm</a></td>
    </tr>
</table>
