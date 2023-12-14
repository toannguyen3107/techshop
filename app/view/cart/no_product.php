<?php
    if (!isset($_POST["scope"])){
?>
<div class="flex w-1/2" style="margin: 5% 0 5% 33%;">
    <div class="h-screen flex flex-col items-center justify-center">
        <img class="w-32 mb-8" src="/techshop/public/img/cart/no_cart.png" alt="cart-logo">
        <p class="text-xl mb-8">Không có sản phẩm nào trong giỏ hàng!</p>
        <a href="/techshop/public/home"><button class="bg-[#266E4F] hover:bg-[#113c2a] text-white py-2 px-4 rounded">
         Về trang chủ
        </button></a>
    </div>
</div>
<?php
    }
    else {
?>
<div class="flex w-1/2" style="margin: 5% 0 5% 33%;">
    <div class="h-screen flex flex-col items-center justify-center">
        <img class="w-32 mb-8" src="https://icons.veryicon.com/png/o/miscellaneous/8atour/success-35.png" alt="cart-logo">
        <p class="text-xl mb-8">Đặt hàng thành công!</p>
        <a href="/techshop/public/home"><button type="button" class="bg-[#266E4F] hover:bg-[#113c2a] text-white py-2 px-4 rounded">
         Về trang chủ
        </button></a>
    </div>
</div>
<?php
    }
?>