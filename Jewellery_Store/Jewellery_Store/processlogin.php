<?php
session_start();
include "includes/config.php";

//$msg = "";
$form_user = $_POST['txtusername'];
$form_password = $_POST['txtpassword'];

	if($form_user  == "" || $form_password == "")
	{
		echo '<script>alert("Please Fill up all fields!");</script>';
		echo "<script>window.location.href='default.php';</script>";	
		exit;
	}
	

	
	$sql = "SELECT user_id, username, password, ac_type, user_status FROM `users` WHERE username = '$form_user' AND password = '$form_password';";
	$numrecs = 0;
	$result1 = mysqli_query($conn, $sql);
	$numrecs=mysqli_num_rows($result1);
			
	//instantiate object of query class
	// $dbquery = new DbQuery($sql);
	// $result = $dbquery->query();


	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_assoc($result)) {




	// while ($row = $dbquery->fetcharray())
	// {
		$user_id = $row['user_id'];
		$username = $row['username'];
		$pass = $row['password'];
		$ac_type = $row['ac_type'];
		$status = $row['user_status'];
		
		if(($status == "0") AND ($ac_type == "Administrator"))
		{
			$_SESSION['status'] = "admin";
			
			echo "<script>alert('Welcome Back Webmaster Redirecting to personal home page')</script>";
			echo "<script>window.location.href='adminarea/adminhome.php';</script>";
		}
		
		else if(($status == "1") AND ($ac_type == "user"))
		{
			$user_id = $row['user_id'];
			$username = $row['username'];
			echo "<script>alert('Welcome Back')</script>";
			// echo "<script>window.location.href='index-1.php';</script>";
		}
		
		else
		{
			echo "<script>window.location.href='index-1.php';</script>";
		}
	}
	
	
	
	
	if($numrecs==0)
	{
		echo '<script>alert("username and/or password not found! \n\n Signup or Login again");</script>';
		session_unset();
		session_destroy();
		echo "<script>window.location.href='default.php';</script>";
		//exit;
	}
	else
	{
		//store login information to trace user
		$_SESSION['username'] = $form_user;
		$User = $_SESSION['username'];
		$_SESSION['user_id'] = $user_id;
		$userid = $_SESSION['user_id'];
		//$status = $_SESSION['status'];
	echo $User . "sfwef" . $userid;
		
		$_SESSION['code'] = rand();
	
		//echo "<script>parent.reloadUsers();</script>";
		echo "<script>window.location.href='index-1.php';</script>";
		//exit;
	}
		
	// //instantiate object of query class
	// $dbquery = new DbQuery($sql);
	// $dbquery->query();
	// $dbquery->freeresult();
	// $dbquery->close();