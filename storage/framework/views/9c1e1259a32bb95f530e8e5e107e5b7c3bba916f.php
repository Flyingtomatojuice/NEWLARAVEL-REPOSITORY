

<?php $__env->startSection('content'); ?>

<div class="space">
    space
</div>

<div class="create-announcement">
  <?php if(count($errors) > 0): ?>
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
  <?php endif; ?>

  <div class="row">
    <div class="col-sm-12" style="text-align: center; font-size:30px">
      <label>Create Announcement</label>
    </div>
  </div>
 <!-- --> 
 <form action="<?php echo e(route('upload-announce')); ?>" method="POST"  enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
<div class="card" style="width: 100%;">
  <div class="card-header">  
      
      <strong class="details">Title</strong><br>
      <input type="text" name="title" class="form-control form-control-lg"><br> <br> 
      <strong class="details">Content</strong><br>
      <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="10"></textarea><br>
      <strong class="details">Image Upload</strong><br>
      <div class="input-group control-group increment" >
          <input type="file" name="filename[]" class="form-control" multiple>
          
      </div>
       
  </div>      
</div>
<div class="d-flex justify-content-end">
      <input type="submit" name="submit" value="Save" class="btn btn-primary btn-lg form-control">
</div>
<br>
<a href="<?php echo e(route('announcementlist')); ?>">
  <button type="button" class="btn btn-primary btn-lg form-control">List of Announcement</button>
  </a>
</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\JBE\laravel-project\resources\views/admin/body/announcement.blade.php ENDPATH**/ ?>