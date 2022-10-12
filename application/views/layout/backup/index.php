<!DOCTYPE html>
<html class="no-js">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $website->name;?></title>
        <!--
        <link href="<?php echo base_url();?>css/master.css" rel="stylesheet">
       
		
		<link rel="stylesheet" id="switcher-css" type="text/css" href="<?php echo base_url();?>assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/switcher/css/color1.css" title="color1" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/switcher/css/color2.css" title="color2" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/switcher/css/color3.css" title="color3" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/switcher/css/color4.css" title="color4" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/switcher/css/color5.css" title="color5" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/switcher/css/color6.css" title="color6" media="all" />

        -->
         <!-- Favicons -->
            <link rel="shortcut icon" href="<?php echo base_url('img/favicon.png');?>">
        <!--[if lt IE 9]>
          <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
	<body data-scrolling-animations="true">
 <?php if($header) echo $header ;?>
 <?php //if($left) echo $left ;?>
 <?php if($middle) echo $middle ;?>
 <?php if($footer) echo $footer ;?>
</body>
</html>