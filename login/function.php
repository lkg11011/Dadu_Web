<?php
	require_once("config.inc.php");
	class member
	{	
		function __construct()
		{
			//not thing
		}
		//登入函數
		function login($username,$password,$password_md5)
		{
			global $db;
			$this->login_sql="SELECT * FROM `user` WHERE `username`=:username AND `password`=:password_md5;";
			$this->login = $db->prepare($this->login_sql);
			$this->login->bindParam(":username", $username);
			$this->login->bindParam(":password_md5", $password_md5);
			$this->login->execute();
			$this->login_row = $this->login->fetch();
			if($username==null)
			{
				echo "<script>alert('未輸入管理者帳號，請再次輸入');</script>";
				echo'<meta http-equiv="refresh" content="0; url=../login.php">';
				//header ("Location:../login.php" );
			}
			elseif($password==null)
			{
				echo "<script>alert('未輸入管理者密碼，請再次輸入');</script>";
				echo'<meta http-equiv="refresh" content="0; url=../login.php">';
			}
			elseif($username!=$this->login_row['username'] or $password_md5!=$this->login_row['password'])
			{
				echo "<script>alert('輸入帳號或密碼錯誤，請重新輸入');</script>";
				echo'<meta http-equiv="refresh" content="0; url=../login.php">';
			}
			else
			{
				// if($this->login_row['level']=="user")
				// {
				// 	// echo"<span style=\"color:green;\">登入成功！</span>";
				// 	// echo"您的會員權限為:普通會員";
				// 	echo "<script>alert('登入成功歡迎回來一般使用者!');</script>";
				// 	echo'<meta http-equiv="refresh" content="0; url=../login.php">';
				// 	$_SESSION['username']=$username;
				// 	$_SESSION['level']="user";
				// }
				// else
				if($this->login_row['level']=="admin")
				{
					// echo"<span style=\"color:green;\">登入成功！</span>";
					// echo"您的會員權限為:管理員";
					echo "<script>alert('登入成功歡迎回來管理者!');</script>";
					echo'<meta http-equiv="refresh" content="0; url=../login.php">';
					$_SESSION['username']=$username;
					$_SESSION['level']="admin";
				}
				else
				{
					//echo"<span style=\"color:red;\">登入失敗！</span>";
					echo "<script>alert('登入失敗');</script>";
					echo'<meta http-equiv="refresh" content="0; url=../login.php">';
				}
			}
		}
		//登出函數
		function logout()
		{
			unset($_SESSION['username']);
			unset($_SESSION['level']);
			//echo "登出中...";
			echo "<script>alert('再見管理者!');</script>";
			echo'<meta http-equiv="refresh" content="0; url=../index.php">';
		}
		//取得使用者資訊函數
		function getUserinfoBn($username)
		{
			global $db;
			$this->getuser_sql = "SELECT * FROM `user` WHERE `username`= :username;";
			$this->getuser = $db->prepare($this->getuser_sql);
			$this->getuser->bindParam(":username",$username);
			$this->getuser->execute();
			$this->getuser_row= $this->getuser->fetch();
			return  $this->getuser_row;
		}
	}
?>