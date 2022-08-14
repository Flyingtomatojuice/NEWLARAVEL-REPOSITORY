

<?php $__env->startSection('content'); ?>
<!-- DISPLAY ANNOUNCEMENTS -->
<div class="maincontent">
    
<div class="card" style="height: 100%;">
  <div class="card-header"><h1> <?php echo e(__('List of Announcements')); ?> </h1></div>    
  <div class="card-body text-center">                  
      <table class="table table-boredered table-responsive-lg table-hover" >
          <tr>
              <th>Announcement ID</th>        
              <th>Announcement Title</th>
              <th>Date Created</th>
              <th>Date Updated</th>
              <th>Action</th>            
          </tr>
          <?php $__currentLoopData = $anc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <td><?php echo e($list->id); ?></td>
              <td><?php echo e($list->title); ?></td>
              <td><?php echo e($list->created_at); ?></td>
              <td><?php echo e($list->updated_at); ?></td>         
         <td>
                  
                <a class='btn btn-primary' id='edit-annc' href=<?php echo e(url("/admin/editannouncement/".$list['id'])); ?>>Edit</a>
                 
                  <input name="_method" type="hidden" value="Delete">
                  <button class='btn btn-danger' action=<?php echo e("/admin/deleteAnnouncement/".$list['id']); ?> onclick="destroyData(this)">Delete</button>
             
          </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
  </div>
</div>
</div>


</div>
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\JBE\laravel-project\resources\views/admin/body/announcementlist.blade.php ENDPATH**/ ?>