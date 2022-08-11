

<?php $__env->startSection('content'); ?>
<div class="padding">
 <?php $__currentLoopData = $anc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="instagram-card">
  <div class="instagram-card-header">
    <img src="<?php echo e(url('/images/admin.png')); ?>" class="instagram-card-user-image"/>
    <a class="instagram-card-user-name" href="">ADMIN</a>
    <div class="instagram-card-time">58 min</div>
  </div>

  <div class="instagram-card-content">
    <div class="slideshow-container">
      <?php
      $image =  explode('|',$a->file);
      ?>
       <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="mySlides ">
          <img class="img"  src="<?php echo e(URL::to($item)); ?>" >
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
         
        </div>
    </div>

  <div class="instagram-card-content">
  <p class="likes"><?php echo e($a->title); ?>

  <p><?php echo e($a->content); ?>

  </div>
  <div class="instagram-card-footer">
    <a class="footer-action-icons" href="#"><i class="fa fa-heart-o"></i></a>
    <input class="comments-input" type="text" placeholder="Leave a comment..."/>
    <a class="footer-action-icons" href="#"><i class="fa fa-ellipsis-h"></i></a>
  </div>
  <br>
  <br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>
  
  
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\JBE\laravel-project\resources\views/user/body/dashboard.blade.php ENDPATH**/ ?>