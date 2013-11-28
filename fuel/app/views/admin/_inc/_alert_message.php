<?php if (isset($list) AND $list): ?>
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
<?php else: ?>
	<?php if ( Session::get_flash('success') OR Session::get_flash('error') ): ?>
	<div class="row">
		<div class="alert alert-<?php if(Session::get_flash('success')): ?>success<?php else: ?>danger<?php endif ?>" data-auto-remove="true">
			<?php echo Session::get_flash('success') ? Session::get_flash('success') : Session::get_flash('error'); ?>
		</div>
	</div>
	<?php endif ?>
<?php endif ?>