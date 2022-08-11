

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
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner">
      <?php
      $image =  explode('|',$a->file);
      ?>
        <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>">
         
          <img class="imagedone" width=100% height=100% src="<?php echo e(URL::to($image)); ?>" >
        </div>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
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