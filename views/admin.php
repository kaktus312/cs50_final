			<div class="main">
					
					<div class="content">
					
						<!--Блок закладок-->
						<div class="tabsBlock">
							<ul class="tabs">
								<!--<li <?php if ($title=="Информация") echo 'class="active"'; ?>  data-url="admin.php" data-target="info">Информация</li>-->
								<li <?php if ($title=="Отзывы") echo 'class="active"'; ?> data-url="admin.php" data-target="comments">Отзывы</li>
								<li <?php if ($title=="Пользователи") echo 'class="active"'; ?>  data-url="admin.php" data-target="users">Пользователи</li>
								<li <?php if ($title=="Клиенты") echo 'class="active"'; ?>  data-url="admin.php" data-target="clients">Клиенты</li>
								<li <?php if ($title=="Категории") echo 'class="active"'; ?>  data-url="admin.php" data-target="categories">Категории</li>
								<li <?php if ($title=="Работы") echo 'class="active"'; ?> data-url="admin.php" data-target="portfolios">Работы</li>
								<li <?php if ($title=="Сообщения") echo 'class="active"'; ?> data-url="admin.php" data-target="messages">Сообщения</li>
								
							</ul>
							<div class="tabsContent">
									<?php 
										//echo ($_SESSION["role"]);
										adminRender($tab, ["data"=>$data, "lists"=> $lists, "title"=>$title]);
									?>
							</div>
						</div>
						<!--End Блок закладок-->
						
					</div>
					
			</div>