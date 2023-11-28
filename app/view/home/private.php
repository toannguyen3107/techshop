<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php require_once ('../app/component/head.php');?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info User | TECHSHOP</title>
</head>
<body>
    <?php
        require_once('../app/component/nav.php');
    ?>
    <main class="grid grid-cols-12 p-6">
    <div class="col-span-6">
        <?php 
            if($data['avatar'] == null){
        ?>
        <div><img src="/techshop/public/img/profile.png" alt="default avatar" width="200px" height="200px" class="block mx-auto"></div>
        <p class="text-center font-bold transition ease-in-out delay-150 text-blue-500 hover:-translate-y-1 hover:scale-110 hover:text-indigo-500 duration-300">Hello, <?php echo $data['name'];?></p>
        <?php
            }
        ?>
    </div>
    <div class="col-span-6">
        <div>
            <h1 class="mb-[1rem] text-lg font-bold">Thông tin cá nhân</h1>
        </div>
        
        <form action="#" method="post" class="mb-3">
            <label for="name">Name</label><br>
            <input type="text" value="<?php echo $data['name'];?>" disabled>
            <br>
            <label for="email">Email</label><br>
            <input type="email" name="email" value="<?php echo $data['email'];?>">
            <br>
            <label for="firstname">First Name</label><br>
            <input type="text" name="firstname" value="<?php echo $data['firstname'];?>">
            <br>
            <label for="lastname">Last Name</label><br>
            <input type="text" name="lastname" value="<?php echo $data['lastname'];?>">
            <br>
            <label for="phone">First Name</label><br>
            <input type="number" name="phone" value="<?php echo $data['phone'];?>">
            <br>
            <button class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 w-[100px] h-[50px]"><a href="/techshop/public/login/logout" class="block py-1 w-[100%] border-[0.12rem] border-black rounded-[0.4rem] bg-red-600 hover:bg-red-500 text-center">Logout</a></button>
            <button type="submit" class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 w-[80px] h-[50px]"><a href="/techshop/public/login/logout" class="block py-1 w-[100%] border-[0.12rem] border-black rounded-[0.4rem] bg-green-500 hover:bg-green-400">Save</a></button>
        </form>
        <div>
        
        </div>
        
    </div>
        
    </main>
    <?php require_once('../app/component/footer.php');?>
</body>
</html>