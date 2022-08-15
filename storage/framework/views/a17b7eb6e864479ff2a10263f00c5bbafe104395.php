<h1>Hi, <?php echo e($admin->name); ?></h1>
<h4>Your Admin ID is :<?php echo e($admin->user_id); ?></h4>
<p>Click <a href="<?php echo e(url('/verifyEmail/'.$admin->emailVerify_token)); ?>">here</a> to verify your admin account</p><?php /**PATH C:\xampp\htdocs\JBE\laravel-project\resources\views/admin/body/mail/mail.blade.php ENDPATH**/ ?>