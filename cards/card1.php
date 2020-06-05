<?php $path = '../../'?>
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
	<link rel="stylesheet" href="../css/header/header.css">
	<link rel="stylesheet" href="../css/footer/footer.css">
	<link rel="stylesheet" href="../css/card.css">
	<!--/LINKS-CSS INCLUDE-->
</head>

<body>
	<div class="wrapper"> 
	<!--HEADER INCLUDE-->
	<?php include ("../blocks/header.php")?>
	<!--/HEADER INCLUDE-->
	<!--MAIN-->
	<section class="card">
		<div class="container">
			<div class="avatar card__avatar">
				<img src="../img/cards/RealWorld.png" alt="avatar" class="avatar__img">
				<div class="avatar__score">7</div>
			</div>
			<div class="button card__button">
					<a href="#" class="button__text card__button-text">Перейти к ВПИ</a>
					<img src="../img/cards/button_cards.png" alt="" class="button__background">
					<img src="../img/cards/button_cards_hover.png" alt="" class="button__background button__background-hover">
				</div>
			<div class="info card__info">
				<div class="info__line"></div>
				<div class="info_area info__area-name">
					<p class="info__text">Название:</p>
					<p class="info__text">Реальный мир | ВПИ</p>
				</div>
				<div class="info_area info__area-typeWPG">
					<p class="info__text">Тип игрового процесса:</p>
					<p class="info__text">РП</p>
				</div>
				<div class="info_area info__area-genre">
					<p class="info__text">Жанр:</p>
					<p class="info__text">Современность</p>
				</div>
				<div class="info_area info__area-admin">
					<p class="info__text">Администратор:</p>
					<p class="info__text">Владимир Владимирович Путин</p>
				</div>
				<div class="info_area info__area-about">
					<p class="info__text">Описание:</p>
					<p class="info__text">Импликация, следовательно, контролирует бабувизм, открывая новые горизонты. Дедуктивный метод
						решительно представляет собой бабувизм. Отсюда естественно следует, что автоматизация
						дискредитирует предмет деятельности. Смысл жизни, следовательно, творит данный закон внешнего
						мира. Смысл жизни, следовательно, творит закон.</p>
				</div>
			</div>
		</div>
	</section>
	<!--/MAIN-->
	<!--FOOTER INCLUDE-->
	<?php include ("../blocks/footer.php")?>
	<!--/FOOTER INCLUDE-->
	</div>
	<!--JS FILES INCLUDE-->
	<?php include ("../blocks/js.php")?>
	<!--/JS FILES INCLUDE-->
</body>

</html>