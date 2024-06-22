<script>
        function confirmDelete(id) {
            if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này không?")) {
                window.location.href = "modules/quanlytaikhoan/xuly.php?action=delete&idtaikhoan=" + id;
            }
        }
</script>
<table class="mt-5 ml-5 h-[300px]">
    <caption class="text-[30px] font-medium mb-5">Quản lý tài khoản</caption>
    <tr class="border-2">
        <th class="w-[50px] text-center border-2">ID</th>
        <th class="w-[160px] text-center border-2">FullName</th>
        <th class="w-[100px] text-center border-2">Avatar</th>
        <th class="w-[100px] text-center border-2">Email</th>
        <th class="w-[50px] text-center border-2">Phone</th>
        <th class="w-[110px] text-center border-2">Address</th>
        <th class="w-[90px] text-center border-2">Password</th>
        <th class="w-[50px] text-center border-2">RoleName</th>
        <th colspan=2 class="w-[100px] text-center border-2">Manager</th>
    </tr>
    <?php
        $sql_lietke_taikhoan = "SELECT user.id, user.fullname, user.avatar, user.email, user.phone, user.address, user.password, role.name FROM user INNER JOIN role ON user.role_id = role.id";
        $query_lietke_taikhoan = mysqli_query($conn, $sql_lietke_taikhoan);
    while($row = mysqli_fetch_array($query_lietke_taikhoan)) {
        ?>
    <tr class="border-2">
        <td class="h-[100px] w-[50px] text-center border-2"><?php echo $row['id'] ?></td>
        <td class="h-[100px] w-[160px] text-center border-2"><?php echo $row['fullname'] ?></td>
        <td class="h-[100px] w-[100px] text-center border-2"><img src="../images/<?php echo $row['avatar'] ?>" alt="Avatar" width="100px"></td>
        <!-- modules/quanlytaikhoan/uploads/ -->
        <td class="h-[100px] w-[90px] text-center border-2"><?php echo $row['email'] ?></td>
        <td class="h-[100px] w-[90px] text-center border-2"><?php echo $row['phone'] ?></td>
        <td class="h-[100px] w-[110px] text-center border-2"><?php echo $row['address'] ?></td>
        <td class="h-[100px] w-[90px] text-center border-2"><?php echo $row['password'] ?></td>
        <td class="h-[100px] w-[90px] text-center border-2"><?php echo $row['name'] ?></td>
        <td><a class="p-3 bg-red-400 rounded-2xl" href="javascript:void(0);" onclick="confirmDelete(<?php echo $row['id'] ?>)">Xoá</a></td>
        <td><a class="p-3 bg-gray-400 rounded-2xl" href="index.php?action=quanlytaikhoan&query=sua&idtaikhoan=<?php echo $row['id'] ?>">Sửa</a></td>
    <?php
    }
    ?>
</table>
