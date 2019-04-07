<!DOCTYPE html> 
<html> 
<head> 
<title> Администрация </title> 
<!--<link rel="stylesheet" href="http://konstruktor-okta.esy.es/style.css">-->
<link rel="shortcut icon" href="https://hwork.net/okta/ico.png" type="image/x-icon">
<meta charset="UTF-8"> 

<style>
	@font-face {
    font-family: Raleway; 
    src: url(https://hwork.net/okta/raleway.ttf); 
}
	
	body{
		background: #e5e5e5;
		font-family: Raleway, sans-serif;
		font-size: 2.5vh;
		margin: 0;
		padding: 0;
	}
	
	.header{
		background: linear-gradient(270deg, #b90000, #00026e, #5600a8);
		background-size: 600% 600%;
		display: flex;
		color: #ffffff;
		font-size: 3vh;
		text-align: center;

		-webkit-animation: AnimationName 10s ease infinite;
		-moz-animation: AnimationName 10s ease infinite;
		-o-animation: AnimationName 10s ease infinite;
		animation: AnimationName 10s ease infinite;
	

		padding: 1%;
		//position: fixed;
		top: 0;
		width: 98%;
		z-index: 990;
		box-shadow: 0px -4px 24px 0px #000000;
}
	
	@-webkit-keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@-moz-keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@-o-keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@keyframes AnimationName { 
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}

	a{
		color: #fff;
		text-decoration: none;
	}
	
	#content{
		background: #fff;
		border: 1px solid #cccccc;
		border-radius: 10px;
		margin: 2%;
		box-shadow: 0px 3px 9px -4px #000000;
		padding: 1%;
}
	
	.clear{
		background: transparent;
		color: #fff;
		border: 0;
		font-size: 3vh;
		margin: -0.5%;
		margin-top: -2.2%;
		border-radius: 10px;
		float: right;
		padding: 0.5%;
		transition: 0.7s;
	}
	
	.clear:hover{
		cursor: pointer;
		background: #fff;
		color: #000;
	}
	
	
	
	
	
	
	.center{
		text-align: center;
	}
	
	.name{
		font-size: 3vh;
		float: left;
	}
	
	form{
		margin: 0;
		padding: 0;
	}
	
	textarea{
		resize: none;
		font-size: 5vh;
	}
	
	.add{
		border: 3px solid #000;
		border-radius: 10px;
		font-size: 3vh;
		background: #fff;
		transition: 0.5s;
	}
	
	.add:hover{
		background: #000;
		color: #fff;
	}
	
	.transparent{
		color: transparent;
	}
	
	.input1{
		font-size: 3vh;
		margin: 0.5%;
		padding: 0.5%;
	}
	.change{
		//color: #fff;
		display: inline-block;
		padding-left: 1%;
		padding-right: 1%;
	}
	
	.change:hover{
		//border-bottom: 1px solid #fff;
		cursor: pointer;
	}
	
	.change1{
		//color: #fff;
		display: inline-block;
		padding-right: 1%;
	}
	
	.change1:hover{
		//border-bottom: 1px solid #fff;
		cursor: pointer;
	}
	
	.center{
		text-align: center;
	}
	
	.name{
		font-size: 3vh;
		//float: left;
	}
	
	form{
		margin: 0;
		padding: 0;
	}
	
	.transparent{
		color: transparent;
	}
	
	.change1b{
		border-radius: 10px;
		background: transparent;
		color: #fff;
		border: 0;
		display: inline-block;
		float: right;
/*		padding: 0;*/
		transition: 0.5s;
		font-size: 3vh;
		margin-left: 1%;
		margin-right: 1%;
	}
	
	.change1b:hover{
		background: #fff;
		color: #000;
		cursor: pointer;
	}
	
	.izm{
		border-radius: 10px;
		background: transparent;
		color: #fff;
		border: 0;
		display: inline-block;
		float: right;
		padding-left: 1%;
		padding-right: 1%;
		
		transition: 0.5s;
		font-size: 3vh;
	}
	
	.izm:hover{
		background: #fff;
		color: #000;
		cursor: pointer;
	}
	
	.izm0{
		border-radius: 10px;
		background: transparent;
		color: #fff;
		border: 0;
		display: inline-block;
		padding-left: 1%;
		padding-right: 1%;
		transition: 0.5s;
		font-size: 3vh;	
	}
	
	.izm0:hover{
		background: #fff;
		color: #000;
		cursor: pointer;
	}
</style>

</head> 
<body> 

<?php $timezone='-2'; date_default_timezone_set('Etc/GMT'.$timezone);   ?> 

<div class="header">

		<div class="change1"> 
			<a href="https://hwork.net/okta/admin/admin.php" class="izm0"> Заказы </a> 
		</div> |
		
		<div class="change"> 
			<a href="https://hwork.net/okta/admin/change.php" class="izm0"> Номера </a> 
		</div> 
	
<span class="transparent">.</span>
	
</div>


<div id="content">
	

<form action="" method="post" class="forma">

Номера (для того, чтобы текст был перенесен на другую строку используйте тег &#60;br&#62; ): <br>
<br>
<textarea rows="5" cols="25" name="numbers" class="input1" placeholder="Номера"></textarea>
<br>
<br>
<input type="submit" name="oki" value="Изменить/Добавить" class="add">

</form>

</div>


<?php

if (isset($_REQUEST['oki'])) {
	$number = $_REQUEST['numbers'];
	if ($number!="") 
	{ 
	$fd=$number; 
	$f_out = fopen("phones.txt","w"); 
	fwrite($f_out, $fd);  
	fclose($f_out); 
	} 
	header("Location: https://hwork.net/okta/admin/change.php");
    exit();
}
?>

</body> 
</html>