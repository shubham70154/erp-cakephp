<div class="contas">
<h2>List Contas</h2>

<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $paginator->sort('id');?></th>
		<th><?php echo $paginator->sort('nome');?></th>
		<th><?php echo $paginator->sort('descricao');?></th>
		<th>Actions</th>
	</tr>
<?php foreach ($contas as $conta): ?>
	<tr>
		<td><?php echo $conta['Conta']['id']; ?></td>
		<td><?php echo $conta['Conta']['nome']; ?></td>
		<td><?php echo $conta['Conta']['descricao']; ?></td>
		<td class="actions">
			<?php echo $html->link('View', array('action'=>'view', $conta['Conta']['id'])); ?>
			<?php echo $html->link('Edit', array('action'=>'edit', $conta['Conta']['id'])); ?>
			<?php echo $html->link('Delete', array('action'=>'delete', $conta['Conta']['id']), null, 'Are you sure you want to delete #' . $conta['Conta']['id']); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

</div>
<div class="paging">
<?php echo $paginator->prev('<< previous', array(), null, array('class'=>'disabled'));?>
|
<?php echo $paginator->next('next >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('New Conta', array('action'=>'add')); ?></li>
	</ul>
</div>