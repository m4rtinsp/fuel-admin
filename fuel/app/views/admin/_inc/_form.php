<div class="row">
	<div class="page-header">
		<h1><?php echo $title ?></h1>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-md-6">
		<form action="" method="POST" role="form">
			<?php foreach ($data as $key => $item): ?>
				<?php if( array_search($key, $fields) !== false ): ?>
				<div class="form-group">
					<label><?php echo $key ?></label>
					<input type="email" class="form-control" value="<?php echo $item ?>" placeholder="Enter name">
				</div>
				<?php endif; ?>
			<?php endforeach ?>

			<div class="clearfix">
				<br/>
				<div class="pull-right">
					<a href="#" class="btn btn-default">Cancelar</a>
					<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Salvar</button>
				</div>
			</div>
		</form>
	</div>
	<div class="col-xs-6 col-md-4">
		
	</div>
</div>