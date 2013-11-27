<div class="row">
	<div class="page-header">
		<h1><?php echo $title ?></h1>
	</div>
</div>

<?php if ( Session::get_flash('error') ): ?>
<div class="row">
	<div class="alert alert-danger">
		<ul>
		<?php foreach (Session::get_flash('error') as $error): ?>
			<li><?php echo $error ?></li>
		<?php endforeach ?>
		</ul>
	</div>
</div>
<?php endif ?>

<div class="row">
	<div class="col-xs-12 col-md-6">
		<?php echo Form::open() ?>
			<?php foreach ($fields as $key => $field): ?>
				<div class="form-group">
					<?php echo Form::label((isset($data->_labels[$field]['name']) ? $data->_labels[$field]['name'] : $field), $field); ?>
					<?php if (isset($data->_labels[$field]['input_type']) AND $data->_labels[$field]['input_type']=='bigtext'): ?>
					<textarea name="<?php echo $field ?>" cols="84" rows="5"></textarea>
					<?php else: ?>
					<input type="<?php echo isset($data->_labels[$field]['input_type']) ? $data->_labels[$field]['input_type'] : 'text' ?>" name="<?php echo $field ?>" class="form-control" value="<?php echo isset($data->$field) ? $data->$field : '' ?>" placeholder="Enter <?php echo $field ?>">
					<?php endif ?>
				</div>
			<?php endforeach ?>

			<div class="clearfix">
				<br/>
				<div class="pull-right">
					<a href="#" class="btn btn-default">Cancelar</a>
					<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Salvar</button>
				</div>
			</div>
		<?php echo Form::close(); ?>
	</div>
	<div class="col-xs-6 col-md-4">
		
	</div>
</div>