<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../app/component/head.php';?>
    <title>Paper</title>
</head>
<style>
 @media screen and (max-width: 992px) {
    .listPaper {
        display:none;
    }  
}

</style>
<body>
<?php require_once '../app/component/nav.php'?>
<div class=" p-2 flex flex-row mx-auto">
    <div class=" p-2 flex flex-row mx-auto  justify-center ">
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
        $query = "SELECT * FROM paper WHERE id=:id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);   
        $stmt->execute();
        $paper = $stmt->fetch(PDO::FETCH_ASSOC);
        echo '<div class="main w-[74%]">';
        echo '<div class="text-[2rem] font-semibold ">'.$paper['name'].'</div>';

        echo ' <div class="content">  ';
        echo '<div class="text-gray-600 text-[1rem]">Ngay dang: '.$paper['dateRelease'].'</div>';

        
        // update view
        $query1 = "UPDATE paper SET views = views + 1 WHERE id = :id";
        $stmt1 = $conn->prepare($query1);
        $stmt1->bindParam(':id', $id, PDO::PARAM_INT); // Assuming id is an integer
        $stmt1->execute();

        echo '<div class="flex justify-center">';
        echo '<img src="'.$paper['image'].'" alt="Picture">';
        echo '</div>';

        echo '<div class="text-[2rem]">Đặc điểm nổi bật</div>';
        echo '<div class="text-[1rem] w-[80%]">'.($paper['description']).'</div>';
        echo '</div>';
        echo '</div>';
    }
?>


<!-- ----------------------------list papers------------------------------------------------ -->
<div class="listPaper max-w-sm p-[1rem] bg-[#E2F9EC] border border-gray-220 rounded-lg shadow sm:p-6 " style="width:30%; max-height: 40rem;">
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

</div>
<a href="/techshop/public/news/index" class="flex justify-center items-center m-[1rem]">
    <button type="button" class="text-[2rem] inline-flex items-center px-3 py-2  font-medium text-center text-white bg-[#3DBC72] rounded-lg hover:bg-[#55DCA2] hover:scale-110  w-[16rem] text-center flex flex-row justify-center">
                         Trở về
                        <svg xmlns="http://www.w3.org/2000/svg" class="ms-[1.4rem] w-[3rem] h-[2.6rem]" viewBox="0 0 77 73" fill="none">
                    <path d="M38.5 0C17.2287 0 0 16.2481 0 36.3085C0 56.369 17.2287 72.617 38.5 72.617C59.7713 72.617 77 56.369 77 36.3085C77 16.2481 59.7713 0 38.5 0ZM38.5 9.07713V27.2314H67.375V45.3856H38.5V63.5399L9.625 36.3085L38.5 9.07713Z" fill="white"/>
                    </svg>
    </button>
    </a>
<?php
} catch (PDOException $e) {
    echo '<span style="color:red;"> fail: ' . $e->getMessage().'</span>';
}
?>
<!-- footer -->
<?php require_once '../app/component/footer.php'?>
</body>
</html>