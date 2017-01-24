			<?php //print_r($lists); ?>
			<h2 class="title">Добавить отзыв клиента</h2>
			<form action="messanger.php" method="POST">
				<p>
					<label for="client">Клиент</label>
					<select name="client" id="client" required>
						<?= getList($lists["clients"], "company") ?>
					</select>
				</p>
				<p>
					<label for="work">Работа</label>
					<select name="work" id="work" required>
						<?= getList($lists["portfolios"], "title") ?>
					</select>
				</p>
				<p>
					<label for="comment">Отзыв</label>
					<textarea rows="1" cols="1" name="comment" id="comment" required></textarea>
				</p>
				<p class="right">
					<button type="reset">Очистить</button>
					<button type="submit" onclick="return false;" >Сохранить</button>
				</p>
			</form>