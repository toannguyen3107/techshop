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
            if($data['avatar'] != null){
        ?>
        
        <?php
            }
        ?>
    </div>
    <div class="col-span-6">
        <button class="inline-block"><a href="/techshop/public/login/logout" class="px-5 py-3 border-[0.15rem] border-black rounded-[0.7rem] bg-red-600 hover:bg-red-500">Logout</a></button>
        <button class="inline-block"><a href="/techshop/public/login/logout" class="px-5 py-3 border-[0.15rem] border-black rounded-[0.7rem] bg-green-500 hover:bg-green-400">Save</a></button>
    </div>
        
    </main>
    <?php require_once('../app/component/footer.php');?>
</body>
</html>