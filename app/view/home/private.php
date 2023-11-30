<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- tailwind - jquery - flewbie -->
    <?php require_once ('../app/component/head.php');?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info User | TECHSHOP</title>
    <script>
        $(document).ready(function(){
            $('#togglePassword').click(()=>{
                // console.log($('#password').attr('type'));; //check valid statement
                if($('#password').attr('type') == 'password'){
                    $('#password').attr('type', 'text');
                }else{
                    $('#password').attr('type', 'password');
                }
            });
        });
    </script>
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
        <div class="transition ease-in-out delay-150 hover:scale-110"><img src="/techshop/public/img/profile.png" alt="default avatar" width="200px" height="200px" class="block mx-auto"></div>
        <p class="text-center font-bold transition ease-in-out delay-150 text-blue-500 hover:-translate-y-1 hover:scale-110 hover:text-indigo-500 duration-300">Hello, <?php echo $data['name'];?></p>
        <?php
            }
        ?>
    </div>
    <div class="col-span-6">
        <div>
            <h1 class="mb-[1rem] text-lg font-bold">Thông tin cá nhân</h1>
        </div>
        
        <form action="/techshop/public/login/changeinfo" method="post" class="mb-3">
            <label for="name">Name</label><br>
            <input type="text" class="w-[50%]" value="<?php echo $data['name'];?>" id="name" disabled>
            <br>
            <label for="email">Email</label><br>
            <input type="email" name="email" class="w-[50%]  focus:rounded-lg" value="<?php echo $data['email'];?>" id="email">
            <br>
            <p class="relative">
                <label for="password">Password</label><br>
                <input type="password" name="password" class="w-[50%] focus:rounded-lg" value="<?php echo $data['password'];?>" id="password">
                <i class="bi bi-eye-slash text-lg text-slate-500  font-semibold absolute top-[2rem] left-[46%] hover:text-slate-950 active:text-red-600" id="togglePassword"></i>  
            </p>
            
            <label for="firstname">First Name</label><br>
            <input type="text" name="firstname" class="w-[50%] focus:rounded-lg" value="<?php echo $data['firstname'];?>" id="firstname">
            <br>
            <label for="lastname">Last Name</label><br>
            <input type="text" name="lastname" class="w-[50%] focus:rounded-lg" value="<?php echo $data['lastname'];?>" id="lastname">
            <br>
            <label for="phone">Phone</label><br>
            <input type="number" name="phone" class="w-[50%] focus:rounded-lg" value="<?php echo $data['phone'];?>" id="phone">
            <br>
            <div role="button" class="inline-block transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 w-[100px] h-[50px]"><a href="/techshop/public/login/logout" class="block py-1 w-[100%] border-[0.12rem] border-black rounded-[0.4rem] bg-red-600 hover:bg-red-500 text-center">Logout</a></div>
            <button type="submit" class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 w-[80px] py-1 bg-green-600 hover:bg-green-500 border-2 border-black rounded-lg">Save</button>
        </form>
        <div>
        
        </div>
        
    </div>
        
    </main>
    <?php require_once('../app/component/footer.php');?>
</body>
</html>