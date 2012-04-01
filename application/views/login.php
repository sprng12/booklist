<div class="row">
			<div class="span8">
      <form class="form-horizontal" method="post">
        <fieldset>
			<legend>Авторизация</legend>
			<?php if(isset($error)) {?>
			<div class="alert alert-error">
				<strong>Ошибка!</strong> Неправильное имя пользователся или пароль.
			</div>
			<?php }?>
			<div class="control-group">
				<div class="controls">
					<input class="input-xlarge"  type="text" name="username" Placeholder="Имя пользователя">
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<input class="input-xlarge"  type="text" name="password" Placeholder="Пароль">
				</div>
			</div>
          <div class="form-actions">
            <button type="submit" class="btn success" name="submit"><i class="icon white ok"></i>&nbsp;Войти</button>
          </div>
        </fieldset>
      </form>
    </div>
        </div>