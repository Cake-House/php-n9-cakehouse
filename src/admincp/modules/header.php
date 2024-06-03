<?php
session_start();
include('config/connect.php');
?>
<div class="header flex flex-col w-full">
  <div class="h-[70px] flex justify-between px-6 header__inner border-2 border-b-[#B5B5B5] shadow-sm shadow-[#B5B5B5]">
    <div class="left flex items-center">
      <img class="logo_header max-w-[200px] max-h-[70px] ml-10 mr-12" src="../images/logo-1.png" alt="Logo" />
    </div>
    <div class="right flex items-center">
        <p>Chào,
          <?php
          if(isset($_SESSION['user_id'])) {
              $user_id = $_SESSION['user_id'];
              $sql = "SELECT fullname FROM user WHERE id = ? LIMIT 1";
              $stmt = mysqli_prepare($conn, $sql);
              mysqli_stmt_bind_param($stmt, "i", $user_id);
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);
              if ($result && mysqli_num_rows($result) > 0) {
                  $row = mysqli_fetch_assoc($result);
                  echo htmlspecialchars($row['fullname']);
              } else {
                  echo "Guest";
              }
              mysqli_stmt_close($stmt);
          } else {
              echo "Guest";
          }
          ?>
        </p>
        <div class="ml-3">
          <i class="fa-solid fa-caret-down" style="color: #91959c;"></i>
        </div>
    </div>
  </div>
</div>