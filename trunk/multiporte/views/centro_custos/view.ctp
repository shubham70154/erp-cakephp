<div class="centroCusto">
<h2>View Centro Custo</h2>

	<dl>
		<dt>Id</dt>
		<dd>&nbsp;<?php echo $centroCusto['CentroCusto']['id']?></dd>
		<dt>Nome</dt>
		<dd>&nbsp;<?php echo $centroCusto['CentroCusto']['nome']?></dd>
		<dt>Descricao</dt>
		<dd>&nbsp;<?php echo $centroCusto['CentroCusto']['descricao']?></dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Edit Centro Custo',   array('action'=>'edit', $centroCusto['CentroCusto']['id'])); ?> </li>
		<li><?php echo $html->link('Delete Centro Custo', array('action'=>'delete', $centroCusto['CentroCusto']['id']), null, 'Are you sure you want to delete #' . $centroCusto['CentroCusto']['id'] . '?'); ?> </li>
		<li><?php echo $html->link('List Centro Custos', array('action'=>'index')); ?> </li>
		<li><?php echo $html->link('New Centro Custo',	array('action'=>'add')); ?> </li>
	</ul>

</div>
<div class="related">
<h3>Related Lancamentos</h3>
<?php if(!empty($centroCusto['Lancamento'])):?>
<table cellpadding="0" cellspacing="0">
	<tr>
		<th>Id</th>
		<th>Centro Custo Id</th>
		<th>Categoria Id</th>
		<th>Conta Id</th>
		<th>Descricao</th>
		<th>Data</th>
		<th>Valor</th>
		<th>Created</th>
		<th>Modified</th>
		<th>Actions</th>
	</tr>
<?php foreach($centroCusto['Lancamento'] as $lancamento):?>
	<tr>
		<td><?php echo $lancamento['id'];?></td>
		<td><?php echo $lancamento['CentroCusto']['nome'];?></td>
		<td><?php echo $lancamento['Categoria']['nome'];?></td>
		<td><?php echo $lancamento['Conta']['nome'];?></td>
		<td><?php echo $lancamento['descricao'];?></td>
		<td><?php echo date('d/m/Y', strtotime($lancamento['data']));?></td>
		<td><?php echo number_format($lancamento['valor'], 2, ',', '.'); ?></td>
		<td><?php echo date('d/m/Y', strtotime($lancamento['created']));?></td>
		<td><?php echo date('d/m/Y', strtotime($lancamento['modified']));?></td>
		<td class="actions">
			<?php echo $html->link('View', array('controller'=> 'lancamentos', 'action'=>'view', $lancamento['id'])); ?>
			<?php echo $html->link('Edit', array('controller'=> 'lancamentos', 'action'=>'edit', $lancamento['id'])); ?>
			<?php echo $html->link('Delete', array('controller'=> 'lancamentos', 'action'=>'delete', $lancamento['id']), null, 'Are you sure you want to delete #' . $lancamento['id'] . '?'); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link('New Lancamento', array('controller'=> 'lancamentos', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
