<div class="row">
	<div class="login-box center-block">
		<div class="brand">
			<h1>Brand</h1>
		</div>
		<form action="<?php echo Router::get('admin_login') ?>" method="POST">
			<div class="form-group">
				<label>E-mail</label>
				<input type="email" name="username" value="<?php echo $username ?>" class="form-control" placeholder="Digite o e-mail de login">
			</div>
			<div class="form-group">
				<label>Senha</label>
				<input type="password" name="password" class="form-control" placeholder="Digite sua senha">
			</div>
			<?php if ($login_error): ?>
			<div class="form-group">
				<div class="alert alert-danger text-center">
					<?php echo $login_error ?>
				</div>
			</div>
			<?php endif ?>
			<div class="form-group">
				<input type="submit" class="btn btn-lg btn-info btn-block" value="Continuar">
			</div>
		</form>
	</div>
</div>