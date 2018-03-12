<?php	

	session_start();

	header('Cache-Control: max-age=900');

	include("config.php");

	include($config['include_dir']."/include/connection.php");

	include($config['include_dir']."/include/action-function.php");

	$table = "user";

	$passcode = substr(uniqid(),4,8);

			//Add User

				$info = array(

						"password"=>$passcode,

						"startDate"=>@date("Y-m-d H:i:s", strtotime('now')),

						"endDate"=>@date("Y-m-d H:i:s", strtotime('+72 hours'))

					  );

				

				insert($info,$table);

?>



<!DOCTYPE HTML>

<html>

     <head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <meta name="title" content="RadAssist" />

        <meta name="keyword" content="RadAssist" />

        <meta name="description" content="RadAssist" />

        <title>TRG-assist | Generate Passscode</title>

        <link rel="shortcut icon" href="<?php echo $config['file_path']; ?>/images/favicon_images.png" type="text/css">

		<link href="<?php echo $config['file_path']; ?>/css/style-new.css" rel="stylesheet" type="text/css">

		

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

                            	<p>Generate Passcode</p>

                            </div>

								<div class="containt_rightbottom">

									<input class="text_box" type="text" name="password" id="password" value="<?php echo $passcode; ?>">

								</div>

								<span class="invalid_text">Your Passcode will expire with in next 72 hours.</span>

							

                        </div>

                    </div>

                </div>	

            </div>

        </div>

    </body>

</html>

