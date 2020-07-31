<!DOCTYPE html>
<html>

<head>
    <title>Highcharts Example - codechief.org</title>
</head>

<body>

    <div id="container"></div>
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">
    var users =  {{$users}}

        Highcharts.chart('container', {
            title: {
                text: 'New User Growth, 2019'
            },
            subtitle: {
                text: 'Source: codechief.org'
            },
            xAxis: {
                categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                    'October', 'November', 'December'
                ]
            },
            yAxis: {
                title: {
                    text: 'Number of New Users'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'New Users',
                data: users
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });

</script>

</html>
