			<?php //print_r($data); ?>
			<?php //print_r($lists); ?>
			<table class="admTable">
				<caption>
					<?= $title ?>
					<!--<a href="#win" data-form="users" data-modal="popup" data-url="adm_popup.php" class="modalCaller" title="Добавить">-->
					<a href="#" data-form="categories" data-modal="popup" data-url="adm_popup.php" class="modalCaller" title="Добавить">
						&nbsp;
						<span class="glyphicon glyphicon-plus"></span>
					</a>
				</caption>
				<thead>
					<tr>
						<th>ID</th>
						<th>Название</th>
						<th>Действие</th>
					</tr>
				</thead>
				<tbody>
					<?= tBodyRender($data)?>
				</tbody>
				
			</table>