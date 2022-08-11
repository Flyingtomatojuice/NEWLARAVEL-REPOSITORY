<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="/css/login.css" />
    <link href="<?php echo e(asset('CSS/login.css')); ?>" rel="stylesheet" type="text/css" >
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="<?php echo e(route('login-user')); ?>" class="sign-in-form" method="POST">
            <?php echo csrf_field(); ?>
            <?php if(Session::has('success')): ?>
            <div class="alert alert-success"><?php echo e(Session::get('success')); ?> </div>
            <?php endif; ?>
            <?php if(Session::has('fail')): ?>
            <div class="alert alert-danger"><?php echo e(Session::get('fail')); ?> </div>
          <?php endif; ?>
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" name="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>


          <form action="<?php echo e(route('registered')); ?>" class="sign-up-form" method="POST">
            <?php echo csrf_field(); ?>
            <?php if(Session::has('Name')): ?>
            <div class="alert alert-warning"><?php echo e(Session::get('Name')); ?> </div>
            <?php endif; ?>
            <?php if(Session::has('Email')): ?>
            <div class="alert alert-warning"><?php echo e(Session::get('Email')); ?> </div>
            <?php endif; ?>
            <?php if(Session::has('EmailAndName')): ?>
            <div class="alert alert-warning"><?php echo e(Session::get('EmailAndName')); ?> </div>
            <?php endif; ?>
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="firstname" type="text" placeholder="Firstname" />  
            </div>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input name="lastname" type="text" placeholder="Lastname" />  
              </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="middlename" type="text" placeholder="Middlename (Optional)" />  
            </div>
           
            
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input name="email" type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="password" type="password" placeholder="Password" />
            </div>
          
            <input type="submit" name=submit class="btn" value="Sign up" />


            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="<?php echo e(asset('IMAGES/bglogin.svg')); ?>" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="<?php echo e(asset('IMAGES/bgsignup.svg')); ?>" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="<?php echo e(asset('JS/login.js')); ?>"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\JBE\laravel-project\resources\views/layouts/login.blade.php ENDPATH**/ ?>