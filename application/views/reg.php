<form class="form-horizontal" action="" method="post">
    <fieldset>
        <legend>Регистрация</legend>
        <?php if(isset($error)) {?>
			<div class="alert alert-error">
				<strong>Ошибка!</strong>
			</div>
			<?php }?>
	<div class="control-group">
            <div class="controls">
                <input class="input-xlarge"  type="text" name="email" Placeholder="Электронная почта">
            </div>
	</div>
        <div class="control-group">
            <div class="controls">
                <input class="input-xlarge"  type="text" name="username" Placeholder="Имя пользователя">
            </div>
	</div>
        <div class="control-group">
            <div class="controls">
                <input class="input-xlarge"  type="password" name="password" Placeholder="Пароль">
            </div>
	</div>
        <div class="control-group">
            <div class="controls">
                <input class="input-xlarge"  type="password" name="repeat_password" Placeholder="Повторите пароль">
            </div>
	</div>
        <div class="form-actions">
            <button type="submit" class="btn success" name="submit"><i class="icon white ok"></i>&nbsp;Зарегистрироваться</button>
        </div>
    </fieldset>
</form>
    
