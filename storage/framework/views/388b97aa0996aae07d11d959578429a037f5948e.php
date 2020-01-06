
<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">
    </head>
    <body>
      <div class="row">
       <div class="col-md-10 col-md-offset-1">
           <div class="panel panel-default">
               <div class="panel-heading"><b>Charts</b></div>
               <div class="panel-body">
                  
                   <div id="highchart"></div>
               </div>
           </div>
       </div>
     </div>
        <script src="<?php echo e(asset('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js')); ?>"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
       <body>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
        $(function () { 
            var information = <?php echo e(json_encode($information,JSON_NUMERIC_CHECK)); ?>;
            var user = <?php echo e(json_encode($user,JSON_NUMERIC_CHECK)); ?>;


            $('#highchart').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'salary'
                },
                xAxis: {
                  categories: user
                    // categories: ['2016','2017','2018', '2019']
                },
                yAxis: {
                    title: {
                        text: 'Rate'
                    }
                },
                series: [{
                    name: 'Click',
                    data:  information
                }, {
                    name: 'View',
                    data:  user
                }]
            });
        });
    </script>
    </body>
</html>