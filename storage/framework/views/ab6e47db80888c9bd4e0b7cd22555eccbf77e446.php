<h1>Hi, <?php echo e($user->name); ?> !!</h1>
<h3>Your User ID is : <?php echo e($user->user_id); ?></h3>
<p>Please Verify your account.</p>
<p>Click <a href="<?php echo e(url('/verifyEmail/'.$user->emailVerify_token)); ?>">here</a> to verify your account</p><?php /**PATH C:\xampp\htdocs\JBE\laravel-project\resources\views/mail.blade.php ENDPATH**/ ?>