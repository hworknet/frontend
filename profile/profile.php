<?php
	$referer = $_SERVER['HTTP_REFERER'];
	$browser = $_SERVER['HTTP_USER_AGENT'];
	$ip = $_SERVER['REMOTE_ADDR'];
	$timezone1 = '-2';
	$time = date('H:i', strtotime("+8 hours"));
	$date = date('d.m.Y');
	date_default_timezone_set('Etc/GMT'.$timezone1);
	$test="| $ip | $time | $date | $browser | $referer |";
	$fp = fopen ("profile_ip.txt", "a+");
	fwrite ($fp, "$test\n");
	fclose ($fp);
?>
<html>
	<head> 
		<title> Профіль </title>
		<link rel="shortcut icon" href="ico.ico" type="image/x-icon">
		<style>
			body{
				overflow-x: hidden;
			}
			.cc{
				align-items: center;
				display: flex;
				justify-content: center;
			}
			.load-container {
			    background: linear-gradient(140deg, #9575cd, #7e57c2, #673ab7, #5e35b1, #512da8, #4527a0, #311b92);
			    background-size: 1400% 1400%;
			    height: 100%;
			    left: 0;
			    position: fixed;
			    top: 0;
			    width: 100%;
			    z-index: 99999;
			    -webkit-animation: PrealoaderAnimation 4s ease infinite;
			    -moz-animation: PrealoaderAnimation 4s ease infinite;
			    -o-animation: PrealoaderAnimation 4s ease infinite;
			    animation: PrealoaderAnimation 4s ease infinite;
			}
			.no-cssanimations .load-container .loader {
			    animation: none;
			    background: none;
			    box-shadow: none;
			    border: 0 none;
			    color: #fff;  
			    font-size: 17px;
			    height: auto;
			    margin: 1em auto;
			    overflow: visible;
			    text-indent: 0;
			    text-align: center;
			    width: auto;
			    -webkit-animation: none;
			}
			.no-cssanimations .load-container .loader:before,
			.no-cssanimations .load-container .loader:after {
			    display: none;
			}
			.load8 .loader {
			    animation: load8 1.1s infinite linear;
			    border-top: 0.6em solid rgba(255, 255, 255, 0.2);
			    border-right: 0.6em solid rgba(255, 255, 255, 0.2);
			    border-bottom: 0.6em solid rgba(255, 255, 255, 0.2);
			    border-left: 0.6em solid #fff;
			    left: 50%;
			    margin-left: -4.3em;
			    margin-top: -4.3em;
			    font-size: 10px;
			    position: absolute;
			    top: 50%;
			    text-indent: -9999em;
			    -webkit-animation: load8 1.1s infinite linear;
			}
			.load8 .loader, .load8 .loader:after {
			    border-radius: 50%;
			    height: 8em;
			    width: 8em;
			}
			.cssload-spinner {
	height: 49px;
	width: 49px;
	margin: 49px auto;
	position: relative;
	animation: cssload-invert 2.3s infinite steps(2, end);
		-o-animation: cssload-invert 2.3s infinite steps(2, end);
		-ms-animation: cssload-invert 2.3s infinite steps(2, end);
		-webkit-animation: cssload-invert 2.3s infinite steps(2, end);
		-moz-animation: cssload-invert 2.3s infinite steps(2, end);
}
.cssload-ball {
	height: 100%;
	width: 100%;
	position: absolute;
	border-radius: 50%;
	top: 0;
	left: 0;
	background: rgba(255,255,255,0.98);
}
.cssload-ball-1 {
	animation: cssload-ball1 1.15s infinite alternate linear;
		-o-animation: cssload-ball1 1.15s infinite alternate linear;
		-ms-animation: cssload-ball1 1.15s infinite alternate linear;
		-webkit-animation: cssload-ball1 1.15s infinite alternate linear;
		-moz-animation: cssload-ball1 1.15s infinite alternate linear;
}
.cssload-ball-2 {
	animation: cssload-ball2 1.15s infinite alternate linear;
		-o-animation: cssload-ball2 1.15s infinite alternate linear;
		-ms-animation: cssload-ball2 1.15s infinite alternate linear;
		-webkit-animation: cssload-ball2 1.15s infinite alternate linear;
		-moz-animation: cssload-ball2 1.15s infinite alternate linear;
}
.cssload-ball-3 {
	animation: cssload-ball3 1.15s infinite alternate linear;
		-o-animation: cssload-ball3 1.15s infinite alternate linear;
		-ms-animation: cssload-ball3 1.15s infinite alternate linear;
		-webkit-animation: cssload-ball3 1.15s infinite alternate linear;
		-moz-animation: cssload-ball3 1.15s infinite alternate linear;
}
.cssload-ball-4 {
	animation: cssload-ball4 1.15s infinite alternate linear;
		-o-animation: cssload-ball4 1.15s infinite alternate linear;
		-ms-animation: cssload-ball4 1.15s infinite alternate linear;
		-webkit-animation: cssload-ball4 1.15s infinite alternate linear;
		-moz-animation: cssload-ball4 1.15s infinite alternate linear;
}

@keyframes cssload-invert {
	100% {
		transform: rotate(180deg);
	}
}

@-o-keyframes cssload-invert {
	100% {
		-o-transform: rotate(180deg);
	}
}

@-ms-keyframes cssload-invert {
	100% {
		-ms-transform: rotate(180deg);
	}
}

@-webkit-keyframes cssload-invert {
	100% {
		-webkit-transform: rotate(180deg);
	}
}

@-moz-keyframes cssload-invert {
	100% {
		-moz-transform: rotate(180deg);
	}
}

@keyframes cssload-ball1 {
	12% {
		transform: none;
	}
	26% {
		transform: translateX(25%) scale(1, 0.8);
	}
	40% {
		transform: translateX(50%) scale(0.8, 0.8);
	}
	60% {
		transform: translateX(50%) scale(0.8, 0.8);
	}
	74% {
		transform: translate(50%, 25%) scale(0.6, 0.8);
	}
	88% {
		transform: translate(50%, 50%) scale(0.6, 0.6);
	}
	100% {
		transform: translate(50%, 50%) scale(0.6, 0.6);
	}
}

@-o-keyframes cssload-ball1 {
	12% {
		-o-transform: none;
	}
	26% {
		-o-transform: translateX(25%) scale(1, 0.8);
	}
	40% {
		-o-transform: translateX(50%) scale(0.8, 0.8);
	}
	60% {
		-o-transform: translateX(50%) scale(0.8, 0.8);
	}
	74% {
		-o-transform: translate(50%, 25%) scale(0.6, 0.8);
	}
	88% {
		-o-transform: translate(50%, 50%) scale(0.6, 0.6);
	}
	100% {
		-o-transform: translate(50%, 50%) scale(0.6, 0.6);
	}
}

@-ms-keyframes cssload-ball1 {
	12% {
		-ms-transform: none;
	}
	26% {
		-ms-transform: translateX(25%) scale(1, 0.8);
	}
	40% {
		-ms-transform: translateX(50%) scale(0.8, 0.8);
	}
	60% {
		-ms-transform: translateX(50%) scale(0.8, 0.8);
	}
	74% {
		-ms-transform: translate(50%, 25%) scale(0.6, 0.8);
	}
	88% {
		-ms-transform: translate(50%, 50%) scale(0.6, 0.6);
	}
	100% {
		-ms-transform: translate(50%, 50%) scale(0.6, 0.6);
	}
}

@-webkit-keyframes cssload-ball1 {
	12% {
		-webkit-transform: none;
	}
	26% {
		-webkit-transform: translateX(25%) scale(1, 0.8);
	}
	40% {
		-webkit-transform: translateX(50%) scale(0.8, 0.8);
	}
	60% {
		-webkit-transform: translateX(50%) scale(0.8, 0.8);
	}
	74% {
		-webkit-transform: translate(50%, 25%) scale(0.6, 0.8);
	}
	88% {
		-webkit-transform: translate(50%, 50%) scale(0.6, 0.6);
	}
	100% {
		-webkit-transform: translate(50%, 50%) scale(0.6, 0.6);
	}
}

@-moz-keyframes cssload-ball1 {
	12% {
		-moz-transform: none;
	}
	26% {
		-moz-transform: translateX(25%) scale(1, 0.8);
	}
	40% {
		-moz-transform: translateX(50%) scale(0.8, 0.8);
	}
	60% {
		-moz-transform: translateX(50%) scale(0.8, 0.8);
	}
	74% {
		-moz-transform: translate(50%, 25%) scale(0.6, 0.8);
	}
	88% {
		-moz-transform: translate(50%, 50%) scale(0.6, 0.6);
	}
	100% {
		-moz-transform: translate(50%, 50%) scale(0.6, 0.6);
	}
}

@keyframes cssload-ball2 {
	12% {
		transform: none;
	}
	26% {
		transform: translateX(25%) scale(1, 0.8);
	}
	40% {
		transform: translateX(50%) scale(0.8, 0.8);
	}
	60% {
		transform: translateX(50%) scale(0.8, 0.8);
	}
	74% {
		transform: translate(50%, -25%) scale(0.6, 0.8);
	}
	88% {
		transform: translate(50%, -50%) scale(0.6, 0.6);
	}
	100% {
		transform: translate(50%, -50%) scale(0.6, 0.6);
	}
}

@-o-keyframes cssload-ball2 {
	12% {
		-o-transform: none;
	}
	26% {
		-o-transform: translateX(25%) scale(1, 0.8);
	}
	40% {
		-o-transform: translateX(50%) scale(0.8, 0.8);
	}
	60% {
		-o-transform: translateX(50%) scale(0.8, 0.8);
	}
	74% {
		-o-transform: translate(50%, -25%) scale(0.6, 0.8);
	}
	88% {
		-o-transform: translate(50%, -50%) scale(0.6, 0.6);
	}
	100% {
		-o-transform: translate(50%, -50%) scale(0.6, 0.6);
	}
}

@-ms-keyframes cssload-ball2 {
	12% {
		-ms-transform: none;
	}
	26% {
		-ms-transform: translateX(25%) scale(1, 0.8);
	}
	40% {
		-ms-transform: translateX(50%) scale(0.8, 0.8);
	}
	60% {
		-ms-transform: translateX(50%) scale(0.8, 0.8);
	}
	74% {
		-ms-transform: translate(50%, -25%) scale(0.6, 0.8);
	}
	88% {
		-ms-transform: translate(50%, -50%) scale(0.6, 0.6);
	}
	100% {
		-ms-transform: translate(50%, -50%) scale(0.6, 0.6);
	}
}

@-webkit-keyframes cssload-ball2 {
	12% {
		-webkit-transform: none;
	}
	26% {
		-webkit-transform: translateX(25%) scale(1, 0.8);
	}
	40% {
		-webkit-transform: translateX(50%) scale(0.8, 0.8);
	}
	60% {
		-webkit-transform: translateX(50%) scale(0.8, 0.8);
	}
	74% {
		-webkit-transform: translate(50%, -25%) scale(0.6, 0.8);
	}
	88% {
		-webkit-transform: translate(50%, -50%) scale(0.6, 0.6);
	}
	100% {
		-webkit-transform: translate(50%, -50%) scale(0.6, 0.6);
	}
}

@-moz-keyframes cssload-ball2 {
	12% {
		-moz-transform: none;
	}
	26% {
		-moz-transform: translateX(25%) scale(1, 0.8);
	}
	40% {
		-moz-transform: translateX(50%) scale(0.8, 0.8);
	}
	60% {
		-moz-transform: translateX(50%) scale(0.8, 0.8);
	}
	74% {
		-moz-transform: translate(50%, -25%) scale(0.6, 0.8);
	}
	88% {
		-moz-transform: translate(50%, -50%) scale(0.6, 0.6);
	}
	100% {
		-moz-transform: translate(50%, -50%) scale(0.6, 0.6);
	}
}

@keyframes cssload-ball3 {
	12% {
		transform: none;
	}
	26% {
		transform: translateX(-25%) scale(1, 0.8);
	}
	40% {
		transform: translateX(-50%) scale(0.8, 0.8);
	}
	60% {
		transform: translateX(-50%) scale(0.8, 0.8);
	}
	74% {
		transform: translate(-50%, 25%) scale(0.6, 0.8);
	}
	88% {
		transform: translate(-50%, 50%) scale(0.6, 0.6);
	}
	100% {
		transform: translate(-50%, 50%) scale(0.6, 0.6);
	}
}

@-o-keyframes cssload-ball3 {
	12% {
		-o-transform: none;
	}
	26% {
		-o-transform: translateX(-25%) scale(1, 0.8);
	}
	40% {
		-o-transform: translateX(-50%) scale(0.8, 0.8);
	}
	60% {
		-o-transform: translateX(-50%) scale(0.8, 0.8);
	}
	74% {
		-o-transform: translate(-50%, 25%) scale(0.6, 0.8);
	}
	88% {
		-o-transform: translate(-50%, 50%) scale(0.6, 0.6);
	}
	100% {
		-o-transform: translate(-50%, 50%) scale(0.6, 0.6);
	}
}

@-ms-keyframes cssload-ball3 {
	12% {
		-ms-transform: none;
	}
	26% {
		-ms-transform: translateX(-25%) scale(1, 0.8);
	}
	40% {
		-ms-transform: translateX(-50%) scale(0.8, 0.8);
	}
	60% {
		-ms-transform: translateX(-50%) scale(0.8, 0.8);
	}
	74% {
		-ms-transform: translate(-50%, 25%) scale(0.6, 0.8);
	}
	88% {
		-ms-transform: translate(-50%, 50%) scale(0.6, 0.6);
	}
	100% {
		-ms-transform: translate(-50%, 50%) scale(0.6, 0.6);
	}
}

@-webkit-keyframes cssload-ball3 {
	12% {
		-webkit-transform: none;
	}
	26% {
		-webkit-transform: translateX(-25%) scale(1, 0.8);
	}
	40% {
		-webkit-transform: translateX(-50%) scale(0.8, 0.8);
	}
	60% {
		-webkit-transform: translateX(-50%) scale(0.8, 0.8);
	}
	74% {
		-webkit-transform: translate(-50%, 25%) scale(0.6, 0.8);
	}
	88% {
		-webkit-transform: translate(-50%, 50%) scale(0.6, 0.6);
	}
	100% {
		-webkit-transform: translate(-50%, 50%) scale(0.6, 0.6);
	}
}

@-moz-keyframes cssload-ball3 {
	12% {
		-moz-transform: none;
	}
	26% {
		-moz-transform: translateX(-25%) scale(1, 0.8);
	}
	40% {
		-moz-transform: translateX(-50%) scale(0.8, 0.8);
	}
	60% {
		-moz-transform: translateX(-50%) scale(0.8, 0.8);
	}
	74% {
		-moz-transform: translate(-50%, 25%) scale(0.6, 0.8);
	}
	88% {
		-moz-transform: translate(-50%, 50%) scale(0.6, 0.6);
	}
	100% {
		-moz-transform: translate(-50%, 50%) scale(0.6, 0.6);
	}
}

@keyframes cssload-ball4 {
	12% {
		transform: none;
	}
	26% {
		transform: translateX(-25%) scale(1, 0.8);
	}
	40% {
		transform: translateX(-50%) scale(0.8, 0.8);
	}
	60% {
		transform: translateX(-50%) scale(0.8, 0.8);
	}
	74% {
		transform: translate(-50%, -25%) scale(0.6, 0.8);
	}
	88% {
		transform: translate(-50%, -50%) scale(0.6, 0.6);
	}
	100% {
		transform: translate(-50%, -50%) scale(0.6, 0.6);
	}
}

@-o-keyframes cssload-ball4 {
	12% {
		-o-transform: none;
	}
	26% {
		-o-transform: translateX(-25%) scale(1, 0.8);
	}
	40% {
		-o-transform: translateX(-50%) scale(0.8, 0.8);
	}
	60% {
		-o-transform: translateX(-50%) scale(0.8, 0.8);
	}
	74% {
		-o-transform: translate(-50%, -25%) scale(0.6, 0.8);
	}
	88% {
		-o-transform: translate(-50%, -50%) scale(0.6, 0.6);
	}
	100% {
		-o-transform: translate(-50%, -50%) scale(0.6, 0.6);
	}
}

@-ms-keyframes cssload-ball4 {
	12% {
		-ms-transform: none;
	}
	26% {
		-ms-transform: translateX(-25%) scale(1, 0.8);
	}
	40% {
		-ms-transform: translateX(-50%) scale(0.8, 0.8);
	}
	60% {
		-ms-transform: translateX(-50%) scale(0.8, 0.8);
	}
	74% {
		-ms-transform: translate(-50%, -25%) scale(0.6, 0.8);
	}
	88% {
		-ms-transform: translate(-50%, -50%) scale(0.6, 0.6);
	}
	100% {
		-ms-transform: translate(-50%, -50%) scale(0.6, 0.6);
	}
}

@-webkit-keyframes cssload-ball4 {
	12% {
		-webkit-transform: none;
	}
	26% {
		-webkit-transform: translateX(-25%) scale(1, 0.8);
	}
	40% {
		-webkit-transform: translateX(-50%) scale(0.8, 0.8);
	}
	60% {
		-webkit-transform: translateX(-50%) scale(0.8, 0.8);
	}
	74% {
		-webkit-transform: translate(-50%, -25%) scale(0.6, 0.8);
	}
	88% {
		-webkit-transform: translate(-50%, -50%) scale(0.6, 0.6);
	}
	100% {
		-webkit-transform: translate(-50%, -50%) scale(0.6, 0.6);
	}
}

@-moz-keyframes cssload-ball4 {
	12% {
		-moz-transform: none;
	}
	26% {
		-moz-transform: translateX(-25%) scale(1, 0.8);
	}
	40% {
		-moz-transform: translateX(-50%) scale(0.8, 0.8);
	}
	60% {
		-moz-transform: translateX(-50%) scale(0.8, 0.8);
	}
	74% {
		-moz-transform: translate(-50%, -25%) scale(0.6, 0.8);
	}
	88% {
		-moz-transform: translate(-50%, -50%) scale(0.6, 0.6);
	}
	100% {
		-moz-transform: translate(-50%, -50%) scale(0.6, 0.6);
	}
}
			<?php
				$image = rand(1, 8); 
				echo "body, .main::before, .blur1::before, .blur2::before, .blur3::before, .blur4::before, .block::before{
						background: url('backgrounds/$image.jpg') 0 / cover fixed;
					} ";
			?>
		</style>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body onload="onload()"> 
		<div class="load-container load8 cc">
			<div class="cssload-spinner">
				<div class="cssload-ball cssload-ball-1"></div>
				<div class="cssload-ball cssload-ball-2"></div>
				<div class="cssload-ball cssload-ball-3"></div>
				<div class="cssload-ball cssload-ball-4"></div>
			</div>
		</div>
		<div class="all">
			<div class="main-wrap">
			<div class="main">
				<div class="main_image"> <a href="https://www.instagram.com/p/BSlpLPLgQxD/?taken-by=gmastrbit" class="wow rotateIn animated" data-wow-duration="2s"> <img src="main_image/main_img.jpg" class="main_image_image"> </a> </div>
				<div class="main_text"> 
					<div class="main_text_text">
						Щербаков Богдан 
						<br>
						html, css, php, js
						<br>
						gmastrbit@gmail.com
					</div>
				</div>
			</div>
			</div>
			<br class="hi">
			<div class="main-wrap">
			<div class="main center ncopy">
				Мої проекти
			</div>
			</div>
			<div class="br_small">
				<br class="hi">
			</div>
			<div class="br">
				<br class="hi">
			</div>		
			<!-- VISIBLE -->
			<div class="container" data-wow-offset="400">	
				<a href="http://hwork.net/ps/" target="_blank" class="block no_decorations">
					<div class="block_head">
						hwork.net/ps
					</div>
					<div class="block_image">
						<img src="blocks/block1/block_img1.png" class="block_image_image">
					</div>
					<div class="block_info">
						Сайт для групи ПС-36
					</div>
				</a>
				<a href="http://konstruktor-okta.esy.es" target="_blank" class="block no_decorations">
					<div class="block_head">
						konstruktor-okta.esy.es
					</div>
					<div class="block_image">
						<img src="blocks/block2/block_img1.png" class="block_image_image">
					</div>
					<div class="block_info">
						Лендінг
					</div>
				</a>
			</div>
			<br class="hi">
			<div class="container" data-wow-offset="400">	
				<a href="http://hwork.net/files/" target="_blank" class="block no_decorations">
					<div class="block_head">
						hwork.net/files
					</div>
					<div class="block_image">
						<img src="blocks/block4/block_img1.png" class="block_image_image">
					</div>
					<div class="block_info">
						Простий файлообмінник
					</div>
				</a>
				<a href="http://kazka8.esy.es" target="_blank" class="block no_decorations">
					<div class="block_head">
						kazka8.esy.es
					</div>
					<div class="block_image">
						<img src="blocks/block3/block_img1.png" class="block_image_image">
					</div>
					<div class="block_info">
						Сайт вихователя
					</div>
				</a>
			</div>
			<br class="hi">
			<div class="container" data-wow-offset="400">		
				<a href="http://hwork.net/only/" target="_blank" class="block no_decorations">
					<div class="block_head">
						hwork.net/only
					</div>
					<div class="block_image">
						<img src="blocks/block6/block_img1.png" class="block_image_image">
					</div>
					<div class="block_info">
						Улюблений трек
					</div>
				</a>
				<a href="http://hwork.net/secta/" target="_blank" class="block no_decorations">
					<div class="block_head">
						hwork.net/secta
					</div>
					<div class="block_image">
						<img src="blocks/block5/block_img1.png" class="block_image_image">
					</div>
					<div class="block_info">
						Проста соцмережа
					</div>
				</a>
			</div>
			<!-- VISIBLE -->
			<!-- INVISIBLE -->
			<div class="box">
				<a href="http://hwork.net/ps/" target="_blank" class="block no_decorations">
					<div class="block_head">
						hwork.net/ps
					</div>
					<div class="block_image">
						<img src="blocks/block1/block_img1.png" class="block_image_image">
					</div>
					<div class="block_info">
						Сайт для групи ПС-36
					</div>
				</a>
				<br class="hi">
				<a href="http://konstruktor-okta.esy.es" target="_blank" class="block no_decorations">
					<div class="block_head">
						konstruktor-okta.esy.es
					</div>
					<div class="block_image">
						<img src="blocks/block2/block_img1.png" class="block_image_image">
					</div>
					<div class="block_info">
						Лендінг
					</div>
				</a>
				<br class="hi">
				<a href="http://hwork.net/files/" target="_blank" class="block no_decorations">
					<div class="block_head">
						hwork.net/files
					</div>
					<div class="block_image">
						<img src="blocks/block4/block_img1.png" class="block_image_image">
					</div>
					<div class="block_info">
						Простий файлообмінник
					</div>
				</a>
				<br class="hi">
				<a href="http://kazka8.esy.es" target="_blank" class="block no_decorations">
					<div class="block_head">
						kazka8.esy.es
					</div>
					<div class="block_image">
						<img src="blocks/block3/block_img1.png" class="block_image_image">
					</div>
					<div class="block_info">
						Сайт вихователя
					</div>
				</a>
				<br class="hi">
				<a href="http://hwork.net/only/" target="_blank" class="block no_decorations">
					<div class="block_head">
						hwork.net/only
					</div>
					<div class="block_image">
						<img src="blocks/block6/block_img1.png" class="block_image_image">
					</div>
					<div class="block_info">
						Улюблений трек
					</div>
				</a>				
				<br class="hi">
				<a href="http://hwork.net/secta/" target="_blank" class="block no_decorations">
					<div class="block_head">
						hwork.net/secta
					</div>
					<div class="block_image">
						<img src="blocks/block5/block_img1.png" class="block_image_image">
					</div>
					<div class="block_info">
						Проста соцмережа
					</div>
				</a>
				</div>
			<!-- </div> -->
			<!-- INVISIBLE -->		
		<br>
		<div class="main-wrap"> 
		<div class="main center social ncopy">
		<div class="social_block social_center"> Зв'язок зі мною </div>
		<br>
		<div class="social_block icons">
			<a href="mailto:gmastrbit@gmail.com" class="no_decorations white wow rotateIn animated" data-wow-duration="2s" data-wow-offset="10"><i class="fa fa-envelope-o ico" aria-hidden="true"></i></a>
			<a href="https://www.facebook.com/gmastrbit" class="no_decorations white wow rotateIn animated" data-wow-duration="2s" data-wow-offset="10"><i class="fa fa-facebook-official ico" aria-hidden="true"></i></a>
			<a href="https://vk.com/gmastrbit" class="no_decorations white wow rotateIn animated" data-wow-duration="2s" data-wow-offset="10"><i class="fa fa-vk ico" aria-hidden="true"></i></a>
			<a href="https://www.instagram.com/gmastrbit/" class="no_decorations white wow rotateIn animated" data-wow-duration="2s" data-wow-offset="10"><i class="fa fa-instagram ico" aria-hidden="true"></i></a>
			<a href="https://t.me/gmastrbit" class="no_decorations white wow rotateIn animated" data-wow-duration="2s" data-wow-offset="10"><i class="fa fa-telegram ico" aria-hidden="true"></i></a>
		</div>
		</div>
		</div>		
   			<script src="jquery.min.js"></script>
		</div>    
		</div>    
		<script>
		  $(window).load(function () {
		      $(".load-container").delay(100).fadeOut(250);
		  });
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("head").append("<link rel='stylesheet' href='css/font-awesome.css'>");
				$("head").append("<link rel='stylesheet' href='style.css'>");
				$("head").append("<link rel='stylesheet' type='text/css' href='animate.min.css'>");
			})
		</script>
		<script src="wow.min.js"></script>
		<script>
		    new WOW().init();
		</script>
	</body>
</html>