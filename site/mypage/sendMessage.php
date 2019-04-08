<?php 
	include("connect.php");
	header("Content-type: text/html; charset=utf-8");
	$ip = $_SERVER['REMOTE_ADDR'];
	$timezone1 = '-2';
	$time = date('H:i', strtotime("+0 hours"));
	$date = date('d.m.Y');
	$info = ", $ip, $date, $time";
	if(empty($_POST['js'])){
		if($_POST['message'] != '' && $_POST['author'] != ''){
			$author = @iconv("UTF-8", "UTF-8", $_POST['author']);
			$author = $author.$info;
			$author = addslashes($author);
			$author = htmlspecialchars($author);
			$author = stripslashes($author);	
			$author = $mysqli -> real_escape_string($author);
			$message = @iconv("UTF-8", "UTF-8", $_POST['message']);
			$message = addslashes($message);
			$message = htmlspecialchars($message);
			$message = stripslashes($message);
			$message = $mysqli -> real_escape_string($message);
			mail("gmastrbit@gmail.com", "Mypage new message", "Відправник: $author \nПовідомлення: $message");
			$result = $mysqli -> query("INSERT INTO `mypage` (`author`, `message`) VALUES ('$author', '$message')");
			if($result == true){
				echo 0; 
			}else{
				echo 1; 
			}
		}else{
			echo 2; 
		}
	}
?>      	