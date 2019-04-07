<?php
	ob_start();
?>
<?php
	$browser = $_SERVER['HTTP_USER_AGENT'];
	$ip = $_SERVER['REMOTE_ADDR'];
	$timezone1 = '-2';
	$time = date('H:i', strtotime("+2 hours"));
	$date = date('d.m.Y');
	date_default_timezone_set('Etc/GMT'.$timezone1);
	$test="<visitor> $ip | $time | $date | $browser </visitor>";
	$fp = fopen ("visitors.txt", "a+");
	fwrite ($fp, "$test\r\n");
	fclose ($fp);
?>
<!DOCTYPE html>
<html>
	<head> 
		<title>Приймальня Ісуса</title>
		<link rel="stylesheet" href="animate.min.css">
		<link rel="shortcut icon" href="ico.png" type="image/x-icon">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
		@font-face { font-family: "PT Serif"; src: url("pt_serif.ttf"); font-style: normal; font-weight: normal; }
			body{
				background: url("h.jpg") 0 / cover fixed;
				background-attachment: fixed;
				font-family: PT Serif, sans-serif;
				margin: 0;
				overflow: hidden;
				padding: 0;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				-o-user-select: none;
			}
			.allall{
				height: 100vh;
				width: 100vw;
			}
			.all{
				align-items: center;
				cursor: default;
				display: flex;
				justify-content: center;
				flex-direction: column;
				padding: 10px;
			}
			img{ height: 350px;	}
			.imgclass{
				cursor: pointer;
				display: flex;
				justify-content: center;
				//width: 10000vh;
			}
			button{
				border: 0;
				border-radius: 10px;
				background: rgba(33,150,243,0.5);
				cursor: pointer;
				font-family: PT Serif, sans-serif;
				font-size: 16px;
				outline-width: 0;
				padding: 10px;
				padding-left: 15px;
				padding-right: 15px;
				transition: 1s;
				width: 202px;
			}
			button:hover, button:active, button:focus{ background: rgba(33,150,243,1); }
			input{
				border-radius: 10px;
				border: 1px solid #2196F3;
				background: rgba(255,255,255,0.5);
				font-family: PT Serif, sans-serif;
				font-size: 16px;
				outline-width: 0;
				padding: 5px;
				transition: 1s;
				width: 190px;
			}
			input:hover, input:active, input:focus{ background: rgba(255,255,255,1); }
			form{
				align-items: center;
				display: flex;
				justify-content: center;
				flex-direction: column;
			}
			audio{ display: none; }
			@media screen and (max-width:500px) {
				h1{ font-size: 24px; }
				h3{ font-size: 18px; }
				img { height: 240px }
				input{ font-size: 16px; }
				button{ font-size: 16px; }
				.imgclass{ margin-bottom: -30px; }
				.all{ 
					height: 100%;
					width: 100%;
				}
				.allall{ 
					align-content: center;
					align-items: center;
					display: flex; 
					justify-content: center; 
				}
				body{
					background: url("h.jpg") 25% 50% no-repeat; 
					background-attachment: fixed;
				}
			}
		</style>
	</head>
	<body>
		<div class="allall">
			<div class="all">
				<h1 class="wow fadeInDown animated" data-wow-delay="0s" data-wow-duration="2s">
					Ісус чекає на вас!
				</h1>
				<div class="imgclass" onmousemove="func()" onclick="stop()">
					<img src="isus.png" class="image wow fadeIn animated" data-wow-delay="1s" data-wow-duration="2s">
				</div>
				<h3 class="wow fadeInUp animated" data-wow-delay="2s" data-wow-duration="2s">
					Введіть ваш номер телефону
				</h3>
				<form method="post">
					<input name="string" type="tel" class="wow fadeInUp animated" data-wow-delay="2s" data-wow-duration="2s">
					<br>
					<button type="submit" name="ok" class="wow fadeInUp animated" data-wow-delay="2s" data-wow-duration="2s">
						Надіслати до небес
					</button>
				</form>
				<script src="wow.min.js"></script>
				<script>
					new WOW().init();
				</script>
				<audio src="pj.mp3" preload="auto" controls id="player"></audio>
				<script>
					var a;
					a = 0;
					function func() {
						if (a & 1){
							
						} else {
							document.getElementById('player').play();
							document.getElementById('player').volume = 0.1;
						}
					}
					function stop(){
						a = a + 1;
						document.getElementById('player').pause();

						if (a & 1){
							
						} else {
							document.getElementById('player').play();
							document.getElementById('player').volume = 0.1;
						}
					}
				</script>
			</div>
		</div>
		<?php
			if (isset($_REQUEST['ok'])) {
				$string = "<message>".$_REQUEST['string']."<info>$ip | $time | $date | $browser </info></message>";
				if ($string != ""){
					$fd = $string;
					$f_out = fopen("text.txt","a+");
					fwrite($f_out, "$fd\r\n");
					fclose($f_out);

					$testtest = "<sender> $ip | $time | $date | $browser </sender>";
					$fpp = fopen ("visitors.txt", "a+");
					fwrite ($fpp, "$testtest\r\n");
					fclose ($fpp);

					echo "<script>alert('Ваш номер відправлено на небеса');</script>";
				} else {
					echo "<script>alert('Введіть ваш номер!');</script>";
				}
			exit();
			}
		?>
	</body>
</html>
<?php 
	ob_flush(); 
?>