<!DOCTYPE HTML>
<html lang="ru">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/glyphicons.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/slider.css" />
		<link rel="stylesheet" type="text/css" href="css/responsitive.css" />
		<link rel="stylesheet" type="text/css" href="css/style-modal.css" />
		<title>Kaktus Studio <?php if (!empty($title)) {echo (" - ".$title);} ?></title>
	</head>
	<body>
		<!--Message box-->
		<div id="msg" class="<?php if (isset($msg)) echo $msg["class"]; ?>" >
			<div class="content"><?php if (isset($msg)) echo $msg["txt"] ?></div>
			<span class="glyphicon glyphicon-remove"></span>
		</div>
		<!--END Message box-->
		
		<!-- Модальное окно -->
		<a href="#x" class="overlay" id="win1"></a>
		<div class="popup">
			<div class="content">
				Здесь вы можете разместить любое содержание, текст с картинками или видео!
			</div>
		<a class="close"title="Закрыть" href="#close"></a>
		</div>
		<!-- Модальное окно -->
		
		<div class="wrapper">
			<div class="header">
				<div class="content">
					<a href="index.php" class="logo">
						<span class="">Kaktus Studio</span>
						<span class="description">Web Development</span>
					</a>
					<ul class="nav">
						<li class="active">
							<a href="index.php" class="home">
								<span>Главная</span>
								<span class="description">Welcom!</span>
								<span class="glyphicon glyphicon-home"></span>
							</a>
						</li>
						<li>
							<a href="portfolio.php" class="portfolio">
								<span>Портфолио</span>
								<span class="description">The Best</span>
								<span class="glyphicon glyphicon-star"></span>
							</a>
						</li>
						<li>
							<a href="contacts.php" class="letter">
								<span>Контакты</span>
								<span class="description ">Наш адрес</span>
								<span class="glyphicon glyphicon-envelope"></span>
							</a>
						</li>
						<?php if (!empty($_SESSION["id"]) && ($_SESSION["role"]==2)):?>
						<li>
							<a href="admin.php" class="letter">
								<span>Админка</span>
								<span class="description">Settings</span>
								<span class="glyphicon glyphicon-cog"></span>
							</a>
						</li>
						<li>
							<a href="logout.php" class="letter">
								<span>Выйти</span>
								<span class="description">Logout</span>
								<span class="glyphicon glyphicon-log-out"></span>
							</a>
						</li>
						<?php endif ?>
					</ul>
				</div>
				<div class="border"></div>
			</div>