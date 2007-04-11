<div class="grupoCategorias">
<h2>Lista de Grupo de Categorias</h2>

<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $paginator->sort('id');?></th>
		<th><?php echo $paginator->sort('sub_grupo_id');?></th>
		<th><?php echo $paginator->sort('nome');?></th>
		<th><?php echo $paginator->sort('descricao');?></th>
		<th>Ações</th>
	</tr>
<?php foreach ($grupoCategorias as $grupoCategoria): ?>
	<tr>
		<td><?php echo $grupoCategoria['GrupoCategoria']['id']; ?></td>
		<td><?php echo $grupoCategoria['GrupoCategoria']['sub_grupo_id']; ?></td>
		<td><?php echo $grupoCategoria['GrupoCategoria']['nome']; ?></td>
		<td><?php echo $grupoCategoria['GrupoCategoria']['descricao']; ?></td>
		<td class="actions">
			<?php echo $html->link('Mostrar', array('action'=>'view', $grupoCategoria['GrupoCategoria']['id'])); ?>
			<?php echo $html->link('Editar', array('action'=>'edit', $grupoCategoria['GrupoCategoria']['id'])); ?>
			<?php echo $html->link('Excluir', array('action'=>'delete', $grupoCategoria['GrupoCategoria']['id']), null, 'Você tem certeza que deseja excluir o grupo #' . $grupoCategoria['GrupoCategoria']['id'] . '?'); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

</div>
<div class="paging">
<?php echo $paginator->prev('<< anterior', array(), null, array('class'=>'disabled'));?>
|
<?php echo $paginator->next('próximo >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Novo Grupo de Categoria', array('action'=>'add')); ?></li>
	</ul>
</div>