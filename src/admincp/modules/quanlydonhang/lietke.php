<script>
        function confirmDelete(id) {
            if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này không?")) {
                window.location.href = "modules/quanlytaikhoan/xuly.php?action=delete&idtaikhoan=" + id;
            }
        }
</script>
<table class="mt-5 ml-5 h-[300px]">
    <caption class="text-[30px] font-medium mb-5">Quản lý đơn hàng</caption>
    <tr class="border-2">
        <th class="w-[60px] text-center border-2">ID</th>
        <th class="w-[90px] text-center border-2">FullName</th>
        <th class="w-[50px] text-center border-2">Phone</th>
        <th class="w-[110px] text-center border-2">Address</th>
        <th class="w-[90px] text-center border-2">Content</th>
        <th class="w-[50px] text-center border-2">Order date</th>
        <th class="w-[50px] text-center border-2">Status</th>
        <th class="w-[50px] text-center border-2">Total</th>
    </tr>
    <?php
        $sql_lietke_hoadon = "SELECT * FROM orders ";
        $query_lietke_hoadon = mysqli_query($conn, $sql_lietke_hoadon);
        while($row = mysqli_fetch_array($query_lietke_hoadon)) {
    ?>
    <tr class="border-2">
        <td class="h-[100px] w-[60px] text-center border-2"><?php echo $row['id'] ?></td>
        <td class="h-[100px] w-[200px] text-center border-2"><?php echo $row['fullname'] ?></td>
        <td class="h-[100px] w-[110px] text-center border-2"><?php echo $row['phone'] ?></td>
        <td class="h-[100px] w-[240px] text-center border-2"><?php echo $row['address'] ?></td>
        <td class="h-[100px] w-[240px] text-center border-2"><?php echo $row['content'] ?></td>
        <td class="h-[100px] w-[100px] text-center border-2"><?php echo $row['order_date'] ?></td>
        <td class="h-[100px] w-[120px] text-center border-2"><?php echo $row['status'] ?></td>
        <td class="h-[100px] w-[160px] text-center border-2"><?php echo $row['total'] ?></td>
    <?php
    }
    ?>
</table>
