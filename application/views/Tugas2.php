<!DOCTYPE html>
<html>
<head>
    <title>Tugas</title>
</head>
<body>


    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>



<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto">
    
    <script type="text/javascript">
                Highcharts.chart('container', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Browser market shares in January, 2018'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                        }
                    }
                },
                series: [{
                    name: 'Brands',
                    colorByPoint: true,
                    data: [
                        {
                            name: "Wanita",
                            y: <?php echo $data ?>,

                        }, {
                            name: "Pria",
                            y: <?php echo $dataW ?>,
                        }
                    
                    ]
                }]
            });
            </script>

</div>


            

</body>
</html>