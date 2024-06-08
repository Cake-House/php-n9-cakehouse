
<table border=1 class="mt-5 ml-5 h-[100px]">
    <caption class="text-[30px] font-medium mb-5">Quản lý Feedback</caption>
    <tr>
        <th>ID</th>
        <th>Fullname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Note</th>
        <th>Created_at</th>
        <th>Updated_at</th>
    </tr>
    <?php
        $sql_lietke_feed = "SELECT feedback.id, feedback.fullname ,feedback.email,feedback.phone ,feedback.note,feedback.created_at,feedback.updated_at FROM feedback";
        $query_lietke_feed = mysqli_query($conn, $sql_lietke_feed);
    while($row = mysqli_fetch_array($query_lietke_feed)) {
        ?>
    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['fullname'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['note'] ?></td>
        <td><?php echo $row['created_at'] ?></td>
        <td><?php echo $row['updated_at'] ?></td>
    <?php
    }
    ?>
</table>