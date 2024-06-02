<div id="main">
  <div class="main__content">
    <?php
      if(isset($_GET['page'])){
        $page = $_GET['page'];
      }
      else{
        $page = '';
      }

      if(isset($_GET['search_key'])){
        $check = true;
      }
      else{
        $check = false;
      }

      if($page=='about'){
        include("pages/main/about.php");
      }
      else if($page=='home'){
        include("pages/main/index.php");
      }
      else if($page=='contact'){
        include("pages/main/contact.php");
      }
      else if($check == true){
        include("pages/main/search.php");
      }
      else {
        include("pages/main/index.php");
      }
    ?>
  </div>
</div>