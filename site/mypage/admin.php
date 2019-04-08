<html>
	<head> 
		<title> Admin </title>
		<link rel="stylesheet" href="css/component.css">
		<link rel="shortcut icon" href="img/ico.png" type="image/x-icon">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			body{
				background: #fff;
				color: #000;
				font-family: pt_sans, arial, sans-serif;
				margin: 0;
				padding: 0;
			}
			.header{
				background: #fff;
				border-bottom: 1px solid #D1C4E9;
				box-shadow: 0 0 10px #D1C4E9;
				color: #000;
				display: flex;
				left: 0;
				padding: 10px;
				position: fixed;
				top: 0;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				-o-user-select: none;
				width: 100%;
				z-index: 1000;
			}
			.logo{
				align-items: center;
				display: flex;
				padding-left: 58px;
				padding-right: 40px;
			}
			.ico{
				align-items: center;
				background: #311B92;
				border-radius: 500px;
				color: #fff;
				display: flex;
				font-size: 18px;
				font-family: pt_serif;
				height: 40px;
				justify-content: center;
				width: 40px;
			}
			.ico:hover {
				cursor: pointer;
				background: linear-gradient(45deg, #9575cd, #7e57c2, #673ab7, #5e35b1, #512da8, #4527a0, #311b92);
				background-size: 1400% 1400%;
				-webkit-animation: AnimationName 3s ease infinite;
				-moz-animation: AnimationName 3s ease infinite;
				-o-animation: AnimationName 3s ease infinite;
				animation: AnimationName 3s ease infinite;
			}
			@-webkit-keyframes AnimationName {
				0%{background-position:91% 0%}
				50%{background-position:10% 100%}
				100%{background-position:91% 0%}
			}
			@-moz-keyframes AnimationName {
				0%{background-position:91% 0%}
				50%{background-position:10% 100%}
				100%{background-position:91% 0%}
			}
			@-o-keyframes AnimationName {
				0%{background-position:91% 0%}
				50%{background-position:10% 100%}
				100%{background-position:91% 0%}
			}
			@keyframes AnimationName { 
				0%{background-position:91% 0%}
				50%{background-position:10% 100%}
				100%{background-position:91% 0%}
			}
			.jumbotron{
				align-items: center;
				height: calc(100vh - 67px);
				margin-top: 67px;
				display: flex;
				flex-direction: column;
				justify-content: center;
			}
			.jumbotron-box{
				margin-bottom: 80px;
			}
			.hello{
				display: flex;
				font-family: pt_serif;
				font-size: 28px;
				justify-content: center;
				line-height: 1.7;
			}
			.image{
				border-radius: 500px;
				height: 250px;
				width: 250px;
			}
			.my_image{
				align-items: center;
				background: #D1C4E9;
				border-radius: 500px;
				display: flex;
				height: 250px;
				justify-content: center;
				position: absolute;
				width: 250px;
				z-index: -1;
			}
			.spinner{
				color: #fff;
				position: absolute;
				z-index: -1;
			}
			.mytext{
				align-items: center;
				color: rgba(0,0,0,0.8);
				display: flex;
				font-size: 18px;
				line-height: 1.7;
				padding-left: 50px;
			}
			.info-box{
				display: flex;
				flex-direction: row;
			}
			.down{
				align-items: center;
				bottom: 5;
				display: flex;
				justify-content: center;
				position: fixed;
				width: 100%;
			}
			.down-button{
				align-items: center;
				background: #D1C4E9;
				border-radius: 500px;
				color: #fff;
				display: flex;
				height: 30px;
				justify-content: center;
				width: 30px;
			}
			body{
				padding: 10px;
			}
			#center-center{
				align-content: center;
				align-items: center;
				display: flex;
				flex-direction: column;
				height: calc(100% - 78px);
				justify-content: center;
				width: 100%;
			}
			.btn{
				background: #311B92;
				border: none;
				border-radius: 500px;
				box-shadow: 0 0 10px #D1C4E9;
				color: #fff;
				padding: 15px;
				width: 230px;
			}
			button{
				outline: none;
			}
			.footer__input{
				width: 230px;
			}
		</style>
	</head>
	<body>
	<?php 
		include("connect.php");
		$result = $mysqli -> query("SELECT * FROM `mypage`");
		$comment = mysqli_fetch_array($result);
		$query = $mysqli -> query("SELECT `text` FROM `pass`");
		$array = mysqli_fetch_array($query);
		$passw = $array[0];
	?>
	<div id="center-center">
		<form method="post">
			<input class="footer__input" type="password" placeholder="Введіть пароль" name="pass">
			<br><br>
			<input type="submit" name="check" value="Перевірити" class="btn">
			<br>
		</form>
		<button value="Сховати" class="btn" id="hide" onclick='test();'> Сховати </button> 
		<script>
			function test() {
			var element = document.getElementById('center-center');
			document.body.removeChild(element);
			}
		</script>
	</div>
	<?php
		if (isset($_REQUEST['check'])) {
		$password = $_POST['pass']; 
		if ($password == $passw){
			echo "<script>alert('Пароль вірний.'); </script> <h1> Feedback </h1>";
			do{
			if ($comment != ""){
				echo  " 
				<table style='width: 100%; border-radius: 5px;  box-shadow: 0px 0px 4px 0px #ccc;'>
				<tr>
				<td style='padding:5px;'> Автор: ".$comment['author']." </td>
				</tr>
				<tr>
				<td  colspan='2' style='padding:5px; padding-bottom:0;  overflow-wrap: break-word;  word-wrap: break-word; word-break: break-all;  -webkit-hyphens: auto; -ms-hyphens: auto; hyphens: auto;'> Повідомлення:  ".$comment['message']." </td>
				</tr>
				</table>
				<br>
				<br>
				";
			}
			} while ($comment = mysqli_fetch_array($result));
			echo "
			<form method='post'>
			<button class='btn' type='submit' name='del_ajax'>
			Очистити AJAX
			</button>
			</form>
			";
		} else {
			echo "<script>alert('Пароль не правильний!'); document.location.href = '#'; </script>";
		}
			exit();
		}
		if (isset($_REQUEST['del_ajax'])) {
			$mysqli -> query ("DELETE FROM `hworknet_test`.`mypage`");
			$mysqli -> close();
		}
	?>
	</body>
</html>