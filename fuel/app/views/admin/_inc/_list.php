<div class="row">
	<div class="page-header">
		<h1><?php echo $title ?></h1>
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

<div class="row">
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th width="3%"><input type="checkbox" /></th>
				<th>
					First name
				</th>
				<th>
					Second name
				</th>
				<th>
					Last name
				</th>
				<th width="22%">Actions</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" /></td>
				<td>Conrad</td>
				<td>Henry</td>
				<td>Greyson</td>
				<td>
					<a href="#" class="btn btn-danger btn-sm">
						<span class="glyphicon glyphicon-remove"></span> Excluir
					</a>
					<a href="<?php echo Router::get('admin_sample_edit', array('id'=>1)) ?>" class="btn btn-info btn-sm">
						<span class="glyphicon glyphicon-pencil"></span> Editar
					</a>
					<a href="#" class="btn btn-default btn-sm">
						<span class="glyphicon glyphicon-align-left"></span> Detalhes
					</a>
				</td>
			</tr>
			<tr>
				<td><input type="checkbox" /></td>
				<td>Victoria</td>
				<td>Henry</td>
				<td>Greyson</td>
				<td>
					<button type="button" class="btn btn-danger btn-sm">
						<span class="glyphicon glyphicon-remove"></span> Excluir
					</button>
					<button type="button" class="btn btn-info btn-sm">
						<span class="glyphicon glyphicon-pencil"></span> Editar
					</button>
					<button type="button" class="btn btn-default btn-sm">
						<span class="glyphicon glyphicon-align-left"></span> Detalhes
					</button>
				</td>
			</tr>
		</tbody>
	</table>
</div>