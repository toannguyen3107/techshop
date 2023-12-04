<?php
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database = "techshop";
                    
    $conn = mysqli_connect($server_name, $user_name, $password, $database);
    if (!$conn) {
        echo "Connection failed!";
    }
    if (isset($_POST['scope'])){
        $scope = $_POST['scope'];
        switch ($scope){
            case 'update':
                $user_id = $_POST["user_id"];
                $prod_id = $_POST['prod_id'];
                $prod_quantity = $_POST['prod_quantity'];

                $query = "SELECT * FROM `cart` WHERE productID='$prod_id' AND userID = '$user_id'";
                $query_product = $conn->query($query);

                if (mysqli_num_rows($query_product) > 0){
                    $update_query = "UPDATE cart SET quantity='$prod_quantity' WHERE productID = '$prod_id' AND userID = '$user_id'";
                    $update_query_run = $conn->query($update_query);
                    if ($update_query_run) echo 200;
                    else echo 500;
                }
                else{
                    echo 500;
                }

                break;
            case 'delete':
                $user_id = $_POST["user_id"];
                $prod_id = $_POST['prod_id'];

                $query = "SELECT * FROM `cart` WHERE productID='$prod_id' AND userID = '$user_id'";
                $query_product = $conn->query($query);

                if (mysqli_num_rows($query_product) > 0){
                    $delete_query = "DELETE FROM `cart` WHERE productID = '$prod_id' AND userID = '$user_id'";
                    $delete_query_run = $conn->query($delete_query);
                    if ($delete_query_run) echo 200;
                    else echo 500;
                }
                else{
                    echo "something went wrong";
                }
                break;

            case 'add':
                $prod_id = $_POST['prod_id'];
                $user_id = $_POST['user_id'];

                $queryCheck = "SELECT productID, quantity FROM `cart` WHERE userID = '$user_id' AND productID = '$prod_id'";
                if ($productExist = $conn->query($queryCheck)){
                    if(mysqli_num_rows($productExist) > 0){
                        $quantity = mysqli_fetch_assoc($productExist)["quantity"] + 1;
                        $query = "UPDATE cart SET quantity='$quantity' WHERE productID = '$prod_id' AND userID = '$user_id'";
                        if ($queryInsert = $conn->query($query)){
                            echo 300;
                        }
                        else echo $conn->error;
                    }
                    else{
                        $query = "INSERT INTO `cart` (userID, productID, quantity) VALUES ('$user_id', '$prod_id', 1)";
                        if ($queryInsert = $conn->query($query)){
                            echo 200;
                        }
                        else echo $conn->error;
                    }
                }else echo $conn->error;

                break;
            default:
                echo 500;
        }
    }
    $conn->close();
?>