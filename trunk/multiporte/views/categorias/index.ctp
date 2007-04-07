<div class="categorias">
<h2>List Categorias</h2>

<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $paginator->sort('id');?></th>
		<th><?php echo $paginator->sort('grupo_categoria_id');?></th>
		<th><?php echo $paginator->sort('nome');?></th>
		<th><?php echo $paginator->sort('tipo');?></th>
		<th>Actions</th>
	</tr>
<?php foreach ($categorias as $categoria): ?>
	<tr>
		<td><?php echo $categoria['Categoria']['id']; ?></td>
		<td><?php 
$i = 0;
foreach ($categoria['GrupoOrigem'] as $grupo) {
  $i++;
  echo $html->link($grupo['nome'], array('controller'=> 'grupo_categorias', 'action'=>'view', $grupo['id']));
  if ($i != sizeof($categoria['GrupoOrigem'])) {
    echo " => ";
  }
}
?></td>
		<td><?php echo $categoria['Categoria']['nome']; ?></td>
		<td><?php echo $categoria['Categoria']['tipo']; ?></td>
		<td class="actions">
			<?php echo $html->link('View', array('action'=>'view', $categoria['Categoria']['id'])); ?>
			<?php echo $html->link('Edit', array('action'=>'edit', $categoria['Categoria']['id'])); ?>
			<?php echo $html->link('Delete', array('action'=>'delete', $categoria['Categoria']['id']), null, 'Are you sure you want to delete #' . $categoria['Categoria']['id']); ?>
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
		<li><?php echo $html->link('New Categoria', array('action'=>'add')); ?></li>
	</ul>
</div>