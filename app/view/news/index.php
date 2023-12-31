<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
/* Large Devices, Wide Screens */ @media screen and (max-width: 1200px) {
    html {
        font-size: 16px;
    }    
}
/* Medium Devices, Desktops */ @media screen and (max-width: 992px) {
    html {
        font-size: 14px;
    }
}
/* Small Devices, Tablets */ @media screen and (max-width: 768px) {
    html {
        font-size: 10px;
    }
}
/* Extra Small Devices, Phones */ @media screen and (max-width: 480px){
    html {
        font-size: 6px;
    }
}
  

</style>
</head>
<body class="bg-[#f1fcf6]">

<?php require_once '../app/component/nav.php'?>

    <!-- -------------------NEWS data-carousel------------------------ -->
    <div class=" p-2 flex flex-row mx-auto  justify-center flex-wrap ">
        <!------------- left---------- -->
        <div class="me-4 w-[50rem]">

            <a href="#" class=" flex flex-col items-center bg-[#E2F9EC] border border-gray-200 rounded-lg shadow md:flex-row md:max-w-sx hover:bg-[#c4f2d9]">

                <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <?php 
                        $host = 'localhost';  // Nếu MySQL server chạy trên localhost
                        $dbname = 'techshop';
                        $username = 'root';   // Tên người dùng MySQL, thường là "root" cho localhost
                        $password = ''; 
                         try {
                            
                            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                        
                            // Thiết lập chế độ lỗi để báo cáo tất cả các lỗi
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                            $query = "SELECT * FROM paper ORDER BY views DESC LIMIT 5";
                            $stmt = $conn->query($query);
                        
                            // Lấy tất cả các dòng dữ liệu từ kết quả truy vấn
                            $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            forEach ($news as $newsItem) {
                            echo '<div class="hidden duration-700 ease-in-out flex flex-row" data-carousel-item>';
                            echo '<img src="'.$newsItem['image'].'" class="w-full">';
                            echo '<div class="flex flex-col p-4 leading-normal justify-items-center justify-center max-w-xs">';
                            echo '<h5 class="mb-2 text-2xl font-bold tracking-tight">'.$newsItem['name'].'</h5>';
                            echo '<p class="mb-3 font-normal text-gray-700 ">'.substr($newsItem['description'],0,120).'...</p>';
                            echo '</div>';
                            echo '</div>';
                            }
                            
                        
                        // $conn = null;
                         ?>
                        
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#E2F9EC]  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                            <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-400 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                            <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                
            </a>
        </div>
       
          
        <!-- ----------------------------list papers------------------------------------------------ -->
        <div class=" w-[22rem] p-4 bg-[#E2F9EC] border border-gray-220 rounded-lg shadow sm:p-6 " >
            <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl">
             BÀI VIẾT ĐƯỢC XEM NHIỀU NHẤT
            </h5>
            <?php
            $query2 = "SELECT * FROM paper ORDER BY views DESC LIMIT 5";
            $stmt2 = $conn->query($query2);
 
            // Lấy tất cả các dòng dữ liệu từ kết quả truy vấn
            $papers2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
            echo ' <ul class="my-4 space-y-3">';
            $i =1;
            forEach ($papers2 as $paper2Item) {
                // $query_string = http_build_query($paper2Item);
                // $query_string = $query_string.'"';
                echo '<li>
                <a href="/techshop/public/paper/index?id='.$paper2Item['id'].'" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-[#55dca2] hover:bg-[#266e4f] group hover:shadow ">
                <button class="btn bg-[#266e4f] w-8 h-8 rounded-md">'.$i.'</button>
                <span class="flex-1 ms-3">'.$paper2Item['name'].'</span>
                </a>
                </li>';
                $i++;
            }
            ?>
        </div>

    </div>
    <div>   
        <div class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</div>
        <div class="relative flex justify-start mx-[8rem] mb-[2rem] ">
            <div class="absolute top-[1.4rem] left-[0.2rem] flex items-center ps-3 pointer-events-none">
                <svg class="w-[1.4rem] h-[1.4rem] text-white dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="search" id="searchTitle" class="block w-[26rem] py-[1rem] pr-[8rem] ps-10 text-gray-900 border border-gray-300 rounded-lg text-[1.6rem] " placeholder="Search title paper">
            <button id="search" type="button" class="text-white absolute left-[19rem] h-[2.8rem] w-[6rem] top-[0.6rem] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-[1.2rem] px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
    </div>
    <div  class="flex flex-col ">
    <!------------------------- news list ---------------------------------------->
    <div  id="adContainer" class="flex flex-row justify-center container mx-auto mb-4 flex-wrap">
    <?php 
    $offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;
    $limit = isset($_GET['limit']) ? intval($_GET['limit']) : 3;
    
    // Truy vấn CSDL
    $query1 = "SELECT * FROM paper  LIMIT $offset,$limit";
    //  $query1 = "SELECT DISTINCT * FROM paper order by RAND() limit 3";
     $stmt1 = $conn->query($query1);
 
     // Lấy tất cả các dòng dữ liệu từ kết quả truy vấn
     $papers = $stmt1->fetchAll(PDO::FETCH_ASSOC);
     forEach ($papers as $paperItem) {
        echo '<div class="relative min-h-full mx-4 max-w-sm bg-[#c4f2d9]  hover:bg-[#81e4b4] hover:-translate-y-1 hover:scale-110 border border-gray-200 rounded-lg shadow mb-4" style="min-width: 18rem;">
        <a href="/techshop/public/paper/index?id='.$paperItem['id'].'" class="d-flex">';
        echo '<img class="rounded-t-lg p-3 max-w-20" src="'.$paperItem['image'].'" anh san pham" />';
        echo '</a>';
        echo '<div class="px-4 pb-10">
                <a href="/techshop/public/paper/index?id='.$paperItem['id'].'">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">'.$paperItem['name'].'</h5>
                </a>';
        echo '<p class="mb-3 font-normal text-gray-700 ">'.substr($paperItem['description'],0,120).'...</p>';
        echo '<a href="/techshop/public/paper/index?id='.$paperItem['id'].'" class="absolute bottom-2 left-4 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"  fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>';
        echo '</div>';
        echo '</div>';
        
     }
    ?>
    
</div>
<div class="flex justify-center">
<button id="loadMoreBtn" class="text-[1.4rem] m-4 px-4 py-2 bg-blue-500 text-white rounded-md w-[14rem] h-[3.2rem] text-center hover:-translate-y-1 hover:bg-blue-800">Xem thêm</button>
</div>

</div>
<?php
} catch (PDOException $e) {
    echo '<span style="color:red;"> fail: ' . $e->getMessage().'</span>';
}
?>

<script>
$(document).ready(function () {
    var offset = 0; // Khai báo offset và limit ở đây
    var limit = 6;
    $("#loadMoreBtn").on("click", function () {
        // Gọi Ajax để lấy dữ liệu mới
        $.ajax({
            type: "GET",
            url: "/techshop/app/view/news/ajax.php", // Đặt đường dẫn đến script xử lý truy vấn CSDL ở đây
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
// ///////////////////////////////////////////SEARCH/////////////////////////////////////////////////////
    
var title='';
    $("#searchTitle").on("input", function () {
        // Gọi Ajax để lấy dữ liệu mới
        title = document.querySelector('#searchTitle').value;
        
        if(title.length > 0){
            $.ajax({
            type: "GET",
            url: "/techshop/app/view/news/ajaxSearch.php", // Đặt đường dẫn đến script xử lý truy vấn CSDL ở đây
            data: { title: title },
            success: function (data) {
                // Thêm dữ liệu mới vào container
                $("#adContainer").html(data);
                
            }
        });
        }
        
    });


</script>

    
    
<?php require_once '../app/component/footer.php'?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
</body>
</html>