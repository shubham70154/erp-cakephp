<div class="categorias">
<h2>Lista de Categorias</h2>

<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $paginator->sort('id');?></th>
		<th><?php echo $paginator->sort('grupo_categoria_id');?></th>
		<th><?php echo $paginator->sort('nome');?></th>
		<th><?php echo $paginator->sort('tipo');?></th>
		<th>Ações</th>
	</tr>
<?php foreach ($categorias as $categoria): ?>
	<tr>
		<td><?php echo $categoria['Categoria']['id']; ?></td>
		<td><?php 
$i = 0;
foreach ($categoria['GrupoOrigem'] as $grupo) {
  $i++;
  echo $html->link(utf8_decode($grupo['nome']), array('controller'=> 'grupo_categorias', 'action'=>'view', $grupo['id']));
  if ($i != sizeof($categoria['GrupoOrigem'])) {
    echo " => ";
  }
}
?></td>
		<td><?php echo utf8_decode($categoria['Categoria']['nome']); ?></td>
		<td><?php echo $categoria['Categoria']['tipo']; ?></td>
		<td class="actions">
			<?php echo $html->link('Mostrar', array('action'=>'view', $categoria['Categoria']['id'])); ?>
			<?php echo $html->link('Editar', array('action'=>'edit', $categoria['Categoria']['id'])); ?>
			<?php echo $html->link('Excluir', array('action'=>'delete', $categoria['Categoria']['id']), null, 'Você tem certeza que deseja excluir a categoria #' . $categoria['Categoria']['id'] . '?'); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

</div>
<div class="paging">
<?php echo $paginator->prev('<< anterior', array(), null, array('class'=>'disabled'));?>
|
<?php echo $paginator->next('próxima >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Nova Categoria', array('action'=>'add')); ?></li>
	</ul>
</div>