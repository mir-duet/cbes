<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="" />
        <meta name="description" content="">
        <meta name="Innocuous Energy LTD" content="">

        <title><?php echo $title; ?></title>
        


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

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <?php echo $menu ?> 
            <!-- /.container -->
        </nav>

        <!-- Header Carousel -->
        <header>
            <!-- Indicators -->
           <?php echo $header ?> 
        </header>

        <!-- Page Content -->
        <div class="container">
            <?php echo $main_content ?>
        </div>
        <!-- /.container -->
    
            <!-- Footer -->
        <footer class="navbar-inverse">
           <?php echo $footer ?>
        </footer>
        
        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>js/jquery.js"></script>

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
