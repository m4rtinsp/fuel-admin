<div class="row">
	<div class="page-header clearfix">
		<h1 class="pull-left"><?php echo $title ?></h1>
		<a href="<?php echo Router::get($routes['new']) ?>" class="btn btn-primary pull-right">Adicionar</a>
	</div>
</div>

<div class="row">
	<div class="col-lg-2">
		<select name="admin-filter" class="form-control" disabled>
			<option value="">Ações</option>
			<option value="remove">Remover</option>
		</select>
	</div>
	<div class="col-lg-4 col-md-offset-6">
		<form action="">
			<div class="input-group">
				<input type="text" name="term" class="form-control" placeholder="Digite o que procura" value="<?php echo isset($_GET['term']) ? $_GET['term'] : '' ?>">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button">Buscar!</button>
				</span>
			</div>
		</form>
	</div>
</div>

<br/><br/>

<?php echo View::forge('admin/_inc/_alert_message'); ?>

<div class="row">
	<table class="table table-hover table-striped list-items">
		<thead>
			<tr>
				<th width="3%"><input type="checkbox" data-select="all" /></th>
				<?php foreach ($fields as $field): ?>
				<th><?php echo $field ?></th>
				<?php endforeach ?>
				<th width="22%">Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data as $key => $item): ?>
			<tr>
				<td><input type="checkbox" name="id" value="<?php echo $item->id ?>" /></td>
				<td><?php echo $item->$fields[0] ?></td>
				<td><?php echo $item->$fields[1] ?></td>
				<td>
					<a href="<?php echo Router::get($routes['remove'], array('id'=>$item->id)) ?>" class="btn btn-danger btn-sm" rel="confirm" data-confirm-message="Tem certeza que deseja remover este item?">
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