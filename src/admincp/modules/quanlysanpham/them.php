<table border=1 class="mt-5 ml-5 h-[150px]">
    <caption class="text-[30px] font-medium mb-5">Thêm sản phẩm</caption>
    <form
        action="modules/quanlysanpham/xuly.php"
        method="post" enctype="multipart/form-data">
        <tr>
            <td><label for="id_pro">ID_PRODUCT</label></td>
            <td><input type="text" name="id_pro">
            </td>
        </tr>
        <tr>
            <td><label for="name_cate">NAME_CATEGORY</label></td>
            <td>
            <select name="danhmuc_role">
            <?php
                $sql_danhmuc = "SELECT * FROM category";
                $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
                while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                    if ($row_danhmuc['id'] == $row  ['category_id']) {
                        echo "<option selected value='  {$row_danhmuc['id']}'>{$row_danhmuc   ['name']}</option>";
                    } else {
                        echo "<option value='{$row_danhmuc['id']}'>{$row_danhmuc['name']}</option>";
                    }
                }
            ?>
            </select>
            </td>
        </tr>
        <tr>
            <td><label for="">Title</label></td>
            <td><input type="text" name="title">
            </td>
        </tr>
        <tr>
            <td><label for="">Price</label></td>
            <td><input type="text" name="price">
            </td>
        </tr>
        <tr>
            <td><label for="thumbnail">Image</label></td>
            <td>
                <input type="file" name="hinhanh">
            </td>
        </tr>
        <tr>
            <td><label for="">Description</label></td>
            <td>
                <textarea name="description" cols="30" rows="10">
                </textarea>
            </td>
        </tr>
        <tr>
            <td><label for="">Created_at</label></td>
            <td><input type="text" name="created_at">
            </td>
        </tr>
        <tr>
            <td><label for="">Updated_at</label></td>
            <td><input type="text" name="updated_at">
            </td>
        </tr>
        <tr>
            <td class="text-center t-5 w-[50px] bg-gray-400 rounded-2xl"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
        </tr>
    </form>
</table>