<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="" />
        <meta name="description" content="">
        <meta name="Innocuous Energy LTD" content="">

        <title>Gallery</title>



        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>css/modern-business.css" rel="stylesheet">
        <!-- Custom CSS My -->

        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php foreach ($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
        <?php foreach ($js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img class="img-responsive" style="height:50px;width: 50px; float: left; margin-right: 10px;" src="<?php echo base_url(); ?>images/logo.png" alt="LOGO">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">BOF English Medium School</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo base_url(); ?>">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo base_url(); ?>/home/about_us.php" class="dropdown-toggle" data-toggle="dropdown">Academic <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo base_url(); ?>/home/about_us.php">About Us</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/home/mission_vision.php">Mission and Vision</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/home/chairman_message.php">Message form Chairman</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/home/principal_message.php">Message form Principal</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/home/teachers_info.php">Teachers Info</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="<?php echo base_url(); ?>/home/admission_info.php" class="dropdown-toggle" data-toggle="dropdown">Admission <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo base_url(); ?>/home/admission_info.php">Admission Info</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/home/admission_fee.php">Admission Fee</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/home/admission_form.php">Admission Form</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo base_url(); ?>/home/transport.php" class="dropdown-toggle" data-toggle="dropdown">Facilities<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo base_url(); ?>/home/transport.php">Transport</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/home/medicare.php">Medicare</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/home/computer_lab.php">Computer Lab</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/home/multimedia_class.php">Multimedia Class Room</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/home/library.php">Library</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/home/extra_activity.php">Extracurricular Activities</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>images_examples/simple_photo_gallery.php">Photo Gallery</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>home/notice.php">Notice</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>home/pdfView.php">PDF Notice</a>
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo base_url(); ?>home/contact_us.php" class="dropdown-toggle" data-toggle="dropdown">Contact Us<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo base_url(); ?>home/contact_us.php">Contact Us</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/home/faq.php">FAQ</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>

        <!-- Header Carousel -->
        <header>
            <div class="container header_content">
                <div class="col-lg-12">

                    <img class="img-responsive head" src="<?php echo base_url(); ?>images/header.png" alt="">
                    <div>
                        <img src="<?php echo base_url(); ?>images/logo.png" class="header_logo header_logo1">  
                    </div>
                    <div>
                        <h1 class="navbar-brand header_title">BOF English Medium School</h1>
                    </div>

                </div>
            </div>
        </header>

        <!-- Page Content -->
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><i class="fa fa-fw fa-gift"></i>Photo Gallery</h2>
                </div>
                <div class="panel-body">

                    <!-- All Content Start -->

                    <?php echo $output; ?>

                    <!-- All Content End -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

        <!-- Footer -->
        <footer class="navbar-inverse">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>&copy;Copyright Author: Mir Hossain</p>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })
        </script>
    </body>
</html>
