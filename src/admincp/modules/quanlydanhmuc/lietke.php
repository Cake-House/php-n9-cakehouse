
<table border=1 class="mt-5 ml-5 h-[500px]">
    <caption class="text-[30px] font-medium mb-5">Quản lý danh mục</caption>
    <tr class="border-2">
        <th class="w-[90px] text-center border-2">ID_CATEGORY</th>
        <th class="w-[90px] text-center border-2">NAME_CATE</th>
        <th colspan="2" class="w-[90px] text-center border-2">Manager</th>
    </tr>
    <?php
        $sql_lietke_cate = "SELECT * FROM category";
        $query_lietke_cate = mysqli_query($conn, $sql_lietke_cate);
    while($row = mysqli_fetch_array($query_lietke_cate)) {
        ?>
    <tr class="border-2">
        <td class="h-[100px] w-[90px] text-center border-2"><?php echo $row['id'] ?></td>
        <td class="h-[100px] w-[200px] text-center border-2"><?php echo $row['name'] ?></td>

        <td><a class="p-3 bg-red-400 rounded-2xl" href="modules/quanlydanhmuc/xuly.php?action=delete&iddanhmuc=<?php echo $row['id'] ?>">Xoá</a></td>
        <td><a class="p-3 bg-gray-400 rounded-2xl" href="index.php?action=quanlydanhmuc&query=sua&iddanhmuc=<?php echo $row['id'] ?>">Sửa</a></td>
    <?php
    }
    ?>
    <tr>
        <td class="font-semibold h-[80px] w-[50px]" colspan="4"><a class="p-2 font-bold text-gray-700 bg-gray-400 rounded-2xl" href="index.php?action=quanlydanhmuc&query=them">Thêm danh mục</a></td>
    </tr>
</table>