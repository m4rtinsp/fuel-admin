<div class="row">
	<div class="page-header clearfix">
		<h1 class="pull-left"><?php echo $title ?></h1>
		<a href="<?php echo Router::get($routes['new']) ?>" class="btn btn-primary pull-right">Adicionar</a>
	</div>
</div>

<div class="row">
	<div class="col-lg-2">
		<select name="" class="form-control" disabled>
			<option value="">Ações</option>
		</select>
	</div>
	<div class="col-lg-4 col-md-offset-6">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Digite o que procura">
			<span class="input-group-btn">
				<button class="btn btn-default" type="button">Buscar!</button>
			</span>
		</div>
	</div>
</div>

<br/><br/>

<?php if ( Session::get_flash('success') ): ?>
<div class="row">
	<div class="alert alert-success">
		<?php echo Session::get_flash('success'); ?>
	</div>
</div>
<?php endif ?>

<div class="row">
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th width="3%"><input type="checkbox" /></th>
				<?php foreach ($fields as $field): ?>
				<th><?php echo $field ?></th>
				<?php endforeach ?>
				<th width="22%">Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data as $key => $item): ?>
			<tr>
				<td><input type="checkbox" /></td>
				<td><?php echo $item->$fields[0] ?></td>
				<td><?php echo $item->$fields[1] ?></td>
				<td>
					<a href="<?php echo Router::get($routes['remove'], array('id'=>$item->id)) ?>" class="btn btn-danger btn-sm">
						<span class="glyphicon glyphicon-remove"></span> Excluir
					</a>
					<a href="<?php echo Router::get($routes['edit'], array('id'=>$item->id)) ?>" class="btn btn-info btn-sm">
						<span class="glyphicon glyphicon-pencil"></span> Editar
					</a>
					<a href="<?php echo Router::get($routes['view'], array('id'=>$item->id)) ?>" class="btn btn-default btn-sm">
						<span class="glyphicon glyphicon-align-left"></span> Detalhes
					</a>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>