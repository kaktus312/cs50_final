			<?php //print_r($lists); ?>
			<h2 class="title">Добавить пользователя</h2>
			<form action="messanger.php" method="POST">
				<p>
					<label for="login">Логин</label>
					<input type="text" id="login" name="login" value="" required />
				</p>
				<p>
					<label for="pass">Пароль</label>
					<input type="password" id="pass" name="pass" value="" required />
				</p>
				<p>
					<label for="confirm">Подтверждение</label>
					<input type="password" id="confirm" name="confirm" value="" required />
				</p>
				<p>
					<label for="email">E-mail</label>
					<input type="email" id="email" name="email" value="" required />
				</p>
				<p>
					<label for="role">Роль</label>
					<select name="role" id="role" required>
						<?= getList($lists["roles"], "role"); ?>
					</select>
				</p>
				<p class="right">
					<button type="reset">Очистить</button>
					<button type="submit" onclick="return false;" >Сохранить</button>
				</p>
			</form>