


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon1.ico">

        <title>Kementerian Pendidikan dan Kebudayaan</title>

        <!-- Base Css Files -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="<?php echo base_url('assets/assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/assets/ionicon/css/ionicons.min.css') ?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/css/material-design-iconic-font.min.css') ?>" rel="stylesheet">

        <!-- animate css -->
        <link href="<?php echo base_url('assets/css/animate.css') ?>" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="<?php echo base_url('assets/css/waves-effect.css') ?>" rel="stylesheet">

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

        <style>
            body{
                background-color: #2ecc71;
            }
        </style>
    </head>
    
    <body>
        <div class="row" align="center"> <br><br>
            <img src="<?php echo base_url('assets/images/header.png') ?>" class="img-tumbnail img-responsive"> 
        </div>
        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <?php echo validation_errors(); ?>
                <p style="color:red;"><?php echo $this->session->flashdata('notification') ?></p>
                <?php echo form_open('index.php/auth/login') ?>

                <div class="panel-body">
                    <center><h3>Aplikasi Manajemen PIP</h3></center>
                    <form class="form-horizontal m-t-20" role="form" method="POST" action="dashboard">

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control input-lg " type="text" name="username" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control input-lg" type="password" name="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup">
                                        Remember me
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn btn-success btn-lg w-lg waves-effect waves-light" type="submit" name="submit">Log In</button>
                            </div>
                        </div>
                    </form> 
                </div>                                 

            </div>
        </div>


        <script>
            var resizefunc = [];
        </script>
        <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/waves.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/wow.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.nicescroll.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/jquery-detectmobile/detect.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/fastclick/fastclick.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/jquery-slimscroll/jquery.slimscroll.js') ?>"></script>
        <script src="<?php echo base_url('assets/assets/jquery-blockui/jquery.blockUI.js') ?>"></script>


        <!-- CUSTOM JS -->
        <script src="<?php echo base_url('assets/js/jquery.app.js') ?>"></script>

    </body>
</html>