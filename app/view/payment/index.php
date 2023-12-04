<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment | TECHSHOP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <?php require_once '../app/component/head.php';?>
</head>
<body>
    <?php require_once '../app/component/nav.php'?>
    <div class="main container flex-row mx-auto my-4">
        <div class="flex">
            <img src="/techshop/public/img/cart/cart-icon.png" alt="cart-logo">
            <span class="flex align-bottom text-[#1c543c] pt-12">
                <p class="font-serif font-bold text-4xl align-bottom mr-3">Techshop </p> 
                <p class="text-4xl"> | Thanh toán</p>
            </span>
        </div>
        <div class="flex-col my-4 bg-[#E2F9EC] py-2 px-4 text-[1rem] shadow-lg align-middle">
            <div class="flex items-center mb-4">
                <img src="/techshop/public/img/payment/location-icon.png" alt="icon" class="w-12">
                <span class="text-[#1C543C] text-xl" style="color: #1C543C;">Địa chỉ nhận hàng</span>
            </div>
            <div class="px-12">
                <div class="flex mb-2">
                    <p class="mr-auto">Họ và tên: </p>
                    <p>Số điện thoại:</p>
                </div>
                <p>Địa chỉ:</p>
            </div>
        </div>
        <div class="flex-col my-4 bg-[#E2F9EC] h-auto text-[1rem] shadow-lg" style="text-align: center;">
            <div class="py-5 pl-4 pr-12 mb-8 ml-7">
                <div class="product-title flex mb-8" style="align-items: center;">
                    <p class="mr-auto text-xl">Sản phẩm</p>
                    <p class="w-[8rem]" style="color: #3DA377;">Đơn giá</p>
                    <p class="w-[8rem]" style="color: #3DA377;">Số lượng</p>
                    <p class="w-[8rem]" style="color: #3DA377;">Thành tiền</p>
                </div>
                <?php
                    $server_name = "localhost";
                    $user_name = "root";
                    $password = "";
                    $database = "techshop";
                                    
                    $conn = mysqli_connect($server_name, $user_name, $password, $database);
                    if (!$conn) {
                        echo "Connection failed!";
                    }
                    $user_id = $_SESSION["user_id"];
                    $totalPrice = 0;
                    $deliveryFee = 30000;

                    $query = "SELECT * FROM `cart`, `product` WHERE productID=id AND userID = '$user_id'";
                    if ($query_product = $conn->query($query)){
                        while($row = mysqli_fetch_assoc($query_product)){
                ?>
                <div id="<?=$row["productID"]?>" class="product flex mb-8 update-qty" style="align-items: center;">
                    <!-- <input id="default-checkbox" type="checkbox" <?php if ($row["status"] == "checked") echo $row["status"]; ?> class="mr-4 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> -->
                    <img src="<?=$row["image"]?>" alt="image" class="mr-4 w-20">
                    <p class="mr-auto"><?=$row["name"]?></p>
                    <p class="w-[8rem] price"><?=$row["price"]?></p>
                    <div class="w-[8rem] custom-number-input h-10 w-32">
                        <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                            <input type="number" class="quantity outline-none focus:outline-none text-center w-full bg-[#E2F9EC] font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none bg-transparent border-none" name="custom-input-number" disabled value="<?=$row["quantity"]?>"></input>
                        </div>
                    </div>
                    <div class="w-[8rem]">
                        <input class="w-full total-price text-center" class="w-full bg-transparent border-none" style="border: none; background: transparent;" type="text" value="<?php
                        $total = (int)str_replace('.', '', $row["price"])*(int)$row["quantity"];
                        $totalPrice += $total;
                        echo number_format($total, 0, '', '.') . ' ₫';?>" disabled>
                    </div>
                </div>
                <?php
                    }
                }
                $conn->close();
                ?>
            </div>
        </div>
        <div class="flex-col bg-[#E2F9EC] h-auto text-[1rem] shadow-lg">
            <div class="flex py-5 pl-11 pr-12 items-center border-b border-black">
                <img src="/techshop/public/img/payment/cash-icon.png" alt="cash-logo" class="mr-4">
                <span class="text-xl mr-auto">Phương thức thanh toán</span>
                <div class="flex ml-2 mt-2">
                    <button type="button" class="flex text-gray-900 bg-[#B4EFD0] hover:bg-[#55dca2] border border-[#266e4f] focus:ring-4 focus:outline-none focus:ring-[#1C543C] font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#266e4f] me-2 mb-2">
                    <img src="https://cdn-icons-png.flaticon.com/512/5229/5229335.png" alt="icon" class="w-6 mr-2">
                    Thanh toán khi nhận hàng
                    </button>
                </div>
                <div class="flex ml-2 mt-2">
                    <button type="button" class="flex text-gray-900 bg-[#B4EFD0] hover:bg-[#55dca2] border border-[#266e4f] focus:ring-4 focus:outline-none focus:ring-[#1C543C] font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#266e4f] me-2 mb-2">
                    <img src="https://cdn.iconscout.com/icon/free/png-256/free-mastercard-3521564-2944982.png" alt="icon" class="w-6 mr-2">
                    MasterCard
                    </button>
                </div>
                <div class="flex ml-2 mt-2">
                    <button type="button" class="flex text-gray-900 bg-[#B4EFD0] hover:bg-[#55dca2] border border-[#266e4f] focus:ring-4 focus:outline-none focus:ring-[#1C543C] font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#266e4f] me-2 mb-2">
                    <img src="https://developers.momo.vn/v3/assets/images/circle-logo-custom-16cb24e3ed26349c467cb2e932000fde.png" alt="icon" class="w-6 mr-2">
                    Momo
                    </button>
                </div>
            </div>
            <div class="flex p-4" style="background-color: #B4EFD0;">
                <div class="mr-auto"></div>
                <div class="flex text-[#1C543C] text-xl">
                    <div class="mr-4">
                        <p>Tổng tiền sản phẩm:</p>
                        <p>Phí vận chuyển:</p>
                        <p>Tổng thanh toán:</p>
                    </div>
                    <div class="text-right">
                        <p><?php echo number_format($totalPrice, 0, '', '.'); ?> ₫</p>
                        <p><?php echo number_format($deliveryFee, 0, '', '.'); ?> ₫</p>
                        <p class="mb-4 text-2xl font-semibold"><?php echo number_format($totalPrice + $deliveryFee, 0, '', '.'); ?> ₫</p>
                        <button class="bg-[#266E4F] hover:bg-[#113c2a] text-white py-2 px-4 rounded">
                        Đặt hàng
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    </script>
    <?php require_once '../app/component/footer.php'?>
</body>
</html>