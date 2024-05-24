    
<div class="main w-full">
  
  <!-- Bento cake -->
  <?php
    if(isset($_GET['quanly'])){
      $bientam=$_GET['quanly'];

  }else{
      $bientam="";
  }
  if ($bientam=='danhmuc'){
      include("danhMuc.php");
  }else{
  ?>
  <div class="home__container py-[45px]">
    <div class="flex justify-center items-center mb-[30px]">
      <h2 >
        Bento cake
        <img src="https://origato.com.vn/wp-content/themes/3btheme/lib/images/line.png" alt="">
      </h2>
    </div>
    <div>
      <ul class="product__list flex justify-center gap-[30px]">
        <li>
        <div class="text-center mb-[30px]">
          <img class="w-[255px] h-[255px]" src="https://origato.com.vn/wp-content/uploads/2024/05/z5440060426402_ec1ee088a47a158cd76195c5f913c784-Copy-300x300.jpg" alt="">
          <p class="uppercase font-semibold min-h-[50px] my-2">pana cotta mâm xôi</p>
          <p>29.000đ</p>
          <p><i class="fa-solid fa-cart-shopping text-red-600"></i></p>
        </div>
        </li>
        <li>
          <div class="text-center mb-[30px]">
            <img class="w-[255px] h-[255px]" src="https://origato.com.vn/wp-content/uploads/2024/05/IMG_3890-Copy-300x300.jpg" alt="">
            <p class="uppercase font-semibold min-h-[50px] my-2">pana cotta táo xanh</p>
            <p>29.000đ</p>
            <p><i class="fa-solid fa-cart-shopping text-red-600"></i></p>
          </div>
        </li>
        <li>
          <div class="text-center mb-[30px]">
            <img class="w-[255px] h-[255px]" src="https://origato.com.vn/wp-content/uploads/2024/05/IMG_3887-Copy-300x300.jpg" alt="">
            <p class="uppercase font-semibold min-h-[50px] my-2">pana cotta chanh leo</p>
            <p>29.000đ</p>
            <p><i class="fa-solid fa-cart-shopping text-red-600"></i></p>
          </div>
        </li>
        <li>
          <div class="text-center mb-[30px]">
            <img class="w-[255px] h-[255px]" src="https://origato.com.vn/wp-content/uploads/2024/05/IMG_3893-Copy-300x300.jpg" alt="">
            <p class="uppercase font-semibold min-h-[50px] my-2">pana cotta xoài</p>
            <p>29.000đ</p>
            <p><i class="fa-solid fa-cart-shopping text-red-600"></i></p>
          </div>
        </li>
      </ul>
    </div>
    <div class="flex justify-center items-center p-5">
      <div class="bg-red-600 py-2 w-[100px] text-white rounded-lg text-center">
        <a href="">XEM THÊM</a>
      </div>
    </div>
  </div>
  <!-- bánh sự kiện -->
  <div class="home__container py-[45px] bg-[#fff8ed]">
    <div class="flex justify-center items-center mb-[30px]">
      <h2 >
        Bánh sự kiện
        <img src="https://origato.com.vn/wp-content/themes/3btheme/lib/images/line.png" alt="">
      </h2>
    </div>
    <div>
      <ul class="product__list flex justify-center gap-[30px]">
        <li>
          <div class=" text-center mb-[30px]">
            <img class="w-[255px] h-[255px]" src="https://origato.com.vn/wp-content/uploads/2024/05/z5440060426402_ec1ee088a47a158cd76195c5f913c784-Copy-300x300.jpg" alt="">
            <p class="uppercase font-semibold min-h-[50px] my-2">pana cotta mâm xôi</p>
            <p>29.000đ</p>
            <p><i class="fa-solid fa-cart-shopping text-red-600"></i></p>
          </div>
        </li>
        <li>
          <div class="text-center mb-[30px]">
            <img class="w-[255px] h-[255px]" src="https://origato.com.vn/wp-content/uploads/2024/05/IMG_3890-Copy-300x300.jpg" alt="">
            <p class="uppercase font-semibold min-h-[50px] my-2">pana cotta táo xanh</p>
            <p>29.000đ</p>
            <p><i class="fa-solid fa-cart-shopping text-red-600"></i></p>
          </div>
        </li>
        <li>
          <div class="text-center mb-[30px]">
            <img class="w-[255px] h-[255px]" src="https://origato.com.vn/wp-content/uploads/2024/05/IMG_3887-Copy-300x300.jpg" alt="">
            <p class="uppercase font-semibold min-h-[50px] my-2">pana cotta chanh leo</p>
            <p>29.000đ</p>
            <p><i class="fa-solid fa-cart-shopping text-red-600"></i></p>
          </div>
        </li>
        <li>
          <div class="text-center mb-[30px]">
            <img class="w-[255px] h-[255px]" src="https://origato.com.vn/wp-content/uploads/2024/05/IMG_3893-Copy-300x300.jpg" alt="">
            <p class="uppercase font-semibold min-h-[50px] my-2">pana cotta xoài</p>
            <p>29.000đ</p>
            <p><i class="fa-solid fa-cart-shopping text-red-600"></i></p>
          </div>
        </li>
      </ul>
    </div>
    <div class="flex justify-center items-center p-5">
      <div class="bg-red-600 py-2 w-[100px] text-white rounded-lg text-center">
        <a href="">XEM THÊM</a>
      </div>
    </div>
  </div>
  <!-- pana cotta -->
  <div class="home__container py-[45px]">
    <div class="flex justify-center items-center mb-[30px]">
      <h2 >
        Pana cotta
        <img src="https://origato.com.vn/wp-content/themes/3btheme/lib/images/line.png" alt="">
      </h2>
    </div>
    <div>
      <ul class="product__list flex justify-center gap-[30px]">
        <li>
          <div class="text-center mb-[30px]">
            <img class="w-[255px] h-[255px]" src="https://origato.com.vn/wp-content/uploads/2024/05/z5440060426402_ec1ee088a47a158cd76195c5f913c784-Copy-300x300.jpg" alt="">
            <p class="uppercase font-semibold min-h-[50px] my-2">pana cotta mâm xôi</p>
            <p>29.000đ</p>
            <p><i class="fa-solid fa-cart-shopping text-red-600"></i></p>
          </div>
        </li>
        <li>
          <div class="text-center mb-[30px]">
            <img class="w-[255px] h-[255px]" src="https://origato.com.vn/wp-content/uploads/2024/05/IMG_3890-Copy-300x300.jpg" alt="">
            <p class="uppercase font-semibold min-h-[50px] my-2">pana cotta táo xanh</p>
            <p>29.000đ</p>
            <p><i class="fa-solid fa-cart-shopping text-red-600"></i></p>
          </div>
        </li>
        <li>
          <div class="text-center mb-[30px]">
            <img class="w-[255px] h-[255px]" src="https://origato.com.vn/wp-content/uploads/2024/05/IMG_3887-Copy-300x300.jpg" alt="">
            <p class="uppercase font-semibold min-h-[50px] my-2">pana cotta chanh leo</p>
            <p>29.000đ</p>
            <p><i class="fa-solid fa-cart-shopping text-red-600"></i></p>
          </div>
        </li>
        <li>
          <div class="text-center mb-[30px]">
            <img class="w-[255px] h-[255px]" src="https://origato.com.vn/wp-content/uploads/2024/05/IMG_3893-Copy-300x300.jpg" alt="">
            <p class="uppercase font-semibold min-h-[50px] my-2">pana cotta xoài</p>
            <p>29.000đ</p>
            <p><i class="fa-solid fa-cart-shopping text-red-600"></i></p>
          </div>
        </li>
      </ul>
    </div>
    <div class="flex justify-center items-center p-5">
      <div class="bg-red-600 py-2 w-[100px] text-white rounded-lg text-center">
        <a href="">XEM THÊM</a>
      </div>
    </div>
  </div>
  <!-- mochi -->
  <div class="home__container py-[45px] bg-[#fff8ed]">
    <div class="flex justify-center items-center mb-[30px]">
      <h2 >
        Bánh mochi
        <img src="https://origato.com.vn/wp-content/themes/3btheme/lib/images/line.png" alt="">
      </h2>
    </div>
    <div>
      <ul class="product__list flex justify-center gap-[30px]">
        <li>
          <div class="text-center mb-[30px]">
            <img class="w-[255px] h-[255px]" src="https://origato.com.vn/wp-content/uploads/2024/05/z5440060426402_ec1ee088a47a158cd76195c5f913c784-Copy-300x300.jpg" alt="">
            <p class="uppercase font-semibold min-h-[50px] my-2">pana cotta mâm xôi</p>
            <p>29.000đ</p>
            <p><i class="fa-solid fa-cart-shopping text-red-600"></i></p>
          </div>
        </li>
        <li>
          <div class="text-center mb-[30px]">
            <img class="w-[255px] h-[255px]" src="https://origato.com.vn/wp-content/uploads/2024/05/IMG_3890-Copy-300x300.jpg" alt="">
            <p class="uppercase font-semibold min-h-[50px] my-2">pana cotta táo xanh</p>
            <p>29.000đ</p>
            <p><i class="fa-solid fa-cart-shopping text-red-600"></i></p>
          </div>
        </li>
        <li>
          <div class="text-center mb-[30px]">
            <img class="w-[255px] h-[255px]" src="https://origato.com.vn/wp-content/uploads/2024/05/IMG_3887-Copy-300x300.jpg" alt="">
            <p class="uppercase font-semibold min-h-[50px] my-2">pana cotta chanh leo</p>
            <p>29.000đ</p>
            <p><i class="fa-solid fa-cart-shopping text-red-600"></i></p>
          </div>
        </li>
        <li>
          <div class="text-center mb-[30px]">
            <img class="w-[255px] h-[255px]" src="https://origato.com.vn/wp-content/uploads/2024/05/IMG_3893-Copy-300x300.jpg" alt="">
            <p class="uppercase font-semibold min-h-[50px] my-2">pana cotta xoài</p>
            <p>29.000đ</p>
            <p><i class="fa-solid fa-cart-shopping text-red-600"></i></p>
          </div>
        </li>
      </ul>
    </div>
    <div class="flex justify-center items-center p-5">
      <div class="bg-red-600 py-2 w-[100px] text-white rounded-lg text-center">
        <a href="">XEM THÊM</a>
      </div>
    </div>
  </div>
  <?php
  }
  ?>
</div>