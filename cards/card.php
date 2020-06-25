<?php
$path = '../';
include('../voting/config.php');
$id = 0;
$id = $_GET['id'];
$position_page_voting = 0;
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<title>Index</title>
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="favicon.ico">
	<!--LINKS-CSS INCLUDE-->
	<link rel="stylesheet" href="../css/header/header.css">
	<link rel="stylesheet" href="../css/footer/footer.css">
	<link rel="stylesheet" href="../css/card.css">
	<!--/LINKS-CSS INCLUDE-->
</head>

<body>
<?php include ("../blocks/header.php")?>
<div class="wrapper"> 
<?php
$bd_sort_desc = 'SELECT * FROM entries order by votes DESC';
$r_sort = $mysqli->query($bd_sort_desc);

for($i = 0;$row_sort = mysqli_fetch_assoc($r_sort);$i++){
	if($row_sort['id'] == $id){
		$position_page_voting = ++$i;
	}
}

$bd = 'SELECT * FROM entries';
$r = $mysqli->query($bd);

for($i=0; $row = mysqli_fetch_assoc($r);	$i++){

	if($i==$id){
	echo ("<section class='card'>
		<div class='container'>
			<div class='avatar card__avatar'>
				<img src='../img/cards/img");
	echo $row['id'];
	echo (".jpg' alt='avatar' class='avatar__img'>
				<div class='avatar__score'>");
	echo $position_page_voting;
	echo ("</div>
			</div>
			<div class='button card__button'>
					<a href='#' class='button__text card__button-text'>Перейти к ВПИ</a>
					<img src='../img/cards/button_cards.png' alt='' class='button__background'>
					<img src='../img/cards/button_cards_hover.png' alt='' class='button__background button__background-hover'>
				</div>
			<div class='info card__info'>
				<div class='info__line'></div>
				<div class='info_area info__area-name'>
					<p class='info__text'>Название:</p>
					<p class='info__text'>");
	echo $row['title'];
	echo ("</p>
				</div>
				<div class='info_area info__area-typeWPG'>
					<p class='info__text'>Тип игрового процесса:</p>
					<p class='info__text'>");
	echo $row['type'];
	echo ("</p>
				</div>
				<div class='info_area info__area-genre'>
					<p class='info__text'>Жанр:</p>
					<p class='info__text'>");
	echo $row['genre'];
	echo("</p>
				</div>
				<div class='info_area info__area-admin'>
					<p class='info__text'>Администратор:</p>
					<p class='info__text'>");
	echo $row['admin'];
	echo("</p>
				</div>
				<div class='info_area info__area-about'>
					<p class='info__text'>Описание:</p>
					<p class='info__text'>");
	echo $row['info'];
	echo("</p>
				</div>
			</div>
		</div>
	</section>");
	break;
	}

}
?>
	


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