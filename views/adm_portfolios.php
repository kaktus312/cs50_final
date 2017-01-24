			<?php //print_r($data); ?>
			<table>
				<caption>
					<?= $title ?>
					<!--<a href="#win" data-form="portfolios" data-modal="popup" data-url="adm_popup.php" class="modalCaller" title="Добавить">-->
					<a href="#" data-form="portfolios" data-modal="popup" data-url="adm_popup.php" class="modalCaller" title="Добавить">
						&nbsp;
						<span class="glyphicon glyphicon-plus"></span>
					</a>
				</caption>
				<thead>
					<tr>
						<th>ID</th>
						<th>Название</th>
						<th>Категория</th>
						<th>Клиент</th>
						<th>Каталог</th>
						<th>Просмотры</th>
						<th>Комментарии</th>
					</tr>
				</thead>
				<tbody>
					<?= tBodyRender($data)?>
				</tbody>
				
			</table>