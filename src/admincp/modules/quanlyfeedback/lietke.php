<table border=1 class="mt-5 ml-5 h-[100px]">
    <caption class="text-[30px] font-medium mb-5">Quản lý Feedback</caption>
    <tr class="border-2">
        <th class="w-[90px] text-center border-2">ID</th>
        <th class="w-[150px] text-center border-2">Fullname</th>
        <th class="w-[150px] text-center border-2">Email</th>
        <th class="w-[100px] text-center border-2">Phone</th>
        <th class="w-[180px] text-center border-2">Note</th>
        <th class="w-[120px] text-center border-2">Created_at</th>
        <th class="w-[120px] text-center border-2">Updated_at</th>
    </tr>
    <?php
        $sql_lietke_feed = "SELECT feedback.id, feedback.fullname ,feedback.email,feedback.phone ,feedback.note,feedback.created_at,feedback.updated_at FROM feedback";
    $query_lietke_feed = mysqli_query($conn, $sql_lietke_feed);
    while($row = mysqli_fetch_array($query_lietke_feed)) {
        ?>
    <tr class="border-2">
        <td class="h-[100px] w-[90px] text-center border-2">
            <?php echo $row['id'] ?></td>
        <td class="h-[100px] w-[90px] text-center border-2">
            <?php echo $row['fullname'] ?></td>
        <td class="h-[100px] w-[90px] text-center border-2">
            <?php echo $row['email'] ?></td>
        <td class="h-[100px] w-[90px] text-center border-2">
            <?php echo $row['phone'] ?></td>
        <td class="h-[100px] w-[90px] text-justify border-2">
            <?php echo $row['note'] ?></td>
        <td class="h-[100px] w-[90px] text-center border-2">
            <?php echo $row['created_at'] ?></td>
        <td class="h-[100px] w-[90px] text-center border-2">
            <?php echo $row['updated_at'] ?></td>
        <?php
    }
    ?>
</table>