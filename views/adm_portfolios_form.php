			<?php //print_r($lists); ?>
			<h2 class="title">Добавить работу в каталог</h2>
			<form action="messanger.php" method="POST">
				<p>
					<label for="title">Название</label>
					<input type="text" id="title" name="title" value="" required />
				</p>
				<p>
					<label for="category">Категория</label>
					<select name="category" id="category" required>
						<?= getList($lists["categories"], "category") ?>
					</select>
				</p>
				<p>
					<label for="client">Клиент</label>
					<select name="client" id="client" required>
						<?= getList($lists["clients"], "company") ?>
					</select>
				</p>
				<p>
					<label for="pics">Каталог графики</label>
					<input type="text" id="pics" name="pics" value=""  required />
				</p>				
				<p>
					<label for="comment">Комментарий</label>
					<textarea rows="1" cols="1" name="comment" id="comment" required></textarea>
				</p>

				<p class="right">
					<button type="reset">Очистить</button>
					<button type="submit" onclick="return false;" >Сохранить</button>
				</p>
			</form>