<!DOCTYPE html>
<html lang="pt-br" class="no-js">
	<head>
	 	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Bootstrap 101 Template</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<?php echo Asset::css('bootstrap.min.css'); ?>
		<?php echo Asset::css('admin.css'); ?>
        <?php echo Asset::js('modernizr-2.6.2.min.js'); ?>
	</head>
	<body>

	<div class="container">
		<div class="row">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Brand</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="<?php echo Router::get('admin_home') ?>">Dashboard</a></li>
						<li><a href="<?php echo Router::get('admin_sample') ?>">Sample</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Item <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo Router::get('admin_help') ?>">Ajuda</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo Auth::get_screen_name() ?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Gerenciar usuários</a></li>
								<li class="divider"></li>
								<li><a href="<?php echo Router::get('admin_logout') ?>">Sair</a></li>
							</ul>
						</li>
					</ul>
		  		</div>
			</nav>
		</div>

		<div class="row">
			<ol class="breadcrumb">
				<?php if (empty($breadcrumb)): ?>
					<li class="active">Dashboard</li>
				<?php else: ?>	
					<li><a href="<?php echo Router::get('admin') ?>">Dashboard</a></li>
					<?php foreach ($breadcrumb as $page => $url): ?>
						<?php if(!$url): ?>
							<li class="active"><?php echo $page ?></li>
						<?php else: ?>
							<li class="active"><a href="<?php echo Router::get($url) ?>"><?php echo $page ?></a></li>
						<?php endif ?>
					<?php endforeach ?>
				<?php endif ?>
			</ol>
		</div>

		<?php echo $content ?>
	</div>

	<script src="https://code.jquery.com/jquery.js"></script>
	<?php echo Asset::js('bootstrap.min.js'); ?>
	<?php echo Asset::js('admin.js'); ?>
	</body>
</html>