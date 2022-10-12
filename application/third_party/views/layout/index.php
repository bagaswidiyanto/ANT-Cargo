<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        <!-- META SECTION -->
        <title><?php echo $website->name;?></title>
        <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="<?=base_url();?>assets/css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="<?=base_url();?>assets/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="<?=base_url();?>assets/css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="<?=base_url();?>assets/img/logo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?=base_url();?>assets/img/logo.png" />

    <!-- owl carousel css -->

    <link href="<?=base_url();?>assets/css/owl.carousel.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/owl.theme.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    
     
    <script>
        window.jQuery || document.write('<script src="<?=base_url();?>assets/js/jquery-1.11.0.min.js"><\/script>');
    </script>
</head>
    <Body>


 <?php if($header) echo $header ;?>
 <?php //if($left) echo $left ;?>
 <?php if($middle) echo $middle ;?>
 <?php if($footer) echo $footer ;?>


</body>
 </html>