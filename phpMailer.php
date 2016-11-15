<?php
	header("Content-Type:text/html; charset=utf-8");
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	$btnSend = $_POST["btnSend"];
	
	
	//---------------------資料庫的Table--------------------------------------------
	// create table dadumessage (No int null auto_increment, Name char(20) null
	// , Mail char(50) null, Message char(200) null 
	// , Date datetime null
	// ,primary key (No))
	// ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
	
	//---------------------將訪客留言的資料傳送到資料庫保存-------------------------
	require_once("config.php");
	
	$dsn = DB_TYPE .":host=".DB_HOSTNAME .";dbname=". DB_NAME . ";charset=". DB_CHARSET;
	
	try{
		$db = new PDO($dsn,DB_USERNAME,DB_PASSWORD);
	}catch (PDOException $e) {
		echo $e->getCode();
	}
	
	
	$datetime = date ("Y-m-d H:i:s" , mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'))) ;
	$dadu = new dadu();
	$dadu->msg($name,$email,$message,$datetime);
	
	class dadu {
	    function msg($name,$email,$message,$datetime)
	    	{
	     		global $db;
    			$this->msg_sql="INSERT INTO `dadumessage` (`Name`, `Mail`, `Message`, `Date`) VALUES (:name, :email, :message, :date);";
    			$this->msg = $db->prepare($this->msg_sql); 
                $this->msg->bindParam(":name",$name);
                $this->msg->bindParam(":email",$email);
                $this->msg->bindParam(":message",$message);
                $this->msg->bindParam(":date",$datetime);
    			if($this->msg->execute())
    			{
    			}
    			else
    			{
    			}
	    	}
	}
	
	//------------------將訪客的留言藉由Gmail轉寄到管理者的信箱--------------------------------
	if(!(isset($btnSend))){
	    require_once('phpMailer/PHPMailerAutoload.php'); //引入phpMailer 記得將路徑換成您自己的path
	    $mail= new PHPMailer(); //初始化一個PHPMailer物件
	    $mail->Host = "smtp.gmail.com"; //SMTP主機 (這邊以gmail為例，所以填寫gmail stmp)
	    $mail->IsSMTP(); //設定使用SMTP方式寄信
	    $mail->SMTPAuth = true; //啟用SMTP驗證模式
	    $mail->Username = "dadumailer@gmail.com"; //您的 gamil 帳號
	    $mail->Password = "1234567891011121314151617181920"; //您的 gmail 密碼
	    $mail->SMTPSecure = "ssl"; // SSL連線 (要使用gmail stmp需要設定ssl模式) 
	    $mail->Port = 465; //Gamil的SMTP主機的port(Gmail為465)。
	    $mail->CharSet = "utf-8"; //郵件編碼
	      
	    $mail->From = "dadumailer@gmail.com"; //寄件者信箱
	    $mail->FromName = $name; //寄件者姓名
	    $mail->AddAddress("cf904d31@gmail.com", "收件人"); //收件人郵件和名稱
	    $mail->AddBCC('cc@example.com'); //設定 密件副本收件人 
	    
	    $mail->IsHTML(true); //郵件內容為html 
	    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //添加附件(若不需要則註解掉就好)
	     
	    $mail->Subject = "你好管理者這是來自".$name."的建議"; //郵件標題
	    $mail->Body =$message."<br>"."這是來自".$name."的Mail是:".$email; //郵件內容
	    $mail->AltBody = '當收件人的電子信箱不支援html時，會顯示這串~~';
	     
	    if(!$mail->send()) {
	        echo '信件發送失敗!!';    
	        echo 'Mailer Error: ' . $mail->ErrorInfo;
	    } else {    
	        echo "<script>alert('信件已發送!!');</script>";
	        echo'<meta http-equiv="refresh" content="0; url=contactUs.php">';
	    }
	}
?>