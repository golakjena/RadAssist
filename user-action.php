<?php 
	session_start();
	header('Cache-Control: max-age=900');
	include('config.php');
	include($config['include_dir'].'/include/connection.php');
	include($config['include_dir']."/include/action-function.php");
	include($config['include_dir']."/include/fun-redirect.php");
	$table = "user";
	fun_avoid_s();
	
	if($_POST['method'] == "login" )
	{
		if(strlen($_POST['passcode'])==0 )
		{
			$var_form_action=$config['file_path'].'/index.php';
			$_POST['message'] ="Enter valid Passcode!";
			$_POST['classmsg'] = "errormsg";
			$var_form_redirect =1;
		}
		else
		{
			$todaysDate=date("Y-m-d H:i:s", strtotime('now'));//changed date
			$selectUser = "SELECT password
						   FROM user 
						   WHERE password='".$_POST['passcode']."' AND
						   '{$todaysDate}' between startDate and endDate";
			$result_user=mysql_query($selectUser);
			if(mysql_num_rows($result_user)>0)
			{
				$_SESSION['front_login_user']=$_POST['passcode'];
				$var_form_action=$config['file_path'].'/home.php';
				$_POST['message'] ="Valid Passcode!";
				$_POST['classmsg'] = "sucees"; 
				$var_form_redirect =1;
			}
			else
			{
				$var_form_action=$config['file_path'].'/index.php';
				$_POST['message'] ="Invalid Passcode!";
				$_POST['classmsg'] = "sucees"; 
				$var_form_redirect =1;
			}
				
				
				
		}
	}

	if($var_form_redirect == 1)
	{
		fun_redirect($var_form_action);
	}
?>