<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/poe.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
	<title>Path of exile</title>
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
	<section class="poe">
		<div class="content">
			<h1 class="poelogo">Path of Exile</h1>
			<ul class="choices">
				<li>
					<a href="">
						<img src="img/choice1.png" alt="" class="choice2">
					</a>
				</li>
				<li>
					<a href="">
						<img src="img/choice2.png" alt="" class="choice2">
					</a>
				</li>
				<li>
					<a href="">
						<img src="img/choice3.png" alt="" class="choice3">
					</a>
				</li>
				<li>
					<a href="">
						<img src="img/choice4.png" alt="" class="choice4">
					</a>
				</li>
				<li>
					<a href="">
						<img src="img/choice5.png" alt="" class="choice5">
					</a>
				</li>
			</ul>
		</div>
	</section>
	<section class="operations">
		<div id="contentwrapper">
    		<div id="contentcolumn">
			    <table class="content-table">
			          <thead>
			            <tr>
			            <th>Сервер</th>
			            <th>Продавець</th>
			            <th>Кількість</th>
			            <th>Ціна</th>
			             </tr>
			          </thead>
			        <tbody>

			            <tr>
			              <td>(PC) Ritual</td>
			              <td>Domenic</td>
			              <td>88,110</td>
			              <td>0.121 ₽</td>
			            </tr>
			            <tr class="active-row">
			                <td>(PC) Ritual</td>
			                <td>Sally</td>
			                <td>72,400</td>
			                <td>0.121 ₽</td>
			            </tr>
			            <tr>
			                <td>(PC) Ritual</td>
			                <td>Nick</td>
			                <td>52,300</td>
			                <td>0.121 ₽</td>
			            </tr>
			            <tr>
			                <td>(PC) Ritual</td>
			                <td>Nick</td>
			                <td>52,300</td>
			                <td>0.121 ₽</td>
			            </tr>
			            <tr>
			                <td>(PC) Ritual</td>
			                <td>Nick</td>
			                <td>52,300</td>
			                <td>0.121 ₽</td>
			            </tr>
			            <tr>
			                <td>(PC) Ritual</td>
			                <td>Nick</td>
			                <td>52,300</td>
			                <td>0.121 ₽</td>
			            </tr>
			            <tr>
			                <td>(PC) Ritual</td>
			                <td>Nick</td>
			                <td>52,300</td>
			                <td>0.121 ₽</td>
			            </tr>
			            <tr>
			                <td>(PC) Ritual</td>
			                <td>Nick</td>
			                <td>52,300</td>
			                <td>0.121 ₽</td>
			            </tr>
			            <tr>
			                <td>(PC) Ritual</td>
			                <td>Nick</td>
			                <td>52,300</td>
			                <td>0.121 ₽</td>
			            </tr>
			            <tr>
			                <td>(PC) Ritual</td>
			                <td>Nick</td>
			                <td>52,300</td>
			                <td>0.121 ₽</td>
			            </tr>
			            <tr>
			                <td>(PC) Ritual</td>
			                <td>Nick</td>
			                <td>52,300</td>
			                <td>0.121 ₽</td>
			            </tr>
			        </tbody>
			    </table>
   			</div>
		</div>
		<div id="leftcolumn">
      			<div class="selectoption">
        			<select>
          				<option value="">Сервер</option>
       				</select>
      			</div>
			    <div class="selectoption">
			        <select>
			          <option value="">Тільки продавці онлайн</option>
			        </select>
			    </div>
			    <div class="selectoption">
			        <select>
			          <option value="">Сортувати по:</option>
			        </select>
			    </div>
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