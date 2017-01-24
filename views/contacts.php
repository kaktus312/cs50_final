			<div class="main">	
					<div class="content">
						<div class="col-8">
							<div class="box">
								<h2 class="title">Форма контакта</h2>
								<form action="messanger.php" method="POST">
									<p>
										<label for="uName">Ваше имя</label>
										<input type="text" name="uName" id="uName" required />
									</p>
									<p>
										<label for="uMail">Ваш E-mail</label>
										<input type="email" name="uMail" id="uMail" required />
									</p>
									<p>
										<label for="Subj">Тема</label>
										<input type="text" name="Subj" id="Subj" />
									</p>
									<p>
										<label for="Msg" class="left">Сообщение</label>
										<textarea rows="1" cols="1" name="Msg" id="Msg" required></textarea>
									</p>
									<p class="right">
										<button type="reset">Очистить</button>
										<button type="submit" onclick="return false;" >Отправить</button>
									</p>
								</form>
							</div>	
						</div>
						<div class="col-4">
							<div class="box">
								<h2 class="title">Адрес</h2>
								<dl class="address">
									<dt>Страна:</dt><dd>Украина</dd>
									<dt>Город:</dt><dd>Мариуполь</dd>
									<dt>Тел.:</dt><dd>+380 (629) 40-80-22</dd>
									<dt>E-mail:</dt><dd><a href="mailto:ks@i.ua">ks@i.ua</a></dd>
								</dl>
							</div>
							<div class="box">
								<h2 class="title">Координаты</h2>
								<div id="map-canvas"></div>
							</div>
						</div>
					
					
					</div>
			</div>