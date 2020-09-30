<?php
include('config.php');
$path = '../';
?>

<html>

<head>
	<title>Votes</title>
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto:400,900,900i&display=swap&subset=cyrillic' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<?php include ("../blocks/link_css.php")?>
	<link rel="stylesheet" href="../css/voting.css">
</head>
<body>
<!----header---->
<?php include ("../blocks/header.php")?>
<!-------------->
<div class="wrapper">
	<section class="about">
			<img src="../img/voting/about_backgr_img.png" alt="background" class="about__ibg">
			<div class="container">
				<h1 class="title about__title">Владеете своей ВПИ?</h1>
				<p class="subtitle about__subtitle">Добавьте свою <span>активную</span> ВПИ для всеобщего обозрения в рейтинговый список</p>
				<div class="button about__button">
					<a href="#" class="button__text about__button-text">Добавить ВПИ</a>
					<img src="../img/voting/button.png" alt="" class="button__background">
					<img src="../img/voting/button_hover.png" alt="" class="button__background button__background-hover">
				</div>
			</div>
	</section>
	<section class="list">
		<div class="container">
			<div class="title list__title">Рейтинговый список ВПИ</div>
			<div class="rank list__rank">
				<div class="area rank__area">
					<div class="area__info area__info-gold">Gold</div>
					<div class="area__strip"></div>
					<div class="area__strip area__strip"></div>
					<div class="area__strip area__strip-center"></div>
					<div class="area__strip area__strip-left area__strip-center"></div>
					<div class="area__strip area__strip-down"></div>
					<div class="area__strip area__strip-left area__strip-down"></div>
				</div>
				<div class="rank__fraction">1/3</div>
			</div>
			<?php
			$u = 1;//print transfer
			$trash = 1;//print first negative elemetnts
			$query = 'SELECT * FROM entries order by votes DESC';
			$rows = $mysqli->query($query);

			if(mysqli_num_rows($rows)>0){ //table is non-empty
			while($row = mysqli_fetch_assoc($rows)){
				$net_vote = $row['votes']; //this is the net result of voting up and voting down
				if($u == 4) {
					echo '
					<div class="rank list__rank">
						<div class="area rank__area">
							<div class="area__info area__info-silver">Silver</div>
							<div class="area__strip"></div>
							<div class="area__strip area__strip"></div>
							<div class="area__strip area__strip-center"></div>
							<div class="area__strip area__strip-left area__strip-center"></div>
							<div class="area__strip area__strip-down"></div>
							<div class="area__strip area__strip-left area__strip-down"></div>
						</div>
						<div class="rank__fraction">1/5</div>
					</div>
					';
				}
				elseif($u == 9) {
					echo '
					<div class="rank list__rank">
						<div class="area rank__area">
							<div class="area__info area__info-bronz">Bronz</div>
							<div class="area__strip"></div>
							<div class="area__strip area__strip"></div>
							<div class="area__strip area__strip-center"></div>
							<div class="area__strip area__strip-left area__strip-center"></div>
							<div class="area__strip area__strip-down"></div>
							<div class="area__strip area__strip-left area__strip-down"></div>
						</div>
						<div class="rank__fraction">1/5</div>
					</div>
					';
				}
				elseif($u == 19){
					echo '
					<div class="rank list__rank">
						<div class="area rank__area">
							<div class="area__info area__info-common">Common</div>
							<div class="area__strip"></div>
							<div class="area__strip area__strip"></div>
							<div class="area__strip area__strip-center"></div>
							<div class="area__strip area__strip-left area__strip-center"></div>
							<div class="area__strip area__strip-down"></div>
							<div class="area__strip area__strip-left area__strip-down"></div>
						</div>
						<div class="rank__fraction">1/5</div>
					</div>
					';
				}
				elseif($net_vote < 0 && $trash) {
					$trash = 0;
					echo '
					<div class="rank list__rank">
						<div class="area rank__area">
							<div class="area__info area__info-trash">Trash</div>
							<div class="area__strip"></div>
							<div class="area__strip area__strip"></div>
							<div class="area__strip area__strip-center"></div>
							<div class="area__strip area__strip-left area__strip-center"></div>
							<div class="area__strip area__strip-down"></div>
							<div class="area__strip area__strip-left area__strip-down"></div>
						</div>
						<div class="rank__fraction">1/5</div>
					</div>
					';
				}
			?>
			<div class="sample list__sample">
				<span class="sample__position">#<?php echo $u ?></span>
				<div class="wpgAdv sample__wpgAdv">
					<img class="wpgAdv__avatar" id="<?php echo $row['id']; ?>" src="../img/logo_130/img<?php echo $row['id']; ?>.jpg">
					<span class="wpgAdv__briefInfo">
						<a class="wpgAdv__name" href='<?php echo $row['link']; ?>'> <?php echo $row['title']; ?> </a>
						<p class="wpgAdv__type">РП/Калькулятор</p>
					</span>
					<?php
					if($u <= 3 && $net_vote > 0) 
					{
						echo "<div class='gold container_"; 
						echo $row['id'];
						echo "'>";
					}
					elseif($u >= 4 && $u <= 8 && $net_vote > 0) 
					{
						echo "<div class='silver container_"; 
						echo $row['id'];
							echo "'>";
					}
					elseif($u >= 9 && $u < 19 && $net_vote > 0)
					{
						echo "<div class='bronze container_"; 
						echo $row['id'];
						echo "'>";
					}
					elseif($u >= 19  && $net_vote >= 0)
					{
						echo "<div class='common container_"; 
						echo $row['id'];
						echo "'>";
					}
					else
					{
						echo "<div class='trash container_"; 
						echo $row['id'];
						echo "'>";
					}
					?>
					<span class='votes_count' id='votes_count_<?php echo $row['id']; ?>'><?php echo $net_vote; ?></span>
					</div>
					<div class='vote_buttons' id='vote_buttons<?php echo $row['id']; ?>'>
						<a href='javascript:;' class='vote_up' id='<?php echo $row['id']; ?>'><p class='markVote'>+1</p></a>
						<a href='javascript:;' class='vote_down' id='<?php echo $row['id']; ?>'><p class='markVote'>-1</p></a>
					</div>
					<div  class='RP'><?php echo $row['type']; ?></div>
				</div>
			</div>
			<?php
				$u++;}	
			}
			else echo 'Ошибка чтения данных с БД';
			?>
		</div>
		</div>
	</div>
	</section>
	<!-- END WRAPPER -->
</div>
	<!----footer---->
	<?php include ("../blocks/footer.php")?>
	<!-----JS------->
	<?php include ("../blocks/js.php")?>
	<script type='text/javascript' src='../js/voting/jquery.cookies.js'></script>
	<script type='text/javascript' src='../js/voting/jsCookies.js'></script>
</body>
</html>