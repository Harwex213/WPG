<?php $path = ''?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<title>Index</title>
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
	<!--MAIN-->
	<section class="introduction">
			<img src="img/index/introduction_backgr_img.png" alt="background" class="introduction__ibg">
			<div class="container">
				<h1 class="title introduction__title">Желаете узнать о качестве любой ВПИ?</h1>
				<p class="subtitle introduction__subtitle">Переходите на рейтинговый список, где вы увидите активные ВПИ
					по своему вкусу</p>
				<div class="button introduction__button">
					<a href="rating" class="button__text introduction__button-text">Перейти на список ВПИ</a>
					<img src="img/index/button.png" alt="" class="button__background">
					<img src="img/index/button_hover.png" alt="" class="button__background button__background-hover">
				</div>
				<div class="columns introduction__columns">
					<div class="columns__container">
						<div class="columns__column columns__column-1">#4</div>
						<div class="columns__column columns__column-2">#36</div>
						<div class="columns__column columns__column-3">#18</div>
						<div class="columns__column columns__column-4">#1</div>
						<div class="columns__column columns__column-5">#25</div>
						<div class="columns__title">Впервые слышите аббревиатуру ВПИ?</div>
					</div>
				</div>
			</div>
		</section>
		<section class="about">
			<div class="container">
				<h1 class="title about__title">ВПИ — Военно-Политическая Игра</h1>
				<div class="paragraph about__paragraph">
					<div class="paragraph__line"></div>
					<p class="paragraph__text">Не следует, однако забывать, что дальнейшее развитие различных форм
						деятельности способствует подготовки и реализации форм развития. Равным образом консультация с
						широким активом требуют определения и уточнения модели развития. С другой стороны постоянное
						информационно-пропагандистское обеспечение нашей деятельности обеспечивает широкому кругу
						(специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных
						задач.</p>
					<p class="paragraph__text">Значимость этих проблем настолько очевидна, что дальнейшее развитие
						различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании
						новых предложений. Товарищи! сложившаяся структура организации представляет собой интересный
						эксперимент проверки направлений прогрессивного развития.</p>
					<div class="paragraph__details">
						<p class="paragraph__text paragraph__text-details">Для подробностей вы можете зайти в группу —
							<a href="" class="paragraph__text-link">Каталог ВПИ</a></p>
					</div>
				</div>
			</div>
		</section>
	<!--/MAIN-->
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