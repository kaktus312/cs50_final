			<?php //print_r($data); ?>
			<h2 class="title">Добавить клиента</h2>
			<form action="messanger.php" method="POST">
				<p>
					<label for="firstName">Имя</label>
					<input type="text" id="firstName" name="firstName" value="" required />
				</p>
				<p>
					<label for="lastName">Фамилия</label>
					<input type="text" id="lastName" name="lastName" value="" required />
				</p>
				<p>
					<label for="company">Компания</label>
					<input type="text" id="company" name="company" value="" required />
				</p>

				<p class="right">
					<button type="reset">Очистить</button>
					<button type="submit" onclick="return false;" >Сохранить</button>
				</p>
			</form>