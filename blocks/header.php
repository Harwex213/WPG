<?php
include('../voting/config.php');
?>
<?php
$q = 'SELECT * FROM entries order by votes DESC';
$r = mysql_query($q);
$row = mysql_fetch_assoc($r);
$net_vote = $row['votes'];
?>

<header class="header">
	<div class="container">
		<div class="header-body">
			<div class="logos">
				<a href="../index.php" class="logos_logo">
					<img src="../img/header/logo.png" alt="Logo of Catalog WPG" class="logos__img">
					<img src="../img/header/logo_hover.png" alt="Logo hover of Catalog WPG" class="logos__img_hover">
				</a>
				<a href="#" class="logos__bestWPG">
					<img src="../img/header/best_wpg.png" alt="Logo of Best WPG" class="logos__img">
					<img src='../img/logo_130/img<?php echo $row['id']; ?>.jpg' alt="Logo hover of Best WPG" class="logos__img-hover">
					<img src='../img/header/border_for_best_wpi.png' alt="Logo hover of Best WPG" class="logos__img-hover logos__img-border">
				</a>
			</div>
			<div class="navbar">
				<div class="navbar__links navbar__links-list">
					<img src="../img/header/list.png" alt="" class="navbar__navimg">
					<a href="../voting" class="navbar__link">Список ВПИ</a>
				</div>
				<div class="navbar__links navbar__links-news">
					<img src="../img/header/news.png" alt="" class="navbar__navimg">
					<a href="#" class="navbar__link">Новости</a>
				</div>
				<div class="navbar__links navbar__links-articles">
					<img src="../img/header/articles.png" alt="" class="navbar__navimg">
					<a href="#" class="navbar__link">Полезные статьи</a>
				</div>
				<div class="navbar__links navbar__links-glossary">
					<img src="../img/header/glossary.png" alt="" class="navbar__navimg">
					<a href="#" class="navbar__link">Глоссарий</a>
				</div>
			</div>
			<div class="burger"><span></span></div>
		</div>
	</div>
</header>