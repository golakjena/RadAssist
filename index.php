<?php	
	session_start();
	
	header('Cache-Control: max-age=900');
	include("config.php");
	include($config['include_dir']."/include/connection.php");
	include($config['include_dir']."/include/fun-redirect.php");
?>

<!DOCTYPE HTML>
<html>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="title" content="RadAssist" />
        <meta name="keyword" content="RadAssist" />
        <meta name="description" content="RadAssist" />
        <title>RadAssist</title>
        <link rel="shortcut icon" href="<?php echo $config['file_path']; ?>/images/favicon_images.png" type="text/css">
		<link href="<?php echo $config['file_path']; ?>/css/style-new.css" rel="stylesheet" type="text/css">
		<?php //include($config['include_dir']."/include/head.php"); ?>
		<script type="text/javascript">
			function frm_submit()
			{
				var frmobj=window.document.frm_login;
				frmobj.submit();
			}
		</script>
    </head>
	
    <body>
      <div id="wrapper">
        	<div class="header">
            	<div class="wrapper">
                    <div class="header_top">
                        <div class="logo">
                            <a href="#"><img src="<?php echo $config['file_path']; ?>/images/logo.png"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="containt_bg">
            	<div class="wrapper">
                	<div class="containt_box">
                    	<div class="containt_left">
                        	<a href="#"><img src="<?php echo $config['file_path']; ?>/images/man_images.png"></a>
                        </div>
                        <div class="containt_right">
                        	<div class="containt_righttop">
                            	<p>Login</p>
                            </div>
							<form name="frm_login" id="frm_login" action="user-action.php" method="post">
								<div class="containt_rightbottom">
									<input type="hidden" name="method" id="method" value="login">
									<input class="text_box" type="password" value="" placeholder="Enter Passcode" name="passcode" id="passcode">
									<a href="javascript:frm_submit();" id="hide"><img src="<?php echo $config['file_path']; ?>/images/search_images.png"></a>
								</div>
							</form>
                            <?php if($_POST['message']){ ?>
								<span class="invalid_text"><?php echo $_POST['message']; ?></span>
							<?php } ?>
                        </div>
                    </div>
                </div>	
            </div>
        </div>

    </body>
</html>
