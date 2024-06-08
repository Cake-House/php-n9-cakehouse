<?php
if (isset($_GET['idsanpham'])) {
    $idsanpham = $_GET['idsanpham'];
    $sql_sua_sp = "SELECT * FROM product WHERE id = '$idsanpham' LIMIT 1";
    $sql_sua_sanpham = mysqli_query($conn, $sql_sua_sp);

    if ($sql_sua_sanpham && mysqli_num_rows($sql_sua_sanpham) > 0) {
        $row = mysqli_fetch_array($sql_sua_sanpham);
    } else {
        echo "User not found.";
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}
?>

<table border=1 class="mt-5 ml-5 h-[600px]">
    <caption class="text-[30px] font-medium mb-5">Sửa sản phẩm</caption>
    <form
        action="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id'] ?>"
        method="post" enctype="multipart/form-data">
        <tr>
            <td><label for="">Title</label></td>
            <td><input type="text" name="title"
                    value="<?php echo $row['title'] ?>">
            </td>
        </tr>
        <tr>
            <td><label for="">Price</label></td>
            <td><input type="text" name="price"
                    value="<?php echo $row['price'] ?>">
            </td>
        </tr>
        <tr>
            <td><label for="thumbnail">IMAGE</label></td>
            <td>
                <img src="<?php echo $row['thumbnail'] ?>" alt="Product" width="100px">
                <input type="file" name="hinhanh">
            </td>
        </tr>
        <tr>
            <td><label for="">Description</label></td>
            <td>
                <textarea name="description" cols="30" rows="10">
                    <?php echo $row['description'] ?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td><label for="">Created_at</label></td>
            <td><input type="text" name="created_at"
                    value="<?php echo $row['created_at'] ?>">
            </td>
        </tr>
        <tr>
            <td><label for="">Updated_at</label></td>
            <td><input type="text" name="updated_at"
                    value="<?php echo $row['updated_at'] ?>">
            </td>
        </tr>
        <tr>
            <td><label for="danhmuc_role">ID_CATE</label></td>
            <td>
                <select name="danhmuc_role">
                    <?php
    $sql_danhmuc = "SELECT * FROM category";
$query_danhmuc = mysqli_query($conn, $sql_danhmuc);
while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
    if ($row_danhmuc['id'] == $row['category_id']) {
        echo "<option selected value='{$row_danhmuc['id']}'>{$row_danhmuc['name']}</option>";
    } else {
        echo "<option value='{$row_danhmuc['id']}'>{$row_danhmuc['name']}</option>";
    }
}
?>
                </select>
            </td>
        </tr>
        <tr>
            <td class="text-center p-2 t-5 w-[50px] bg-gray-400 rounded-2xl"><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
        </tr>
    </form>
</table>