<?php
//Шаман Олег
$pathConfig = $path."voting/config.php";
include($pathConfig);
//выбор нужной таблицы на php7
$query = 'SELECT * FROM entries order by votes DESC';
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_assoc($result);
$net_vote = $row['votes'];
?>

<header class="header wow fadeInDown" data-wow-duration="0.47s">
	<div class="container">
		<div class="header-body">
			<div class="logos">
				<a href="<?php echo $path?>index.php" class="logos_logo">
					<img src="<?php echo $path?>img/header/logo.png" alt="Logo of Catalog WPG" class="logos__img">
					<img src="<?php echo $path?>img/header/logo_hover.png" alt="Logo hover of Catalog WPG" class="logos__img-hover">
				</a>
				<a href="../cards/card.php?id=<?php echo $row['id']; ?>" class="logos__bestWPG" >
					<img src="<?php echo $path?>img/header/border_for_best_wpi.png" alt="Logo of Best WPG"  class="logos__img id">
					<img src='<?php echo $path?>img/logo_130/img<?php echo $row['id']; ?>.jpg' alt="Logo hover of Best WPG"  class="logos__img-avatar">
					<img src='<?php echo $path?>img/header/best_wpg_hover.png' alt="Logo hover of Best WPG" class="logos__img-hover logos__img-border">
				</a>
			</div>
			<div class="navbar">
				<div class="navbar__links navbar__links-list">
					<img src="<?php echo $path?>img/header/list.png" alt="" class="navbar__navimg">
					<a href="<?php echo $path?>voting/voting.php" class="navbar__link">Список ВПИ</a>
				</div>
				<div class="navbar__links navbar__links-news">
					<img src="<?php echo $path?>img/header/news.png" alt="" class="navbar__navimg">
					<a href="#" class="navbar__link">Новости</a>
				</div>
				<div class="navbar__links navbar__links-articles">
					<img src="<?php echo $path?>img/header/articles.png" alt="" class="navbar__navimg">
					<a href="#" class="navbar__link">Полезные статьи</a>
				</div>
				<div class="navbar__links navbar__links-glossary">
					<img src="<?php echo $path?>img/header/glossary.png" alt="" class="navbar__navimg">
					<a href="#" class="navbar__link">Глоссарий</a>
				</div>
			</div>
			<div class="burger"><span></span></div>
		</div>
	</div>
</header>