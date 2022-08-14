

<?php $__env->startSection('content'); ?>
<div class="contenterist">
    <h1 class="text-center"> UPDATE YOUR PASSWORD </h1>

<div class="container">
            <div class="card">
    <!-- UPDATE PASSWORD -->
    <div class="update-pass">
        <div class="row">
            <form method="POST" class='changepass_form' action="<?php echo e(url('/update-password')); ?>">
                <?php echo csrf_field(); ?>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Current Password:</strong>
                        <input type="password" name="currentpass" class="form-control">                        
                    </div>
                </div>
        </div>    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>New Password:</strong>
                <input type="password" class="form-control" name="newpass">    
            </div> 
        </div>         
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Confirm New Password:</strong>
                <input type="password" class="form-control">
            </div>
        </div>    
         
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type='submit' class=' form-control btn-success'>Submit</button>
            </div>
            <br>
        </form>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <button class='btn-danger cancelchange form-control' action="<?php echo e(url('/applicant/account')); ?>" onclick="cancelpass(this)">Cancel</button>
            </div>
        </div>
        
    </div>
</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\JBE\laravel-project\resources\views/user/body/changepassword.blade.php ENDPATH**/ ?>