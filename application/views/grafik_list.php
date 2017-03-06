<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript">

            $(function () {
                $('#container').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false
                    },
                    title: {
                        text: 'Data Penduduk Indonesia'
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
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },
                    series: [{
                            type: 'pie',
                            name: 'Persentase Penduduk',
                            data: [
<?php
// data yang diambil dari database
if (count($graph) > 0) {
    foreach ($graph as $data) {
        echo "['" . $data->provinsi . "'," . $data->jumlah . "],\n";
    }
}
?>
                            ]
                        }]
                });
            });

        </script>

    </head>
    <body class="fixed-left">
        <div id="container"></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                </div>
                <!-- ============================================================== -->
                <!-- End Right content here -->
                <!-- ============================================================== -->



                <footer class="footer text-right">
                    <p class="text-muted">
                    <center>Aplikasi Manajemen Program Indonesia Pintar</center> 
                    </p>
                </footer>
            </div>
            <!-- END wrapper -->
        </div>
    </body>
</html>