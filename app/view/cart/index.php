<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | TECHSHOP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <?php require_once '../app/component/head.php';?>
    <style>
        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .custom-number-input input:focus {
            outline: none !important;
        }

        .custom-number-input button:focus {
            outline: none !important;
        }
    </style>
</head>
<body>
    <?php require_once '../app/component/nav.php'?>
    <div class="main container flex-row mx-auto my-4">
    <?php
        $server_name = "localhost";
        $user_name = "root";
        $password = "";
        $database = "techshop";
        $user_id = $_SESSION["user_id"];

        $conn = mysqli_connect($server_name, $user_name, $password, $database);
        if (!$conn) {
            echo "Connection failed!";
        }

        $totalPrice = 0;

        $query = "SELECT * FROM `cart`, `product` WHERE productID=id AND userID = '$user_id'";
        if ($query_product = $conn->query($query)){
            if (mysqli_num_rows($query_product) > 0) {
    ?>
        <div class="flex">
            <img src="/techshop/public/img/cart/cart-icon.png" alt="cart-logo">
            <span class="flex align-bottom text-[#1c543c] pt-12">
                <p class="font-serif font-bold text-4xl align-bottom mr-3">Techshop </p> 
                <p class="text-4xl"> | Giỏ hàng</p>
            </span>
        </div>
        <div class="flex align-text-center my-4 bg-[#E2F9EC] h-16 py-5 px-12 text-[1rem] shadow-lg" style="text-align: center;">
            <p class="mr-auto">Sản phẩm</p>
            <p class="w-[8rem]">Đơn giá</p>
            <p class="w-[8rem]">Số lượng</p>
            <p class="w-[8rem]">Số tiền</p>
            <p class="w-[4rem]">Thao tác</p>
        </div>
        <div class="flex-col my-4 bg-[#E2F9EC] h-auto text-[1rem] shadow-lg" style="text-align: center;">
            <div class="py-5 pl-4 pr-12 mb-8">
            <?php
                        while($row = mysqli_fetch_assoc($query_product)){
            ?>
                <div id="<?=$row["productID"]?>" class="product flex mb-8 update-qty" style="align-items: center;">
                    <!-- <input id="default-checkbox" type="checkbox" <?php if ($row["status"] == "checked") echo $row["status"]; ?> class="mr-4 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> -->
                    <img src="<?=$row["image"]?>" alt="image" class="mr-4 ml-7 w-20">
                    <p class="mr-auto w-1/5 text-left"><?=$row["name"]?></p>
                    <p class="w-[8rem] price"><?=number_format($row["price"], 0, '', '.')?></p>
                    <div class="w-[8rem] custom-number-input h-10 w-32">
                        <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                            <button data-action="decrement" class="quantity-button bg-[#E2F9EC] text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                            <span class="m-auto text-2xl font-thin">−</span>
                            </button>
                            <input type="number" class="quantity outline-none focus:outline-none text-center w-full bg-[#E2F9EC] font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" disabled value="<?=$row["quantity"]?>"></input>
                            <button data-action="increment" class="quantity-button bg-[#E2F9EC] text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                            <span class="m-auto text-2xl font-thin">+</span>
                            </button>
                        </div>
                    </div>
                    <div class="w-[8rem]">
                        <input class="w-full total-price text-center" class="w-full bg-transparent border-none" style="border: none; background: transparent;" type="text" value="<?php
                        $total = (int)str_replace('.', '', $row["price"])*(int)$row["quantity"];
                        $totalPrice += $total;
                        echo number_format($total, 0, '', '.') . ' ₫';?>" disabled>
                    </div>
                    <button class="delete-button w-[4rem]"><span class="text-center text-[#266E4F] hover:text-[#113c2a]">Xóa</span></button>
                </div>
                <?php } ?>
            </div>
            <div class="flex bg-[#E2F9EC] h-40 shadow-lg align-middle px-8 text-xl" style="height: 6rem; border: solid grey 1px; align-items: center;">
               <span class="mr-auto">Tổng thanh toán: <span class="text-[#266E4F] text-xl total-payment"> <?php echo number_format($totalPrice, 0, '', '.');?> ₫</span></span>
               <a href="/techshop/public/payment/index"><button class="bg-[#266E4F] hover:bg-[#113c2a] text-white py-2 px-4 rounded">
                Mua hàng
                </button></a>
            </div>
        </div>
        <?php
            }
            else {echo 
                '<div class="flex w-1/2" style="margin: 5% 0 5% 33%;">
                    <div class="h-screen flex flex-col items-center justify-center">
                        <img class="w-32 mb-8" src="/techshop/public/img/cart/no_cart.png" alt="cart-logo">
                        <p class="text-xl mb-8">Không có sản phẩm nào trong giỏ hàng!</p>
                        <a href="/techshop/public/home"><button class="bg-[#266E4F] hover:bg-[#113c2a] text-white py-2 px-4 rounded">
                            Về trang chủ
                        </button></a>
                    </div>
                </div>';}
        }
        $conn->close();
        ?>
    </div>
    <?php require_once '../app/component/footer.php'?>
    <script>
        function totalPrice(id, quantity){
            let product = document.getElementById(id);
            let price = product.querySelector('.price').innerHTML;
            let totalPayment = document.querySelector('.total-payment');
            let totalPrice = totalPayment.innerHTML;
            price = price.replace(/\./g, '');
            totalPrice = totalPrice.replace(/\./g, '');
            const total = parseInt(price) * Math.abs(quantity);
            if (quantity < 0) {
                totalPrice = parseInt(totalPrice) - parseInt(price);
            }
            else {
                totalPrice = parseInt(totalPrice) + parseInt(price);
            }
            const config = { style: 'currency', currency: 'VND', maximumFractionDigits: 9}
            const formated = new Intl.NumberFormat('vi-VN', config).format(total);
            const totalPriceFormated = new Intl.NumberFormat('vi-VN', config).format(totalPrice);

            totalPayment.innerHTML = totalPriceFormated;
            product.querySelector('.total-price').value = formated;
        }
        function decrement(e) {
            const btn = e.target.parentNode.parentElement.querySelector(
            'button[data-action="decrement"]'
            );
            const target = btn.nextElementSibling;
            let value = Number(target.value);
            value--;
            if (value > 0){
                totalPrice(btn.closest('.product').id, -value);
                target.value = value;
            }
        }

        function increment(e) {
            const btn = e.target.parentNode.parentElement.querySelector(
            'button[data-action="decrement"]'
            );
            const target = btn.nextElementSibling;
            let value = Number(target.value);
            value++;

            totalPrice(btn.closest('.product').id, value);
            target.value = value;
        }

        const decrementButtons = document.querySelectorAll(
            `button[data-action="decrement"]`
        );

        const incrementButtons = document.querySelectorAll(
            `button[data-action="increment"]`
        );

        decrementButtons.forEach(btn => {
            btn.addEventListener("click", decrement);
        });

        incrementButtons.forEach(btn => {
            btn.addEventListener("click", increment);
        });

        $(document).on('click', '.quantity-button', function (){
            var product = this.closest('.product');
            var quantity = product.querySelector('.quantity').value;
            var prod_id = product.id;
            console.log(quantity);
            $.ajax({
                method: "POST",
                url: "/techshop/app/view/cart/handleCart.php",
                data: {
                    "user_id": <?=$_SESSION["user_id"]?>,
                    "prod_id": prod_id,
                    "prod_quantity": quantity,
                    "scope": "update"
                },
                success: function (response){
                    if (response == '200') alert('Updated');
                    else alert('Something went wrong');
                }
            })
        });

        $(document).on('click', '.delete-button', function (){
            //Modify number display on Cart
            var cartNumber = document.querySelector('.numberInCart');
            cartNumber.innerText = parseInt(cartNumber.innerText) - 1;
            //handle cart table
            var product = this.closest('.product');
            var quantity = product.querySelector('.quantity').value;
            var allProduct = product.closest('.main');
            var prod_id = product.id;
            totalPrice(prod_id, -quantity);
            $.ajax({
                method: "POST",
                url: "/techshop/app/view/cart/handleCart.php",
                data: {
                    "user_id": <?=$_SESSION["user_id"]?>,
                    "prod_id": prod_id,
                    "scope": "delete"
                },
                success: function (response){
                    if (response == '200') {
                        alert('Deleted');
                    }
                    else alert('Something went wrong');
                }
            })
            product.remove();
            var remainProduct = allProduct.querySelector('.product');
            if (!allProduct.contains(remainProduct))
            {
                $.ajax({
                    url: '/techshop/app/view/cart/no_product.php',
                    type: 'POST',
                    success: function(response) {
                        $(".main").html(response);
                    },
                    error: function(error) {
                        console.log('Error:', error);
                    }
                });
            }
        });

        // $(document).ready(function(){
        //     var mainContent = $('.main');
        //     $.ajax({
        //         method: "POST",
        //         url: "/techshop/app/view/cart/handleCart.php",
        //         data: {
        //             "user_id": <?=$_SESSION["user_id"]?>,
        //             "scope": "checkEmptyCart"
        //         },
        //         success: function(response){
        //             mainContent[0].innerHTML = response;
        //         }
        //     });

        // });
    </script>
</body>
</html>