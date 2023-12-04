<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.css"  rel="stylesheet" /> -->
<!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->
    <title>Home | TECHSHOP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	

	
	<link rel="stylesheet" href="/techshop/app/view/login/index.css">
    
</head>
<body>
<?php
$nameEr  = $emailEr = $passwordEr = $passwordAgainEr = '';
$name  = $email = $password = $passwordAgain = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
	$passwordAgain = $_POST["passwordAgain"];
	
	
    $flag = true;
   
    // Kiểm tra dữ liệu đầu vào
   


    if( strlen($name) > 255 || strlen($name) == 0) {
        $flag = false;
        $nameEr = 'invalid name (string 5-40 characters)';
    }
	if( strlen($email) < 2) {
        $flag = false;
        $emailEr = 'invalid email';
    }
	if( strlen($pwd) < 8) {
        $flag = false;
        $passwordEr = 'invalid password more than 8 characters';
		
    }
	
	if($pwd != $passwordAgain) {
		$flag = false;
		$passwordAgainEr='invalid again';
	}

    if ($flag) {
        // Kết nối đến cơ sở dữ liệu
    try {
        $host = 'localhost';  // Nếu MySQL server chạy trên localhost
        $dbname = 'techshop';
        $username = 'root';   // Tên người dùng MySQL, thường là "root" cho localhost
        $password = ''; 
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
		// Thiết lập chế độ lấy dữ liệu theo mảng kết hợp
		$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        // Thiết lập chế độ lỗi để báo cáo tất cả các lỗi
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// Kiểm tra sự tồn tại của email
		$sql = "SELECT COUNT(*) as count FROM User WHERE email = :email";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':email', $email, PDO::PARAM_STR);
		$stmt->execute();

		$result = $stmt->fetch(PDO::FETCH_ASSOC);
    	$count = $result['count'];
		
		// 
		// Kiểm tra sự tồn tại của user_name
		$sql2 = "SELECT COUNT(*) as count2 FROM User WHERE user_name = :name";
		$stmt2 = $conn->prepare($sql2);
		$stmt2->bindParam(':name', $name, PDO::PARAM_STR);
		$stmt2->execute();

		$result2 = $stmt2->fetch(PDO::FETCH_ASSOC);
    	$count2 = $result2['count2'];
		$flag_available =true;
	// Kiểm tra kết quả và chèn dữ liệu nếu email không tồn tại
	if ($count > 0) {
    	$emailEr="Đã tồn tại email này trong hệ thống";
		$flag_available =false;
} 	if ($count2 > 0) {
		$nameEr="Đã tồn tại User Name này trong hệ thống";
		$flag_available =false;
} 
	if($flag_available) {
        // Truy vấn để thêm dữ liệu mới
        $query = "INSERT INTO User (user_name, password, email) VALUES (:name, :password, :email)";
        $stmt1 = $conn->prepare($query);
        
        $stmt1->bindParam(':name', $name);
        $stmt1->bindParam(':password', $pwd);
        $stmt1->bindParam(':email', $email);
        $stmt1->execute();

        echo " <span style='color:green;'>Add Success</span> ";
		$name = $phone = $email = $pwd = $passwordAgain = '';
    }
} catch (PDOException $e) {
        echo '<span style="color:red;"> Add fail: ' . $e->getMessage().'</span>';
    }
    $conn = null;
    }
    
}
?>

    <div class="container" id="container">
	<div class="form-container sign-up-container">
	<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
	echo "<script>";
	echo "container = document.getElementById('container');";
	echo "container.classList.add('right-panel-active');";
	echo "</script>";}
	?>

		<form method="post">
			<h1>Sign Up</h1>
			
			<div class="social-container">
				<a href="#" class="social">
					<svg xmlns="http://www.w3.org/2000/svg" width="45" height="44" viewBox="0 0 45 44" fill="none">
						<path d="M44.5 22C44.5 33.8636 34.6609 43.5 22.5 43.5C10.3391 43.5 0.5 33.8636 0.5 22C0.5 10.1364 10.3391 0.5 22.5 0.5C34.6609 0.5 44.5 10.1364 44.5 22Z" stroke="#9D9D9D"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M18.9914 33.3014V23.0089H15V18.7204H18.9914V15.2895C18.9914 11.7446 21.6029 10 25.282 10C27.0442 10 28.5589 10.1132 29 10.163V13.8683L26.4485 13.8691C24.4478 13.8691 23.9808 14.6865 23.9808 15.8856V18.7204H28.9701L27.9722 23.0089H23.9808L24.0606 33.3014" fill="#3B5998"/>
						</svg>
				</a>
				<a href="#" class="social">
					<svg xmlns="http://www.w3.org/2000/svg" width="45" height="44" viewBox="0 0 45 44" fill="none">
						<path d="M44.5 22C44.5 33.8636 34.6609 43.5 22.5 43.5C10.3391 43.5 0.5 33.8636 0.5 22C0.5 10.1364 10.3391 0.5 22.5 0.5C34.6609 0.5 44.5 10.1364 44.5 22Z" stroke="#9D9D9D"/>
						<path d="M33 22.556C33 21.7069 32.9285 21.0873 32.7738 20.4448H22.7143V24.2771H28.619C28.5 25.2294 27.8571 26.6637 26.4285 27.6274L26.4085 27.7557L29.5892 30.1306L29.8095 30.1518C31.8333 28.3503 33 25.6998 33 22.556Z" fill="#4285F4"/>
						<path d="M22.7143 32.6531C25.6071 32.6531 28.0356 31.7351 29.8095 30.1518L26.4285 27.6274C25.5238 28.2356 24.3095 28.6601 22.7143 28.6601C19.881 28.6601 17.4762 26.8587 16.619 24.3689L16.4934 24.3792L13.1861 26.8461L13.1428 26.962C14.9047 30.3353 18.5238 32.6531 22.7143 32.6531Z" fill="#34A853"/>
						<path d="M16.619 24.3689C16.3928 23.7264 16.2619 23.0379 16.2619 22.3265C16.2619 21.6151 16.3928 20.9267 16.6071 20.2842L16.6011 20.1473L13.2524 17.6408L13.1428 17.691C12.4167 19.0909 12 20.6628 12 22.3265C12 23.9902 12.4167 25.5621 13.1428 26.962L16.619 24.3689Z" fill="#FBBC05"/>
						<path d="M22.7143 15.9929C24.7262 15.9929 26.0833 16.8305 26.8571 17.5304L29.8809 14.6849C28.0238 13.0212 25.6071 12 22.7143 12C18.5238 12 14.9047 14.3177 13.1428 17.691L16.6071 20.2842C17.4762 17.7943 19.881 15.9929 22.7143 15.9929Z" fill="#EB4335"/>
						</svg>
				</a>
			</div>
			<span>or use your email for registration</span>

			
			<input type="text" placeholder="Name" name="name" value="<?php echo $name ?>"/>
			<div style="width: 100%; display:flex; justify-content: flex-start;">
			<?php
                echo ' <span style="color:red;" > *'. $nameEr .'</span> '; 
                ?>
			</div>
			
			
			<input type="email" placeholder="Email" name="email" value="<?php echo $email ?>"/>
			<div style="width: 100%; display:flex; justify-content: flex-start;">
			<?php
                echo ' <span style="color:red;"> *'. $emailEr .'</span> '; 
                ?>
			</div>
			
			<input type="password" placeholder="Password" name="password" value="<?php echo $pwd ?>"/>
			<div style="width: 100%; display:flex; justify-content: flex-start;">
			<?php
                echo ' <span style="color:red;"> *'. $passwordEr .'</span> '; 
                ?>
			</div>
			<input type="password" placeholder="Password Again"  name="passwordAgain"/>
			<div style="width: 100%; display:flex; justify-content: flex-start;">
			<?php
                echo ' <span style="color:red;"> *'. $passwordAgainEr .'</span> '; 
                ?>
			</div>

			<div>
				<button type="submit" >Sign Up</button>
				<button id="signIn" type="button">Sign In</button>
			</div>
			
		</form>


	</div>
	<?php
		if(!isset($_SESSION['login'])){
	?>
	<!--                    sign-in                          -->
	<div class="form-container sign-in-container">
		<form action="/techshop/public/login/login" name='login' method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social">
					<svg xmlns="http://www.w3.org/2000/svg" width="45" height="44" viewBox="0 0 45 44" fill="none">
						<path d="M44.5 22C44.5 33.8636 34.6609 43.5 22.5 43.5C10.3391 43.5 0.5 33.8636 0.5 22C0.5 10.1364 10.3391 0.5 22.5 0.5C34.6609 0.5 44.5 10.1364 44.5 22Z" stroke="#9D9D9D"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M18.9914 33.3014V23.0089H15V18.7204H18.9914V15.2895C18.9914 11.7446 21.6029 10 25.282 10C27.0442 10 28.5589 10.1132 29 10.163V13.8683L26.4485 13.8691C24.4478 13.8691 23.9808 14.6865 23.9808 15.8856V18.7204H28.9701L27.9722 23.0089H23.9808L24.0606 33.3014" fill="#3B5998"/>
						</svg>
				</a>
				<a href="#" class="social">
					<svg xmlns="http://www.w3.org/2000/svg" width="45" height="44" viewBox="0 0 45 44" fill="none">
						<path d="M44.5 22C44.5 33.8636 34.6609 43.5 22.5 43.5C10.3391 43.5 0.5 33.8636 0.5 22C0.5 10.1364 10.3391 0.5 22.5 0.5C34.6609 0.5 44.5 10.1364 44.5 22Z" stroke="#9D9D9D"/>
						<path d="M33 22.556C33 21.7069 32.9285 21.0873 32.7738 20.4448H22.7143V24.2771H28.619C28.5 25.2294 27.8571 26.6637 26.4285 27.6274L26.4085 27.7557L29.5892 30.1306L29.8095 30.1518C31.8333 28.3503 33 25.6998 33 22.556Z" fill="#4285F4"/>
						<path d="M22.7143 32.6531C25.6071 32.6531 28.0356 31.7351 29.8095 30.1518L26.4285 27.6274C25.5238 28.2356 24.3095 28.6601 22.7143 28.6601C19.881 28.6601 17.4762 26.8587 16.619 24.3689L16.4934 24.3792L13.1861 26.8461L13.1428 26.962C14.9047 30.3353 18.5238 32.6531 22.7143 32.6531Z" fill="#34A853"/>
						<path d="M16.619 24.3689C16.3928 23.7264 16.2619 23.0379 16.2619 22.3265C16.2619 21.6151 16.3928 20.9267 16.6071 20.2842L16.6011 20.1473L13.2524 17.6408L13.1428 17.691C12.4167 19.0909 12 20.6628 12 22.3265C12 23.9902 12.4167 25.5621 13.1428 26.962L16.619 24.3689Z" fill="#FBBC05"/>
						<path d="M22.7143 15.9929C24.7262 15.9929 26.0833 16.8305 26.8571 17.5304L29.8809 14.6849C28.0238 13.0212 25.6071 12 22.7143 12C18.5238 12 14.9047 14.3177 13.1428 17.691L16.6071 20.2842C17.4762 17.7943 19.881 15.9929 22.7143 15.9929Z" fill="#EB4335"/>
						</svg>
				</a>
				
			</div>
			<span>or use your account</span>
			<input type="text" placeholder="Username" name="name"/>
			<input type="password" placeholder="Password" name="password"/>
			<a href="#">Forgot your password?</a>
			<div>
			<button type="submit">Sign In</button>
			<button id="signUp" type="button">Sign Up</button>
			</div>
			
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Đăng kí dể dàng!</h1>
				<p>Trở thành thành viên của chúng tôi để nhận được nhiều ưu đãi</p>
				
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Xin chào !</h1>
				<p>Hảy đăng nhập để trải trải nghiệm dịch vụ của chúng tôi</p>
			</div>
		</div>
	</div>
</div>

<script src="/techshop/app/view/login/index.js"></script>
	<?php
			}else{
		header('location: /techshop');
		exit();
	}
	?>
</body>
</html>