<div class="categoria">
<h2>View Categoria</h2>

	<dl>
		<dt>Id</dt>
		<dd>&nbsp;<?php echo $categoria['Categoria']['id']?></dd>
		<dt>Grupo da Categoria</dt>
		<dd>&nbsp;<?php 
$i = 0;
foreach ($grupo_origem as $grupo) {
  $i++;
  echo $html->link($grupo['nome'], array('controller'=> 'grupo_categorias', 'action'=>'view', $grupo['id']));
  if ($i != sizeof($grupo_origem)) {
    echo " => ";
  }
}
?></dd>
		<dt>Nome</dt>
		<dd>&nbsp;<?php echo $categoria['Categoria']['nome']?></dd>
		<dt>Tipo</dt>
		<dd>&nbsp;<?php echo $categoria['Categoria']['tipo']?></dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Edit Categoria',   array('action'=>'edit', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $html->link('Delete Categoria', array('action'=>'delete', $categoria['Categoria']['id']), null, 'Are you sure you want to delete #' . $categoria['Categoria']['id'] . '?'); ?> </li>
		<li><?php echo $html->link('List Categorias', array('action'=>'index')); ?> </li>
		<li><?php echo $html->link('New Categoria',	array('action'=>'add')); ?> </li>
		<li><?php echo $html->link('List Grupo Categoria', array('controller'=> 'grupo_categoria', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link('New Grupo Categorias', array('controller'=> 'grupo_categoria', 'action'=>'add')); ?> </li>
	</ul>

</div>
<div class="related">
<h3>Related Lancamentos</h3>
<?php if(!empty($categoria['Lancamento'])):?>
<table cellpadding="0" cellspacing="0">
	<tr>
		<th>Id</th>
		<th>Centro Custo</th>
		<th>Categoria</th>
		<th>Conta </th>
		<th>Descricao</th>
		<th>Data</th>
		<th>Valor</th>
		<th>Created</th>
		<th>Modified</th>
		<th>Actions</th>
	</tr>
<?php foreach($categoria['Lancamento'] as $lancamento):?>
	<tr>
		<td><?php echo $lancamento['id'];?></td>
		<td><?php echo $lancamento['CentroCusto']['nome'];?></td>
		<td><?php echo $lancamento['Categoria']['nome'];?></td>
		<td><?php echo $lancamento['Conta']['nome'];?></td>
		<td><?php echo $lancamento['descricao'];?></td>
		<td><?php echo date('d/m/Y', strtotime($lancamento['data']));?></td>
		<td><?php echo number_format($lancamento['valor'], 2, ',', '.');?></td>
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
