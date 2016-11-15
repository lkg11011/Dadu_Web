<?php 
    //-----管理者輸入帳密後會傳到此處處理
    header('Content-Type: text/html; charset=utf-8');
    session_start();
    require_once("function.php");
    $member = new member();
    $username = $_POST['account_Number'];
    $password = $_POST['password'];
    $password_md5 = md5($password); 
    $member->login($username,$password,$password_md5);
?>