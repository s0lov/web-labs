<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Funpay</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
</head>

<body>
	<header>
		<div class="container">
			<nav class="left_menu">
				<ul class="left_menu">
					<li>
						<a href="#">
							<img src="img/logo.png" alt="logo" class="logo">
						</a>
					</li>
					<li>
						<a href="#">Пошук по іграм</a>
					</li>
					<li>
						<img src="img/search.png" alt="logo" class="search">
					</li>
				</ul>
			</nav>
			<?php
				if (empty($_COOKIE['user'])): 
			?>
			<nav>
				<ul class="menu">
					<li>
						<a href="login.html">Вхід</a>
					</li>
					<li>
						<a href="register.html">Регістрація</a>
					</li>
					<li>
						<img src="img/profile-user.png" alt="" class="profile">
					</li>
				</ul>
			</nav>
			<?php else: ?>
				<ul class="authorized">
					<li>
						<a href="#">Купівля</a>
					</li>
					<li>
						<a href="sell.php">Продаж</a>
					</li>
					<li>
						<a href="#">Повідомлення</a>
					</li>
					<li>
						<a href="#">Фінанси</a>
					</li>
					<li>
						<img src="img/profile-user.png" alt="" class="profile dropbtn" onclick="myFunction()">
						<div id="myDropdown" class="dropdown-content">
						    <a href="#">Привет, <?=$_COOKIE['user']?><br><span style="font-size: 16px; color: #666666">профіль<span></a>
						    <a href="#">Настройки</a>
						    <a href="exit.php">Вихід</a>
  						</div>	
					</li>
				</ul>
			<?php endif;?>
		</div>
	</header>
	<section class="popular_games">
		<div class="container">
			<div class="header_text">
				<h1>популярні ігри</h1>
			</div>
			<ul class="games">
				<li>
					<a href="poe.php">
						<img src="img/box_poe.png" alt="logo" class="pgame">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="img/box_lineage.png" alt="logo" class="pgame">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="img/box_bdo.png" alt="logo" class="pgame">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="img/box_dota.png" alt="logo" class="pgame">
					</a>
				</li>
			</ul>

			<ul class="games">
				<li>
					<a href="#">
						<img src="img/game1.png" alt="logo" class="pgame1">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="img/game2.png" alt="logo" class="pgame1">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="img/game3.png" alt="logo" class="pgame1">
					</a>
				</li>
			</ul>

			<ul class="games">
				<li>
					<a href="#">
						<img src="img/game4.png" alt="logo" class="pgame2">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="img/game5.png" alt="logo" class="pgame2">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="img/game6.png" alt="logo" class="pgame2">
					</a>
				</li>
			</ul>
		</div>
	</section>
	<section class="marketing">
		<div class="container">
			<img src="img/g2g.png" alt="" class="g2g">
			<ul class="sellbuy">
				<li>
					<a href="">
						<img src="img/buy.png" alt="">
					</a>
				</li>
				<li>
					<a href="">
						<img src="img/sell.png" alt="">
					</a>
				</li>
			</ul>
			<ul class="icons">
				<li>
					<a href="#">
						<img src="img/icon1.png" alt="">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="img/icon2.png" alt="">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="img/icon3.png" alt="">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="img/icon4.png" alt="">
					</a>
				</li>
			</ul>
			<ul class="icontext">
				<li>
					<p>Валюта</p>
				</li>
				<li>
					<p>Послуги</p>
				</li>
				<li>
					<p>Прокачка</p>
				</li>
				<li>
					<p>Рейди</p>
				</li>
			</ul>
		</div>
	</section>
	<section class="about">
		<div class="container">
			<h1 class="why">Чому саме ми?</h1>
			<p class="info">Ми пропонуємо швидкий та безпечний сервіс для прокачки ігрових аккаунтів
							та продажу ігрової валюти у більш ніж 200 найпопулярніших онлайн іграх.<br><br>
							Сервіс являється гарантом між покупцем та продавцем, що дозволяє виконувати
							кожну угоду безпечно та без риску.</p>
			<a href="#">
				<img src="img/register.png" alt="" class="register">
			</a>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="block">
				<ul class="payment">
				<li>
					<img src="img/pay1.png" alt="" class="pay">
				</li>
				<li>
					<img src="img/pay2.png" alt="" class="pay">
				</li>
				<li>
					<img src="img/pay3.png" alt="" class="pay">
				</li>
				<li>
					<img src="img/pay4.png" alt="" class="pay">
				</li>
				<li>
					<img src="img/pay5.png" alt="" class="pay">
				</li>
				<li>
					<img src="img/pay6.png" alt="" class="pay">
				</li>
				</ul>
			</div>
			<p class="footertext">©2021 funpay.com . Privacy Policy . Terms of Service . Affiliate Agreement</p>
		</div>
	</footer>

	<script type="text/javascript">
		function myFunction() {
    		document.getElementById("myDropdown").classList.toggle("show");
		}		

		window.onclick = function(event) {
		  if (!event.target.matches('.dropbtn')) {

		    var dropdowns = document.getElementsByClassName("dropdown-content");
		    var i;
		    for (i = 0; i < dropdowns.length; i++) {
		      var openDropdown = dropdowns[i];
		      if (openDropdown.classList.contains('show')) {
		        openDropdown.classList.remove('show');
		      }
		    }
		  }
		}
	</script>
</body>

</html>