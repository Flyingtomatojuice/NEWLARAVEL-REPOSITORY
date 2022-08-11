

<?php $__env->startSection('content'); ?>
    <!-- EDIT ANNOUNCEMENT FORM -->
    
<div class="edit-announcement">
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
        <label>Edit Announcement</label>
      </div>
    </div>
  
    <form method="post" action="<?php echo e(url('/admin/updateannouncement/'.$edit['id'])); ?>" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
    
    <div class="col-sm-1" style="text-align:center;font-size:20px;margin-top:5px" >
      <label for='title'>Title</label>
    </div>
    <div class="col-sm-11" style="margin-top:5px">
      <input type='text' id='title' name="title" style="width:100%;" value="<?php echo e($edit['title']); ?>"/> 
    </div>
  
  
  <div class="row">
    <div class="col-sm-12" style="font-size:20px;margin-left:20px;">
      <label>Content</label>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12" style="margin-left:20px;">
      <textarea style=" width:98%;height:100px;" name='content'><?php echo e($edit['content']); ?></textarea>
    </div>
  </div>
  
   <div class="input-group control-group increment" style="margin-top:10px;" >
    <input type="file" name="filename[]" multiple class="form-control">
    <div class="input-group-btn"> 
      
    </div>
  </div> 
  
  
   
    <div class="row">
      <div class="col-sm-6" style="text-align: center;margin-top:20px;">
        <button type='submit' class='btn btn-dark' style="width:100%; cursor: pointer; color:white;">Submit</button>
      </form>
      </div>
      <div class="col-sm-6" style="text-align: center;margin-top:20px;">
        <a class='btn btn-danger' style="width:100%; cursor: pointer;" href=<?php echo e(url("/admin/announcement")); ?>>Cancel</a>
      </div>
   
    </div>
   <!-- DISPLAYING IMAGES -->
   <div class="container" >
    <div class="display-images" style="display:inline-block;">
      <?php
          $converted = explode(',',$edit['file']);
          $many =   explode('|',$edit['file']);
          $newlink = str_replace('images','',$edit['file']);
      ?>
      <?php $__currentLoopData = $many; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
        <?php
             $image = str_replace('images/','',$item);
        ?>
       <?php if($item == ""): ?>
           
       <?php else: ?>
       <button class='remove' style="cursor: pointer;" action=<?php echo e('/admin/deleteimage/'.$edit['id'].'/'.$image); ?> onclick="deleteimage(this)">X  </button>
       <img src='<?php echo e("/".$item); ?>' width="20%" alt="Image" style="margin-top:2%;"> 
       <?php endif; ?>
       
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
   
</div>

</div>
  
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\JBE\laravel-project\resources\views/admin/body/editAnnouncement.blade.php ENDPATH**/ ?>