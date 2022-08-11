

<?php $__env->startSection('content'); ?>
   
   

    <div class="row" style="width:80%;margin-left: 20%;margin-top:2%">
      <div class="col-sm-6">
        <a href=<?php echo e(url('admin/piechart' )); ?>>
         <button class='btn-primary btn-lg' style="width: 90%"  onclick="piechart(this)">Pie Chart</button>
        </a>
      </div>
      <div class="col-sm-6">
       <a href=<?php echo e(url('admin/linechart' )); ?>>
        <button class='btn-primary btn-lg' style="width: 90%"  onclick="linechart(this)">Line Chart</button>
       </a>
    </div>
    </div>
  
    
    <?php echo $__env->yieldContent('linechart'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\JBE\laravel-project\resources\views/admin/body/dashboard.blade.php ENDPATH**/ ?>