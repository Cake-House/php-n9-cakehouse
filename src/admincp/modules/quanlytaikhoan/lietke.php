
<table border=1 class="mt-5 ml-5 h-[100px]">
    <caption class="text-[30px] font-medium mb-5">Quản lý tài khoản</caption>
    <tr class="mb-5">
        <th>ID</th>
        <th>FullName</th>
        <th>Avatar</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Password</th>
        <th>RoleName</th>
        <th>Manager</th>
    </tr>
    <?php
        $sql_lietke_taikhoan = "SELECT user.id, user.fullname, user.avatar, user.email, user.phone, user.address, user.password, role.name FROM user INNER JOIN role ON user.role_id = role.id";
    $query_lietke_taikhoan = mysqli_query($conn, $sql_lietke_taikhoan);
    while($row = mysqli_fetch_array($query_lietke_taikhoan)) {
        ?>
    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['fullname'] ?></td>
        <td><img src="modules/quanlytaikhoan/uploads/<?php echo $row['avatar'] ?>" alt="Avatar" width="100px"></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td><?php echo $row['password'] ?></td>
        <td><?php echo $row['name'] ?></td>

        <td><a class="p-3 bg-red-400 rounded-2xl" href="modules/quanlytaikhoan/xuly.php?action=delete&idtaikhoan=<?php echo $row['id'] ?>">Xoá</a></td>
        <td><a class="p-3 bg-gray-400 rounded-2xl" href="index.php?action=quanlytaikhoan&query=sua&idtaikhoan=<?php echo $row['id'] ?>">Sửa</a></td>

    <?php
    }
    ?>
</table>