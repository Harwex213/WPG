<?php $path = ''?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<title>Index</title>
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<!--LINKS-CSS INCLUDE-->
	<?php include ("blocks/link_css.php")?>
	<link rel="stylesheet" href="css/index.css">
	<!--/LINKS-CSS INCLUDE-->
</head>

<body>
	<div class="wrapper">
	<!--HEADER INCLUDE-->
	<?php include ("blocks/header.php")?>
	<!--/HEADER INCLUDE-->
	<section class="about">
		<img src="img/glossary/background_img.png" alt="">
		<div class="container">
			<div class="title about__title"></div>
			<div class="subtitle about__subtitle"></div>
			<div class="button about__button"></div>
		</div>
	</section>
	<section class="glossary">
		<div class="title"></div>
		<div class="glossary__tabs tabs">
			<div class="glossary__alphabet">
				<div class="glossary__symbol tab__navitem active">A</div>
				<div class="glossary__symbol tab__navitem">Б</div>
				<div class="glossary__symbol tab__navitem">В</div>
				<div class="glossary__symbol tab__navitem">Г</div>
				<div class="glossary__symbol tab__navitem">Д</div>
				<div class="glossary__symbol tab__navitem">Ж</div>
				<div class="glossary__symbol tab__navitem">З</div>
				<div class="glossary__symbol tab__navitem">И</div>
				<div class="glossary__symbol tab__navitem">К</div>
				<div class="glossary__symbol tab__navitem">Л</div>
				<div class="glossary__symbol tab__navitem">М</div>
				<div class="glossary__symbol tab__navitem">О</div>
				<div class="glossary__symbol tab__navitem">П</div>
				<div class="glossary__symbol tab__navitem">Р</div>
				<div class="glossary__symbol tab__navitem">С</div>
				<div class="glossary__symbol tab__navitem">Х</div>
				<div class="glossary__symbol tab__navitem">Ш</div>
				<div class="glossary__symbol tab__navitem">Э</div>
			</div>
			<div class="defs glossary__defs">
				<div class="defs ">
					
				</div>
			</div>
		</div>
	</section>
	<!--FOOTER INCLUDE-->
	<?php include ("blocks/footer.php")?>
	<!--/FOOTER INCLUDE-->
	<!--MADE BY HARWEX213 (Oleg Kaportsev) AND GARIKMOGILEV (Igot Skvortsov)-->
	</div>
	<!--JS FILES INCLUDE-->
	<?php include ("blocks/js.php")?>
	<!--/JS FILES INCLUDE-->
</body>

</html>