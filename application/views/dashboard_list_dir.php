<!DOCTYPE html>
<html>
    <head>
        <script src="assets/highcharts/api/js/jquery-1.11.3.min.js"></script>
        <script src="assets/highcharts/code/highcharts.js"></script>
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
                                <h4 class="pull-left page-title">Welcome !</h4>
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
                                <div class="panel panel-border panel-success">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Table Pencairan PIP 2017</h3> 
                                    </div> 
                                    <div class="panel-body table-rep-plugin"> 
                                        <div class="table-responsive" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <td>Tahap</td>
                                                        <td>Keterangan</td>
                                                        <td>Jumlah</td>
                                                        <td>Sudah Cair</td>
                                                        <td>Belum Cair</td>
                                                        <td>Persentase</td>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    $no = 1;
                                                    foreach ($record->result() as $r) {
                                                        echo "<tr>
                                                            <td>$no</td>
                                                            <td>$r->nama_kategori</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            </tr>";
                                                        $no++;
                                                    }
                                                    ?>
                                            </table>
                                        </div>  

                                    </div> 
                                </div>
                            </div>


                            <div class="row">
                                <!-- INBOX -->
                                <div class="col-lg-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">Top 10 Belum Mencairkan PIP</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div id="containerya"></div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- container -->

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