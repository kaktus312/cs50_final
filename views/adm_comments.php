			<?php //print_r($data); ?>
			<table>
				<caption>
					<?= $title ?>
					<!--<a href="#win" data-form="comments" data-modal="popup" data-url="adm_popup.php" class="modalCaller" title="Добавить">-->
					<a href="#" data-form="comments" data-modal="popup" data-url="adm_popup.php" class="modalCaller" title="Добавить">
						&nbsp;
						<span class="glyphicon glyphicon-plus"></span>
					</a>
				</caption>
				<!--<caption><?= $title ?><span class="glyphicon glyphicon-plus"></span></caption>-->
				<thead>
					<tr>
						<th>ID</th>
						<th>Клиент</th>
						<th>Работа</th>
						<th>Отзыв</th>
						<th>Действие</th>
					</tr>
				</thead>
				<tbody>
					<?= tBodyRender($data)?>
				</tbody>
				
			</table>