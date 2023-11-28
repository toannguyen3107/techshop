<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../app/component/head.php';?>
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.css"  rel="stylesheet" />
    <!-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> -->
</head>
<body>
<?php require_once '../app/component/nav.php'?>
    <!-- -------------------NEWS data-carousel------------------------ -->
    <div class="container p-2 flex flex-row mx-auto  justify-center ">
        <!------------- left---------- -->
        <div class="me-4" style="width:70%">
            <a href="#" class=" flex flex-col items-center bg-gray-300 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-sx hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <?php 
                        $host = 'localhost';  // Nếu MySQL server chạy trên localhost
                        $dbname = 'news';
                        $username = 'root';   // Tên người dùng MySQL, thường là "root" cho localhost
                        $password = ''; 
                         try {
                            
                            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                        
                            // Thiết lập chế độ lỗi để báo cáo tất cả các lỗi
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                            $query = "SELECT * FROM news";
                            $stmt = $conn->query($query);
                        
                            // Lấy tất cả các dòng dữ liệu từ kết quả truy vấn
                            $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            forEach ($news as $newsItem) {
                            echo '<div class="hidden duration-700 ease-in-out flex flex-row" data-carousel-item>';
                            echo '<img src="'.$newsItem['image'].'" class="w-full">';
                            echo '<div class="flex flex-col p-4 leading-normal justify-items-center justify-center max-w-xs">';
                            echo '<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">'.$newsItem['name'].'</h5>';
                            echo '<p class="mb-3 font-normal text-gray-700 dark:text-gray-400">'.substr($newsItem['description'],27,200).'...</p>';
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
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-400 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-400 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                
            </a>
        </div>
       
          
        <!-- ----------------------------list papers------------------------------------------------ -->
        <div class=" max-w-sm p-4 bg-gray-200 border border-gray-220 rounded-lg shadow sm:p-6 dark:bg-gray-800 dark:border-gray-700" style="width:30%">
            <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
            BAI VIET DUOC XEM NHIU NHAT
            </h5>
            <?php
            $query2 = "SELECT * FROM paper ORDER BY views DESC LIMIT 5";
            $stmt2 = $conn->query($query2);
 
            // Lấy tất cả các dòng dữ liệu từ kết quả truy vấn
            $papers2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
            echo ' <ul class="my-4 space-y-3">';
            $i =1;
            forEach ($papers2 as $paper2Item) {
                echo '<li>
                <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-400 hover:bg-gray-230 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                <button class="btn bg-gray-300 w-8 h-8 rounded-md">'.$i.'</button>
                <span class="flex-1 ms-3">'.$paper2Item['name'].'</span>
                </a>
                </li>';
                $i++;
            }
            ?>
            <!-- <ul class="my-4 space-y-3">
            <li>
            <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-400 hover:bg-gray-230 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
            <button class="btn bg-gray-300 w-8 h-8 rounded-md">1</button>
            <span class="flex-1 ms-3 whitespace-nowrap">MetaMask</span>
            </a>
            </li>

            <li>
                <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-400 hover:bg-gray-230 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                <button class="btn bg-gray-300 w-8 h-8 rounded-md">2</button>
                <span class="flex-1 ms-3 whitespace-nowrap">MetaMask</span>
                </a>
                </li>


            <li>
                <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-400 hover:bg-gray-230 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                <button class="btn bg-gray-300 w-8 h-8 rounded-md">3</button>
                <span class="flex-1 ms-3 whitespace-nowrap">MetaMask</span>
                </a>
                </li>
            
            <li>
                <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-400 hover:bg-gray-230 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                <button class="btn bg-gray-300 w-8 h-8 rounded-md">4</button>
                <span class="flex-1 ms-3 whitespace-nowrap">MetaMask</span>
                </a>
                </li>
            <li>
                <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-400 hover:bg-gray-230 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                <button class="btn bg-gray-300 w-8 h-8 rounded-md">5</button>
                <span class="flex-1 ms-3 whitespace-nowrap">MetaMask</span>
                </a>
                </li> -->
        </div>

    </div>

    <!------------------------- news list ---------------------------------------->
<div class="flex flex-row justify-between container mx-auto mb-4">
    <?php 

     $query1 = "SELECT DISTINCT * FROM paper order by RAND() limit 3";
     $stmt1 = $conn->query($query1);
 
     // Lấy tất cả các dòng dữ liệu từ kết quả truy vấn
     $papers = $stmt1->fetchAll(PDO::FETCH_ASSOC);
     forEach ($papers as $papersItem) {
        echo '<div class="relative min-h-full mx-4 max-w-sm bg-gray-300 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#" class="d-flex">';
        echo '<img class="rounded-t-lg p-3 max-w-20" src="'.$papersItem['image'].'" anh san pham" />';
        echo '</a>';
        echo '<div class="px-4 pb-10">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">'.$paperItem['name'].'</h5>
                </a>';
        echo '<p class="mb-3 font-normal text-gray-700 dark:text-gray-400">'.substr($papersItem['description'],27,120).'...</p>';
        echo '<a href="#" class="absolute bottom-2 left-4 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"  fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>';
        echo '</div>';
        echo '</div>';
        
     }
    } catch (PDOException $e) {
        echo '<span style="color:red;"> fail: ' . $e->getMessage().'</span>';
    }
    ?>
    <!-- <div class="mx-4 max-w-sm bg-gray-300 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="/techshop/public/img/news/image/ipad-pro-2021-11inch-grey_3.webp" alt="anh san pham" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Ipad air 7 2024</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                 <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"  fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
    
    
    <div class="mx-4 max-w-sm bg-gray-300 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="/techshop/public/img/news/image/ipad-pro-2021-11inch-grey_3.webp" alt="anh san pham" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Ipad air 7 2024</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                 <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"  fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
    
    
    <div class="mx-4 max-w-sm bg-gray-300 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="/techshop/public/img/news/image/ipad-pro-2021-11inch-grey_3.webp" alt="anh san pham" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Ipad air 7 2024</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                 <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"  fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div> -->
    
    
    
</div>


    
    
<?php require_once '../app/component/footer.php'?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
</body>
</html>