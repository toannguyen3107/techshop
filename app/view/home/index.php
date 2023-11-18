<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../app/component/head.php';?>
    <title>Home | TECHSHOP</title>
    
</head>
<body class="overflow-x-hidden">
    <?php require_once '../app/component/nav.php'?>
    <div class="mx-auto"><img src="/techshop/public/img/adv.png" alt="Adv main page" width="100%"></div>        
    <div class="mx-auto w-[80%] bg-[#DC6C55] rounded-[1rem] mt-[1rem] grid grid-rows-4 grid-cols-12 p-[1rem] relative">
        <div class="col-span-2"><p class="text-[#fff] border-2 border-[#fff] rounded-[0.5rem] text-center bg-[#111] p-[0.3rem] mr-[0.5rem] font-bold text-[10px] lg:text-base">ĐIỆN THOẠI</p></div>
        <div class="col-span-2"><p class="text-[#111] border-2 border-[#111] rounded-[0.5rem] text-center bg-[#fff] p-[0.3rem] mr-[0.5rem] font-bold text-[10px] lg:text-base">LAPTOP</p></div>
        <div class="col-span-2"><p class="text-[#111] border-2 border-[#111] rounded-[0.5rem] text-center bg-[#fff] p-[0.3rem] mr-[0.5rem] font-bold text-[10px] lg:text-base">PHỤ KIỆN</p></div>
        <div class="col-span-3"><p class="text-center text-sm lg:text-2xl font-bold text-white"><span class="text-[#BB0000]">HOT SALE</span> CUỐI TUẦN</p></div>
        <div class="col-span-3">
            <p class="text-center"><span class="font-bold  inline-block mr-[1rem]">BẮT ĐẦU SAU</span><span class="inline-block border-2 border-black p-1 bg-[#fff] mx-1">02</span>:<span class="inline-block border-2 border-black p-1 bg-[#fff] mx-1">06</span>:<span class="inline-block border-2 border-black p-1 bg-[#fff] mx-1">13</span>:<span class="inline-block border-2 border-black p-1 bg-[#fff] mx-1">21</span></p>
        </div>
        
        <?php
            foreach($data['product'] as $product){
                $out = '<div class="row-span-3 col-span-3 gap-3 bg-[#fff] rounded-[0.7rem] mx-auto p-[1rem] hover:border-2 hover:border-[#111] hover:bg-[#eee] py-[2rem]" ><a href="#">';
                $out .= '<img src="'. $product->img .'" alt="image" class="mx-auto">';
                $out .= '<p class="w-[80%] text-center">'. $product->name .'</p>';
                $out .= '<p><span class="inliine-block mr-3 text-[#ED3419]">'. $product->currCost .'</span><span class="line-through">' . $product->oriCost . '</span></p></a></div>';
                echo $out;
            }
        ?>
        <button type="button" class="absolute top-[50%] bottom-[50%] right-0 py-[2rem] px-[1rem] bg-gray-100  border-y-2 border-l-2 border-gray-600 flex items-center rounded-l-[2rem] hover:bg-gray-400"><span class="font-bold text-3xl inline-block">&gt;</span></button>
        <button type="button" class="absolute top-[50%] bottom-[50%] left-0 py-[2rem] px-[1rem] bg-gray-100  border-y-2 border-l-2 border-gray-600 flex items-center rounded-r-[2rem] hover:bg-gray-400"><span class="font-bold text-3xl inline-block">&lt;</span></button>
    </div>
    <!-- footer -->
    <?php require_once '../app/component/footer.php'?>
</body>
</html>