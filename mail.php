<html>
	<form action="" method=post>
	寄件者：<input type="text" name="sender"><br/>
	寄件者姓名：<input type="text" name="sendername"><br/>
	收件者：<input type="text" name="recipient"><br/>
	主旨：<input type="text" name="main"><br/>
	內容：<br/><textarea name="content" cols="30%" rows="10%"></textarea><br/>
	<input type="submit" value="寄信"><br/>
	</form>

	<?php
	$sender=$_POST['sender'];
	$sendername=$_POST['sendername'];
	$recipient=$_POST['recipient'];
	$main=$_POST['main'];
	$content=$_POST['content'];

	require "\phpmailer/class.phpmailer.php"; //匯入PHPMailer類別 
	require "\phpmailer/class.smtp.php";
	// echo $_SESSION['mail'];
	// echo $_SESSION['name'];
	$mail= new PHPMailer(); //建立新物件
	$mail->IsSMTP();                                // 設定使用SMTP方式寄信        
	$mail->SMTPAuth = true;                         // 設定SMTP需要驗證
	//$mail->SMTPDebug=2; 
	$mail->SMTPSecure = "ssl";                      // Gmail的SMTP主機需要使用SSL連線   
	$mail->Host="smtp.gmail.com";                 // Gmail的SMTP主機        
	$mail->Port = 465;                              // Gmail的SMTP主機的port為465      
	$mail->CharSet = "utf-8";                       // 設定郵件編碼   
	$mail->Encoding = "base64";
	$mail->WordWrap = 50;                           // 每50個字元自動斷行
	      
	$mail->Username = "w8i5n1n2i2@gmail.com";     // 設定驗證帳號        
	$mail->Password = "Wiggle0122~~";              // 設定驗證密碼  
	$mail->From = "$sender"; //設定寄件者信箱 
	$mail->FromName = "$sendername"; //設定寄件者姓名

	$mail->IsHTML(true); //設定郵件內容為HTML 
	$mail->Subject = "$main"; //設定郵件標題 
	$mail->Body = "$content "; //設定郵件內容 
	$mail->AddAddress("$recipient", "test"); //設定收件者郵件及名稱 
	if($mail->Send()){
		echo "寄信成功";
	}else{
		echo "gg";
	}
	?>
</html>
