

<?php $__env->startSection('content'); ?>
<div class="padding">
 <?php $__currentLoopData = $anc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="instagram-card">
  <div class="instagram-card-header">
    <img src="<?php echo e(url('/images/admin.png')); ?>" class="instagram-card-user-image"/>
    <a class="instagram-card-user-name" href="">ADMIN</a>
    <div class="instagram-card-time"><?php echo e($a->updated_at); ?></div>
  </div>

  <div class="instagram-card-content">

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
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
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </div>

  <div class="instagram-card-content">
  <h2><p class="likes"><?php echo e($a->title); ?></h2>
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