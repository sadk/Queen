
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->lang->line('login_title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url();?>asserts/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="<?php echo base_url();?>asserts/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url();?>asserts/img/favicon.ico">

  </head>

  <body>

    <div class="container">
     
      <form class="form-signin" method="post" action="">
        <h2 class="form-signin-heading" align="center"><img  src="<?php echo base_url();?>asserts/img/logo.png" ></h2>
		<?php $this -> load -> view('header_warning'); ?>
		<input type="text" class="input-block-level" name="user" value="<?php echo isset($username) ? $username : '' ; ?>" placeholder="<?php echo $this->lang->line('username'); ?>">
        <input type="password" class="input-block-level" name="pass" placeholder="<?php echo $this->lang->line('password'); ?>">
        
        <label class="checkbox">
          <input type="checkbox" value="remember-me" disabled="true"> <?php echo $this->lang->line('remember_pass'); ?>
        </label>
        <p><button class="btn btn-large btn-primary" name="submit" value="true" type="submit"><?php echo $this->lang->line('login_submit'); ?></button></p>
      </form>
      <p align="center">
	   <small>
	  <?php echo $this->lang->line('new_register'); ?>&nbsp;|&nbsp;<!--a href="./findpsw.php"--><?php echo $this->lang->line('forgot_psw'); ?><!--/a-->
	   </small>
	   </p>
    </div> 

	<div class="blockfooter">
                   <p align="center">
                   <small>
				   powered by <a href="http://www.hypnusoft.com" target="_blank"><b>Hypnus</b></a> 2.0 © 2009-2063.
				   </small>
                   </p>
		 </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>asserts/js/jquery.js"></script>
    <script src="<?php echo base_url();?>asserts/js/bootstrap.min.js"></script> 


	<script>
		var childWindow;
		function toQzoneLogin()
		{
			childWindow = window.open("connect.qq/oauth/index.php","TencentLogin","width=450,height=320,menubar=0,scrollbars=1, resizable=1,status=1,titlebar=0,toolbar=0,location=1");
			
		} 
		
		function closeChildWindow()
		{
			childWindow.close();
		}
		
		function toWeiboLogin(){
			childWindow = window.open("connect.wb/index.php","TencentLogin","width=450,height=320,menubar=0,scrollbars=1, resizable=1,status=1,titlebar=0,toolbar=0,location=1");
		}	
	</script>

  </body>
</html>
