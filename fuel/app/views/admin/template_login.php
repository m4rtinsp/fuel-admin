<!DOCTYPE html>
<html lang="pt-br" class="no-js">
	<head>
	 	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Administração</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<?php echo Asset::css('vendor/bootstrap.min.css'); ?>
		<?php echo Asset::css('admin/admin.css'); ?>
        <?php echo Asset::js('vendor/modernizr-2.6.2.min.js'); ?>
	</head>
	<body>
	
	<div class="container">
		<?php echo $content ?>
	</div>

	<?php echo Asset::js('vendor/jquery-1.10.1.min.js') ?>
	<?php echo Asset::js('vendor/bootstrap.min.js'); ?>
	<?php echo Asset::js('admin/admin.js'); ?>
	</body>
</html>