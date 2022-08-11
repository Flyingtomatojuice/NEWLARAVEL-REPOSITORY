<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin</title> 
      <link rel="stylesheet" href="<?php echo e(asset('css/admin/adminRegister.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/sidebar.css')); ?>">
      <link rel='stylesheet' href="<?php echo e(asset('css/admin/application.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/admin/announcement.css')); ?>">
      <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="<?php echo e(asset('js/sidebar.js')); ?>"></script>
      <script src="<?php echo e(asset('js/admin/adminRegister.js')); ?>"></script>
      <script src="<?php echo e(asset('js/admin/application.js')); ?>"></script>
      <script src="<?php echo e(asset('js/admin/announcement.js')); ?>"></script>
      <link rel='stylesheet' href="<?php echo e(asset('css/navbar.css')); ?>">
   </head>
   <body style="background-color:rgb(210, 210, 210);">

    
        <!-- Lets start making our side navigation menu -->

      <!-- now lets add a hamburger btn -->
      <span class="material-icons-outlined" id="ham">
        menu
        </span>

    <div class="side-nav">

      
        <span class="material-icons-outlined" id="close">
            close
            </span> 
        <header> <a class="navbar-brand" href="<?php echo e(url('/admin')); ?>">Admin</a></header>
        <ul>
            
            
            <a href="#">
                <li><span class="material-icons-outlined">
                        dashboard
                    </span><span class="menu">Dashboard</span></li>
            </a>
            <a href="<?php echo e(url('/admin/application')); ?>">
                <li><span class="material-icons-outlined">
                        table_view
                    </span><span class="menu">Application</span></li>
                    
            </a>
            <a href="<?php echo e(url('/admin/announcement')); ?>">
                <li><span class="material-icons-outlined">
                        announcement
                    </span><span class="menu">Announcement</span></li>
            </a>
            <a href="<?php echo e(url('/admin/admin-reg')); ?>">
                <li><span class="material-icons-outlined">
                        manage_accounts
                    </span><span class="menu">User Accounts</span></li>
            </a>
            
        
            <a href="#">
                <li><span class="material-icons-outlined">
                    account_circle
                    </span><span class="menu">Account</span></li>
            </a>
         <a action="<?php echo e(url('/logout')); ?>" onclick="destroyData(this)" style="color:White;cursor: pointer;">
                <li><span class="material-icons-outlined">
                        logout
                    </span><span class="menu">Logout</span></li>
            </a>

        </ul>
        
        
    </div>

    
    <?php echo $__env->yieldContent('content'); ?>
   </body>
</html><?php /**PATH C:\xampp\htdocs\JBE\laravel-project\resources\views/admin/index.blade.php ENDPATH**/ ?>