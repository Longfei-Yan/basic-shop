<?php
	include 'database.php';
	session_start();

	if ($_GET['act']!=='logout') {
	
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$autoLogin = trim($_POST['autoLogin']);

		if ($email=='') {
			header('refresh:2;url=login.php');
			die('请输入邮箱号！');
		}
		if ($password=='') {
			header('refresh:2;url=login.php');
			die('请输入密码！');
		}

		$password = md5($password);
		$sql = "SELECT * FROM user WHERE email='{$email}' && password='{$password}'";

		$result = mysqli_query($link,$sql);
		// var_dump(mysqli_query($link,$sql),$sql);
		if (mysqli_num_rows($result)) {
			$row = mysqli_fetch_assoc($result);
			if ($autoLogin==1) {
				$_SESSION = ['nickname'=>$row['nickname'],'email'=>$row['email']];
				setcookie(session_name(),session_id(),time()+60*60*24*7);
			}else{
				$_SESSION = ['nickname'=>$row['nickname'],'email'=>$row['email']];
			}
			header("refresh:3;url=index.php");
			// var_dump($_SESSION);
			die("登录成功！正在跳转...");
			
		}else{
			header("refresh:3;url=login.php");
			die('登录失败！正在跳转到登录页面...');
		}

	}else{
		$_SESSION = [];
		setcookie(session_name(),session_id(),time()-1);
		session_destroy();
		header('Location:index.php');
	}
