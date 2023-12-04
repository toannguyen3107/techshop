<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once '../app/component/head.php';?>
    <title>... | TECHSHOP</title>
    <style>
        
        .thumbnail {
            cursor: pointer;
            transition: transform 0.2s ease-in-out;
        }
        .thumbnail:hover {
            cursor: pointer;
            transform: scale(1.1);
        }
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        .lightbox img {
            max-width: 80%;
            max-height: 80%;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.5);
        }
        .custom-border {
            border: 1px solid #3490dc;
        }
        .custom-border-bottom {
            border-bottom: 1px solid #3490dc;
        }

    </style>
    <title>Lightbox Example</title>
</head>
<body>
<?php require_once '../app/component/nav.php'?>
<div class="lightbox" id="lightbox" onclick="closeLightbox()">
    <img src="" alt="Lightbox Image" id="lightboxImage">
</div>

<script>
    function openLightbox(imageUrl) {
        var lightbox = document.getElementById('lightbox');
        var lightboxImage = document.getElementById('lightboxImage');
        lightboxImage.src = imageUrl;
        lightbox.style.display = 'flex';
        lightboxImage.style.width = '40rem';

    }

    function closeLightbox() {
        document.getElementById('lightbox').style.display = 'none';
    }
</script>
<?php
$host = 'localhost';  // Nếu MySQL server chạy trên localhost
$dbname = 'techshop';
$username = 'root';   // Tên người dùng MySQL, thường là "root" cho localhost
$password = ''; 
 try {
    
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Thiết lập chế độ lỗi để báo cáo tất cả các lỗi
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     if (isset($_GET['id'])) {
        // Lấy tất cả thông tin của sản phẩm từ query string
        
        $id = $_GET['id'];
        $query = "SELECT * FROM product WHERE id=:id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);   
        $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        
        echo '<div class=" mx-auto lg:p-[4rem] p-0">
                <div class="flex flex-wrap justify-center">
            
                <div class="px-8 w-[40rem]">';
        echo '<p class="text-[2.6rem] text-gray-700 mb-2">Danh mục: '.$product['category'].'</p>';
        echo '<h2 class="text-[4rem] font-bold mb-2">'.$product['name'].'</h2>';
        echo '<p class="text-[1.4rem] text-[1.8rem] text-gray-700 mb-2">Giá: '.number_format($product['price'], 0, '', '.') . ' ₫'.'</p>';
        echo '<p class="text-[1.4rem] text-[1.8rem] text-gray-700 mb-4">Lượt mua: '.$product['luotmua'].'</p>';
        echo '<div class="flex justify-center mt-[2rem]">';
        echo ' <a href="/techshop/public/cart/index.php?id='.$product['id'].'" class="inline-flex items-center px-[1.4rem] py-[1rem] text-[1.4rem] font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                    Thêm vào giỏ hàng
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1953 1736" fill="none" class="w-[2rem] h-[2rem]">
                    <path d="M1711.29 1084.99H717.353L739.544 1193.49H1649.64C1701.86 1193.49 1740.56 1241.97 1728.99 1292.89L1710.28 1375.2C1773.66 1405.97 1817.35 1470.93 1817.35 1546.11C1817.35 1651.9 1730.83 1737.48 1624.69 1735.96C1523.57 1734.5 1440.41 1652.45 1437.68 1551.35C1436.19 1496.13 1458.31 1446.08 1494.65 1410.48H783.822C819.006 1444.95 840.865 1492.96 840.865 1546.11C840.865 1653.97 750.92 1740.83 641.939 1735.77C545.172 1731.28 466.473 1653.09 461.387 1556.35C457.461 1481.64 496.772 1415.79 556.497 1381.44L318.318 216.997H81.374C36.4318 216.997 0 180.566 0 135.623V81.374C0 36.4318 36.4318 0 81.374 0H429.007C467.663 0 500.983 27.1959 508.73 65.0653L539.808 216.997H1871.57C1923.79 216.997 1962.49 265.486 1950.92 316.406L1790.64 1021.65C1782.22 1058.7 1749.28 1084.99 1711.29 1084.99ZM1383.36 569.618H1220.61V433.995C1220.61 404.032 1196.32 379.746 1166.36 379.746H1112.11C1082.15 379.746 1057.86 404.032 1057.86 433.995V569.618H895.114C865.152 569.618 840.865 593.905 840.865 623.868V678.117C840.865 708.08 865.152 732.366 895.114 732.366H1057.86V867.99C1057.86 897.952 1082.15 922.239 1112.11 922.239H1166.36C1196.32 922.239 1220.61 897.952 1220.61 867.99V732.366H1383.36C1413.32 732.366 1437.61 708.08 1437.61 678.117V623.868C1437.61 593.905 1413.32 569.618 1383.36 569.618Z" fill="white"/>
                    </svg>
                </a>';
        echo '</div>';
        echo '</div>';
        echo '<img class="thumbnail md:w-[34rem] w-[20rem]" src="'.$product['image'].'" alt="Image 1" onclick="openLightbox(`'.$product['image'].'`)">';
        
        echo    '</div>';

            // <!-- Phần 2: Thông số kỹ thuật sản phẩm -->
        echo '
            <div class="flex flex-row justify-around flex-wrap">
            <div class="w-[50%] p-[1rem] min-w-[18rem]">
                <div class="text-[2rem] font-bold mb-2">Mô tả sản phẩm</div>
                <div class=" min-w-[18rem]">'.$product['mo_ta'].'</div>
            </div>';
        ///////////////////////////////////////PHONE////////////////////////////////////////////
        if($product['category'] == 'Phone') {
            $queryPhone = "SELECT * FROM product as p JOIN phone as ph ON p.id = ph.id WHERE p.id=:id";
            $stmtPhone = $conn->prepare($queryPhone);
            $stmtPhone->bindParam(':id', $id);   
            $stmtPhone->execute();
            $productPhone = $stmtPhone->fetch(PDO::FETCH_ASSOC);
            echo '<div>
                <div class="mt-8 custom-border w-[19rem] md:w-[22rem] lg:w-[30rem]   p-[1rem] bg-[#76EFAF] mr-[1rem]">
                    <h2 class="text-[1.6rem] font-bold mb-4 ">Thông Số Kỹ Thuật</h2>
                    <div class="grid grid-cols-2">
                        <div class="p-2 custom-border-bottom text-[1.2rem]">Màn hình</div>
                        <div class="p-2 custom-border-bottom text-[1.2rem]">'.$productPhone['man_hinh'].'</div>
                        <div class="p-2 custom-border-bottom text-[1.2rem]">Kích thước màn hình</div>
                        <div class="p-2 custom-border-bottom text-[1.2rem]">'.$productPhone['kieumanhinh'].'</div>
                        <div class="p-2 custom-border-bottom text-[1.2rem]">Dung lượng</div>
                        <div class="p-2 custom-border-bottom text-[1.2rem]">'.$productPhone['dungluong'].'</div>
                        
                    </div>
                </div>
            </div>
            </div>';
        }
         ///////////////////////////////////////Tablet////////////////////////////////////////////
         if($product['category'] == 'Tablet') {
            $queryTablet = "SELECT * FROM product as p JOIN tablet as ph ON p.id = ph.id WHERE p.id=:id";
            $stmtTablet = $conn->prepare($queryTablet);
            $stmtTablet->bindParam(':id', $id);   
            $stmtTablet->execute();
            $productTablet = $stmtTablet->fetch(PDO::FETCH_ASSOC);
            echo '<div>
                <div class="mt-8 custom-border w-[19rem] md:w-[22rem] lg:w-[30rem]   p-[1rem] bg-[#76EFAF] mr-[1rem]">
                    <h2 class="text-[1.6rem] font-bold mb-4 ">Thông Số Kỹ Thuật</h2>
                    <div class="grid grid-cols-2">
                        <div class="p-2 custom-border-bottom text-[1.2rem]">Màn hình</div>
                        <div class="p-2 custom-border-bottom text-[1.2rem]">'.$productTablet['man_hinh'].'</div>
                        <div class="p-2 custom-border-bottom text-[1.2rem]">Kích thước màn hình</div>
                        <div class="p-2 custom-border-bottom text-[1.2rem]">'.$productTablet['kieumanhinh'].'</div>
                        <div class="p-2 custom-border-bottom text-[1.2rem]">Dung lượng</div>
                        <div class="p-2 custom-border-bottom text-[1.2rem]">'.$productTablet['dungluong'].'</div>
                        <div class="p-2 custom-border-bottom text-[1.2rem]">Kết nối</div>
                        <div class="p-2 custom-border-bottom text-[1.2rem]">'.$productTablet['ketnoi'].'</div>
                    </div>
                </div>
            </div>
            </div>';
        }
        ///////////////////////////////////////Laptop////////////////////////////////////////////
        if($product['category'] == 'Laptop') {
            $queryLaptop = "SELECT * FROM product as p JOIN laptop as l ON p.id = l.id WHERE p.id=:id";
            $stmtLaptop = $conn->prepare($queryLaptop);
            $stmtLaptop->bindParam(':id', $id);   
            $stmtLaptop->execute();
            $productLaptop = $stmtLaptop->fetch(PDO::FETCH_ASSOC);
            echo '<div>
                <div class="mt-8 custom-border w-[19rem] md:w-[22rem] lg:w-[30rem]   p-[1rem] bg-[#76EFAF] mr-[1rem]">
                    <h2 class="text-[1.6rem] font-bold mb-4 ">Thông Số Kỹ Thuật</h2>
                    <div class="grid grid-cols-2">
                        <div class="p-2 custom-border-bottom text-[1.2rem]">Màn hình</div>
                        <div class="p-2 custom-border-bottom text-[1.2rem]">'.$productLaptop['man_hinh'].'</div>
                        <div class="p-2 custom-border-bottom text-[1.2rem]">CPU</div>
                        <div class="p-2 custom-border-bottom text-[1.2rem]">'.$productLaptop['CPU'].'</div>
                        <div class="p-2 custom-border-bottom text-[1.2rem]">Cart màn hình</div>
                        <div class="p-2 custom-border-bottom text-[1.2rem]">'.$productLaptop['card'].'</div>
                        <div class="p-2 custom-border-bottom text-[1.2rem]">Thời lượng pin</div>
                        <div class="p-2 custom-border-bottom text-[1.2rem]">'.$productLaptop['pin'].'</div>
                        <div class="p-2 custom-border-bottom text-[1.2rem]">Khối lượng</div>
                        <div class="p-2 custom-border-bottom text-[1.2rem]">'.$productLaptop['khoiluong'].'</div>
                        
                    </div>
                </div>
            </div>
            </div>';
        }
    
    
   
?>


  
<a href="/techshop/public/news/index" class="flex justify-center items-center m-[1rem]">
    <button type="button" class="text-[2rem] inline-flex items-center px-3 py-2  font-medium text-center text-white bg-[#3DBC72] rounded-lg hover:bg-[#55DCA2] hover:scale-110  w-[16rem] text-center flex flex-row justify-center">
                         Trở về
                        <svg xmlns="http://www.w3.org/2000/svg" class="ms-[1.4rem] w-[3rem] h-[2.6rem]" viewBox="0 0 77 73" fill="none">
                    <path d="M38.5 0C17.2287 0 0 16.2481 0 36.3085C0 56.369 17.2287 72.617 38.5 72.617C59.7713 72.617 77 56.369 77 36.3085C77 16.2481 59.7713 0 38.5 0ZM38.5 9.07713V27.2314H67.375V45.3856H38.5V63.5399L9.625 36.3085L38.5 9.07713Z" fill="white"/>
                    </svg>
    </button>
</a>
    
    
   

    <!-- Phần 3: Sản phẩm khác -->
    <div class="mt-8">
        <h2 class="text-2xl font-bold mb-4">Các Sản Phẩm Khác:</h2>
        <div  id="adContainer" class="flex flex-row justify-center container mx-auto mb-4 flex-wrap">
        <?php 
        $offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;
        $limit = isset($_GET['limit']) ? intval($_GET['limit']) : 4;
        $querySameProduct = "SELECT * FROM product  LIMIT $offset,$limit";
        //  $query1 = "SELECT DISTINCT * FROM paper order by RAND() limit 3";
         $stmt1 = $conn->query($querySameProduct);
     
         // Lấy tất cả các dòng dữ liệu từ kết quả truy vấn
         $products = $stmt1->fetchAll(PDO::FETCH_ASSOC);
         forEach ($products as $product) {
            echo '<div class="relative min-h-full mx-[1rem] w-[18rem] bg-[#c4f2d9]  hover:bg-[#81e4b4] hover:-translate-y-1 hover:scale-110 border border-gray-200 rounded-lg shadow mb-4" style="min-width: 18rem;">
            <a href="/techshop/public/detailProduct/index?id='.$product['id'].'" class="flex justify-center">';
            echo '<img class="rounded-t-lg p-3 max-w-[18rem]" src="'.$product['image'].'" anh san pham" />';
            echo '</a>';
            echo '<div class="px-4 pb-10">
                    <a href="/techshop/public/detailProduct/index?id='.$product['id'].'">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">'.$product['name'].'</h5>
                    </a>';
            echo '<p class="mb-3 font-normal text-gray-700 text-[1.4rem] ">'.number_format($product['price'], 0, '', '.') . ' ₫'.'</p>';
            echo '<a href="/techshop/public/detailProduct/index?id='.$product['id'].'" class="absolute bottom-2 left-4 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                        Xem sản phẩm
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"  fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>';
            echo '</div>';
            echo '</div>';
            
         }
        ?>
    </div>
    </div>
    <div class="flex justify-center">
<button id="loadMoreBtn" class="text-[1.4rem] m-4 px-4 py-2 bg-blue-500 text-white rounded-md w-[14rem] h-[3.2rem] text-center hover:-translate-y-1 hover:bg-blue-800">Xem thêm</button>
</div>
</div>
<?php
     }
} catch (PDOException $e) {
    echo '<span style="color:red;"> fail: ' . $e->getMessage().'</span>';
}
?>
<!-- footer -->
<?php require_once '../app/component/footer.php'?>

<!--  -->
<script>
$(document).ready(function () {
    var offset = 0; // Khai báo offset và limit ở đây
    var limit = 8;
    $("#loadMoreBtn").on("click", function () {
        // Gọi Ajax để lấy dữ liệu mới
        $.ajax({
            type: "GET",
            url: "/techshop/app/view/detailProduct/ajax.php", // Đặt đường dẫn đến script xử lý truy vấn CSDL ở đây
            data: { offset: offset, limit: limit },
            success: function (data) {
                // Thêm dữ liệu mới vào container
                $("#adContainer").html(data);
                
                // Cập nhật offset
                 limit+=3;
            }
        });
    });
});


</script>
</body>
</html>
