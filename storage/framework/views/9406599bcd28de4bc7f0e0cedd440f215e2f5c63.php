

<?php $__env->startSection('content'); ?>
<h1> <span class="blue" style="margin-left:15%; ">List of Applicants</span></h1>



<div class="row">

  <!-- IMPORT-->
  <div class="col-sm-6">
    
  <div class="column-import">
    <div class="card">
      <div class="panel panel-default">
        <div class="panel-heading"><h5>Import</h5></div>
        <div class="panel-body">
          <form id='importfile' action="<?php echo e(route('import.file')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <input type='file' name='file' id="file" />
            <button type='submit' class='btn-primary'>Import</button>
          </form>
        </div>
      </div>
      </div>
    </div>

  </div>
  <!-- EXPORT -->
  <div class="col-sm-6">
    <div class="column-export">
      <div class="card">
        
        <div class="row">
          
        <div class="col-sm-8">
          <form method='post' id="export" action="<?php echo e(route('export')); ?>">
            <?php echo csrf_field(); ?>
           
          <div class="select">
              <select name="exportFile" id="exportfile">
                  <option value="">Select Export File Type</option>
                  <option value="pdf">PDF File</option>
                  <option value="csv">CSV File</option>
                  <option value="excel">EXCEL File</option>
              </select>
            </div>
        </div>
          <div class="col-sm-4">
            <button type='submit' class='btn-primary btn-lg'>Export</button>
          </div>    
        </form>
        </div>
        </div>
      </div>

  </div>
</div>

<div class="applicant-div">
     
<table>
    <thead>
      <tr>
        <th>Application ID</th>
        <th>FullName</th>
        <th>Email</th>
        <th>Phonenumber</th>
        <th>Address</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $app; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
              
        <td data-column="Application ID"><?php echo e($list->user_id); ?></td>
        <td data-column="FullName"><?php echo e($list->lastname); ?>, <?php echo e($list->firstname); ?> <?php echo e($list->middlename); ?>.</td>
        <td data-column="Email"><?php echo e($list->email); ?></td>
        <td data-column="Phonenumber"><?php echo e($list->phonenumber); ?></td>
        <td data-column="Address"><?php echo e($list->address); ?></td>
        <td>
          <form action="<?php echo e(route('deleteApplicant',$list->user_id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <input name="_method" type="hidden" value="Delete">
            <button type="submit" class="btn btn-danger btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip">Delete</button>
    
        </form>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <div class="d-flex justify-content-center">
        <tr>
          <th>
              <?php echo $app->links(); ?>

          </th>
        </tr>
        </div>
     
    
    </tbody>
  </table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\JBE\laravel-project\resources\views/admin/body/application.blade.php ENDPATH**/ ?>