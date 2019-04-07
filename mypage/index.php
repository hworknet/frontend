<?php include("mypage/connect.php"); /* ini_set('display_errors','Off'); */ ?>
<!-- gmastrbit@gmail.com -->
<!DOCTYPE html>
<html lang="uk">
	<head> 
		<title> Моя сторінка </title>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120229196-2"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-120229196-2');
		</script>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="mypage/img/ico.png" type="image/x-icon">
		<style>
			body{ font-family: pt_sans; overflow-x: hidden; }
			.load-container {			
				background: #fff;
				background-size: 1400% 1400%;
				height: 100%;
				left: 0;
				position: fixed;
				top: 0;
				width: 100%;
				z-index: 99999;}
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
				-webkit-animation: none;}
			.no-cssanimations .load-container .loader:before, .no-cssanimations .load-container .loader:after { display: none; }
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
				-webkit-animation: load8 1.1s infinite linear;}
			.load8 .loader, .load8 .loader:after { border-radius: 50%; height: 8em; width: 8em;} 
			.c-c{ align-items: center; display: flex; justify-content: center; }
			.cssload-container { width: 114px; margin: 0 auto; }
			.cssload-circle-1 { height: 114px; width: 114px; background: rgb(49,27,146); }
			.cssload-circle-2 { height: 95px; width: 95px; background: rgb(69,39,160); }
			.cssload-circle-3 { height: 76px; width: 76px; background: rgb(82,45,168); }
			.cssload-circle-4 { height: 57px; width: 57px; background: rgb(94,53,177); }
			.cssload-circle-5 { height: 38px; width: 38px; background: rgb(104,58,183); }
			.cssload-circle-6 { height: 19px; width: 19px; background: rgb(126,87,194); } 
			.cssload-circle-7 { height: 9px; width: 9px; background: rgb(150,117,205); }
			.cssload-circle-8 { height: 5px; width: 5px;  background: rgb(179,157,219); }
			.cssload-circle-1, .cssload-circle-2, .cssload-circle-3, .cssload-circle-4, .cssload-circle-5, .cssload-circle-6, .cssload-circle-7, .cssload-circle-8 {
				border-bottom: none;
				border-radius: 50%;
				-o-border-radius: 50%;
				-ms-border-radius: 50%;
				-webkit-border-radius: 50%;
				-moz-border-radius: 50%;
				box-shadow: 1px 1px 1px rgba(0,0,0,0.1);
				-o-box-shadow: 1px 1px 1px rgba(0,0,0,0.1);
				-ms-box-shadow: 1px 1px 1px rgba(0,0,0,0.1);
				-webkit-box-shadow: 1px 1px 1px rgba(0,0,0,0.1);
				-moz-box-shadow: 1px 1px 1px rgba(0,0,0,0.1);
				animation-name: cssload-spin;
				-o-animation-name: cssload-spin;
				-ms-animation-name: cssload-spin;
				-webkit-animation-name: cssload-spin;
				-moz-animation-name: cssload-spin;
				animation-duration: 4600ms;
				-o-animation-duration: 4600ms;
				-ms-animation-duration: 4600ms;
				-webkit-animation-duration: 4600ms;
				-moz-animation-duration: 4600ms;
				animation-iteration-count: infinite;
				-o-animation-iteration-count: infinite;
				-ms-animation-iteration-count: infinite;
				-webkit-animation-iteration-count: infinite;
				-moz-animation-iteration-count: infinite;
				animation-timing-function: linear;
				-o-animation-timing-function: linear;
				-ms-animation-timing-function: linear;
				-webkit-animation-timing-function: linear;
				-moz-animation-timing-function: linear;}
			@keyframes cssload-spin { from { transform: rotate(0deg);} to { transform: rotate(360deg);} }
			@-o-keyframes cssload-spin { from { -o-transform: rotate(0deg);} to { -o-transform: rotate(360deg);} }
			@-ms-keyframes cssload-spin { from { -ms-transform: rotate(0deg);} to { -ms-transform: rotate(360deg);} }
			@-webkit-keyframes cssload-spin { from { -webkit-transform: rotate(0deg);} to { -webkit-transform: rotate(360deg);} }
			@-moz-keyframes cssload-spin { from { -moz-transform: rotate(0deg);} to { -moz-transform: rotate(360deg);} }
			.only-mob{ display: none; }
			@media screen and (max-width:800px) {
				.project-img, .zoom, .bmark-image{ display: none; }
				.project-img-mobile{ border-radius: 5px; border: 1px solid #D1C4E9; display: flex; width: 100%; }
				.only-mob{ display: block; }
			}
		</style>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="My personal page // gmastrbit">
		<meta name="keywords" content="gmastrbit, Bogdan, Shcherbakov, Bogdan Shcherbakov, Богдан Щербаков, Щербаков, Богдан">
	</head>
	<body id="js-scrollspy">
	<div class="load-container load8 c-c">
		<div class="cssload-container"> <div class="cssload-circle-1"> <div class="cssload-circle-2"> <div class="cssload-circle-3"> <div class="cssload-circle-4"> <div class="cssload-circle-5"> <div class="cssload-circle-6"> <div class="cssload-circle-7"> <div class="cssload-circle-8">	</div> </div> </div> </div> </div> </div> </div> </div> </div> 
	</div>
	<span id="head"> </span>
	<div class="all">
		<div class="header">
			<div class="logo">
				<a href="mailto:gmastrbit@gmail.com" class="ico gradient1" data-gradient-css="linear-gradient(45deg, #9575cd, #7e57c2, #673ab7, #5e35b1, #512da8, #4527a0, #311b92)"> G </a> 
			</div>			
			<div class="menu">
			<div class="logo-menu">
				<a href="mailto:gmastrbit@gmail.com" class="ico gradient1" data-gradient-css="linear-gradient(45deg, #9575cd, #7e57c2, #673ab7, #5e35b1, #512da8, #4527a0, #311b92)"> G </a> 
			</div>
			 <div class="menu__icon"> <span></span> <span></span> <span></span> <span></span> </div>
				<nav class="menu menu--ferdinand menu__links">
					<ul class="menu__list js-scrollspy-nav" id="top-menu">
						<li class="menu__links-item menu__item menu__item--current"> <a href="#head" class="menu__link">Головне</a> </li>
						<li class="menu__links-item menu__item"> <a href="#projects" class="menu__link">Проекти</a> </li>
						<li class="menu__links-item menu__item"> <a href="#contacts" class="menu__link">Контакти</a> </li>
						<li class="menu__links-item menu__item"> <a href="#envelope" class="menu__link">Напишіть мені</a> </li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="only-mob"><br><br></div>
		<div class="jumbotron">
			<div class="jumbotron-box">
				<div class="hello"> Привіт! Це — я,	<br><br> </div>
				<div class="info-box">
					<div class="myimage">
						<div class="my_image">
							<i class="fa fa-spinner fa-pulse fa-3x fa-fw spinner"></i>
						</div>
						<a href="https://www.instagram.com/p/BU6N6O5AAZV/?taken-by=gmastrbit" target="_blank"> 							
							<img src="mypage/img/image.png" width="250" height="250" alt="I am">
						</a>
					</div>
					<div class="mytext">
						Богдан Щербаков <br> Мені 19 років <br> Захоплююсь програмуванням, дизайном <br> Навики: HTML, CSS, PHP, JS, SQL, C++<br>
						<div class="only-mob"><br><br></div>
					</div>
				</div>
			</div>
			<span id="projects"> </span>
		</div>
		<div class="projects-mob"> </div>
		<div class="projects">
			<div class="hello wow fadeIn animated hamb1">Проекти </div>
			<br><br><br><br><br><br>
			<div class="project">
				<div class="project-image">
					<div class="my_image_project">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw spinner"></i>
					</div>
					<img src="mypage/img/project_1/project_image_1.png" class="project-img zoom" alt="TBEC">
					<img src="mypage/img/project_1/project_image_1.png" class="project-img-mobile" alt="TBEC">
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header"> Презентація коледжу </div>
					<div class="project-text">
						Виконаний в стилі презентації сайт, який розповідає і показує про ТБЕК різноманітну інформацію, статистику та інше.
						<div class="ots"></div>
						В нижній частині такоє є відео- та фото-презентації аби ще більше поринути в атмосферу коледжу.	
					</div>
				</div>
			</div>
			<br><br><br>
			<section class="section">
				<a class="button wow bounceInUp animated" href="https://hwork.net/tbec/" target="_blank">
					Перейти <i class="fa fa-arrow-right" aria-hidden="true"></i>
				</a>
			</section>
			<br><br><br><br>
			<div class="separator wow fadeIn animated"></div>
			<br><br><br><br><br>
			<div class="project">
				<div class="project-image">
					<div class="my_image_project">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw spinner"></i>
					</div>
					<img src="mypage/img/project_2/project_image_2.png" class="project-img zoom" alt="My profile">
					<img src="mypage/img/project_2/project_image_2.png" class="project-img-mobile"  alt="My profile">
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header"> Мій профіль </div>
					<div class="project-text">
						Натхненний дизайном iOS, створив сторінку про себе та свої творіння, часто використовуючи ефект розмиття для різних елементів.
						<div class="ots"></div>
						Мої перші спроби зробити цікавий сайт.
					</div>
				</div>
			</div>
			<br><br><br>
			<section class="section">
				<a class="button wow bounceInUp animated" href="https://hwork.net/profile/" target="_blank">
					Перейти <i class="fa fa-arrow-right" aria-hidden="true"></i>
				</a>
			</section>
			<br><br><br><br>
			<div class="separator wow fadeIn animated"></div>
			<br><br><br><br><br>
			<div class="project">
				<div class="project-image">
					<div class="my_image_project">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw spinner"></i>
					</div>
					<img src="mypage/img/project_3/project_image_3.png" class="project-img zoom" alt="PS-46">
					<img src="mypage/img/project_3/project_image_3.png" class="project-img-mobile"  alt="PS-46">
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header"> Сайт для студентів	</div>
					<div class="project-text">
						На сайті є все необхідне для студента: зміни в розкладі, графік дзвінків, домашнє завдання та інша різноманітна інформація.
						<div class="ots"></div>
						Також є адміністративний розділ для того, аби можна було редагувати інформацію на сайті будь-де і будь-коли.
					</div>
				</div>
			</div>
			<br><br><br>
			<section class="section">
				<a class="button wow bounceInUp animated" href="https://hwork.net/ps/" target="_blank">
					Перейти <i class="fa fa-arrow-right" aria-hidden="true"></i>
				</a>
			</section>
			<br><br><br><br>
			<div class="separator wow fadeIn animated"></div>
			<br><br><br><br><br>
			<div class="project">
				<div class="project-image">
					<div class="my_image_project">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw spinner"></i>
					</div>
					<img src="mypage/img/project_4/project_image_4.png" class="project-img zoom" alt="Fupl">
					<img src="mypage/img/project_4/project_image_4.png" class="project-img-mobile"  alt="Fupl">
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header"> Власний файлообмінник </div>
					<div class="project-text">
						Дозволяє завантажити файл, для того, аби потім можна було зручно ним поділитися чи використовувати в своїх цілях будь-де і будь-коли. 
						<div class="ots"></div>
						На скріншоті видно адміністративні розділи, за допомогою яких можна стежити за роботою файлообмінника та керувати ним.
					</div>
				</div>
			</div>
			<br><br><br>
			<section class="section">
				<a class="button wow bounceInUp animated" href="https://hwork.net/files/" target="_blank">
					Перейти <i class="fa fa-arrow-right" aria-hidden="true"></i>
				</a>
			</section>
			<br><br><br><br>
			<div class="separator wow fadeIn animated"></div>
			<br><br><br><br><br>
			<div class="project">
				<div class="project-image">
					<div class="my_image_project">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw spinner"></i>
					</div>
					<img src="mypage/img/project_5/project_image_5.png" class="project-img zoom" alt="Secta">
					<img src="mypage/img/project_5/project_image_5.png" class="project-img-mobile"  alt="Secta">
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header"> Соцмережа для об'єднання </div>
					<div class="project-text">
						Тут можна створити профіль, ділитися творчістю, спілкуватися з іншими учасниками.
						<div class="ots"></div>
						Дана соцмережа хоч і має мало функцій, але цілком робоча і порадує користувачів з творчими амбіціями.
					</div>
				</div>
			</div>
			<br><br><br>
			<section class="section">
				<a class="button wow bounceInUp animated" href="https://hwork.net/secta/" target="_blank">
					Перейти <i class="fa fa-arrow-right" aria-hidden="true"></i>
				</a>
			</section>
			<br><br><br><br>
			<div class="separator wow fadeIn animated"></div>
			<br><br><br><br><br>
			<div class="project">
				<div class="project-image">
					<div class="my_image_project">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw spinner"></i>
					</div>
					<img src="mypage/img/project_6/project_image_6.png" class="project-img zoom" alt="Kazka">
					<img src="mypage/img/project_6/project_image_6.png" class="project-img-mobile"  alt="Kazka">
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header"> Сайт вихователя </div>
					<div class="project-text">
						Створений в стилі Material Design сайт для того, щоб продемонструвати багаторічну працю викладача.
						<div class="ots"></div>
						Сайт містить багато матеріалів, які пригодяться багатьом вихователям.
					</div>
				</div>
			</div>
			<br><br><br>
			<section class="section">
				<a class="button wow bounceInUp animated" href="https://hwork.net/teacher" target="_blank">
					Перейти <i class="fa fa-arrow-right" aria-hidden="true"></i>
				</a>
			</section>
			<br><br><br><br>
			<div class="separator wow fadeIn animated"></div>
			<br><br><br><br><br>
			<div class="project">
				<div class="project-image">
					<div class="my_image_project">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw spinner"></i>
					</div>
					<img src="mypage/img/project_7/project_image_7.png" class="project-img zoom" alt="Okta">
					<img src="mypage/img/project_7/project_image_7.png" class="project-img-mobile"  alt="Okta">
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header">Сторінка-лендінг </div>
					<div class="project-text">
						Перші спроби створити landing page власними руками. На сторінці є перелік товарів, їх представлення, опис і т.д.
						<div class="ots"></div>
						Прихований адміністративний розділ дозволяє обробляти та збирати замовлення.
					</div>
				</div>
			</div>
			<br><br><br>
			<section class="section">
				<a class="button wow bounceInUp animated" href="https://hwork.net/okta/index.php" target="_blank">
					Перейти <i class="fa fa-arrow-right" aria-hidden="true"></i>
				</a>
			</section>
			<br><br><br><br>
			<div class="separator wow fadeIn animated"></div>
			<br><br><br><br><br>
			<div class="project">
				<div class="project-image">
					<div class="my_image_project">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw spinner"></i>
					</div>
					<img src="mypage/img/project_8/project_image_8.png" class="project-img zoom" alt="Welcome to the jungle">
					<img src="mypage/img/project_8/project_image_8.png" class="project-img-mobile"  alt="Welcome to the jungle">
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header"> Улюблений трек	</div>
					<div class="project-text">
						Знайомство з HTML5-плеєром переросло у фан-сторінку треку вісімдесятих років.
						<div class="ots"></div>
						На сторінці є кнопки керування плеєром, слова та відеокліп.
					</div>
				</div>
			</div>
			<br><br><br>
			<section class="section">
				<a class="button wow bounceInUp animated" href="https://hwork.net/only/" target="_blank">
					Перейти <i class="fa fa-arrow-right" aria-hidden="true"></i>
				</a>
			</section>
			<br><br><br><br>
			<div class="separator wow fadeIn animated"></div>
			<br><br><br><br><br>
			<div class="project">
				<div class="project-image">
					<div class="my_image_project">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw spinner"></i>
					</div>
					<img src="mypage/img/project_10/project_image_10.png" class="project-img zoom" alt="Mailer">
					<img src="mypage/img/project_10/project_image_10.png" class="project-img-mobile"  alt="Mailer">
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header"> Надсилач повідомлень </div>
					<div class="project-text">
						Тепер ви можете анонімно або відкрито надіслати будь-яке повідомлення на будь-яку email адресу.
						<div class="ots"></div>
						Надсилання повідомлень онлайн без реєстрації. 
					</div>
				</div>
			</div>
			<br><br><br>
			<section class="section">
				<a class="button wow bounceInUp animated" href="https://hwork.net/mail/" target="_blank">
					Перейти <i class="fa fa-arrow-right" aria-hidden="true"></i>
				</a>
			</section>
			<br><br><br>
		</div>
		<div class="bookmarks">
			<br><br><br><br>
			<div class="hello wow fadeIn animated hamb4"> Концепція </div>
			<br><br><br><br><br><br><br>
			<div class="bmark1">
				<div class="bmark-image wow fadeIn animated zoom">
					<div class="bmark-logo-1">
						<i class="fa fa-heart-o pad blur" aria-hidden="true"></i>
						<i class="fa fa-heart pad red" aria-hidden="true"></i>
						<i class="fa fa-heart pad red" aria-hidden="true"></i>
					</div>
				</div>
				<div class="bmark-image-mob wow fadeIn animated">
					<div class="bmark-logo-1">
						<i class="fa fa-heart-o pad blur" aria-hidden="true"></i>
						<i class="fa fa-heart pad red" aria-hidden="true"></i>
						<i class="fa fa-heart pad red" aria-hidden="true"></i>
					</div>
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header"> Розмиття </div>
					<div class="project-text">
						Використайте цей прийом для того, аби спрямувати увагу на текст і мати при цьому гарний фон. Не треба забувати, що можна використовувати розмиття не лише для фону, а й для окремих елементів. Бажано застосовувати і з іншими прийомами. 
					</div>
				</div>
			</div>
			<br><br><br><br><br>
			<div class="separator wow fadeIn animated"></div>
			<br><br><br><br><br>
			<div class="bmark2">
				<div class="bmark-image wow fadeIn animated zoom">
					<div class="bmark-logo-2">
						<i class="fa fa-music gradient" aria-hidden="true"></i>
					</div>
				</div>
				<div class="bmark-image-mob wow fadeIn animated">
					<div class="bmark-logo-2">
						<i class="fa fa-music gradient" aria-hidden="true"></i>
					</div>
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header"> Градієнт </div>
					<div class="project-text">
						Популярний нині прийом може урізноманітнити кольорову гаму сайта, привернути увагу користувача. Як радіальний так і лінійний градієнти можна використовувати як елементи фону сторінки або ж простої кнопки. 
					</div>
				</div>
			</div>
			<br><br><br><br><br>
			<div class="separator wow fadeIn animated"></div>
			<br><br><br><br><br>
			<div class="bmark3">
				<div class="bmark-image wow fadeIn animated zoom">
					<div class="bmark-logo-3">
						<div class="row1">
							<i class="fa fa-user one" aria-hidden="true"></i> 
							<i class="fa fa-user two" aria-hidden="true"></i>
							<i class="fa fa-user three" aria-hidden="true"></i>
						</div>
						<div class="row2">
							<i class="fa fa-user four" aria-hidden="true"></i> 
							<i class="fa fa-user five" aria-hidden="true"></i>
							<i class="fa fa-user six" aria-hidden="true"></i>
						</div>
						<div class="row3">
							<i class="fa fa-user seven" aria-hidden="true"></i> 
							<i class="fa fa-user eight" aria-hidden="true"></i>
							<i class="fa fa-user nine" aria-hidden="true"></i>
						</div>				
					</div>
				</div>
				<div class="bmark-image-mob wow fadeIn animated">
					<div class="bmark-logo-3">
						<div class="row1">
							<i class="fa fa-user one" aria-hidden="true"></i> 
							<i class="fa fa-user two" aria-hidden="true"></i>
							<i class="fa fa-user three" aria-hidden="true"></i>
						</div>
						<div class="row2">
							<i class="fa fa-user four" aria-hidden="true"></i> 
							<i class="fa fa-user five" aria-hidden="true"></i>
							<i class="fa fa-user six" aria-hidden="true"></i>
						</div>
						<div class="row3">
							<i class="fa fa-user seven" aria-hidden="true"></i> 
							<i class="fa fa-user eight" aria-hidden="true"></i>
							<i class="fa fa-user nine" aria-hidden="true"></i>
						</div>				
					</div>
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header"> Прозорість	</div>
					<div class="project-text">
						За допомогою цього прийому можна створити цікаві місця для тексту, чи сфокосувати користувача на якомусь елементі. Можна використовувати для великих і малих елементів і експериментувати з рівнями прозорості.
					</div>
				</div>
			</div>
			<br><br><br><br>
			<span id="contacts"> </span>
			<div class="contacts-mob"> <br><br><br><br>	</div>
		</div>
		<div class="contacts">
			<div class="hello wow fadeIn animated hamb2">Контакти </div>
			<br><br><br><br><br><br>
			<div class="contacts-box">
				<div class="dummy dummy-menu wow fadeIn animated">
					<ul>
						<li>
							<a class="tooltip" href="https://www.facebook.com/gmastrbit" target="_blank">
								<i class="fa fa-facebook-official" aria-hidden="true"></i>
								<span class="tooltip-content"> <span class="tooltip-text"> <span class="tooltip-inner">
									Профіль в Facebook
									</span> </span> 
								</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="dummy dummy-menu wow fadeIn animated">
					<ul>
						<li>
							<a class="tooltip" href="mailto:gmastrbit@gmail.com" target="_blank">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<span class="tooltip-content"> <span class="tooltip-text"> <span class="tooltip-inner">
									E-mail адреса
									</span> </span> 
								</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="dummy dummy-menu wow fadeIn animated">
					<ul>
						<li>
							<a class="tooltip" href="https://vk.com/gmastrbit" target="_blank">
								<i class="fa fa-vk" aria-hidden="true"></i>
								<span class="tooltip-content"> <span class="tooltip-text"> <span class="tooltip-inner">
									Сторінка VKontakte
									</span> </span> 
								</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="dummy dummy-menu wow fadeIn animated">
					<ul>
						<li>
							<a class="tooltip" href="https://t.me/gmastrbit" target="_blank">
								<i class="fa fa-telegram" aria-hidden="true"></i>
								<span class="tooltip-content"> <span class="tooltip-text"> <span class="tooltip-inner">
									Профіль в Telegram
									</span> </span> 
								</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="dummy dummy-menu wow fadeIn animated">
					<ul>
						<li>
							<a class="tooltip" href="https://www.behance.net/gmastrbit" target="_blank">
							<i class="fa fa-behance" aria-hidden="true"></i>
							<span class="tooltip-content"> <span class="tooltip-text"> <span class="tooltip-inner">
								Профіль на Behance
								</span> </span> 
							</span>
						</a>
						</li>
					</ul>
				</div>
				<div class="dummy dummy-menu wow fadeIn animated">
					<ul>
						<li>
							<a class="tooltip" href="https://github.com/gmastrbit" target="_blank">
							<i class="fa fa-github" aria-hidden="true"></i>
							<span class="tooltip-content"> <span class="tooltip-text"> <span class="tooltip-inner">
								Профіль в GitHub
								</span> </span> 
							</span>
						</a>
						</li>
					</ul>
				</div>
			</div> 
		</div>
		<div class="mess">
			<span id="envelope"> </span> 
			<div class="message-mob"> <br><br><br><br> </div>
		</div>
		<div class="write-me">
			<div class="hello wow fadeIn animated hamb3">Напишіть мені</div>
			<br><br><br><br>
			<div class="feedback">
				<form method="post" action="sendMessage.php"  class="feedbck">
					<div class="row-feedback-1 wow fadeIn animated">
						<input class="footer__input inp" placeholder="Введіть ім'я чи пошту" name="author" id="author" type="text" required>
					</div>
					<br><br>
					<div class="row-feedback wow fadeIn animated">
						<textarea placeholder="Введіть повідомлення" name="message" id="message" class="footer__input textarea-f" required></textarea>
						<input name="js" type="hidden" value="no" id="js">
					</div>
					<br><br>
					<div class="row-feedback wow fadeIn animated">					
						<section class="section">
							<button id="send" class="button wow bounceInUp animated" type="submit" name="button">
								Надіслати <i class="fa fa-paper-plane" aria-hidden="true"></i>
							</button>
						</section>
					</div>
					<br>
					<div class="res">
					<span id="resp"></span>
					</div>
				</form>
			</div>
		</div>
		<br><br><br><br><br>
	</div>
	<script src="mypage/js/jquery.min.js"></script>
	<script>
	$(window).load(function () {
		$(".load-container").delay(100).fadeOut(750);
	});
	$(window).scroll(function() { 
		$('.header').toggleClass('header-shadow', $(this).scrollTop() > 10); 
	});
	$(document).ready(function() {
		$("head").append("<link rel='stylesheet' type='text/css' href='mypage/css/component.css'>");
	})
	$('a[href^="#"]').bind('click.smoothscroll',function (e) {
		e.preventDefault();
		var target = this.hash,
		$target = $(target);
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top - 0
		}, 500, 'swing', function () {
			window.location.hash = target;
		});
	});
	$(function() {
		var $page = $('html, body');
		$('a[href*="#"]').click(function() {
			$page.animate({
				scrollTop: $( $.attr(this, 'href') ).offset().top
			}, 500);
			return false;
		});
	});
	</script>
		<script src="mypage/js/wow.min.js"></script>
		<script src="mypage/js/zoomerang.js"></script>
		<script src="mypage/js/classie.js"></script>
	<script>
	$(function() {
		$("#send").click(function(){
			var author = $("#author").val();
			var message = $("#message").val();						
			$.ajax({
			type: "POST",
			url: "mypage/sendMessage.php",
			data: {"author": author, "message": message },
			cache: false,						
			success: function(response){
			var messageResp = new Array('Ваше повідомлення відправлене','Повідомлення не відправлене, помилка БД','Не можна відправляти порожні повідомлення');
			var resultStat = messageResp[Number(response)];
			if(response == 0){
				$("#author").val("");
				$("#message").val("");
			}
				$("#resp").text(resultStat).show().delay(1500).fadeOut(800);
			}
			});
			return false;
		});
	});
	$('.top').click(function(e){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		});
	});
	Array.prototype.forEach.call(document.querySelectorAll('p'), function (p, i) {
		p.style.marginLeft = i * 6 + '%'
	})
	Zoomerang
	.config({
		maxHeight: 400,
		maxWidth: 900,
		bgColor: '#fff',
		bgOpacity: .85,
		onOpen: openCallback,
		onClose: closeCallback,
		onBeforeOpen: beforeOpenCallback,
		onBeforeClose: beforeCloseCallback
	})
	.listen('.zoom')
	function openCallback (el) {
		console.log('zoomed in on: ')
		console.log(el)
	}
	function closeCallback (el) {
		console.log('zoomed out on: ')
		console.log(el)
	}
	function beforeOpenCallback (el) {
		console.log('on before zoomed in on:')
		console.log(el)
	}
	function beforeCloseCallback (el) {
		console.log('on before zoomed out on:')
		console.log(el)
	}
	</script>
	<script>
	(function() {
		[].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
			var menuItems = menu.querySelectorAll('.menu__link'),
			setCurrent = function(ev) {
				ev.preventDefault();
				var item = ev.target.parentNode; 
				if (classie.has(item, 'menu__item--current')) {
					return false;
				}
				classie.remove(menu.querySelector('.menu__item--current'), 'menu__item--current');					
				classie.add(item, 'menu__item--current');
			};
			[].slice.call(menuItems).forEach(function(el) {
				el.addEventListener('click', setCurrent);
			});
		});
		[].slice.call(document.querySelectorAll('.link-copy')).forEach(function(link) {
			link.setAttribute('data-clipboard-text', location.protocol + '//' + location.host + location.pathname + '#' + link.parentNode.id);
			new Clipboard(link);
			link.addEventListener('click', function() {
				classie.add(link, 'link-copy--animate');
				setTimeout(function() {
					classie.remove(link, 'link-copy--animate');
				}, 300);
			});
		});
	})(window);
	new WOW().init();
	var lastId,
	topMenu = $("#top-menu"),
	topMenuHeight = topMenu.outerHeight()+15,
	menuItems = topMenu.find("a"),
	scrollItems = menuItems.map(function(){
		var item = $($(this).attr("href"));
		if (item.length) { return item; }
	});
	$(window).scroll(function(){
		var fromTop = $(this).scrollTop()+topMenuHeight;
		var cur = scrollItems.map(function(){
			if ($(this).offset().top < fromTop)
			return this;
		});
		cur = cur[cur.length-1];
		var id = cur && cur.length ? cur[0].id : "";
		if (lastId !== id) {
			lastId = id;
			menuItems
			.parent().removeClass("menu__item--current")
			.end().filter("[href='#"+id+"']").parent().addClass("menu__item--current");
		}                   
	});
    $('.menu__icon').on('click', function() {
		$(this).closest('.menu').toggleClass('menu_state_open');
    });
	</script>
	</body>
</html>