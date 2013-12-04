<div class="row">
	<div class="page-header">
		<h1><?php echo $title ?></h1>
	</div>
</div>

<?php echo View::forge('admin/_inc/_alert_message', array('list'=>true)); ?>

<div class="row">
	<div class="col-xs-12 col-md-6">
		<?php echo Form::open() ?>
			<?php foreach ($fields as $key => $field): ?>
				<div class="form-group">
					<?php echo Form::label((isset($data->_labels[$field]['name']) ? $data->_labels[$field]['name'] : $field), $field); ?>
					<?php if (isset($data->_labels[$field]['form_field']) AND $data->_labels[$field]['form_field']=='bigtext'): ?>
						<textarea name="<?php echo $field ?>" cols="84" rows="5"></textarea>
					<?php elseif(isset($data->_labels[$field]['form_field']) AND $data->_labels[$field]['form_field']=='select'): ?>
						<select name="<?php echo $field ?>" class="form-control">
							<option value="">Escolha</option>
						<?php if (isset($data->_labels[$field]['select_items']) AND is_array($data->_labels[$field]['select_items'])): ?>
							<?php foreach ($data->_labels[$field]['select_items'] as $item_name => $item_value): ?>
							<option value="<?php echo $item_value ?>"><?php echo $item_name ?></option>
							<?php endforeach ?>
						<?php endif ?>
						</select>
					<?php else: ?>
						<input type="<?php echo isset($data->_labels[$field]['form_field']) ? $data->_labels[$field]['form_field'] : 'text' ?>" name="<?php echo $field ?>" class="form-control" value="<?php echo isset($data->$field) ? $data->$field : '' ?>" placeholder="Enter <?php echo $field ?>">
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