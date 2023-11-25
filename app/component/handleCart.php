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
                $prod_id = $_POST['prod_id'];
                $prod_quantity = $_POST['prod_quantity'];

                $query = "SELECT * FROM `cart` WHERE productID='$prod_id'";
                $query_product = $conn->query($query);

                if (mysqli_num_rows($query_product) > 0){
                    $update_query = "UPDATE cart SET quantity='$prod_quantity' WHERE productID = '$prod_id'";
                    $update_query_run = $conn->query($update_query);
                    if ($update_query_run) echo 200;
                    else echo 500;
                }
                else{
                    echo "something went wrong";
                }

                break;
            case 'delete':
                $prod_id = $_POST['prod_id'];

                $query = "SELECT * FROM `cart` WHERE productID='$prod_id'";
                $query_product = $conn->query($query);

                if (mysqli_num_rows($query_product) > 0){
                    $delete_query = "DELETE FROM cart WHERE productID = '$prod_id'";
                    $delete_query_run = $conn->query($delete_query);
                    if ($delete_query_run) echo 200;
                    else echo 500;
                }
                else{
                    echo "something went wrong";
                }
            default:
                echo 500;
        }
    }
    $conn->close();
?>