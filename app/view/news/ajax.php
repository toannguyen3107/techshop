
<?php
// your_backend_script.php
                        $host = 'localhost';  // Nếu MySQL server chạy trên localhost
                        $dbname = 'techshop';
                        $username = 'root';   // Tên người dùng MySQL, thường là "root" cho localhost
                        $password = ''; 
                        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                        
                        // Thiết lập chế độ lỗi để báo cáo tất cả các lỗi
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 3;
$limit = isset($_GET['limit']) ? intval($_GET['limit']) : 3;

$query1 = "SELECT * FROM paper  LIMIT $offset,$limit";
$stmt1 = $conn->query($query1);
$papers = $stmt1->fetchAll(PDO::FETCH_ASSOC);

forEach ($papers as $paperItem) {
    echo '<div class="relative min-h-full min-w-50 mx-4 max-w-sm bg-[#c4f2d9]  hover:bg-[#81e4b4] hover:-translate-y-1 hover:scale-110 border border-gray-200 rounded-lg shadow mb-4" style="min-width: 18rem;">
    <a href="/techshop/public/paper/index?id='.$paperItem['id'].'" class="d-flex">';
    echo '<img class="rounded-t-lg p-3 max-w-20" src="'.$paperItem['image'].'" anh san pham" />';
    echo '</a>';
    echo '<div class="px-4 pb-10">
            <a href="/techshop/public/paper/index?id='.$paperItem['id'].'">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">'.$paperItem['name'].'</h5>
            </a>';
    echo '<p class="mb-3 font-normal text-gray-700 ">'.substr($paperItem['description'],27,120).'...</p>';
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
