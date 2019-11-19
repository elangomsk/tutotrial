<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!--IE Compatibility modes https://colorlib.com/polygon/metis/login.html-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Mobile first-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Login Page</title>
        
        <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
        <meta name="author" content="">
        
        <meta name="msapplication-TileColor" content="#5bc0de" />
        <meta name="msapplication-TileImage" content="<?php echo base_url('assets/img/metis-tile.png');?>" />
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.css');?>">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.css');?>">
        
        <!-- Metis core stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
        
        <!-- metisMenu stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url('assets/lib/metismenu/metisMenu.css');?>">
        
        <!-- onoffcanvas stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url('assets/lib/onoffcanvas/onoffcanvas.css');?>">
        
        <!-- animate.css stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url('assets/lib/animate.css/animate.css');?>">


        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!--jQuery -->
        
        <!--Bootstrap -->
        
        <!-- <script src="<?php echo base_url('assets/lib/jquery/jquery.js');?>"></script> -->
        
        
       
        <script src="<?php echo base_url('assets/js/style-switcher.js');?>"></script>
        
       <!--  <script>
        less = {
        env: "development",
        relativeUrls: false,
        rootpath: "<?php echo base_url('assets/');?>"
        };
        </script> -->
        
        <script src="<?php echo base_url('assets/lib/jquery/jquery.js');?>"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
        <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.js');?>"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.18.4/js/jquery.tablesorter.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.selection.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
        <!--Bootstrap -->
        <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.js');?>"></script>
        <!-- MetisMenu -->
        <script src="<?php echo base_url('assets/lib/metismenu/metisMenu.js');?>"></script>
        <!-- onoffcanvas -->
        <script src="<?php echo base_url('assets/lib/onoffcanvas/onoffcanvas.js');?>"></script>
        <!-- Screenfull -->
        <script src="<?php echo base_url('assets/lib/screenfull/screenfull.js');?>"></script>
        <!-- Metis core scripts -->
        <script src="<?php echo base_url('assets/js/core.js');?>"></script>
        <!-- Metis demo scripts -->
        <script src="<?php echo base_url('assets/js/app.js');?>"></script>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style-switcher.css');?>">
        <link rel="stylesheet/less" type="text/css" href="<?php echo base_url('assets/less/theme.less');?>">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>
        <script type="text/javascript">
        (function($) {
        $(document).ready(function() {
        $('.list-inline li > a').click(function() {
        var activeForm = $(this).attr('href') + ' > form';
        //console.log(activeForm);
        $(activeForm).addClass('animated fadeIn');
        //set timer to 1 seconds, after that, unload the animate animation
        setTimeout(function() {
        $(activeForm).removeClass('animated fadeIn');
        }, 1000);
        });
        });
        })(jQuery);
        </script>

    </head>