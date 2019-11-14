<?php
	include 'database.php';
	$nickname = trim($_POST['nickname']);
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	$confirmPwd = trim($_POST['confirmPwd']);

	$sql = "INSERT INTO user(nickname,password,email) VALUES('$nickname',md5($password),'$email')";
	$checkemail = "SELECT * FROM user WHERE email='{$email}'";

	if ($nickname =='') {
		header("refresh:2;url=register.php");
		die('用户名不能为空！');
	}

	if ($password=='') {
		header("refresh:2;url=register.php");
		die('密码不能为空！');
	}

	if ($confirmPwd=='') {
		header("refresh:2;url=register.php");
		die('确认密码不能为空！');
	}

	if ($email=='') {
		header("refresh:2;url=register.php");
		die('邮箱不能为空！');
	}

	if ($password !== $confirmPwd) {
		header("refresh:2;url=register.php");
		die('两次密码不一致！');
	}

	$pattern = '/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/';

	if (!preg_match($pattern, $email)) {
		die('邮箱格式不正确！');
	}

	$check = mysqli_query($link,$checkemail);
	if (mysqli_num_rows($check)) {
		header("refresh:2;url=register.php");
		die('该邮箱已经被注册！');
	}
	if (mysqli_query($link,$sql)){
		header("refresh:3;url=login.php");
		die('注册成功！正在跳转……');
	}else{
		header("refresh:3;url=login.php");
		echo '注册失败! 请稍后重试...<br/>三秒后自动跳转到注册页面';
		die(mysqli_query($link,$sql));
	}



	
