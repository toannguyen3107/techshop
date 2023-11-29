<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        
        form {
           width: 50%;
            background-color: antiquewhite ;
            font-size: 1.4rem;
            display: flex;
            flex-direction: column;
            line-height: 1rem;
            padding:2rem;
            min-width:300px;
            border-radius: 0.4rem;

        }
        .mid-text {
            text-align: center;
            font-size:1.2rem;
            font-weight: bold;
        }
        .btn {
            height: 2.2rem;
            width: 5.2rem;
            border-radius: 0.4rem;
            border: 1px solid white;
            margin: .4rem;
            color: white;
            font-size: 0.8rem;
        }
        .btn:hover {
            cursor: pointer;
            opacity: 0.6;
        }
        .btn-read {
            background-color:rgb(3, 185, 3);
        }
        .btn-edit {
            background-color:rgb(218, 129, 6);
        }
        .btn-delete {
            background-color:rgb(218, 8, 22);
        }
        .btn-add {
            width: 8rem;
            background-color:rgb(15, 62, 233);
        }
        .list-action{
           
            display: flex;
            flex-direction: row;
        }
        input {
            height:1.8rem;
            width:10rem;
            margin: 0.6rem;
            font-size: 1.4rem;
        }
    </style>
</head>
<body>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $image = $_POST["image"];

    $flag = true;
    $idEr = $nameEr = $descriptionEr = $priceEr = $imageEr = '';
    // Kiểm tra dữ liệu đầu vào
    if (filter_var($id, FILTER_VALIDATE_INT) == false || $id < 0) {
        $flag = false;
        $idEr = 'invalid id (integer)';
    }

    if (filter_var($price, FILTER_VALIDATE_FLOAT) === false || $price < 0) {
        $flag = false;
        $priceEr = 'invalid id (integer)';
    }

    if(strlen($name) < 5 || strlen($name) > 40) {
        $flag = false;
        $nameEr = 'invalid name (string 5-40 characters)';
    }

    if(strlen($description) > 5000) {
        $flag = false;
        $descriptionEr = 'invalid description (string 5000 characters)';
    }
    if(strlen($image) > 255) {
        $flag = false;
        $imageEr = 'invalid image (string 255 characters)';
    }

    if ($flag) {
        // Kết nối đến cơ sở dữ liệu
    try {
        $host = 'localhost';  // Nếu MySQL server chạy trên localhost
        $dbname = 'shop';
        $username = 'root';   // Tên người dùng MySQL, thường là "root" cho localhost
        $password = ''; 
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
        // Thiết lập chế độ lỗi để báo cáo tất cả các lỗi
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Truy vấn để thêm dữ liệu mới
        $query = "INSERT INTO products (id,name, description, price, image) VALUES (:id,:name, :description, :price, :image)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':image', $image);
        $stmt->execute();

        echo " <span style='color:green;'>Add Success</span> ";
    } catch (PDOException $e) {
        echo '<span style="color:red;"> Add fail: ' . $e->getMessage().'</span>';
    }
    $conn = null;
    }
    
}
?>

    <h1>ADD NEW PRODUCT</h1>
    <form action="" method="post">
        <!-- ID -->
        <label for="id">ID:</label>
        <div>
            <input type="text" id="id" name="id" value="<?php echo $id ?>"><br>
            <?php
            echo ' <span style="color:red;"> *'. $idEr .'</span> '; 
            ?>
        </div>
        
       
        <!-- Name -->
        <label for="name">Name:</label>
        <div>
            <input type="text" id="name" name="name" value="<?php echo $name ?>"><br>
            <?php
                echo ' <span style="color:red;"> *'. $nameEr .'</span> '; 
                ?>
        </div>
        

        <!-- Description -->
        <label for="description">Description:</label>
        <div>
            <input type="text" id="description" name="description" value="<?php echo $description ?>"><br>
            <?php
                echo ' <span style="color:red;"> *'. $descriptionEr .'</span> '; 
                ?>
        </div>
       

        <!-- Price -->
        <label for="price">Price:</label>
        <div>
            <input type="text" id="price" name="price" value="<?php echo $price ?>"><br>
            <?php
                echo ' <span style="color:red;"> *'. $priceEr .'</span> '; 
                ?>
        </div>
        
        <!-- Link image -->
        <label for="image">Link Image:</label>
        <div>
            <input type="text" id="image" name="image" value="<?php echo $image ?>"><br>
            <?php
                echo ' <span style="color:red;"> *'. $imageEr .'</span> '; 
                ?>
        </div>
        
            

        <div>
            <input type="submit" value="Add" class="btn btn-add">
            <a href="index.php">
                <button type="button" class="btn btn-read">Read</button>
            </a>
        </div>
        
    </form>
    
    
    
</body>
</html>
</body>
</html>