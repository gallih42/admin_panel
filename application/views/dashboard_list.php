<!DOCTYPE html>
<html>
    <head>
        <script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
        <script src='http://code.highcharts.com/highcharts.js'></script>
        <script type="text/javascript">

            $(function () {
                $('#containerya').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false
                    },
                    title: {
                        text: 'Sebaran Data SK'
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
          <?php $username = $this->session->userdata('username') ?>
        <div id="container"></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Welcome ! <?php echo $username; ?> <?php echo $status;?></h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Start Widget -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="ion-android-contacts"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">15852</span>
                                        Total Sales
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Sales <span class="pull-right">60%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-purple"><i class="ion-ios7-cart"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">956</span>
                                        New Orders
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Orders <span class="pull-right">90%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                    <span class="sr-only">90% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-pink"><i class="ion-eye"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">20544</span>
                                        Unique Visitors
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Visitors <span class="pull-right">60%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-pink" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!-- End row-->

                        <div class="row">
                            <div class="col-lg-8">
                                <div class="portlet"><!-- /portlet heading -->
                                    <div class="container">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <div id="containerya"></div>
                                        </div>
                                    </div>

                                </div> <!-- /Portlet -->
                            </div> <!-- end col -->




                        </div> <!-- content -->





                    </div>
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