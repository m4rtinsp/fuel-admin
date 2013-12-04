<div class="row">
	<div class="page-header">
		<h1><?php echo $title ?></h1>
	</div>
</div>

<?php echo View::forge('admin/_inc/_alert_message', array('list'=>true)); ?>

<div class="row">
	<div class="col-xs-12 col-md-6">
		<?php echo Form::open() ?>
			<?php foreach ($data as $key => $item): ?>
				<?php if( array_search($key, $fields) !== false ): ?>
				<div class="form-group">
					<?php echo Form::label((isset($data->_labels[$key]['name']) ? $data->_labels[$key]['name'] : $key), $key); ?>
					<?php if (isset($data->_labels[$key]['input_type']) AND $data->_labels[$key]['input_type']=='bigtext'): ?>
						<textarea name="<?php echo $key ?>" cols="84" rows="5"><?php echo $item ?></textarea>
					<?php elseif(isset($data->_labels[$key]['form_field']) AND $data->_labels[$key]['form_field']=='select'): ?>
						<select name="<?php echo $key ?>" class="form-control">
							<option value="">Escolha</option>
						<?php if (isset($data->_labels[$key]['select_items']) AND is_array($data->_labels[$key]['select_items'])): ?>
							<?php foreach ($data->_labels[$key]['select_items'] as $item_name => $item_value): ?>
							<option value="<?php echo $item_value ?>" <?php if($item==$item_value): ?>selected='selected'<?php endif; ?>><?php echo $item_name ?></option>
							<?php endforeach ?>
						<?php endif ?>
						</select>
					<?php else: ?>
						<input type="<?php echo isset($data->_labels[$key]['input_type']) ? $data->_labels[$key]['input_type'] : 'text' ?>" name="<?php echo $key ?>" class="form-control" value="<?php echo $key=='password' ? '' : $item ?>" placeholder="Enter <?php echo $key ?>">
					<?php endif ?>

					<?php //echo Form::input($key, $item, array('class'=>'form-control')) ?>
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
		<?php echo Form::close(); ?>
	</div>
	<div class="col-xs-6 col-md-4">
		
	</div>
</div>