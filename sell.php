<?php 
	$mysql = new mysqli('localhost', 'root', '', 'sales');

	$buyer = $_GET['buyer'];

	$number = $_GET['number'];

	if (empty($buyer) && empty($number)) {
		$result = $mysql->query("SELECT * FROM sales");
	}
	else if (empty($buyer)) {
		$result = $mysql->query("SELECT * FROM sales WHERE `number` = '$number'");
	}
	else if (empty($number)){
		$result = $mysql->query("SELECT * FROM sales WHERE `buyer` = '$buyer'");
	}
	else {
		$result = $mysql->query("SELECT * FROM sales WHERE `buyer` = '$buyer' and `number` = '$number'");
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/sell.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
	<title>Sales</title>
</head>
<body>
	<header>
		<div class="container">
			<nav class="left_menu">
				<ul class="left_menu">
					<li>
						<a href="index.php">
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
						<a href="login.php">Вхід</a>
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
	<section class="content">
		<div class="container">
			<h1 class="my_sales">Мої продажі</h1>
			<form action="" method="get" class="settings">
				<input type="text" name="number" id="login" placeholder="Номер замовлення: "><br>
				<input type="text" name="buyer" id="name" placeholder="Покупець: "><br>
				<button class="btn-success" type="submit">Застосувати</button>
			</form>
			<img src="img/line.png" alt="">
			<table class="content-table">
				        <thead>
				            <tr>
					            <th>Дата</th>
					            <th>№Замовлення</th>
					            <th>Опис</th>
					            <th>Покупець</th>
					            <th>Статус</th>
					            <th>Ціна</th>
				            </tr>
				        </thead>
				        <tbody>
				        	<?php 
				        		while ($row = $result->fetch_assoc()): ?>
									<tr>
							            <td><?=$row["date"] ?></td>
							            <td><?=$row["number"] ?></td>
							            <td><?=$row["def"] ?></td>
							            <td><?=$row["buyer"] ?></td>
							            <td class="status"><?=$row["status"] ?></td>
							            <td><?=$row["price"] ?></td>
						            </tr>
				        	<?php endwhile;?>
				        </tbody>
			    </table>
		</div>
	</section>

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