

<?php $__env->startSection('linechart'); ?>
    <script type="text/javascript">
    var analytics = <?php echo $gender; ?>
 
    google.charts.load('current', {'packages':['corechart']});
 
    google.charts.setOnLoadCallback(drawChart);
 
    function drawChart()
    {
     var data = google.visualization.arrayToDataTable(analytics);
     var options = {
      title : 'Percentage of Male and Female Applicants'
     };
     var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
     chart.draw(data, options);
    }
   </script>
 
            <div class='col-sm-10' id="pie_chart" style="width:70%;margin-left:20%;margin-top:2%; height:450px;">
       
            </div>    
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.body.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\JBE\laravel-project\resources\views/admin/body/charts/piechart.blade.php ENDPATH**/ ?>