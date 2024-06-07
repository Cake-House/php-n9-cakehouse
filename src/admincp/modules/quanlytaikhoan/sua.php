<?php
if (isset($_GET['idtaikhoan'])) {
    $idtaikhoan = $_GET['idtaikhoan'];
    $sql_sua_tk = "SELECT * FROM user WHERE id = '$idtaikhoan' LIMIT 1";
    $sql_sua_taikhoan = mysqli_query($conn, $sql_sua_tk);

    if ($sql_sua_taikhoan && mysqli_num_rows($sql_sua_taikhoan) > 0) {
        $row = mysqli_fetch_array($sql_sua_taikhoan);
    } else {
        echo "User not found.";
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}
?>

<table border=1>
    <caption>Sửa tài khoản</caption>
    <form
        action="modules/quanlytaikhoan/xuly.php?idtaikhoan=<?php echo $row['id'] ?>"
        method="post" enctype="multipart/form-data">
        <tr>
            <td><label for="">Fullname</label></td>
            <td><input type="text" name="fullname"
                    value="<?php echo $row['fullname'] ?>">
            </td>
        </tr>
        <tr>
            <td><label for="">Avatar</label></td>
            <td>
                <img src="modules/quanlytaikhoan/uploads/<?php echo $row['avatar'] ?>"
                    width="100px" alt="Avatar">
                <input type="file" name="hinhanh">
            </td>
        </tr>
        <tr>
            <td><label for="">Email</label></td>
            <td><input type="text" name="email"
                    value="<?php echo $row['email'] ?>">
            </td>
        </tr>
        <tr>
            <td><label for="">Phone</label></td>
            <td><input type="text" name="phone"
                    value="<?php echo $row['phone'] ?>">
            </td>
        </tr>
        <tr>
            <td><label for="">Address</label></td>
            <td><input type="text" name="address"
                    value="<?php echo $row['address'] ?>">
            </td>
        </tr>
        <tr>
            <td><label for="">Password</label></td>
            <td><input type="text" name="password" value="<?php echo $row['password'] ?>"></td>
        </tr>
        <tr>
            <td><label for="danhmuc_role">Role</label></td>
            <td>
            <select name="danhmuc_role">
    <?php
    $sql_danhmuc = "SELECT * FROM role";
    $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
        if ($row_danhmuc['id'] == $row['role_id']) {
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
            <td colspan="2"><input type="submit" name="suataikhoan" value="Sửa tài khoản"></td>
        </tr>
    </form>
</table>