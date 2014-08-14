<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->lang->line('title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url();?>asserts/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {        
		padding-top: 60px;
        padding-bottom: 40px; 
      }
    </style>
    <link href="<?php echo base_url();?>asserts/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le fav and touch icons --> 
    <link rel="shortcut icon" href="<?php echo base_url();?>asserts/img/favicon.ico">
    <!--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="./href/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./href/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./href/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="./href/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
     -->
  </head>

  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo base_url();?>asserts/index">Hypnus</a>


          
		  <div class="btn-group pull-right">
              <a class="btn btn-primary" href="<?php echo base_url();?>asserts/myaccount.php?a=6"><i class="icon-user icon-white"></i>&nbsp;
              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
              <ul class="dropdown-menu">
   			    <li><a href="./cpanel.php"><i class="icon-home"></i>&nbsp;<?php echo $this->lang->line('machine_list'); ?></a></li>
                <li><a href="./myaccount.php?a=6"><i class="icon-cog"></i>&nbsp;<?php echo $this->lang->line('myacount_setup'); ?></a></li>
                <li><a href="./myshortcuts.php"><i class="icon-plane"></i>&nbsp;<?php echo $this->lang->line('myshortcuts'); ?></a></li>
				<li><a href="./myaccount.php?a=2"><i class="icon-fire"></i>&nbsp;<?php echo $this->lang->line('gen_clients_setup'); ?></a></li>
				<li class="divider"></li>
                <li><a href="./readme.php"><i class="icon-book"></i>&nbsp;<?php echo $this->lang->line('help'); ?></a></li>
                <li><a href="./cpanel.php?act=logout"><i class="icon-off"></i>&nbsp;<?php echo $this->lang->line('logout'); ?></a></li>
              </ul>
           </div>

		  
		  <div class="nav-collapse">
            <ul class="nav">
 			<li <?php if (defined("CPANEL")){	echo 'class="active"'; }  ?>  ><a href="<?php echo base_url();?>asserts/cpanel.php"><?php echo $this->lang->line('machine_list'); ?></a></li>
			<li <?php if (defined("ACCOUNT")) {	echo 'class="active"'; 	}  ?>  ><a href="<?php echo base_url();?>asserts/myaccount.php"><?php echo $this->lang->line('myacount_setup'); ?></a></li>
			<li><a href="http://bbs.hypnusoft.com" target="_blank"><?php echo $this->lang->line('bbs'); ?></a></li>
			<li <?php if (defined("README")) {	echo 'class="active"'; }  ?>  ><a href="<?php echo base_url();?>asserts/readme.php"><?php echo $this->lang->line('help'); ?></a></li>
			</ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
