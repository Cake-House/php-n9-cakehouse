<script>
        function confirmDelete(id) {
            if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này không?")) {
                window.location.href = "modules/quanlysanpham/xuly.php?action=delete&idsanpham=" + id;  
            }
        }
</script>
<table class="mt-5 ml-5 h-auto">
    <caption class="text-[30px] font-medium mb-5">Quản lý sản phẩm</caption>
    <tr><td colspan="10" class="h-[60px] text-right"><a class="p-2 font-bold text-gray-700 bg-gray-400 rounded-2xl" href="index.php?action=quanlysanpham&query=them">Thêm sản phẩm</a></td></tr>
    <tr class="border-2">
        <th class="w-[50px] text-center border-2">PRODUCT</th>
        <th class="w-[90px] text-center border-2">CATEGORY</th>
        <th class="w-[90px] text-center border-2">TITLE</th>
        <th class="w-[90px] text-center border-2">PRICE</th>
        <th class="w-[100px] text-center border-2">THUMBNAIL</th>
        <th class="w-[500px] text-center border-2">DESCRIPTION</th>
        <th class="w-[90px] text-center border-2">CREATE_AT</th>
        <th class="w-[90px] text-center border-2">UPDATE_AT</th>
        <th colspan=2 class="w-[100px] text-center border-2">Manager</th>
    </tr>
    <?php
    $sql_lietke_sanpham = "SELECT product.id, product.category_id, product.title, product.price, product.thumbnail, product.description, product.created_at, product.updated_at FROM product INNER JOIN category ON product.category_id = category.id";
    $query_lietke_sanpham = mysqli_query($conn, $sql_lietke_sanpham);
    while ($row = mysqli_fetch_array($query_lietke_sanpham)) {
        ?>
        <tr class="border-2">
            <td class="w-[90px] text-center border-2"><?php echo $row['id'] ?></td>
            <td class="w-[90px] text-center border-2"><?php echo $row['category_id'] ?></td>
            <td class="w-[90px] text-center border-2"><?php echo $row['title'] ?></td>
            <td class="w-[90px] text-center border-2"><?php echo $row['price'] ?></td>
            <td><img src="<?php echo $row['thumbnail'] ?>" alt="Product" width="100px"></td>
            <td class="w-[500px] text-justify border-2"><?php echo $row['description'] ?></td>
            <td class="w-[90px] text-center border-2"><?php echo $row['created_at'] ?></td>
            <td class="w-[90px] text-center border-2"><?php echo $row['updated_at'] ?></td>

            <td><a class="p-3 bg-red-400 rounded-2xl" href="javascript:void(0);" onclick="confirmDelete(<?php echo $row['id'] ?>)">Xoá</a></td>
            <td><a class="p-3 bg-gray-400 rounded-2xl" href="index.php?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id'] ?>">Sửa</a></td>
        </tr>
    <?php
    }
    ?>
</table>
