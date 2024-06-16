<div class="main flex">
    <div class="left relative">
        <?php
        include('modules/sidebar/sidebar.php');
        ?>
    </div>
    <div class="right">
        <div class="main_admin">
            <?php
                if(isset($_GET['action']) && $_GET['query']) {
                    $tam = $_GET['action'];
                    $query = $_GET['query'];
                } else {
                    $tam = '';
                    $query = '';
                }
                if($tam == 'quanlytaikhoan' && $query == 'lietke') {
                    include("modules/quanlytaikhoan/lietke.php");
                }
                elseif($tam=='quanlytaikhoan' && $query=='sua'){
                    include("modules/quanlytaikhoan/sua.php");
                }
                elseif($tam=='quanlydanhmuc' && $query=='lietke'){
                    include("modules/quanlydanhmuc/lietke.php");
                }
                elseif ($tam == 'quanlydanhmuc' && $query == 'them') {
                    include("modules/quanlydanhmuc/them.php");
                }
                elseif($tam=='quanlydanhmuc' && $query=='sua'){
                    include("modules/quanlydanhmuc/sua.php");
                }
                elseif($tam=='quanlysanpham' && $query=='lietke'){
                    include("modules/quanlysanpham/lietke.php");
                }
                elseif($tam=='quanlysanpham' && $query=='sua'){
                    include("modules/quanlysanpham/sua.php");
                }
                elseif($tam=='quanlyfeedback' && $query=='lietke'){
                    include("modules/quanlyfeedback/lietke.php");
                }
                
            ?>
        </div>
    </div>
</div>