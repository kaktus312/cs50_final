			<!--Footer-->
			<div class="footer">
				<?php if (empty($_SESSION["id"]) || ($_SESSION["role"]!=2)): ?>
				<div class="content">
					<div class="col-3">
						<div class="box">
						<span class="title">Почему мы?</span>
						<ul class="list">
							<li><a href="article.php?pid=#profi">Профессионализм</a></li>
							<li><a href="article.php?pid=#quality">Качество</a></li>
							<li><a href="article.php?pid=#prices">Цены и сроки</a></li>
							<li><a href="article.php?pid=#client">Клиентоориентированность</a></li>
						</ul>
					</div>
					</div>
					<div class="col-3">
						<div class="box">
							<span class="title">Достижения</span>
							<ul class="">
								<li>На рынке: 6 лет</li>
								<li>Проектов: 231</li>
								<li>Компаний: 48</li>
								<li>Филиалов: 2</li>
							</ul>
						</div>
					</div>
					<div class="col-3">
						<div class="box">
							<span class="title">Адрес</span>
							<ul class="">
								<li>Страна: Украина</li>
								<li>Город: Мариуполь</li>
								<li>Тел.:+380 (629) 40-80-22</li>
								<li>E-mail: <a href="mailto:ks@i.ua" class="light">ks@i.ua</a></li>
							</ul>
						</div>
					</div>
					<div class="col-3">
						<div class="box">
							<span class="title">Преимущества</span>
							<ul class="">
								<li>Доступные цены</li>
								<li>Высокая скорость</li>
								<li>Техподдержка</li>
								<li>Креативность</li>
							</ul>
							<!--<span class="title">Подписка</span>-->
							<!--<form action="subscribe.php" method="POST" class="fw">-->
							<!--	<input type="email" value="" placeholder="Ваш E-mail" name="email" required />-->
							<!--	<button type="submit">Подписаться!</button>-->
							<!--</form>-->
						</div>
					</div>
				</div>
				<?php endif ?>
				<div id="copyrights">
					<div class="content">
						<span><a href="https://www.templatemonster.com/" class="light">WebsiteTemplate</a> by TemplateMonster.com</span>
						<span><a href="https://www.templates.com/" class="light">3D Models</a> provided by Templates.com</span>
						<span>&copy; 2016-<?= date("Y"); ?> <a href="index.php" class="light">Kaktus Studio</a> </span>
					</div>
				</div>
			</div>
			<!--END Footer-->
		</div>

		<!-- https://developers.google.com/maps/documentation/javascript/ -->
		<script src="https://maps.googleapis.com/maps/api/js"></script>

		<!-- http://jquery.com/ -->
		<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
		<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>

		<!-- Slider -->
		<script src="js/tms-0.3.js" type="text/javascript"></script>
		<script src="js/tms_presets.js" type="text/javascript"></script>

		<!-- app's own JavaScript -->
		<script src="js/script.js" type="text/javascript"></script>
	</body>

</html>