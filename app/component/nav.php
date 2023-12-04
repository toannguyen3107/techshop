<?php
    if(!isset($_SESSION['login'])){
?>
<nav class="sticky top-0 z-50 grid grid-col-4 md:grid-cols-6 lg:grid-cols-12 p-3 bg-[#49BF8C] gap-3">
    <div class="col-span-1 flex flex-row items-center justify-center"><a href="/techshop"><img src="/techshop/public/img/large.png" alt="Logo techshop" class="h-[72px] w-[72px] rounded-full"></a>
            </div>     
        <div class="col-span-1 my-auto">
            <a href="#" class=" flex flex-row gap-3 p-1 items-center hover:bg-[#fff0d4] hover:rounded-lg justify-center hover:border-2 hover:border-[#111]">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM144 448c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16s-7.2-16-16-16H160c-8.8 0-16 7.2-16 16zM304 64H80V384H304V64z"/></svg>
                <span class="text-base font-semibold">Điện thoại</span>
            </a>
        </div>
        <div class="col-span-1 my-auto">
            <a href="#" class=" flex flex-row gap-3 p-1 items-center hover:bg-[#fff0d4] hover:rounded-lg justify-center hover:border-2 hover:border-[#111]">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><path d="M128 32C92.7 32 64 60.7 64 96V352h64V96H512V352h64V96c0-35.3-28.7-64-64-64H128zM19.2 384C8.6 384 0 392.6 0 403.2C0 445.6 34.4 480 76.8 480H563.2c42.4 0 76.8-34.4 76.8-76.8c0-10.6-8.6-19.2-19.2-19.2H19.2z"/></svg>
                <span class="text-base font-semibold">Laptop</span>
            </a>
        </div>
        <div class="col-span-1 my-auto">
            <a href="#" class="flex flex-row gap-3 p-1 items-center hover:bg-[#fff0d4] hover:rounded-lg justify-center hover:border-2 hover:border-[#111]">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M0 64C0 28.7 28.7 0 64 0H384c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zM256 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM384 64H64V384H384V64z"/></svg>
                <span class="text-base font-semibold">Tablet</span>
            </a>
        </div>
        <div class="col-span-1 my-auto">
            <a href="#" class="flex flex-row gap-3 p-1 items-center hover:bg-[#fff0d4] hover:rounded-lg justify-center hover:border-2 hover:border-[#111]">
                <span class="text-base font-semibold">Khác</span>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><style>svg{fill:#162641}</style><path d="M384 480c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0zM224 352c-6.7 0-13-2.8-17.6-7.7l-104-112c-6.5-7-8.2-17.2-4.4-25.9s12.5-14.4 22-14.4l208 0c9.5 0 18.2 5.7 22 14.4s2.1 18.9-4.4 25.9l-104 112c-4.5 4.9-10.9 7.7-17.6 7.7z"/></svg>
            </a>
        </div>
        <!-- <span class="my-auto text-4xl">|</span> -->
        <div class="col-span-1 my-auto text-center mx-auto">
            <a href="/techshop/public/news/index" class="flex flex-col gap-3 p-1 items-center hover:bg-[#fff0d4] hover:rounded-lg justify-center hover:border-2 hover:border-[#111]">
                <p class="font-semibold">Tin tức</p>
            </a>
        </div>
        <!-- <span class="my-auto text-4xl">|</span> -->
        <div class="col-span-2 flex justify-center my-auto">
            <a href="/techshop/public/login/index" class="w-4/5 flex flex-row justify-center items-center gap-[1rem] bg-[#DCCF55] hover:bg-[#dcad11] p-[1rem] rounded-lg border-2 border-[#111] text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
            <p>Đăng nhập</p>
            </a>
        </div>
        <div class="col-span-2 flex justify-center my-auto">
            <a href="/techshop/public/cart/index" class="w-4/5 flex flex-row justify-center items-center gap-[1rem] bg-[#DCCF55] hover:bg-[#dcad11] p-[1rem] rounded-lg border-2 border-[#111] text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
            <p>Đơn hàng</p>
            </a>
        </div>
        <!-- <span class="my-auto text-4xl">|</span> -->
        <div class="col-span-2 flex flex-row justify-end items-center">
            <div class="relative mr-5 w-[100%]">
                <input type="text" placeholder="Bạn muốn mua gì?" class=" w-[100%] p-[0.5rem] border-2 border-[#111] rounded-full">
                <div  class="absolute right-[0.8rem] bottom-[0.8rem]">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                </div>
            </div>
        </div>

</nav>
<?php } else { ?>
    <nav class="sticky top-0 z-50 grid grid-col-4 md:grid-cols-6 lg:grid-cols-12 p-3 bg-[#49BF8C] gap-3">
        <div class="col-span-1 flex flex-row items-center justify-center"><a href="/techshop"><img src="/techshop/public/img/large.png" alt="Logo techshop" class="h-[72px] w-[72px] rounded-full"></a>
        </div>    
        <div class="col-span-1 my-auto">
            <a href="#" class=" flex flex-row gap-3 p-1 items-center hover:bg-[#fff0d4] hover:rounded-lg justify-center hover:border-2 hover:border-[#111]">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM144 448c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16s-7.2-16-16-16H160c-8.8 0-16 7.2-16 16zM304 64H80V384H304V64z"/></svg>
                <span class="text-base font-semibold">Điện thoại</span>
            </a>
        </div>
        <div class="col-span-1 my-auto">
            <a href="#" class=" flex flex-row gap-3 p-1 items-center hover:bg-[#fff0d4] hover:rounded-lg justify-center hover:border-2 hover:border-[#111]">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><path d="M128 32C92.7 32 64 60.7 64 96V352h64V96H512V352h64V96c0-35.3-28.7-64-64-64H128zM19.2 384C8.6 384 0 392.6 0 403.2C0 445.6 34.4 480 76.8 480H563.2c42.4 0 76.8-34.4 76.8-76.8c0-10.6-8.6-19.2-19.2-19.2H19.2z"/></svg>
                <span class="text-base font-semibold">Laptop</span>
            </a>
        </div>
        <div class="col-span-1 my-auto">
            <a href="#" class="flex flex-row gap-3 p-1 items-center hover:bg-[#fff0d4] hover:rounded-lg justify-center hover:border-2 hover:border-[#111]">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M0 64C0 28.7 28.7 0 64 0H384c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zM256 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM384 64H64V384H384V64z"/></svg>
                <span class="text-base font-semibold">Tablet</span>
            </a>
        </div>
        <div class="col-span-1 my-auto">
            <a href="#" class="flex flex-row gap-3 p-1 items-center hover:bg-[#fff0d4] hover:rounded-lg justify-center hover:border-2 hover:border-[#111]">
                <span class="text-base font-semibold">Khác</span>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><style>svg{fill:#162641}</style><path d="M384 480c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0zM224 352c-6.7 0-13-2.8-17.6-7.7l-104-112c-6.5-7-8.2-17.2-4.4-25.9s12.5-14.4 22-14.4l208 0c9.5 0 18.2 5.7 22 14.4s2.1 18.9-4.4 25.9l-104 112c-4.5 4.9-10.9 7.7-17.6 7.7z"/></svg>
            </a>
        </div>
        <!-- <span class="my-auto text-4xl">|</span> -->
        <div class="col-span-1 my-auto text-center mx-auto">
            <a href="/techshop/public/news/index" class="flex flex-col gap-3 p-1 items-center hover:bg-[#fff0d4] hover:rounded-lg justify-center hover:border-2 hover:border-[#111]">
                <p class="font-semibold">Tin tức</p>
            </a>
        </div>
        <!-- <span class="my-auto text-4xl">|</span> -->
        <div class="col-span-2 flex justify-center my-auto">
            <a href="/techshop/public/home/private" class="w-4/5 flex flex-row justify-center items-center gap-[1rem] bg-[#DCCF55] hover:bg-[#dcad11] p-[1rem] rounded-lg border-2 border-[#111] text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
            <p id="username"></p>
            </a>
        </div>
        <div class="col-span-2 flex justify-center my-auto">
            <a href="/techshop/public/cart/index" class="w-4/5 flex flex-row justify-center items-center gap-[1rem] bg-[#DCCF55] hover:bg-[#dcad11] p-[1rem] rounded-lg border-2 border-[#111] text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
            <div class="flex"><span class="mr-1">Đơn hàng</span>
                <span class="numberInCart items-center align-center text-red-500 transition ease-in-out delay-150 bg-white w-6 text-center rounded-full font-semibold hover:-translate-y-1 hover:scale-110">
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
                        $query = "SELECT * FROM `cart` WHERE userID = '$user_id'";
                        if ($query_product = $conn->query($query))
                            echo mysqli_num_rows($query_product);
                        else echo $conn->error;
                        $conn->close();
                    ?>
                </span> 
            </div>
            </a>
        </div>
        <!-- <span class="my-auto text-4xl">|</span> -->
        <div class="col-span-2 flex flex-row justify-end items-center">
            <div class="relative mr-5 w-[100%]">
                <input type="text" placeholder="Bạn muốn mua gì?" class=" w-[100%] p-[0.5rem] border-2 border-[#111] rounded-full">
                <div  class="absolute right-[0.8rem] bottom-[0.8rem]">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                </div>
            </div>
        </div>

</nav>
<script>
    $(document.ready).ready($.ajax(
        {
            url: '/techshop/public/api/name',
            method: 'GET',
            success: function(response){
                console.log(response);
                var data = response;
                $('#username').html(data);
            }
        }
    )
    );
</script>
<?php } ?>
