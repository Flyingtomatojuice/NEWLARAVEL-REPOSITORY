

<?php $__env->startSection('post'); ?>
<table>
    <tr>
      <th>FullName</th>
      <th>Gender</th>
      <th>Email</th>
      <th>BirthDate</th>
      <th>Age</th>
      <th>BirthPlace</th>
      <th>Contact</th>
      <th>Address</th>
   
    </tr>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td> <?php echo e($item->lastname); ?>, <?php echo e($item->firstname); ?>  <?php echo e($item->middlename); ?>. </td>
            <td> <?php echo e($item->gender); ?></td>
            <td> <?php echo e($item->email); ?></td>
            <td> <?php echo e($item->birthday); ?></td>
            <td><?php echo e($item->age); ?></td>
            <td> <?php echo e($item->birthplace); ?></td>
            <td> <?php echo e($item->phonenumber); ?></td>
            <td> <?php echo e($item->address); ?></td>

      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
   
  </table>
 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.export.pdf', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\JBE\laravel-project\resources\views/admin/export/body/pdfbody.blade.php ENDPATH**/ ?>