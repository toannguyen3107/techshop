<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../app/component/head.php';?>
    <title>Home | TECHSHOP</title>
    
</head>
<body class="overflow-x-hidden">
    <?php require_once '../app/component/nav.php'?>
    <div class="mx-auto"><img src="/techshop/public/img/adv.png" alt="Adv main page" width="100%"></div>        
    <div class="none mx-auto w-[80%] bg-[#DC6C55] rounded-[1rem] mt-[1rem] lg:grid grid-rows-4 grid-cols-12 p-[1rem] relative">
        <div class="col-span-2"><p class="text-[#fff] border-2 border-[#fff] rounded-[0.5rem] text-center bg-[#111] p-[0.3rem] mr-[0.5rem] font-bold text-[10px] lg:text-base">ĐIỆN THOẠI</p></div>
        <div class="col-span-2"><p class="text-[#111] border-2 border-[#111] rounded-[0.5rem] text-center bg-[#fff] p-[0.3rem] mr-[0.5rem] font-bold text-[10px] lg:text-base">LAPTOP</p></div>
        <div class="col-span-2"><p class="text-[#111] border-2 border-[#111] rounded-[0.5rem] text-center bg-[#fff] p-[0.3rem] mr-[0.5rem] font-bold text-[10px] lg:text-base">PHỤ KIỆN</p></div>
        <div class="col-span-3"><p class="text-center text-sm lg:text-2xl font-bold text-white"><span class="text-[#BB0000]">HOT SALE</span> CUỐI TUẦN</p></div>
        <div class="col-span-3">
            <p class="text-center"><span class="font-bold  inline-block mr-[1rem]">BẮT ĐẦU SAU</span><span class="inline-block border-2 border-black p-1 bg-[#fff] mx-1">02</span>:<span class="inline-block border-2 border-black p-1 bg-[#fff] mx-1">06</span>:<span class="inline-block border-2 border-black p-1 bg-[#fff] mx-1">13</span>:<span class="inline-block border-2 border-black p-1 bg-[#fff] mx-1">21</span></p>
        </div>
        
        <?php
            $i = 0;
            foreach($data['product'] as $product){
                $i += 1;
                if($i >= 5){
                    $out = '<div class="card-template row-span-3 col-span-3 gap-3 bg-[#fff] rounded-[0.7rem] mx-auto p-[1rem] hover:border-2 hover:border-[#111] hover:bg-[#eee] py-[2rem]" style="display: none;" ><a href="#">';
                }else{
                    $out = '<div class="card-template row-span-3 col-span-3 gap-3 bg-[#fff] rounded-[0.7rem] mx-auto p-[1rem] hover:border-2 hover:border-[#111] hover:bg-[#eee] py-[2rem]" ><a href="#">';
                }
                
                $out .= '<img src="'. $product->img .'" alt="image" class="mx-auto">';
                $out .= '<p class="w-[80%] text-center">'. $product->name .'</p>';
                $out .= '<p><span class="inliine-block mr-3 text-[#ED3419]">'. $product->currCost .'</span><span class="line-through">' . $product->oriCost . '</span></p></a></div>';
                echo $out;
            }
        ?>
        <button type="button" class="absolute top-[50%] bottom-[50%] right-0 py-[2rem] px-[1rem] bg-gray-100  border-y-2 border-l-2 border-gray-600 flex items-center rounded-l-[2rem] hover:bg-gray-400" id="nexProduct"><span class="font-bold text-3xl inline-block" >&gt;</span></button>
        <button type="button" class="absolute top-[50%] bottom-[50%] left-0 py-[2rem] px-[1rem] bg-gray-100  border-y-2 border-l-2 border-gray-600 flex items-center rounded-r-[2rem] hover:bg-gray-400" id="preProduct"><span class="font-bold text-3xl inline-block" >&lt;</span></button>
    </div>
    <div class="grid grid-cols-12 gap-3 w-[80%] mx-auto mt-[1rem] bg-[#eee] rounded-[1rem] p-[1rem]">
            <div class="col-span-12">
                <p class="font-bold text-xl">DANH MỤC NỔI BẬT</p>
            </div>
            <?php 
                foreach($data['category'] as $category){
                    $out = '<div class="col-span-2 flex justify-center"><a href="'.$category->link.'">';
                    $out .= '<img src="'. $category->img .'" alt="'. $category->name.'">';
                    $out .= '<p>'. $category->name .'</p>';
                    $out .= '</a></div>';
                    echo $out;
                }
            ?>
    </div>
    
    <div class="grid xl:grid-cols-10 lg:grid-cols-9 grid-col-10 gap-x-3 gap-y-5 mt-[1rem] w-[80%] mx-auto">
        <div class="col-span-10 ml-[5vw]">
            <p class="font-bold text-xl">GỢI Ý HÔM NAY</p>
        </div>
        <?php
            $i = 0;
            foreach($data['product'] as $product){
                $i += 1;
                if($i >= 11){
                    $out = '<div class="col-span-5 lg:col-span-3 xl:col-span-2 gap-3 bg-[#24D882] opacity-30 rounded-[0.7rem] mx-auto p-[1rem] border-2 hover:border-[#111] hover:bg-[#eee] py-[2rem]" style="display: none;" ><a href="#">';
                }else{
                    $out = '<div class="col-span-5 lg:col-span-3 xl:col-span-2 gap-3 bg-[#24D882] opacity-80 rounded-[0.7rem] mx-auto p-[1rem] hover:border-2 hover:border-[#111] hover:bg-[#eee] py-[2rem]" ><a href="#">';
                }
                
                $out .= '<img src="'. $product->img .'" alt="image" class="mx-auto" width="70px">';
                $out .= '<p class="w-[70%] text-[0.7rem]">'. $product->name .'</p>';
                $out .= '<p><span class="inliine-block mr-3 text-[#ED3419]">'. $product->currCost .'</span><span class="line-through">' . $product->oriCost . '</span></p></a></div>';
                echo $out;
            }
        ?>
        <button type="button" class="col-span-10 mx-auto mb-[1rem] bg-orange-500 border-2 border-[#111] rounded-[0.5rem] hover:bg-orange-300 py-[0.7rem] px-[1.3rem]"><a href="#">Xem Thêm</a></button>
    </div>
    <!-- footer -->
    <?php require_once '../app/component/footer.php'?>
    <script>
        let currIndex = 0;
         const items = document.getElementById('items');
         const product = <?php echo json_encode($data['product']);?>;
         const productContainer = document.querySelectorAll('.card-template');

         function nextProduct() {
    if (productContainer.length <= 4) {
        return;
    }
    const indexBlock = Math.min(currIndex + 4, productContainer.length - 1);
    productContainer[currIndex].style.display = "none";
    productContainer[indexBlock].style.display = "block";
    if (currIndex !== productContainer.length - 1) {
        currIndex ++;
    } else {
        currIndex = productContainer.length - 1;
    }
}

function preProduct() {
    if (currIndex !== 0) {
        currIndex--;
    } else {
        currIndex = 0;
    }
    if (productContainer.length <= 4) {
        return;
    }
    const indexBlock = Math.min(currIndex + 4, productContainer.length - 1);
    productContainer[currIndex].style.display = "block";
    productContainer[indexBlock].style.display = "none";
}


         const next = document.getElementById('nexProduct');
         const pre = document.getElementById('preProduct');
         next.addEventListener('click', nextProduct);
         pre.addEventListener('click',preProduct);
    </script>
</body>
</html>