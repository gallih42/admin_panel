<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <title>Kementerian Pendidikan dan Kebudayaan</title>

        <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon1.ico'); ?>" />

        <!-- Base Css Files -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="<?php echo base_url('assets/assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/assets/ionicon/css/ionicons.min.css') ?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/css/material-design-iconic-font.min.css') ?>" rel="stylesheet">

        <!-- animate css -->
        <link href="<?php echo base_url('assets/css/animate.css') ?>" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="<?php echo base_url('assets/css/waves-effect.css') ?>" rel="stylesheet">

        <!-- Responsive-table -->
        <link href="<?php echo base_url('assets/assets/responsive-table/rwd-table.min.css') ?>" rel="stylesheet" type="text/css" media="screen"/>

        <!-- sweet alerts -->
        <link href="<?php echo base_url('assets/assets/sweet-alert/sweet-alert.min.css') ?>" rel="stylesheet">

        <!--calendar css-->
        <link href="<?php echo base_url('assets/assets/fullcalendar/fullcalendar.css') ?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/assets/select2/select2.css') ?>" rel="stylesheet" type="text/css" />

        <!-- Custom Files -->
        <link href="<?php echo base_url('assets/css/helper.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url('assets/js/modernizr.min.js') ?>"></script>

    </head>



    <body class="fixed-left">
    <?php $nama = $this->session->userdata('nama') ?>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="#" class="logo"><img src="../assets/images/header4.png" /></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="text-left">
                                <a href="#" class="logo"><i></i><span>Manajemen PIP</span></a>
                                <ul class="nav navbar-nav navbar-right pull-right">
                                                                        <li class="hidden-xs">
                                        <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true">
                                            <a href="<?php echo site_url('index.php/auth/logout') ?>"><b><i class="md md-settings-power"></i> Logout</b></a>
                                    </li>
                                </ul>
                            </div>
                            <!--/.nav-collapse -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="<?php echo base_url('assets/images/piplogo5.png') ?>" alt="" class="thumb-md img-rounded">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Admin PIPSD</a>
                            </div>

                            <p class="text-muted m-0"><?php echo $this->session->userdata('nama');?></p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="#" class="waves-effect"><i class="md md-home"></i><span> Dashboard </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url(); ?>index.php/dashboard">2016</a></li>
                                    <li><a href="#">2017</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="waves-effect"><i class="md md-cloud-download"></i><span> Download File</span><span><i></i></span></a>
								<ul class="list-unstyled">
								<li><a href="<?php echo base_url(); ?>index.php/download_sk">Download SK 2017</a></li>
								<li><a href="<?php echo base_url(); ?>index.php/download_sk">Download Siswa Belum Cair 2016</a></li>
								</ul>
                            </li>
                            <li>
                                <a href="#" class="waves-effect"><i class="md md-event"></i><span> Kalender Kegiatan </span><span class="pull-right"><i class="md md-add"></i></span></a>
                            </li>
                            <li>
                                <a href="#" class="waves-effect"><i class="md md-search"></i><span> Inquiry BRI </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url(); ?>index.php/inquiry_bri">2016</a></li>
                                    <li><a href="#">2017</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="waves-effect"><i class="md md-find-in-page"></i><span> Inquiry Kemdikbud </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url(); ?>index.php/inquiry">2016</a></li>
                                    <li><a href="#">2017</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 
            <div id="main-content">
                <?php $this->load->view($main_view); ?>
            </div>
        </div>


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/waves.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/wow.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.nicescroll.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/chat/moment-2.2.1.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/jquery-sparkline/jquery.sparkline.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/jquery-detectmobile/detect.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/fastclick/fastclick.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/jquery-slimscroll/jquery.slimscroll.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/jquery-blockui/jquery.blockUI.js') ?>"></script>

        <!-- sweet alerts -->
        <script src="<?php echo base_url('assets/assets/sweet-alert/sweet-alert.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/sweet-alert/sweet-alert.init.js') ?>"></script>

        <!-- flot Chart -->
        <script src="<?php echo base_url('assets/assets/flot-chart/jquery.flot.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/flot-chart/jquery.flot.time.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/flot-chart/jquery.flot.tooltip.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/flot-chart/jquery.flot.resize.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/flot-chart/jquery.flot.pie.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/flot-chart/jquery.flot.selection.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/flot-chart/jquery.flot.stack.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/flot-chart/jquery.flot.crosshair.js') ?>"></script>

        <!-- Counter-up -->
        <script src="<?php echo base_url('assets/assets/counterup/waypoints.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/assets/counterup/jquery.counterup.min.js') ?>" type="text/javascript"></script>

        <!-- CUSTOM JS -->
        <script src="<?php echo base_url('assets/js/jquery.app.js') ?>"></script>

        <!-- Dashboard -->
        <script src="<?php echo base_url('assets/js/jquery.dashboard.js') ?>"></script>

        <!-- Chat -->
        <script src="<?php echo base_url('assets/js/jquery.chat.js') ?>"></script>

        <!-- Todo -->
        <script src="<?php echo base_url('assets/js/jquery.todo.js') ?>"></script>

        <!-- Examples -->
        <script src="<?php echo base_url('assets/assets/magnific-popup/magnific-popup.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/jquery-datatables-editable/jquery.dataTables.js') ?>"></script> 
        <script src="<?php echo base_url('assets/assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/jquery-datatables-editable/datatables.editable.init.js') ?>"></script>

        <script src="<?php echo base_url('assets/js/jquery-ui-1.10.1.custom.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/select2/select2.min.js') ?>" type="text/javascript"></script>


        <!-- BEGIN PAGE SCRIPTS -->
        <script src="<?php echo base_url('assets/assets/fullcalendar/moment.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/fullcalendar/fullcalendar.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/fullcalendar/fullcalendar.js') ?>"></script>

        <script src="<?php echo base_url('assets/js/jquery-1.9.1.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/highcharts.js') ?>"></script>


        <script type="text/javascript">
            /* ==============================================
             Counter Up
             =============================================== */
            jQuery(document).ready(function ($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

    </body>
</html>