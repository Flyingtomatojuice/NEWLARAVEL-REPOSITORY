<html>
<head>
	<title>Application</title>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
   <!-- css -->
	<link rel='stylesheet' href="<?php echo e(asset('css/navbar.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('css/responsiveRegistration.css')); ?>">
   
   <!-- -->
   <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<!-- scripts -->
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   
  <!-- -->
  
  <script src="<?php echo e(asset('js/responsiveLogin2.js')); ?>"></script>
   <script src="<?php echo e(asset('js/responsiveLogin.js')); ?>"></script>
   <script src="<?php echo e(asset('js/responsiveRegistration.js')); ?>"></script>
   
   
       
</head>
<body>
   <!-- SIDE NAVBAR -->
 
   
    
   <!-- TOP NAVBAR -->
   <nav class="navbar navbar-inverse bg-inverse navbar-toggleable-md">
   <div class="container">
      
      <!-- guest -->
      <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Laravel</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleCenteredNav" aria-controls="navbarsExampleCenteredNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>    
      <div class="collapse navbar-collapse navbar-collapse justify-content-md-end" id="navbarsExampleCenteredNav">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" href="<?php echo e(url('/login')); ?>">Login </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?php echo e(url('/register')); ?>">Register</a>
            </li>
            
            <!-- AFTER LOGGING IN -->
            
         </ul>
      </div>
   </div>
</nav>

<?php echo $__env->yieldContent('content'); ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\JBE\laravel-project\resources\views/layouts/main.blade.php ENDPATH**/ ?>