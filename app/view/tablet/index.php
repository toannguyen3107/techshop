<?php $_SESSION['idx'] = 1;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../app/component/head.php';?>
    <title>Home | TECHSHOP</title>
    <script>
    $(document).ready(function(){
        $.ajax({
            url: '/techshop/public/api/tablet',
                method: 'GET',
                dataType: 'json', 
                
                success: function(res){
                    console.log(res);
                    Object.entries(res).forEach(([key, value]) => {
                    let div = ' <a href="/techshop/public/detailProduct/index?id='+value.id+'" class="col-span-2 md:col-span-3 border-2 border-black bg-[#fff] px-1 py-6 md:w-[80%] rounded-lg hover:bg-[#eee] item"> <div id='+ value.id + '>' 
                      div += '<img src="' + value.image +'"class="w-[130px] h-[150px] block mx-auto">';
                      div += '<p class="text-lg font-semibold text-center">' + value.name+'</p>';
                      div += '<p class="text-red-500 ms-3 mt-2">' + value.price+ 'đ</p>';
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
        var offset = 4; // Khai báo offset và limit ở đây
        var limit = 4;
        $('#more').click(function(){
            
            $.ajax({
                url: '/techshop/public/api/productrecommendTablet',
                method: 'GET',
                dataType: 'json',
                data: { offset: offset, limit: limit }, 
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
                    offset+=4;
                },
                error: function(e){
                    console.error(e);
                }
            });
        });
        // $('#phone').click(function(){
        //     toggleTheme($(this));
        //     apiGet('/techshop/public/api/phonetop');
        // });

        // $('#laptop').click(function(){
        //     toggleTheme($(this));
        //     apiGet('/techshop/public/api/laptoptop');
        // });

        // $('#other').click(function(){
        //     toggleTheme($(this));
        // });
        // function apiGet(url){
        //     $.ajax({
        //         url: url,
        //         method: 'GET',
        //         dataType: 'json', 
        //         success: function(res){
        //             console.log(res);
        //             $('#sale .item').remove();
        //             Object.entries(res).forEach(([key, value]) => {
        //               let div = '<div id='+ value.id + ' class="item col-span-3 md:col-span-3 border-2 border-black bg-[#fff] px-1 py-6 md:w-[80%] rounded-lg hover:bg-[#eee]">'
        //               div += '<img src="' + value.image +'"class="w-[130px] h-[150px] block mx-auto">';
        //               div += '<p class="text-lg font-semibold text-center">' + value.name+'</p>';
        //               div += '<button type="button" class="add-to-cart block mx-auto bg-green-400 text-gray-900 text-bold text-lg border-2 border-black px-4 py-1 rounded-lg hover:bg-green-600">Mua</button>'; 
        //               div += '<p class="text-red-500 ms-3 mt-2">' + value.price+ 'đ</p>';
        //               div += '</div>';
        //             $('#sale').append(div);
        //             });
        //         },
        //         error: function(e){
        //             console.error(e);
        //         }
        //     });
        // }
        // function toggleTheme(element) {
        //     if(!element.hasClass('selected')){
        //         $('.selected').attr('class', 'cursor-pointer text-[#111] border-2 border-[#111] rounded-[0.5rem] text-center bg-[#fff] p-[0.3rem] mr-[0.5rem] font-bold text-[10px] lg:text-base');
        //         element.attr('class', 'cursor-pointer selected text-[#fff] border-2 border-[#fff] rounded-[0.5rem] text-center bg-[#111] p-[0.3rem] mr-[0.5rem] font-bold text-[10px] lg:text-base');
        //     }
            
        // }
    });
</script>
</head>
<body>
<?php require_once '../app/component/nav.php'?>
    <p class="cursor-pointer selected text-[#fff] border-2 border-[#fff] rounded-[0.5rem] text-center bg-[#6C628C] p-[0.3rem] mr-[0.5rem] font-bold text-[2rem] lg:text-base w-[20rem] m-[1rem]" id="phone">TABLET</p>
    <div class="m-[1rem] text-[2rem] font-bold">Sản phẩm gợi ý:</div>
    <div class="none mx-auto w-[80%] rounded-[1rem] mt-[1rem] grid grid-cols-6 md:grid-cols-12 p-[1rem] relative gap-4" id="sale">

    </div>
    <div class="block md:grid md:grid-cols-12 md:mt-[1rem]  gap-4 w-[80%] mx-auto" >
        
        <button type="button" class="col-span-10 mx-auto mb-[1rem] bg-orange-500 border-2 border-[#111] rounded-[0.5rem] hover:bg-orange-300 py-[0.7rem] px-[1.3rem] active:bg-orange-700" id="more">Xem Thêm</button>
    </div>
    
<?php require_once '../app/component/footer.php'?>
</body>
<?php require_once '../app/component/addToCart.php'?>
</html>