<div class="centroCustos">
<h2>List Centro Custos</h2>

<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $paginator->sort('id');?></th>
		<th><?php echo $paginator->sort('nome');?></th>
		<th><?php echo $paginator->sort('descricao');?></th>
		<th>Actions</th>
	</tr>
<?php foreach ($centroCustos as $centroCusto): ?>
	<tr>
		<td><?php echo $centroCusto['CentroCusto']['id']; ?></td>
		<td><?php echo $centroCusto['CentroCusto']['nome']; ?></td>
		<td><?php echo $centroCusto['CentroCusto']['descricao']; ?></td>
		<td class="actions">
			<?php echo $html->link('View', array('action'=>'view', $centroCusto['CentroCusto']['id'])); ?>
			<?php echo $html->link('Edit', array('action'=>'edit', $centroCusto['CentroCusto']['id'])); ?>
			<?php echo $html->link('Delete', array('action'=>'delete', $centroCusto['CentroCusto']['id']), null, 'Are you sure you want to delete #' . $centroCusto['CentroCusto']['id']); ?>
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
		<li><?php echo $html->link('New Centro Custo', array('action'=>'add')); ?></li>
	</ul>
</div>