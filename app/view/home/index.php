<?php $_SESSION['idx'] = 1;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../app/component/head.php';?>
    <title>Home | TECHSHOP</title>
    <script>
  // Set the countdown date and time (replace with your desired date and time)
  var countdownDate = new Date("Dec 31, 2023 00:00:00").getTime();

  // Update the countdown every 1 second
  var countdownInterval = setInterval(function () {
    // Get the current date and time
    var now = new Date().getTime();

    // Calculate the remaining time in milliseconds
    var timeRemaining = countdownDate - now;

    // Calculate days, hours, minutes, and seconds
    var days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

    // Display the countdown in the designated HTML element
    document.getElementById("countdown").innerHTML =
      days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

    // If the countdown is over, display a message
    if (timeRemaining < 0) {
      clearInterval(countdownInterval);
      document.getElementById("countdown").innerHTML = "EXPIRED";
    }
  }, 1000);
</script>

    <script>
    $(document).ready(function(){
        $.ajax({
            url: '/techshop/public/api/phonetop',
                method: 'GET',
                dataType: 'json', 
                success: function(res){
                    console.log(res);
                    Object.entries(res).forEach(([key, value]) => {
                        let div = ' <a href="/techshop/public/detailProduct/index?id='+value.id+'" class="item col-span-2 md:col-span-3 border-2 border-black bg-[#fff] px-1 py-6 md:w-[80%] rounded-lg hover:bg-[#eee]"> <div id='+ value.id + ' >' 
                      div += '<img src="' + value.image +'"class="w-[130px] h-[150px] block mx-auto">';
                      div += '<p class="text-lg font-semibold text-center">' + value.name+'</p>';
                      div += '<p class="text-red-500 ms-3 mt-2">' + value.price + ' đ</p>';
                      div += '<button type="button" class="add-to-cart block mx-auto bg-green-400 text-gray-900 text-bold text-lg border-2 border-black px-4 py-1 rounded-lg hover:bg-green-600">Mua</button>'; 
                      div += '</div></a>'; 
                        $('#sale').append(div);
                    });
                },
                error: function(e){
                    console.error(e);
                }
        });
        // product recommend
        $('#more').click(function(){
            $.ajax({
                url: '/techshop/public/api/productrecommend',
                method: 'GET',
                dataType: 'json',
                success: function(res){
                    console.log(res);
                    Object.entries(res).forEach(([key, value]) => {
                        let div = ' <a href="/techshop/public/detailProduct/index?id='+value.id+'" class="item col-span-2 md:col-span-3 border-2 border-black bg-[#fff] px-1 py-6 md:w-[80%] rounded-lg hover:bg-[#eee]"> <div id='+ value.id + ' >' 
                      div += '<img src="' + value.image +'"class="w-[130px] h-[150px] block mx-auto">';
                      div += '<p class="text-lg font-semibold text-center">' + value.name+'</p>';
                      div += '<p class="text-red-500 ms-3 mt-2">' + value.price+ 'đ</p>';
                      div += '<button type="button" class="add-to-cart block mx-auto bg-green-400 text-gray-900 text-bold text-lg border-2 border-black px-4 py-1 rounded-lg hover:bg-green-600">Mua</button>'; 
                      div += '</div></a>'; 
                      $(div).insertBefore('#more');
                    });
                },
                error: function(e){
                    console.error(e);
                }
            });
        });
        $('#phone').click(function(){
            toggleTheme($(this));
            apiGet('/techshop/public/api/phonetop');
        });

        $('#laptop').click(function(){
            toggleTheme($(this));
            apiGet('/techshop/public/api/laptoptop');
        });

        $('#other').click(function(){
            toggleTheme($(this));
        });
        function apiGet(url){
            $.ajax({
                url: url,
                method: 'GET',
                dataType: 'json', 
                success: function(res){
                    console.log(res);
                    $('#sale .item').remove();
                    Object.entries(res).forEach(([key, value]) => {
                      let div = '<div id='+ value.id + ' class="item col-span-3 md:col-span-3 border-2 border-black bg-[#fff] px-1 py-6 md:w-[80%] rounded-lg hover:bg-[#eee]">'
                      div += '<img src="' + value.image +'"class="w-[130px] h-[150px] block mx-auto">';
                      div += '<p class="text-lg font-semibold text-center">' + value.name+'</p>';
                      div += '<button type="button" class="add-to-cart block mx-auto bg-green-400 text-gray-900 text-bold text-lg border-2 border-black px-4 py-1 rounded-lg hover:bg-green-600">Mua</button>'; 
                      div += '<p class="text-red-500 ms-3 mt-2">' + value.price+ 'đ</p>';
                      div += '</div>';
                    $('#sale').append(div);
                    });
                },
                error: function(e){
                    console.error(e);
                }
            });
        }
        function toggleTheme(element) {
            if(!element.hasClass('selected')){
                $('.selected').attr('class', 'cursor-pointer text-[#111] border-2 border-[#111] rounded-[0.5rem] text-center bg-[#fff] p-[0.3rem] mr-[0.5rem] font-bold text-[10px] lg:text-base');
                element.attr('class', 'cursor-pointer selected text-[#fff] border-2 border-[#fff] rounded-[0.5rem] text-center bg-[#111] p-[0.3rem] mr-[0.5rem] font-bold text-[10px] lg:text-base');
            }
            
        }
    });
</script>
</head>
<body class="overflow-x-hidden">
    <?php require_once '../app/component/nav.php'?>
    <div class="mx-auto"><img src="/techshop/public/img/adv.png" alt="Adv main page" width="100%"></div>        
    <div class="none mx-auto w-[80%] bg-[#DC6C55] rounded-[1rem] mt-[1rem] grid grid-cols-6 md:grid-cols-12 p-[1rem] relative gap-4" id="sale">
        <div class="col-span-6 md:col-span-2"><p class="cursor-pointer selected text-[#fff] border-2 border-[#fff] rounded-[0.5rem] text-center bg-[#111] p-[0.3rem] mr-[0.5rem] font-bold text-[10px] lg:text-base" id="phone">ĐIỆN THOẠI</p></div>
        <div class="col-span-6 md:col-span-2"><p class="cursor-pointer text-[#111] border-2 border-[#111] rounded-[0.5rem] text-center bg-[#fff] p-[0.3rem] mr-[0.5rem] font-bold text-[10px] lg:text-base" id="laptop">LAPTOP</p></div>
        <div class="col-span-6 md:col-span-2"><p class="cursor-pointer text-[#111] border-2 border-[#111] rounded-[0.5rem] text-center bg-[#fff] p-[0.3rem] mr-[0.5rem] font-bold text-[10px] lg:text-base" id="other">Khác</p></div>
        <div class="col-span-6 md:col-span-3">
        <p class="text-center text-sm lg:text-2xl font-bold text-white">
            <span class="text-[#BB0000]">HOT SALE</span> CUỐI TUẦN
        </p>
        </div>
        <div class="col-span-6 md:col-span-3">
        <p class="text-center">
            <span class="font-bold inline-block mr-[1rem]">BẮT ĐẦU SAU</span>
            <span id="countdown" class="inline-block border-2 border-black p-1 bg-[#fff] mx-1"></span>
        </p>
        </div>

    </div>
    <div class="grid grid-cols-4 md:grid-cols-12 gap-3 md:w-[80%] mx-auto mt-[1rem] bg-[#eee] rounded-[1rem] p-[1rem]">
            <div class="col-span-4 md:col-span-12">
                <p class="font-bold text-xl">DANH MỤC NỔI BẬT</p>
            </div>
            <?php 
                foreach($data['category'] as $category){
                    $out = '<div class="col-span-2 md:col-span-2 flex justify-center"><a href="'.$category->link.'">';
                    $out .= '<img src="'. $category->img .'" alt="'. $category->name.'">';
                    $out .= '<p>'. $category->name .'</p>';
                    $out .= '</a></div>';
                    echo $out;
                }
            ?>
    </div>
    
    <div class="block md:grid md:grid-cols-12 md:mt-[1rem]  gap-4 w-[80%] mx-auto" >
        <div class="col-span-4 md:col-span-12 ml-[5vw] font-bold text-xl block">GỢI Ý HÔM NAY</div>
        <button type="button" class="col-span-10 mx-auto mb-[1rem] bg-orange-500 border-2 border-[#111] rounded-[0.5rem] hover:bg-orange-300 py-[0.7rem] px-[1.3rem] active:bg-orange-700" id="more">Xem Thêm</button>
    </div>
    <!-- footer -->
    <?php require_once '../app/component/footer.php'?>
</body>
</html>