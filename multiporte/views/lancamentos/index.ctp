<div class="lancamentos">
<h2>List Lancamentos</h2>

<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $paginator->sort('id');?></th>
		<th><?php echo $paginator->sort('centro_custo_id');?></th>
		<th><?php echo $paginator->sort('categoria_id');?></th>
		<th><?php echo $paginator->sort('conta_id');?></th>
		<th><?php echo $paginator->sort('descricao');?></th>
		<th><?php echo $paginator->sort('data');?></th>
		<th><?php echo $paginator->sort('valor');?></th>
		<th>Actions</th>
	</tr>
<?php foreach ($lancamentos as $lancamento): ?>
	<tr>
		<td><?php echo $lancamento['Lancamento']['id']; ?></td>
		<td><?php echo $html->link($lancamento['CentroCusto']['nome'], array('controller'=> 'centro_custos', 'action'=>'view', $lancamento['CentroCusto']['id'])); ?></td>
		<td><?php echo $html->link($lancamento['Categoria']['nome'], array('controller'=> 'categorias', 'action'=>'view', $lancamento['Categoria']['id'])); ?></td>
		<td><?php echo $html->link($lancamento['Conta']['nome'], array('controller'=> 'contas', 'action'=>'view', $lancamento['Conta']['id'])); ?></td>
		<td><?php echo $lancamento['Lancamento']['descricao']; ?></td>
		<td><?php echo date('d/m/Y', strtotime($lancamento['Lancamento']['data'])); ?></td>
		<td><?php echo number_format($lancamento['Lancamento']['valor'], 2, ',', '.'); ?></td>
		<td class="actions">
			<?php echo $html->link('View', array('action'=>'view', $lancamento['Lancamento']['id'])); ?>
			<?php echo $html->link('Edit', array('action'=>'edit', $lancamento['Lancamento']['id'])); ?>
			<?php echo $html->link('Delete', array('action'=>'delete', $lancamento['Lancamento']['id']), null, 'Are you sure you want to delete #' . $lancamento['Lancamento']['id']); ?>
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
		<li><?php echo $html->link('New Lancamento', array('action'=>'add')); ?></li>
	</ul>
</div>