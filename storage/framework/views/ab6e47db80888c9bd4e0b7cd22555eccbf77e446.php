<h1>Hi, <?php echo e($user->name); ?> !!</h1>
<h3>Your User ID is : <?php echo e($user->user_id); ?></h3>
<h4>Please use <?php echo e($user->email); ?> to acess your account. Thank you!</h4>
<p>To verify your acoount please click the link below.</p>
<p>Click <a href="<?php echo e(url('/verifyEmail/'.$user->emailVerify_token)); ?>">here</a> to verify your account</p><?php /**PATH C:\xampp\htdocs\JBE\laravel-project\resources\views/mail.blade.php ENDPATH**/ ?>