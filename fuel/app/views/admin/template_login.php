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
		<?php echo $content ?>
	</div>

	<script src="https://code.jquery.com/jquery.js"></script>
	<?php echo Asset::js('bootstrap.min.js'); ?>
	<?php echo Asset::js('admin.js'); ?>
	</body>
</html>