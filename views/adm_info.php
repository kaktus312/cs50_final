			<?php //print_r($data); ?>
			<table>
				<caption>
					<?= $title ?>
					<!--<a href="#win" data-form="info" data-modal="popup" data-url="adm_popup.php" class="modalCaller" title="Добавить">-->
					<a href="#" data-form="info" data-modal="popup" data-url="adm_popup.php" class="modalCaller" title="Добавить">
						&nbsp;
						<span class="glyphicon glyphicon-plus"></span>
					</a>
				</caption>
				<thead>
					<tr>
						<th>ID</th>
						<th>Пользователь</th>
						<th>Адрес</th>
						<th>Тема</th>
						<th>Сообщение</th>
						<th>Дата</th>
						<th>Рассмотрено</th>
						<th>Действие</th>
					</tr>
				</thead>
				<tbody>
					<?= tBodyRender($data)?>
				</tbody>
				
			</table>