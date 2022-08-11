

<?php $__env->startSection('linechart'); ?>
<div class="charts" style="width:70%; text-align: center;margin-top:2%; margin-left:22%">
   
    <div class="row">
       <div class="col-sm-12" >
          <div id="google-line-chart" style="width:100%; height: 500px"></div>
       </div>
    </div>
   
 </div>
   
 
      
 
 
 
    <script type="text/javascript">
       google.charts.load('current', {'packages':['corechart']});
         google.charts.setOnLoadCallback(drawChart);
  
         function drawChart() {
  
         var data = google.visualization.arrayToDataTable([
             ['Created', 'Applicants Count'],
  
                 <?php
                   
                     foreach($lineChart as $d) {
                     echo "['".$d->month_name."', ".$d->count."],";
                 }
                 
                 ?>
         ]);
  
         var options = {
           title: 'Daily Applicants Count ',
           curveType: 'function',
           legend: { position: 'bottom' }
         };
  
           var chart = new google.visualization.LineChart(document.getElementById('google-line-chart'));
  
           chart.draw(data, options);
         }
    </script>          
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.body.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\JBE\laravel-project\resources\views/admin/body/charts/linechart.blade.php ENDPATH**/ ?>