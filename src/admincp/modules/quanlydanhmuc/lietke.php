
<table border=1>
    <caption>Quản lý danh mục</caption>
    <tr>
        <th>ID_CATEGORIES</th>
        <th>NAME_CATE</th>
        <th>Manager</th>
    </tr>
    <?php
        $sql_lietke_cate = "SELECT * FROM category";
        $query_lietke_cate = mysqli_query($conn, $sql_lietke_cate);
    while($row = mysqli_fetch_array($query_lietke_cate)) {
        ?>
    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>

        <td><a href="modules/quanlydanhmuc/xuly.php?action=delete&iddanhmuc=<?php echo $row['id'] ?>">Xoá</a></td>
        <td><a href="index.php?action=quanlydanhmuc&query=sua&iddanhmuc=<?php echo $row['id'] ?>">Sửa</a></td>
    <?php
    }
    ?>
    <tr>
        <td><a href="index.php?action=quanlydanhmuc&query=them">Thêm danh mục</a></td>
    </tr>
</table>