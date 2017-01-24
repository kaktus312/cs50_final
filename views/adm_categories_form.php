			<?php //print_r($data); ?>
			<h2 class="title">Добавить пользователя</h2>
			<form action="messanger.php" method="POST">
				<p>
					<label for="category">Название</label>
					<input type="text" id="category" name="category" value="" required />
				</p>
				<p class="right">
					<button type="reset">Очистить</button>
					<button type="submit" onclick="return false;" >Сохранить</button>
				</p>
			</form>